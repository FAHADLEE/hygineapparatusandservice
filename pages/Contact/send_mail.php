<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $product = htmlspecialchars($_POST['product']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // Sender Gmail
        $mail->Username = 'hygineapparatus@gmail.com';

        // Gmail App Password
        $mail->Password = 'ubry vqws xfth gszz';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Receiver
        $mail->setFrom('hygineapparatus@gmail.com', 'Hygiene Apparatus & Service');
        // $mail->addAddress('hygineapparatus@gmail.com');
        $mail->addAddress('shuruthimanoharan8@gmail.com');

        // Reply button will open customer's email
        $mail->addReplyTo($email, $name);

        // Email Settings
        $mail->isHTML(true);
        $mail->Subject = "New Website Enquiry";

        $mail->Body = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body style="margin:0;padding:0;background:#f4f7fb;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f7fb;padding:40px 0;">

<tr>
<td align="center">

<table width="650" cellpadding="0" cellspacing="0"
style="background:#ffffff;border-radius:12px;overflow:hidden;
box-shadow:0 8px 30px rgba(0,0,0,.08);">

<!-- Header -->
<tr>
<td style="background:linear-gradient(90deg,#00d4ff,#7b2ffc);padding:35px;text-align:center;">

<h1 style="margin:0;color:#fff;font-size:30px;">
Hygiene Apparatus & Service
</h1>

</td>
</tr>

<!-- Content -->
<tr>
<td style="padding:35px;">

<h2 style="margin-top:0;color:#222;">
Hello Team,
</h2>

<p style="color:#666;font-size:15px;line-height:1.7;">
A new enquiry has been submitted through your website.
Below are the customer details.
</p>

<table width="100%" cellpadding="12" cellspacing="0"
style="border-collapse:collapse;margin-top:25px;">

<tr style="background:#f7f9fc;">
<td width="180"><strong>Name</strong></td>
<td>' . $name . '</td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>
<a href="mailto:' . $email . '" style="color:#00a8cc;text-decoration:none;">
' . $email . '
</a>
</td>
</tr>

<tr style="background:#f7f9fc;">
<td><strong>Product</strong></td>
<td>' . $product . '</td>
</tr>

<tr>
<td><strong>Date</strong></td>
<td>' . date("d M Y") . '</td>
</tr>

<tr style="background:#f7f9fc;">
<td><strong>Time</strong></td>
<td>' . date("h:i A") . '</td>
</tr>

<tr>
<td valign="top"><strong>Message</strong></td>
<td>' . nl2br($message) . '</td>
</tr>

</table>

<div style="
margin-top:35px;
padding:20px;
background:#eefbff;
border-left:5px solid #00d4ff;
border-radius:8px;
">

<p style="margin:0 0 15px 0;font-size:15px;color:#333;">
Click the button below to reply directly to the customer.
</p>

<a href="mailto:' . $email . '"
style="
display:inline-block;
padding:14px 28px;
background:#00d4ff;
color:white;
text-decoration:none;
font-weight:bold;
border-radius:6px;
">
Reply to Customer
</a>

</div>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="
background:#fafafa;
padding:20px;
text-align:center;
color:#888;
font-size:13px;
">

This email was automatically generated from the
<b>Hygiene Apparatus & Service</b> website enquiry form.

</td>
</tr>

</table>

</td>
</tr>

</table>

</body>
</html>';

        $mail->AltBody =
            "New Website Enquiry\n\n" .
            "Name : $name\n\n" .
            "Email : $email\n\n" .
            "Product : $product\n\n" .
            "Date : " . date("d M Y") . "\n\n" .
            "Time : " . date("h:i A") . "\n\n" .
            "Message :\n$message";

        $mail->send();

       if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=success");
} else {
    header("Location: ../../index.php?status=success");
}
exit();

    } catch (Exception $e) {

        echo "<h2>Mail Error</h2>";
        echo $mail->ErrorInfo;
        exit();

    }
}
?>