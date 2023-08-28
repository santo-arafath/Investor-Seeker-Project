<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link rel="stylesheet" href="all_css/chatbox_style.css">
</head>
<body>


    <div class="container">
        <div class="chat-box" id="chatBox">
        </div>
        <div class="input-box">
            <input type="text" id="messageInput" placeholder="Type your message">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    
    <script src="all_js/script.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
        file_put_contents('messages.txt', "You: $message\n", FILE_APPEND);
}
?>

