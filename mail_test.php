<?php
if (mail('bulamabenjamin100@gmail.com', 'Test Email', 'This is a test email.')) {
    echo 'Mail sent successfully.';
} else {
    echo 'Error sending mail.';
}
?>
