<?php
$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "wasana@outlook.com" . $email;
    $message = " Name: " . $name . "\r\n Subject: " . $subject . "\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

    $headers = "Message from: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

    if (@mail($to, $subject, $message, $headers)) {
        $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
    }
}
?>

<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>
    <p style="text-align:center;">
        Thank you for your email. <br>
        I will respond to your email as soon as possible.
    </p
</span>
<meta http-equiv="refresh" content="5; url=contact.html" />
