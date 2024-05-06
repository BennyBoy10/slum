<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Compose data line for CSV
    $data = "$name,$nickname,$birthday,$email,$phone\n";

    // Append data to CSV file
    $file = fopen('submissions.csv', 'a'); // 'a' for append mode
    fwrite($file, $data);
    fclose($file);

    // Redirect to a thank you page or display a success message
    header('Location: thank_you.html'); // Replace with your thank you page URL
    exit;
} else {
    // Handle invalid form submission
    echo 'Invalid form submission.';
}
?>
