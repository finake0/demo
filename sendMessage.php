<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $botToken = "6675675152:AAHgGbCGsV3sIYRpVXteQIN0GIowPpKwG5M";
    $chatId = "-4287171186";
    $message = $_POST['message'];
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    $response = file_get_contents($url);
    if ($response) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
