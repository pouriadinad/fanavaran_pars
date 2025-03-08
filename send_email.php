<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "youremail@example.com";  // ایمیل خود را وارد کنید
    $subject = "پیام جدید از فرم تماس سایت";
    $body = "نام: $name\nایمیل: $email\nپیام: $message";

    // ارسال ایمیل
    if (mail($to, $subject, $body)) {
        echo "پیام شما با موفقیت ارسال شد!";
    } else {
        echo "خطا در ارسال پیام.";
    }
}
?>