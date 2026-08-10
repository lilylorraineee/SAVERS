<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - TVET Parking System</title>
</head>
<body>
    <script>
        sessionStorage.removeItem('loggedInWarden');
        window.location.href = 'warden_login.php';
    </script>
</body>
</html>