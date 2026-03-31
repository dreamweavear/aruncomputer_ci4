<?php

namespace App\Controllers\Admin;



use App\Controllers\BaseController;

use App\Models\Admin\AdmissionModel;

use App\Models\Admin\FeeModel;

use App\Models\Academic\CourseModel;



class Admission extends BaseController


{

    // ✅ Email configuration property add करें

    private $emailConfig = [

        'protocol' => 'smtp',

        'SMTPHost' => 'mail.aruncomputer.com',

        'SMTPUser' => 'admin@aruncomputer.com',

        'SMTPPass' => 'Rewa@12345678',

        'SMTPPort' => 587,

        'SMTPCrypto' => 'tls',

        'mailType' => 'html',

        'charset' => 'utf-8',

        'wordWrap' => true,

        'validate' => true,

        'timeout' => 10,

        'newline' => "\r\n"

    ];

    

    

public function index()

{

    // Check admin authentication

    $authCheck = $this->checkAdminAuth();

    if ($authCheck !== true) {

        return $authCheck;

    }



    $course = $this->request->getGet('course');

    $year = $this->request->getGet('year');



    $admissionModel = new \App\Models\Admin\AdmissionModel();

    $courseModel = new \App\Models\Academic\CourseModel();



    // Course list for dropdown

    $data['courses'] = $courseModel->findAll();



    // Year list from admission dates

    $db = \Config\Database::connect();

    $data['years'] = $db->table('admissions')

        ->select('YEAR(admission_date) as year')

        ->groupBy('year')

        ->orderBy('year', 'DESC')

        ->get()->getResultArray();



    // Main query with filters

    $builder = $db->table('admissions');

    if (!empty($course)) {

        $builder->where('course', $course);

    }

    if (!empty($year)) {

        $builder->where('YEAR(admission_date)', $year);

    }

    $data['students'] = $builder->get()->getResultArray();

    // Add paid/pending fee data for each student (from fees table)
    if (!empty($data['students'])) {
        $studentIds = array_column($data['students'], 'id');
        $placeholders = implode(',', array_fill(0, count($studentIds), '?'));
        $feeRows = $db->query(
            "SELECT student_id, COALESCE(SUM(amount),0) as paid_amount
             FROM fees WHERE status='Paid' AND student_id IN ({$placeholders})
             GROUP BY student_id",
            $studentIds
        )->getResultArray();

        $feePaid = [];
        foreach ($feeRows as $f) {
            $feePaid[$f['student_id']] = $f['paid_amount'];
        }

        foreach ($data['students'] as &$s) {
            $s['paid_amount']    = $feePaid[$s['id']] ?? 0;
            $totalFee            = ($s['course_fee'] ?? 0) - ($s['discount'] ?? 0);
            $s['total_fee']      = max(0, $totalFee);
            $s['pending_amount'] = max(0, $totalFee - $s['paid_amount']);
        }
        unset($s);
    }

    // Send selected values to view

    $data['selectedCourse'] = $course;

    $data['selectedYear'] = $year;



    return view('admission/list', $data);

}





public function create()

{

    // Check admin authentication

    $authCheck = $this->checkAdminAuth();

    if ($authCheck !== true) {

        return $authCheck;

    }



    $courseModel = new CourseModel();

    $validation = session('_ci_validation_errors') ? \Config\Services::validation() : null;



    return view('admission/form_admin', [

        'courses' => $courseModel->findAll(),

        'validation' => $validation

    ]);

}





    public function store()

    {

        // Check admin authentication

        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== true) {

            return $authCheck;

        }

       

        helper(['form', 'url']);

         // ✅ STEP 1: Define model पहले

        $admissionModel = new AdmissionModel();

        $feesModel = new FeeModel();



       

        $rules = [

                'name' => 'required',

                'father_name' => 'required',

                'dob' => 'required',

                'course' => 'required',

                'phone' => 'required',

                'email' => 'required|valid_email',

                'photo' => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]',

                'course_fee' => 'required|numeric',

                'discount' => 'required|numeric',

                'admission_date' => 'required|valid_date',

                'admission_fee' => 'required|numeric',

