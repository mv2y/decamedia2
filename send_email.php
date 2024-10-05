<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من نموذج الاتصال
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعداد البريد الإلكتروني
    $to = "suhilshogi@gmail.com"; // ضع هنا بريدك الإلكتروني
    $subject = "رسالة جديدة من نموذج الاتصال";
    $body = "اسم المرسل: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
    $headers = "From: $email\r\n";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "فشل في إرسال الرسالة.";
    }
}
?>
