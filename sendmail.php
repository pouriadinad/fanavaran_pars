<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت اطلاعات فرم و پاکسازی داده‌ها
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // بررسی صحت ورودی‌ها
    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "لطفاً تمامی فیلدها را به درستی پر کنید.";
        exit;
    }

    // آدرس مقصد ایمیل
    $recipient = "Pouria.dinad@gmail.com";

    // تنظیم موضوع ایمیل
    $email_subject = "پیام جدید از سایت: $subject";

    // تنظیم محتوای ایمیل
    $email_content = "نام: $name\n";
    $email_content .= "ایمیل: $email\n\n";
    $email_content .= "پیام:\n$message\n";

    // تنظیم هدرهای ایمیل
    $email_headers = "From: $name <$email>";

    // ارسال ایمیل
    if (mail($recipient, $email_subject, $email_content, $email_headers)) {
        echo "پیام شما ارسال شد. با تشکر!";
    } else {
        echo "متأسفانه پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
} else {
    echo "دسترسی نامعتبر.";
}
?>