                'receipt_number' => 'required|numeric',

               

        ];





            if (!$this->validate($rules)) {

            session()->setFlashdata('_ci_validation_errors', $this->validator->getErrors());

            return redirect()->back()->withInput();

              }

        

        // Step 2: Handle file upload

        $photoFile = $this->request->getFile('photo');

        $newName = $photoFile->getRandomName();

        $photoFile->move('uploads/', $newName);

        

    $password = 'student123'; // Direct password set

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // ✅ YEH LI

    

        // ✅ Add 'admission_fee' to data array

        $data = [

            'admission_date' => $this->request->getPost('admission_date'),

            //'admission_amount' => $this->request->getPost('admission_amount'),

            'receipt_number'   => $this->request->getPost('receipt_number'),

            'course' => $this->request->getPost('course'),

            'name' => $this->request->getPost('name'),

            'father_name' => $this->request->getPost('father_name'),

            'dob' => $this->request->getPost('dob'),

            'phone' => $this->request->getPost('phone'),

            'email' => $this->request->getPost('email'),

            'course_fee' => $this->request->getPost('course_fee'),

            'discount' => $this->request->getPost('discount'),

            'admission_fee' => $this->request->getPost('admission_fee'), // ✅ ADD THIS

            'photo' => $newName,

             'password' => $hashedPassword, // ✅

        ];





        $admissionModel->insert($data); // 👈 यही model object use करें

        $studentId = $admissionModel->getInsertID(); // ✅ now correct ID





        // Step 3: Save first installment as admission fee

        

        $admissionFee = $this->request->getPost('admission_fee');

        if ($admissionFee > 0) {

        $feesModel->save([

            'student_id' => $studentId,

            'installment_number' => 1,

            'amount' => $admissionFee,

            'payment_date' => $this->request->getPost('admission_date'),

            'receipt_number' => $this->request->getPost('receipt_number'),

            'payment_mode' => $this->request->getPost('admission_payment_mode'),

            'status' => 'Paid'

        ]);

    }

    

    

    

     // ✅ SEND WHATSAPP MESSAGE

    // $whatsappResult = $this->sendWhatsAppMessage($data);

    $whatsappResult = $this->sendWhatsAppMessage($data, $studentId);
    

    // ✅ SEND EMAIL

    $emailResult = $this->sendAdmissionEmail($data);

    

    // ✅ Create comprehensive success message

    $successMessage = '✅ Admission successful! Student registered.';

    

    if ($whatsappResult['success']) {

        $successMessage .= ' 📱 WhatsApp sent to ' . $data['phone'];

    } else {

        $successMessage .= ' ⚠️ (WhatsApp failed)';

    }

    

    if ($emailResult['success']) {

        $successMessage .= ' 📧 Email sent to ' . $data['email'];

    } else {

        $successMessage .= ' ⚠️ (Email failed)';

    }

    

    // ✅ Save WhatsApp status in database (FIXED - No empty data)

    $updateData = [];

    

   if (isset($whatsappResult['success'])) {

       $updateData['whatsapp_sent'] = $whatsappResult['success'] ? 1 : 0;

    }

    

    if (isset($emailResult['success'])) {

       $updateData['email_sent'] = $emailResult['success'] ? 1 : 0;

    }

    

    // Add student_id_display

    if (isset($whatsappResult['student_id']) && !empty($whatsappResult['student_id'])) {

       $updateData['student_id_display'] = $whatsappResult['student_id'];

    } else {

      $updateData['student_id_display'] = 'ARUN' . $studentId;

    }

    

    // Only update if there's data

   if (!empty($updateData)) {

       $admissionModel->update($studentId, $updateData);

    }

    

    // ✅ Redirect with success message

    return redirect()->to('/admin/admission/create')->with('success', $successMessage);

}

    





 /**

     * Send admission confirmation email

     */

    private function sendAdmissionEmail($studentData)

    {

        try {

            // Initialize email with custom config

            $email = \Config\Services::email($this->emailConfig);

            

            $email->setFrom('admin@aruncomputer.com', 'Arun Computer Institute');

            $email->setTo($studentData['email']);

            $email->setSubject('Admission Confirmation - Arun Computer Institute');

            

            $message = $this->createEmailTemplate($studentData);

            $email->setMessage($message);

            

            if ($email->send(false)) { // false = don't print debugger

                return [

                    'success' => true,

                    'message' => 'Email sent successfully'

                ];

            } else {

                return [

                    'success' => false,

                    'message' => 'Email sending failed'

                ];

            }

            

        } catch (\Exception $e) {

            log_message('error', 'Email exception: ' . $e->getMessage());

            return [

                'success' => false,

                'message' => 'Email error: ' . $e->getMessage()

            ];

        }

    }

    

    /**

     * Create email HTML template

     */

    private function createEmailTemplate($data)

    {

        $loginUrl = base_url('student/login');

        $institutePhone = '9876543210'; // अपना institute phone डालें

        $instituteAddress = 'Near Bus Stand, Rewa, Madhya Pradesh';

        

        return "

        <!DOCTYPE html>

        <html>

        <head>

            <meta charset='UTF-8'>

            <meta name='viewport' content='width=device-width, initial-scale=1.0'>

            <title>Admission Confirmation</title>

            <style>

                body {

                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

                    line-height: 1.6;

                    color: #333;

                    max-width: 600px;

                    margin: 0 auto;

                    padding: 20px;

                    background-color: #f9f9f9;

                }

                .container {

                    background: white;

                    border-radius: 10px;

                    padding: 30px;

                    box-shadow: 0 0 20px rgba(0,0,0,0.1);

                }

                .header {

                    text-align: center;

                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);

                    color: white;

                    padding: 20px;

                    border-radius: 10px 10px 0 0;

                    margin: -30px -30px 30px -30px;

                }

                .header h1 {

                    margin: 0;

                    font-size: 24px;

                }

                .content {

                    padding: 20px 0;

                }

                .details-box {

                    background: #f8f9fa;

                    border-left: 4px solid #4CAF50;

                    padding: 15px;

                    margin: 20px 0;

                    border-radius: 0 5px 5px 0;

                }

                .login-box {

                    background: #e8f4fd;

                    border: 1px solid #b3d7ff;

                    padding: 15px;

                    margin: 20px 0;

                    border-radius: 5px;

                }

                .btn {

                    display: inline-block;

                    background: #4CAF50;

                    color: white;

                    padding: 12px 30px;

                    text-decoration: none;

                    border-radius: 5px;

                    margin: 10px 0;

                    font-weight: bold;

                }

                .footer {

                    margin-top: 30px;

                    padding-top: 20px;

                    border-top: 1px solid #eee;

                    font-size: 12px;

                    color: #666;

                }

                .highlight {

                    color: #4CAF50;

                    font-weight: bold;

                }

            </style>

        </head>

        <body>

            <div class='container'>

                <div class='header'>

                    <h1>🎓 Admission Confirmed</h1>

                    <p>Arun Computer Institute</p>

                </div>

                

                <div class='content'>

                    <p>Dear <strong>{$data['name']}</strong>,</p>

                    

                    <p>We are pleased to inform you that your admission has been successfully confirmed!</p>

                    

                    <div class='details-box'>

                        <h3>Admission Details:</h3>

                        <p><strong>Course:</strong> {$data['course']}</p>

                        <p><strong>Admission Date:</strong> {$data['admission_date']}</p>

                        <p><strong>Student ID:</strong> ARUN{$data['phone']}</p>

                        <p><strong>Phone:</strong> {$data['phone']}</p>

                        <p><strong>Email:</strong> {$data['email']}</p>

                    </div>

                    

                    <div class='login-box'>

                        <h3>📱 Login Credentials:</h3>

                        <p><strong>Username:</strong> {$data['email']} or {$data['phone']}</p>

                        <p><strong>Password:</strong> <span class='highlight'>student123</span></p>

                        <p><strong>Login URL:</strong> <a href='{$loginUrl}'>{$loginUrl}</a></p>

                        

                        <center>

                            <a href='{$loginUrl}' class='btn'>🔗 Login to Your Account</a>

                        </center>

                        

                        <p style='font-size: 12px; color: #666; margin-top: 10px;'>

                            <strong>Note:</strong> Please change your password after first login.

                        </p>

                    </div>

                    

                    <h3>📍 Institute Information:</h3>

                    <p><strong>Address:</strong> {$instituteAddress}</p>

                    <p><strong>Contact:</strong> {$institutePhone}</p>

                    <p><strong>Email:</strong> admin@aruncomputer.com</p>

                    

                    <p>For any queries regarding your admission, feel free to contact us.</p>

                    

                    <p>We wish you all the best for your studies!</p>

                </div>

                

                <div class='footer'>

                    <p><strong>Important Notes:</strong></p>

                    <ol>

                        <li>Keep your login credentials confidential.</li>

                        <li>Regular attendance is mandatory.</li>

                        <li>Fee payment should be made on or before due dates.</li>

                        <li>Carry your student ID card to institute.</li>

                    </ol>

                    

                    <p style='text-align: center; margin-top: 20px;'>

                        Best Regards,<br>

                        <strong>Arun Computer Institute</strong><br>

                        Rewa, Madhya Pradesh

                    </p>

                </div>

            </div>

        </body>

        </html>

        ";

    }











    public function edit($id)

    {

        // Check admin authentication

        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== true) {

            return $authCheck;

        }



        $model = new AdmissionModel();

        $data['student'] = $model->find($id);



        if (!$data['student']) {

            return redirect()->to('/admin/admission')->with('error', 'Student not found');

        }



        return view('admission/edit', $data);  // अगर आपने view/admission/edit.php रखा है

    



    }



    public function delete($id)

    {

        // Check admin authentication

        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== true) {

            return $authCheck;

        }



        $model = new AdmissionModel();

        $model->delete($id);

        return redirect()->to('/admin/admission')->with('success', 'Deleted successfully');

    }

    

    

    

    public function update($id)

