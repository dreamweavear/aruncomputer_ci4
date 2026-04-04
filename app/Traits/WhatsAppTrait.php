<?php

namespace App\Traits;

/**
 * WhatsAppTrait
 * Shared WhatsApp API sending logic for all Admin controllers.
 * Uses .env: WHATSAPP_TOKEN, WHATSAPP_PHONE_NUMBER_ID
 */
trait WhatsAppTrait
{
    /**
     * Send a WhatsApp template message (generic).
     *
     * @param string $phone        E.g. '9876543210' or '919876543210'
     * @param string $templateName Approved Meta template name
     * @param array  $parameters   Flat array of text values for body components
     * @param string $language     Template language code (default: en_US)
     * @return array ['success' => bool, 'message_id' => string|null, 'error' => string|null]
     */
    protected function sendWhatsAppTemplate(
        string $phone,
        string $templateName,
        array  $parameters,
        string $language = 'en_US'
    ): array {
        try {
            $phone = $this->formatPhone($phone);

            $accessToken   = env('WHATSAPP_TOKEN');
            $phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID');
            $url           = 'https://graph.facebook.com/v22.0/' . $phoneNumberId . '/messages';

            // Build parameter objects
            $paramObjects = [];
            foreach ($parameters as $value) {
                $paramObjects[] = ['type' => 'text', 'text' => (string) $value];
            }

            $payload = json_encode([
                'messaging_product' => 'whatsapp',
                'to'                => $phone,
                'type'              => 'template',
                'template'          => [
                    'name'       => $templateName,
                    'language'   => ['code' => $language],
                    'components' => [[
                        'type'       => 'body',
                        'parameters' => $paramObjects,
                    ]],
                ],
            ]);

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $payload,
                CURLOPT_HTTPHEADER     => [
                    'Authorization: Bearer ' . $accessToken,
                    'Content-Type: application/json',
                ],
                CURLOPT_TIMEOUT        => 15,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ]);

            $response  = curl_exec($ch);
            $httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);

            if ($response === false) {
                log_message('error', 'WhatsApp cURL error: ' . $curlError . ' | Phone: ' . $phone);
                return ['success' => false, 'message_id' => null, 'error' => 'cURL: ' . $curlError];
            }

            $decoded = json_decode($response, true);

            if ($httpCode === 200) {
                $messageId = $decoded['messages'][0]['id'] ?? null;
                log_message('info', 'WhatsApp sent OK | Template: ' . $templateName . ' | Phone: ' . $phone);
                return ['success' => true, 'message_id' => $messageId, 'error' => null];
            }

            $errorMsg = 'HTTP ' . $httpCode . ': ' . $response;
            log_message('error', 'WhatsApp failed | Template: ' . $templateName . ' | Phone: ' . $phone . ' | ' . $errorMsg);
            return ['success' => false, 'message_id' => null, 'error' => $errorMsg];

        } catch (\Exception $e) {
            log_message('error', 'WhatsApp exception: ' . $e->getMessage());
            return ['success' => false, 'message_id' => null, 'error' => $e->getMessage()];
        }
    }

    /**
     * Normalize phone to international format (91XXXXXXXXXX).
     */
    protected function formatPhone(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);
        if (strlen($phone) === 10) {
            $phone = '91' . $phone;
        }
        return $phone;
    }

    /**
     * Log a WhatsApp send attempt to the whatsapp_logs table.
     */
    protected function logWhatsApp(
        string $recipientName,
        string $phone,
        string $templateName,
        array  $variablesSent,
        string $status,         // 'sent' | 'failed'
        string $errorMessage = ''
    ): void {
        try {
            $db = \Config\Database::connect();
            $db->table('whatsapp_logs')->insert([
                'recipient_name' => $recipientName,
                'phone'          => $phone,
                'template_name'  => $templateName,
                'variables_sent' => json_encode($variablesSent),
                'status'         => $status,
                'error_message'  => $errorMessage,
                'sent_at'        => date('Y-m-d H:i:s'),
            ]);
        } catch (\Exception $e) {
            log_message('error', 'WhatsApp log insert failed: ' . $e->getMessage());
        }
    }

    /**
     * Send + log in one call.
     * Returns the result array from sendWhatsAppTemplate().
     */
    protected function sendAndLog(
        string $recipientName,
        string $phone,
        string $templateName,
        array  $parameters,
        string $language = 'en_US'
    ): array {
        $result = $this->sendWhatsAppTemplate($phone, $templateName, $parameters, $language);

        $this->logWhatsApp(
            $recipientName,
            $phone,
            $templateName,
            $parameters,
            $result['success'] ? 'sent' : 'failed',
            $result['error'] ?? ''
        );

        return $result;
    }
}
