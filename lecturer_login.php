<?php 
session_start();
// If already logged in, redirect to dashboard
if (isset($_SESSION['lecturer_id'])) {
    header("Location: lecturer_dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Login - TVET Parking System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #f0f2f5;
            color: #333;
            min-height: 100vh;
        }

        .main-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #1a237e;
            text-align: center;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .brand {
            font-weight: bold;
            color: #1a237e;
            letter-spacing: 1px;
        }

        .menu-icon {
            font-size: 28px;
            cursor: pointer;
            color: #1a237e;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 998;
        }

        #overlay.active {
            display: block;
        }

        .menu {
            position: fixed;
            top: 0;
            right: -250px;
            width: 220px;
            height: 100%;
            background: white;
            transition: 0.4s ease;
            padding-top: 80px;
            z-index: 999;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
        }

        .menu.active {
            right: 0;
        }

        .menu a {
            display: block;
            padding: 15px 25px;
            color: #333;
            text-decoration: none;
            transition: 0.3s;
            border-bottom: 1px solid #eee;
        }

        .menu a:hover {
            background: #f0f2f5;
            color: #1a237e;
        }

        .glass {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .dashboard-container {
            max-width: 500px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .login-box {
            padding: 40px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #1a237e;
            font-size: 14px;
            font-weight: 600;
        }

        .input-group input {
            width: 100%;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            background: #f8f9fa;
            color: #333;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .input-group input::placeholder {
            color: #999;
        }

        .input-group input:focus {
            outline: none;
            border-color: #1a237e;
            background: white;
        }

        .btn-start {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
        }

        .btn-start:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(26, 35, 126, 0.3);
        }

        .error-msg {
            background: #ffebee;
            border: 1px solid #ef9a9a;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 20px;
            color: #c62828;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        .success-msg {
            background: #e8f5e9;
            border: 1px solid #a5d6a7;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 20px;
            color: #2e7d32;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .signup-link a {
            color: #1a237e;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            color: #283593;
            text-decoration: underline;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            color: #1a237e;
        }
    </style>
</head>
<body>

<div class="topbar">
    <div class="brand">TVETMARA LUMUT</div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
</div>

<div id="overlay" onclick="toggleMenu()"></div>

<div id="menu" class="menu">
    <a href="index.php">🏠 Home</a>
    <a href="student_login.php">🎓 Student Login</a>
    <a href="student_signup.php">📝 Student Sign Up</a>
    <a href="lecturer_login.php">👨‍🏫 Lecturer Login</a>
    <a href="lecturer_signup.php">📝 Lecturer Sign Up</a>
    <a href="warden_login.php">👮 Warden Login</a>
</div>

<div class="dashboard-container">
    <div class="login-box glass">
        <h2 class="main-title">👨‍🏫 Lecturer Login</h2>

        <div id="successMsg" class="success-msg"></div>
        <div id="errorMsg" class="error-msg"></div>

        <form id="loginForm" onsubmit="return loginLecturer()">
            <div class="input-group">
                <label>📧 Email Address</label>
                <input type="email" id="email" placeholder="lecturer@tvetmara.edu.my" required>
            </div>

            <div class="input-group">
                <label>🔒 Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-start">Login →</button>
        </form>

        <div class="signup-link">
            Don't have an account? <a href="lecturer_signup.php">Sign Up here</a>
        </div>

        <a href="index.php" class="back-link">← Back to Home</a>
    </div>
</div>

<script>
function toggleMenu(){
    var menu = document.getElementById("menu");
    var overlay = document.getElementById("overlay");
    menu.classList.toggle("active");
    overlay.classList.toggle("active");
}

// Check for success message from signup
const urlParams = new URLSearchParams(window.location.search);
const success = urlParams.get('success');
if(success) {
    document.getElementById('successMsg').style.display = 'block';
    document.getElementById('successMsg').innerHTML = '✅ ' + success;
}

function loginLecturer() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let errorMsg = document.getElementById('errorMsg');
    let successMsg = document.getElementById('successMsg');

    errorMsg.style.display = 'none';
    successMsg.style.display = 'none';

    let lecturers = JSON.parse(localStorage.getItem('lecturers')) || [];
    let lecturer = lecturers.find(l => l.email === email && l.password === password);

    if(lecturer) {
        let lecturerData = {
            id: lecturer.id,
            name: lecturer.name,
            email: lecturer.email,
            staff_id: lecturer.staff_id,
            ic_no: lecturer.ic_no,
            phone_no: lecturer.phone_no,
            department: lecturer.department,
            position: lecturer.position,
            plate_no: lecturer.plate_no || ''
        };
        
        sessionStorage.setItem('loggedInLecturer', JSON.stringify(lecturerData));
        window.location.href = 'lecturer_dashboard.php';
    } else {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Invalid email or password';
    }
    return false;
}
</script>

</body>
</html>