{

    // Check admin authentication

    $authCheck = $this->checkAdminAuth();

    if ($authCheck !== true) {

        return $authCheck;

    }



    helper(['form', 'url']);



    $model = new AdmissionModel();

    $student = $model->find($id);



    if (!$student) {

        return redirect()->to('/admin/admission')->with('error', 'Student not found');

    }



    $rules = [

        'name' => 'required',

        'father_name' => 'required',

        'dob' => 'required',

        'course' => 'required',

        'phone' => 'required',

        'email' => 'required|valid_email',

    ];



    if (!$this->validate($rules)) {

        return view('admission/edit', [

            'validation' => $this->validator,

            'student' => $student

        ]);

    }



    $data = [

        'name' => $this->request->getPost('name'),

        'father_name' => $this->request->getPost('father_name'),

        'dob' => $this->request->getPost('dob'),

        'course' => $this->request->getPost('course'),

        'phone' => $this->request->getPost('phone'),

        'email' => $this->request->getPost('email'),

    ];



    // If new photo uploaded, replace

    $photoFile = $this->request->getFile('photo');

    if ($photoFile && $photoFile->isValid()) {

        $newName = $photoFile->getRandomName();

        $photoFile->move('uploads/', $newName);

        $data['photo'] = $newName;

    }



    $model->update($id, $data);



    return redirect()->to('/admin/admission/create')->with('success', 'Admission updated successfully');

}



 public function testEmail()

    {

        $testData = [

            'name' => 'Test Student',

            'email' => 'test@gmail.com', // अपना test email डालें

            'course' => 'DCA Course',

            'phone' => '9876543210',

            'admission_date' => date('Y-m-d')

        ];

        

        $result = $this->sendAdmissionEmail($testData);

        

        echo "<h2>Email Test Result</h2>";

        echo "<pre>";

        print_r($result);

        echo "</pre>";

        

        if ($result['success']) {

            echo "<p style='color:green;'>✅ Email sent successfully!</p>";

            echo "<p>Check your inbox at: {$testData['email']}</p>";

        } else {

            echo "<p style='color:red;'>❌ Email failed: {$result['message']}</p>";

        }

    }

    

