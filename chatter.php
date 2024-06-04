<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Отправка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Отправка</h1>
        <div id="messageStatus"></div>
        <form id="messageForm">
            <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your message here"></textarea><br>
            <input type="button" value="Send Message" id="sendMessage">
        </form>

        <a href="https://www.file.io/" target="_blank">Аплоадер</a>

        <script>
            document.getElementById('sendMessage').addEventListener('click', function() {
                var message = document.getElementById('message').value;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'sendMessage.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById('messageStatus').innerHTML = xhr.responseText;
                    }
                };
                xhr.send('message=' + message);
            });

        </script>
    </div>
</body>
</html>
