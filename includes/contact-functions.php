<?php

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    private $smtpHost;
    private $smtpUsername;
    private $smtpPassword;
    private $smtpPort;
    private $smtpEncryption;

    public function __construct($config = [])
    {
        $this->smtpHost = $config['host'] ?? 'smtp.gmail.com';
        $this->smtpUsername = $config['username'] ?? 'mavixtech7@gmail.com';
        $this->smtpPassword = $config['password'] ?? 'wyugfwaobabzcscf';
        $this->smtpPort = $config['port'] ?? 587;
        $this->smtpEncryption = $config['encryption'] ?? PHPMailer::ENCRYPTION_STARTTLS;
    }

    /**
     * Send email using PHPMailer
     * 
     * @param array $emailData - Email configuration array
     * @return array - Response with success status and message
     */
    public function sendEmail($emailData)
    {
        // Validate required fields
        $requiredFields = ['to', 'subject', 'body'];
        foreach ($requiredFields as $field) {
            if (empty($emailData[$field])) {
                return [
                    'success' => false,
                    'message' => "Required field '$field' is missing"
                ];
            }
        }

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = $this->smtpHost;
            $mail->SMTPAuth = true;
            $mail->Username = $this->smtpUsername;
            $mail->Password = $this->smtpPassword;
            $mail->SMTPSecure = $this->smtpEncryption;
            $mail->Port = $this->smtpPort;

            // Recipients
            $mail->setFrom(
                $emailData['from_email'] ?? $this->smtpUsername,
                $emailData['from_name'] ?? 'Mavix Tech'
            );

            // Handle multiple recipients
            if (is_array($emailData['to'])) {
                foreach ($emailData['to'] as $recipient) {
                    if (is_array($recipient)) {
                        $mail->addAddress($recipient['email'], $recipient['name'] ?? '');
                    } else {
                        $mail->addAddress($recipient);
                    }
                }
            } else {
                $mail->addAddress($emailData['to']);
            }

            // Reply-to
            if (!empty($emailData['reply_to'])) {
                $mail->addReplyTo(
                    $emailData['reply_to']['email'],
                    $emailData['reply_to']['name'] ?? ''
                );
            }

            // CC and BCC
            if (!empty($emailData['cc'])) {
                if (is_array($emailData['cc'])) {
                    foreach ($emailData['cc'] as $cc) {
                        $mail->addCC($cc);
                    }
                } else {
                    $mail->addCC($emailData['cc']);
                }
            }

            if (!empty($emailData['bcc'])) {
                if (is_array($emailData['bcc'])) {
                    foreach ($emailData['bcc'] as $bcc) {
                        $mail->addBCC($bcc);
                    }
                } else {
                    $mail->addBCC($emailData['bcc']);
                }
            }

            // Attachments
            if (!empty($emailData['attachments'])) {
                foreach ($emailData['attachments'] as $attachment) {
                    if (is_array($attachment)) {
                        $mail->addAttachment(
                            $attachment['path'],
                            $attachment['name'] ?? ''
                        );
                    } else {
                        $mail->addAttachment($attachment);
                    }
                }
            }

            // Content
            $mail->isHTML($emailData['is_html'] ?? true);
            $mail->Subject = $emailData['subject'];
            $mail->Body = $emailData['body'];

            // Alternative plain text version
            if (!empty($emailData['alt_body'])) {
                $mail->AltBody = $emailData['alt_body'];
            }

            // Send email
            $mail->send();

            return [
                'success' => true,
                'message' => 'Email sent successfully'
            ];

        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Email sending failed: ' . $mail->ErrorInfo
            ];
        }
    }

    /**
     * Send contact form email (specific template)
     * 
     * @param array $formData - Form data from contact form
     * @return array - Response with success status and message
     */
    public function sendContactFormEmail($formData)
    {
        $subjectsList = implode(", ", $formData['subjects']);

        $emailContent = "
            <html>
            <head>
                <title>Contact Form Submission</title>
                <style>
                    body { font-family: Arial, sans-serif; }
                    table { border-collapse: collapse; width: 100%; max-width: 600px; }
                    th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
                    th { background-color: #f2f2f2; }
                    .header { background-color: #667eea; color: white; padding: 20px; }
                </style>
            </head>
            <body>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <table>
                    <tr>
                        <th>Field</th>
                        <th>Information</th>
                    </tr>
                    <tr>
                        <td><strong>First Name</strong></td>
                        <td>" . htmlspecialchars($formData['firstName']) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Last Name</strong></td>
                        <td>" . htmlspecialchars($formData['lastName']) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>" . htmlspecialchars($formData['email']) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Phone</strong></td>
                        <td>" . htmlspecialchars($formData['phone']) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Subject(s)</strong></td>
                        <td>" . htmlspecialchars($subjectsList) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Message</strong></td>
                        <td>" . nl2br(htmlspecialchars($formData['message'])) . "</td>
                    </tr>
                    <tr>
                        <td><strong>Date & Time</strong></td>
                        <td>" . date('Y-m-d H:i:s') . "</td>
                    </tr>
                </table>
            </body>
            </html>
        ";

        $altBody = "New Contact Form Submission\n\n" .
            "First Name: " . $formData['firstName'] . "\n" .
            "Last Name: " . $formData['lastName'] . "\n" .
            "Email: " . $formData['email'] . "\n" .
            "Phone: " . $formData['phone'] . "\n" .
            "Subject(s): " . $subjectsList . "\n" .
            "Message: " . $formData['message'] . "\n" .
            "Date & Time: " . date('Y-m-d H:i:s');

        $emailData = [
            'to' => 'mavixtech7@gmail.com',
            'subject' => 'New Contact Form Submission - ' . $subjectsList,
            'body' => $emailContent,
            'alt_body' => $altBody,
            'from_email' => $formData['email'],
            'from_name' => $formData['firstName'] . ' ' . $formData['lastName'],
            'reply_to' => [
                'email' => $formData['email'],
                'name' => $formData['firstName'] . ' ' . $formData['lastName']
            ]
        ];

        return $this->sendEmail($emailData);
    }
}
?>