// function for whatsapp 

/**

 * Send WhatsApp message to student

 */

//private function sendWhatsAppMessage($studentData)
private function sendWhatsAppMessage($studentData, $dbStudentId = null)
{
    try {
        // Phone number format karo
        $phone = preg_replace('/\D/', '', $studentData['phone']);
        if (strlen($phone) === 10) {
            $phone = '91' . $phone;
        }

        // Student ID generate karo
        //$studentId = 'ARUN' . date('Ymd') . rand(100, 999);

        $studentId = 'ARUN' . ($dbStudentId ?? date('Ymd') . rand(100, 999));


        // Meta API credentials (.env se load)
        $accessToken   = env('WHATSAPP_TOKEN');
        $phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID');

        $url = 'https://graph.facebook.com/v22.0/' . $phoneNumberId . '/messages';

// nayee template ke liye ise hataya isek neeche naye message template dala         

/*
        $payload = json_encode([
            'messaging_product' => 'whatsapp',
            'to' => $phone,
            'type' => 'template',
            'template' => [
                'name' => 'hello_world',
                'language' => ['code' => 'en_US']
            ]
        ]);
  */
      
 $payload = json_encode([
    'messaging_product' => 'whatsapp',
    'to' => $phone,
    'type' => 'template',
    'template' => [
        'name' => 'admission_confirmation',
        //'language' => ['code' => 'en'],
        'language' => ['code' => 'en_US'],
        'components' => [[
            'type' => 'body',
            'parameters' => [
                ['type' => 'text', 'text' => $studentData['name']],
                ['type' => 'text', 'text' => $studentId],
                ['type' => 'text', 'text' => $studentData['course']],
                ['type' => 'text', 'text' => $studentData['admission_date']],
                ['type' => 'text', 'text' => $studentData['course_fee']],
                ['type' => 'text', 'text' => $studentData['discount']],
                ['type' => 'text', 'text' => $studentData['admission_fee']],
                ['type' => 'text', 'text' => $studentData['receipt_number']],
                
            ]
        ]]
    ]
]);   




        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST          => true,
            CURLOPT_POSTFIELDS    => $payload,
            CURLOPT_HTTPHEADER    => [
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json',
            ],
            CURLOPT_TIMEOUT          => 15,
            CURLOPT_SSL_VERIFYPEER   => false,   // XAMPP Windows SSL fix
            CURLOPT_SSL_VERIFYHOST   => false,
        ]);

        $response  = curl_exec($ch);
        $httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        // cURL itself failed (SSL, timeout, network)
        if ($response === false) {
            log_message('error', 'WhatsApp cURL error: ' . $curlError . ' | Phone: ' . $phone);
            return ['success' => false, 'error' => 'cURL error: ' . $curlError];
        }

        // Meta returns 200 on success
        if ($httpCode === 200) {
            log_message('info', 'WhatsApp sent OK to ' . $phone . ' | ' . $response);
            return [
                'success'    => true,
                'student_id' => $studentId,
                'message'    => 'WhatsApp sent successfully'
            ];
        }

        // Log full response so we can debug
        log_message('error', 'WhatsApp HTTP ' . $httpCode . ' | Phone: ' . $phone . ' | Response: ' . $response);
        return [
            'success' => false,
            'error'   => 'HTTP ' . $httpCode . ': ' . $response
        ];

    } catch (\Exception $e) {
        log_message('error', 'WhatsApp exception: ' . $e->getMessage());
        return ['success' => false, 'error' => $e->getMessage()];
    }
}

