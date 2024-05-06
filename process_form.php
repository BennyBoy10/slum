<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Compose email message
    $subject = 'New Form Submission';
    $message = "Name: $name\nNickname: $nickname\nBirthday: $birthday\nEmail: $email\nPhone: $phone";

    // Send email
    $to = 'bulamabenjamin100@gmail.com'; // Replace with your email address
    $headers = "From: $email\r\n";
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a success message
    header('Location: https://bit.ly/bulamabenjamin'); // Replace with your thank you page URL
    exit;
} else {
    // Handle invalid form submission
    echo 'Invalid form submission.';
}
?>
