<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailTestController extends Controller
{
    public function send()
    {
        $mail = new PHPMailer(true); // <--- jangan lupa ;

        try {
            // SMTP config
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port       = env('MAIL_PORT');

            // Sender & recipient
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress('receiver@example.com', 'Test User');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Test Email dari Laravel + PHPMailer';
            $mail->Body    = '<h3>Email berjaya dihantar</h3><p>Ini test sahaja</p>';

            $mail->send();

            return 'Email berjaya dihantar!';
        } catch (Exception $e) {
            return 'Email gagal: ' . $mail->ErrorInfo;
        }
    }
}
