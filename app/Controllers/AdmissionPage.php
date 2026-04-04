<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EnquiryModel;
use App\Models\Academic\CourseModel;

class AdmissionPage extends BaseController
{
    public function index()
    {
        $courseModel     = new CourseModel();
        $data['courses'] = $courseModel->findAll();
        return view('admission/form_public', $data);
    }

    public function store()
    {
        helper(['form', 'url']);

        $rules = [
            'name'        => 'required|min_length[3]|max_length[100]|regex_match[/^[a-zA-Z\s]+$/]',
            'father_name' => 'required|min_length[3]|max_length[100]|regex_match[/^[a-zA-Z\s]+$/]',
            'dob'         => 'required|valid_date',
            'course'      => 'required',
            'phone'       => 'required|regex_match[/^[6-9][0-9]{9}$/]',
            'email'       => 'permit_empty|valid_email|max_length[150]',
            'message'     => 'permit_empty|max_length[500]',
        ];

        $messages = [
            'name'        => [
                'required'    => 'Name is required.',
                'min_length'  => 'Name must be at least 3 characters.',
                'regex_match' => 'Name should contain letters only (no numbers or symbols).',
            ],
            'father_name' => [
                'required'    => 'Father\'s name is required.',
                'min_length'  => 'Father\'s name must be at least 3 characters.',
                'regex_match' => 'Father\'s name should contain letters only.',
            ],
            'phone'       => [
                'required'    => 'Phone number is required.',
                'regex_match' => 'Enter a valid 10-digit Indian mobile number (starting with 6-9).',
            ],
            'email'       => [
                'valid_email' => 'Enter a valid email address.',
            ],
            'dob'         => [
                'required'   => 'Date of birth is required.',
                'valid_date' => 'Enter a valid date of birth.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob'         => $this->request->getPost('dob'),
            'course'      => $this->request->getPost('course'),
            'phone'       => $this->request->getPost('phone'),
            'email'       => $this->request->getPost('email'),
            'message'     => $this->request->getPost('message'),
        ];

        $model = new EnquiryModel();
        $model->insert($data);

        // Simple WhatsApp notification (no admission_confirmation template)
        $this->sendEnquiryWhatsApp($data);

        // Email acknowledgment
        $this->sendEnquiryEmail($data);

        return redirect()->to('/admissionpage')
            ->with('success', 'Dear ' . esc($data['name']) . ', your enquiry has been submitted successfully. We will contact you soon!');
    }

    // ---------------------------------------------------------------
    // Simple WhatsApp message (text, not template)
    // ---------------------------------------------------------------
    private function sendEnquiryWhatsApp(array $data)
    {
        try {
            $phone = preg_replace('/\D/', '', $data['phone']);
            if (strlen($phone) === 10) {
                $phone = '91' . $phone;
            }

            $accessToken   = env('WHATSAPP_TOKEN');
            $phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID');

            $message = "New Enquiry Received!\n\n"
                . "Name: " . $data['name'] . "\n"
                . "Course: " . $data['course'] . "\n"
                . "Phone: " . $data['phone'] . "\n"
                . "Email: " . ($data['email'] ?: 'N/A') . "\n"
                . "Message: " . ($data['message'] ?: 'N/A') . "\n\n"
                . "- Arun Computer Institute";

            $payload = json_encode([
                'messaging_product' => 'whatsapp',
                'to'                => $phone,
                'type'              => 'text',
                'text'              => ['body' => $message],
            ]);

            $url = 'https://graph.facebook.com/v22.0/' . $phoneNumberId . '/messages';

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $payload,
                CURLOPT_HTTPHEADER     => [
                    'Authorization: Bearer ' . $accessToken,
                    'Content-Type: application/json',
                ],
                CURLOPT_TIMEOUT        => 10,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ]);
            curl_exec($ch);
            curl_close($ch);
        } catch (\Exception $e) {
            log_message('error', 'Enquiry WhatsApp failed: ' . $e->getMessage());
        }
    }

    // ---------------------------------------------------------------
    // Simple email acknowledgment
    // ---------------------------------------------------------------
    private function sendEnquiryEmail(array $data)
    {
        try {
            if (empty($data['email'])) return;

            $config = [
                'protocol'  => 'smtp',
                'SMTPHost'  => 'mail.aruncomputer.com',
                'SMTPUser'  => 'admin@aruncomputer.com',
                'SMTPPass'  => 'Rewa@12345678',
                'SMTPPort'  => 587,
                'SMTPCrypto'=> 'tls',
                'mailType'  => 'text',
                'charset'   => 'UTF-8',
            ];

            $email = \Config\Services::email($config);
            $email->setFrom('admin@aruncomputer.com', 'Arun Computer Institute');
            $email->setTo($data['email']);
            $email->setSubject('Enquiry Received - Arun Computer Institute');
            $email->setMessage(
                "Dear " . $data['name'] . ",\n\n"
                . "Thank you for your enquiry about the " . $data['course'] . " course.\n"
                . "We have received your details and will contact you shortly.\n\n"
                . "Regards,\nArun Computer Institute\nRewa, Madhya Pradesh\nContact: 9926542408"
            );

            if (!$email->send()) {
                log_message('error', 'Enquiry email failed: ' . $email->printDebugger(['headers']));
            }
        } catch (\Exception $e) {
            log_message('error', 'Enquiry email exception: ' . $e->getMessage());
        }
    }
}
