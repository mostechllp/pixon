<?php
header('Content-Type: application/json');
require_once 'admin/config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize inputs
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $page = trim($_POST['page'] ?? $_SERVER['HTTP_REFERER'] ?? 'Unknown');

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
        exit;
    }

    $attachment_path = null;



    if (isset($_FILES['attachment'])) {
        if ($_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
            $allowed_ext = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
            $max_size = 10 * 1024 * 1024; // 10MB
            
            $file_name = $_FILES['attachment']['name'];
            $file_size = $_FILES['attachment']['size'];
            $file_tmp = $_FILES['attachment']['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (!in_array($file_ext, $allowed_ext)) {
                echo json_encode(['success' => false, 'message' => 'Invalid file type. Allowed: pdf, doc, docx, jpg, jpeg, png.']);
                exit;
            }

            if ($file_size > $max_size) {
                echo json_encode(['success' => false, 'message' => 'File size exceeds 10MB limit.']);
                exit;
            }

            $upload_dir = 'uploads/leads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            $unique_name = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9.\-_]/', '', basename($file_name));
            $destination = $upload_dir . $unique_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $attachment_path = $destination;
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to upload attachment.']);
                exit;
            }
        } else if ($_FILES['attachment']['error'] !== UPLOAD_ERR_NO_FILE) {
            echo json_encode(['success' => false, 'message' => 'File upload error code: ' . $_FILES['attachment']['error']]);
            exit;
        }
    }

    // Insert into database using prepared statements
    $stmt = $conn->prepare("INSERT INTO leads (name, company, email, phone, country, service, message, page, attachment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssssssss", $name, $company, $email, $phone, $country, $service, $message, $page, $attachment_path);
        
        if ($stmt->execute()) {
            // Send email using Resend API
            $env = file_exists(__DIR__ . '/.env') ? parse_ini_file(__DIR__ . '/.env') : [];
            $resend_api_key = $env['RESEND_API_KEY'] ?? '';

            if (empty($resend_api_key)) {
                echo json_encode(['success' => false, 'message' => 'Server configuration error: Email API key is missing.']);
                exit;
            }

            $html_content = "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 0; }
                    .email-container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e1e4e8; }
                    .header { background-color: #1a73e8; color: #ffffff; padding: 25px 20px; text-align: center; }
                    .header h2 { margin: 0; font-size: 24px; font-weight: 600; letter-spacing: 0.5px; }
                    .content { padding: 30px; color: #333333; }
                    .content p { font-size: 16px; line-height: 1.6; margin-bottom: 20px; color: #555555; }
                    .details-table { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
                    .details-table th, .details-table td { padding: 14px; border-bottom: 1px solid #eeeeee; text-align: left; font-size: 15px; }
                    .details-table th { background-color: #fafbfc; width: 35%; color: #5f6368; font-weight: 600; }
                    .details-table td { color: #202124; }
                    .message-box { background-color: #f8f9fa; border-left: 4px solid #1a73e8; padding: 15px 20px; margin-top: 10px; border-radius: 0 4px 4px 0; }
                    .message-box p { margin: 0; font-size: 15px; color: #3c4043; font-style: italic; }
                    .footer { background-color: #f8f9fa; padding: 20px; text-align: center; font-size: 13px; color: #80868b; border-top: 1px solid #e1e4e8; }
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <div class='header'>
                        <h2>New Lead Submission</h2>
                    </div>
                    <div class='content'>
                        <p>Hello team,</p>
                        <p>You have received a new inquiry from the website contact form. Here are the submitted details:</p>
                        
                        <table class='details-table'>
                            <tr><th>Name</th><td>" . htmlspecialchars($name) . "</td></tr>
                            <tr><th>Company</th><td>" . (!empty($company) ? htmlspecialchars($company) : '<em>Not provided</em>') . "</td></tr>
                            <tr><th>Email Address</th><td><a href='mailto:" . htmlspecialchars($email) . "' style='color: #1a73e8; text-decoration: none;'>" . htmlspecialchars($email) . "</a></td></tr>
                            <tr><th>Phone Number</th><td>" . htmlspecialchars($phone) . "</td></tr>
                            <tr><th>Country</th><td>" . htmlspecialchars($country) . "</td></tr>
                            <tr><th>Service Needed</th><td>" . htmlspecialchars($service) . "</td></tr>
                            <tr><th>Page Reference</th><td>" . htmlspecialchars($page) . "</td></tr>
                        </table>

                        <p style='margin-bottom: 8px; font-weight: 600; color: #5f6368;'>Message / Inquiry:</p>
                        <div class='message-box'>
                            <p>" . nl2br(htmlspecialchars($message)) . "</p>
                        </div>
                    </div>
                    <div class='footer'>
                        <p>This email was automatically generated by the Pixon Lead system.</p>
                    </div>
                </div>
            </body>
            </html>
            ";

            $payload = [
                'from' => 'onboarding@resend.dev',
                'to' => 'info@pixonglobal.com',
                'subject' => 'New Lead Form Submission from ' . htmlspecialchars($name),
                'html' => $html_content
            ];

            if ($attachment_path && file_exists($attachment_path)) {
                $payload['attachments'] = [
                    [
                        'filename' => basename($attachment_path),
                        'content' => base64_encode(file_get_contents($attachment_path))
                    ]
                ];
            }

            $ch = curl_init('https://api.resend.com/emails');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $resend_api_key,
                'Content-Type: application/json'
            ]);
            $response = curl_exec($ch);
            curl_close($ch);

            echo json_encode(['success' => true, 'message' => 'Lead successfully submitted.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Database statement preparation failed.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
