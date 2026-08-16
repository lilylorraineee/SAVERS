<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - TVET Parking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f4ff, #e8edf5);
            color: #1a1a2e;
            min-height: 100vh;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid rgba(0, 245, 255, 0.3);
            box-shadow: 0 2px 20px rgba(0, 245, 255, 0.1);
        }

        .brand {
            font-weight: bold;
            color: #1a1a2e;
            letter-spacing: 1px;
            text-shadow: 0 0 20px rgba(0, 245, 255, 0.2);
        }

        .menu-icon {
            font-size: 28px;
            cursor: pointer;
            color: #ff00cc;
            text-shadow: 0 0 20px rgba(255, 0, 204, 0.3);
            transition: 0.3s;
        }

        .menu-icon:hover {
            text-shadow: 0 0 40px rgba(255, 0, 204, 0.6);
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(3px);
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
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            transition: 0.4s ease;
            padding-top: 80px;
            z-index: 999;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
            border-left: 2px solid rgba(0, 245, 255, 0.2);
        }

        .menu.active {
            right: 0;
        }

        .menu a {
            display: block;
            padding: 15px 25px;
            color: #1a1a2e;
            text-decoration: none;
            transition: 0.3s;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .menu a:hover {
            background: rgba(0, 245, 255, 0.1);
            color: #00f5ff;
            text-shadow: 0 0 20px rgba(0, 245, 255, 0.3);
        }

        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05), 0 0 20px rgba(0, 245, 255, 0.05);
        }

        .login-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .login-box {
            padding: 40px;
            text-align: center;
        }

        .main-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #1a1a2e;
            text-shadow: 0 0 20px rgba(0, 245, 255, 0.3), 0 0 40px rgba(0, 245, 255, 0.1);
        }

        .role-selection {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .role-btn {
            flex: 1;
            min-width: 100px;
            padding: 12px;
            border-radius: 12px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.5);
            color: #1a1a2e;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        .role-btn.active {
            border-color: #ff00cc;
            background: rgba(255, 0, 204, 0.15);
            color: #ff00cc;
            box-shadow: 0 0 20px rgba(255, 0, 204, 0.1);
        }

        .role-btn.student.active {
            border-color: #ff00cc;
            background: rgba(255, 0, 204, 0.15);
            color: #ff00cc;
        }

        .role-btn.lecturer.active {
            border-color: #00b4d8;
            background: rgba(0, 180, 216, 0.15);
            color: #00b4d8;
        }

        .role-btn.admin.active {
            border-color: #f39c12;
            background: rgba(243, 156, 18, 0.15);
            color: #f39c12;
        }

        .role-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #1a1a2e;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 14px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            color: #1a1a2e;
            font-size: 14px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        .input-group input::placeholder {
            color: rgba(0, 0, 0, 0.3);
        }

        .input-group input:focus {
            outline: none;
            border-color: #00f5ff;
            box-shadow: 0 0 20px rgba(0, 245, 255, 0.1);
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #ff00cc, #00f5ff);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(0, 245, 255, 0.3);
        }

        .btn-login.lecturer-btn {
            background: linear-gradient(135deg, #00b4d8, #0077b6);
        }

        .btn-login.lecturer-btn:hover {
            box-shadow: 0 0 30px rgba(0, 180, 216, 0.3);
        }

        .btn-login.admin-btn {
            background: linear-gradient(135deg, #f39c12, #e67e22);
        }

        .btn-login.admin-btn:hover {
            box-shadow: 0 0 30px rgba(243, 156, 18, 0.3);
        }

        .error-msg {
            background: rgba(255, 23, 68, 0.1);
            border: 1px solid #ff1744;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 20px;
            color: #ff1744;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
            color: #6a6a8a;
            font-size: 14px;
        }

        .signup-link a {
            color: #00b4d8;
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            color: #ff00cc;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #6a6a8a;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #00f5ff;
        }

        @media (max-width: 480px) {
            .role-selection {
                flex-direction: column;
            }
            
            .role-btn {
                min-width: 100%;
            }

            .login-box {
                padding: 25px;
            }

            .main-title {
                font-size: 22px;
            }
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
    <a href="login.php">🔐 Login</a>
    <a href="student_signup.php">📝 Student Sign Up</a>
    <a href="lecturer_signup.php">📝 Lecturer Sign Up</a>
    <a href="#">ℹ️ About</a>
</div>

<div class="login-container">
    <div class="login-box glass">
        <h2 class="main-title" id="pageTitle">🔐 Student Login</h2>

        <div id="errorMsg" class="error-msg" style="display: none;"></div>

        <!-- Role Selection -->
        <div class="role-selection">
            <button type="button" id="studentRoleBtn" class="role-btn student active" onclick="selectRole('student')">🎓 Student</button>
            <button type="button" id="lecturerRoleBtn" class="role-btn lecturer" onclick="selectRole('lecturer')">👨‍🏫 Lecturer</button>
            <button type="button" id="adminRoleBtn" class="role-btn admin" onclick="selectRole('admin')">👑 Admin</button>
        </div>

        <form id="loginForm" onsubmit="return handleLogin()">
            <div class="input-group">
                <label id="emailLabel">📧 Email Address</label>
                <input type="text" id="email" placeholder="your@email.com" required>
            </div>

            <div class="input-group">
                <label>🔒 Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-login" id="loginBtn">🎓 Login →</button>
        </form>

        <!-- Signup Links -->
        <div id="studentSignupLink" class="signup-link">
            Don't have an account? <a href="student_signup.php">Sign Up here</a>
        </div>
        <div id="lecturerSignupLink" class="signup-link" style="display: none;">
            Don't have an account? <a href="lecturer_signup.php">Sign Up here</a>
        </div>
        <div id="adminSignupLink" class="signup-link" style="display: none; color: #999;">
            🔒 Admin access is restricted
        </div>

        <a href="index.php" class="back-link">← Back to Home</a>
    </div>
</div>

<script>
let selectedRole = 'student';

function toggleMenu(){
    var menu = document.getElementById("menu");
    var overlay = document.getElementById("overlay");
    menu.classList.toggle("active");
    overlay.classList.toggle("active");
}

function selectRole(role) {
    selectedRole = role;
    
    const studentBtn = document.getElementById('studentRoleBtn');
    const lecturerBtn = document.getElementById('lecturerRoleBtn');
    const adminBtn = document.getElementById('adminRoleBtn');
    const loginBtn = document.getElementById('loginBtn');
    const pageTitle = document.getElementById('pageTitle');
    const emailLabel = document.getElementById('emailLabel');
    const emailInput = document.getElementById('email');
    
    // Reset all
    studentBtn.classList.remove('active');
    lecturerBtn.classList.remove('active');
    adminBtn.classList.remove('active');
    
    // Hide all signup links
    document.getElementById('studentSignupLink').style.display = 'none';
    document.getElementById('lecturerSignupLink').style.display = 'none';
    document.getElementById('adminSignupLink').style.display = 'none';
    
    if(role === 'student') {
        studentBtn.classList.add('active');
        document.getElementById('studentSignupLink').style.display = 'block';
        loginBtn.className = 'btn-login';
        loginBtn.innerHTML = '🎓 Login →';
        pageTitle.textContent = '🔐 Student Login';
        emailLabel.textContent = '📧 Email Address';
        emailInput.type = 'email';
        emailInput.placeholder = 'student@email.com';
        emailInput.value = '';
    } else if(role === 'lecturer') {
        lecturerBtn.classList.add('active');
        document.getElementById('lecturerSignupLink').style.display = 'block';
        loginBtn.className = 'btn-login lecturer-btn';
        loginBtn.innerHTML = '👨‍🏫 Lecturer Login →';
        pageTitle.textContent = '👨‍🏫 Lecturer Login';
        emailLabel.textContent = '📧 Email Address';
        emailInput.type = 'email';
        emailInput.placeholder = 'lecturer@tvetmara.edu.my';
        emailInput.value = '';
    } else if(role === 'admin') {
        adminBtn.classList.add('active');
        document.getElementById('adminSignupLink').style.display = 'block';
        loginBtn.className = 'btn-login admin-btn';
        loginBtn.innerHTML = '👑 Admin Login →';
        pageTitle.textContent = '👑 Admin Login';
        emailLabel.textContent = '👤 Username';
        emailInput.type = 'text';
        emailInput.placeholder = 'Enter your username';
        emailInput.value = '';
    }
}

function handleLogin() {
    let email = document.getElementById('email').value.trim();
    let password = document.getElementById('password').value.trim();
    let errorMsg = document.getElementById('errorMsg');
    
    errorMsg.style.display = 'none';
    errorMsg.innerHTML = '';
    
    if (!email || !password) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Please fill in all fields.';
        return false;
    }
    
    if(selectedRole === 'student') {
        // Student login - guna localStorage
        let students = JSON.parse(localStorage.getItem('students')) || [];
        let student = students.find(s => s.email === email && s.password === password);
        
        if(student) {
            sessionStorage.setItem('loggedInStudent', JSON.stringify({
                id: student.id,
                name: student.name,
                email: student.email,
                matric_no: student.matric_no,
                ic_no: student.ic_no,
                phone_no: student.phone_no,
                plate_no: student.plate_no || '',
                vehicle_type: student.vehicle_type || '',
                vehicle_color: student.vehicle_color || '',
                semester: student.semester,
                program: student.program
            }));
            window.location.href = 'student_dashboard.php';
        } else {
            errorMsg.style.display = 'block';
            errorMsg.innerHTML = '❌ Invalid email or password. Please try again.';
        }
        return false;
        
    } else if(selectedRole === 'lecturer') {
        // Lecturer login - guna localStorage
        let lecturers = JSON.parse(localStorage.getItem('lecturers')) || [];
        let lecturer = lecturers.find(l => l.email === email && l.password === password);
        
        if(lecturer) {
            sessionStorage.setItem('loggedInLecturer', JSON.stringify({
                id: lecturer.id,
                name: lecturer.name,
                email: lecturer.email,
                staff_id: lecturer.staff_id,
                phone_no: lecturer.phone_no,
                program: lecturer.program,
                plate_no: lecturer.plate_no || '',
                vehicle_type: lecturer.vehicle_type || '',
                vehicle_color: lecturer.vehicle_color || ''
            }));
            window.location.href = 'lecturer_dashboard.php';
        } else {
            errorMsg.style.display = 'block';
            errorMsg.innerHTML = '❌ Invalid email or password. Please try again.';
        }
        return false;
        
    } else if(selectedRole === 'admin') {
        // Admin login - FIXED CREDENTIALS
        const ADMIN_USERNAME = 'admin';
        const ADMIN_PASSWORD = 'admin123';
        
        if (email === ADMIN_USERNAME && password === ADMIN_PASSWORD) {
            sessionStorage.setItem('loggedInAdmin', JSON.stringify({
                name: 'Super Administrator',
                username: ADMIN_USERNAME,
                role: 'admin'
            }));
            // Admin terus ke warden dashboard
            window.location.href = 'warden_dashboard.php';
        } else {
            errorMsg.style.display = 'block';
            errorMsg.innerHTML = '❌ Invalid username or password.';
        }
        return false;
    }
    
    return false;
}

// Auto-select role if parameter exists
window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const role = urlParams.get('role');
    if(role === 'admin') {
        selectRole('admin');
    } else if(role === 'lecturer') {
        selectRole('lecturer');
    }
};
</script>

</body>
</html>