/**
 * Test WhatsApp API - browser mein kholo: /admin/admission/testWhatsApp/9XXXXXXXXXX
 */

/*
public function testWhatsApp($phone = '917000000000')
{
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) return $authCheck;

    $result = $this->sendWhatsAppMessage(['phone' => $phone]);

    echo '<pre style="font-size:14px; background:#f5f5f5; padding:20px;">';
    echo '<b>Phone tested:</b> ' . $phone . "\n\n";
    echo '<b>Result:</b>' . "\n";
    print_r($result);
    echo '</pre>';
}
    */

public function testWhatsApp($phone = '919926542408')
{
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) return $authCheck;

    $testData = [
        'phone'          => $phone,
        'name'           => 'Test Student',
        'course'         => 'DCA',
        'admission_date' => '2026-03-26',
        'course_fee'     => '5000',
        'discount'       => '500',
        'admission_fee'  => '2000',
        'receipt_number' => 'REC001',
    ];

    $result = $this->sendWhatsAppMessage($testData, 99);

    return $this->response->setJSON($result);
}

/**
 * Create WhatsApp message template
 */
private function createWhatsAppMessage($data, $studentId)

{

    $loginUrl = base_url('student/login');

    $institutePhone = '9926542408';

    $instituteAddress = 'Near Bus Stand, Rewa, Madhya Pradesh';

    

    $message = "🎓 *Arun Computer Institute - Admission Confirmation*\n\n";

    $message .= "Dear *{$data['name']}*,\n\n";

    $message .= "Your admission has been successfully confirmed!\n\n";

    

    $message .= "📋 *Student Details:*\n";

    $message .= "• Student ID: *{$studentId}*\n";

    $message .= "• Course: *{$data['course']}*\n";

    $message .= "• Admission Date: *{$data['admission_date']}*\n";

    $message .= "• Course Fee: ₹{$data['course_fee']}\n";

    $message .= "• Discount: ₹{$data['discount']}\n";

    $message .= "• Admission Fee Paid: ₹{$data['admission_fee']}\n";

    $message .= "• Receipt No: *{$data['receipt_number']}*\n\n";

    

    $message .= "🔑 *Login Credentials:*\n";

    $message .= "Username: {$data['phone']} or {$data['email']}\n";

    $message .= "Password: *student123*\n";

    $message .= "Login URL: {$loginUrl}\n\n";

    

    $message .= "📍 *Institute Information:*\n";

    $message .= "Address: {$instituteAddress}\n";

    $message .= "Contact: {$institutePhone}\n";

    $message .= "Website: aruncomputer.com\n\n";

    

    $message .= "📌 *Important Notes:*\n";

    $message .= "1. Change password after first login\n";

    $message .= "2. Keep your credentials safe\n";

    $message .= "3. Regular attendance is mandatory\n\n";

    

    $message .= "Best Regards,\n";

    $message .= "*Arun Computer Institute*\n";

    $message .= "Rewa, Madhya Pradesh";

    

    return $message;

}

    



}

