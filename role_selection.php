<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVET Parking System - Pilih Peranan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #17245a, #0b0f2a);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #00f5ff;
            text-shadow: 0 0 15px #00f5ff;
        }

        .subtitle {
            margin-bottom: 40px;
            color: #ccc;
        }

        .role-box {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .role-card {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px 30px;
            width: 250px;
            text-align: center;
            transition: 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .role-card:hover {
            transform: translateY(-10px);
            border-color: #00f5ff;
            box-shadow: 0 0 30px rgba(0, 245, 255, 0.3);
        }

        .role-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }

        .role-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .role-desc {
            font-size: 13px;
            color: #aaa;
        }

        .student-icon { color: #39ff14; }
        .lecturer-icon { color: #ff00cc; }

        .back-link {
            display: block;
            margin-top: 40px;
            color: #888;
            text-decoration: none;
        }

        .back-link:hover {
            color: #00f5ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚗 TVETMARA LUMUT Parking System</h1>
        <div class="subtitle">Sila pilih peranan anda untuk meneruskan</div>

        <div class="role-box">
            <a href="login.php?role=student" class="role-card">
                <div class="role-icon student-icon">👨‍🎓</div>
                <div class="role-title">Student</div>
                <div class="role-desc">Pilih slot parking, booking, dan buat pembayaran</div>
            </a>

            <a href="login.php?role=lecturer" class="role-card">
                <div class="role-icon lecturer-icon">👩‍🏫</div>
                <div class="role-title">Lecturer / Warden</div>
                <div class="role-desc">Akses terus, whitelist plate number, tiada booking</div>
            </a>
        </div>

        <a href="index.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>