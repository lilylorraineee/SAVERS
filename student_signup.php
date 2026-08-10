<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up - TVET Parking System</title>
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

        .main-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #1a1a2e;
            text-shadow: 0 0 20px rgba(0, 245, 255, 0.3), 0 0 40px rgba(0, 245, 255, 0.1);
            text-align: center;
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

        .menu .warden-link {
            color: #ff00cc;
            border-top: 1px solid rgba(255, 0, 204, 0.2);
            margin-top: 20px;
        }

        .menu .warden-link:hover {
            background: rgba(255, 0, 204, 0.1);
            color: #ff00cc;
            text-shadow: 0 0 20px rgba(255, 0, 204, 0.3);
        }

        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05), 0 0 20px rgba(0, 245, 255, 0.05);
        }

        .dashboard-container {
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .signup-box {
            padding: 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .input-group {
            margin-bottom: 0;
        }

        .input-group.full-width {
            grid-column: span 2;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #1a1a2e;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group input, .input-group select {
            width: 100%;
            padding: 12px;
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

        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: #00f5ff;
            box-shadow: 0 0 20px rgba(0, 245, 255, 0.1);
        }

        .input-group select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%231a1a2e' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            cursor: pointer;
        }

        .input-group select option {
            background: #ffffff;
            color: #1a1a2e;
        }

        .input-group .hint {
            display: block;
            font-size: 11px;
            color: #6a6a8a;
            margin-top: 4px;
        }

        .btn-start {
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
            margin-top: 20px;
        }

        .btn-start:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(0, 245, 255, 0.3);
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
        }

        .login-link {
            margin-top: 20px;
            text-align: center;
            color: #6a6a8a;
            font-size: 14px;
        }

        .login-link a {
            color: #00b4d8;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
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

        .vehicle-details {
            background: rgba(0, 245, 255, 0.05);
            border-radius: 12px;
            padding: 15px;
            border: 1px solid rgba(0, 245, 255, 0.1);
            grid-column: span 2;
        }

        .vehicle-details .vehicle-title {
            font-size: 14px;
            font-weight: bold;
            color: #ff00cc;
            margin-bottom: 15px;
            text-align: center;
        }

        .vehicle-details .form-grid-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .input-group.full-width {
                grid-column: span 1;
            }
            .vehicle-details {
                grid-column: span 1;
            }
            .vehicle-details .form-grid-inner {
                grid-template-columns: 1fr;
            }
            .signup-box {
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
    <a href="student_login.php">🎓 Student Login</a>
    <a href="warden_login.php" class="warden-link">👮 Warden / Staff Login</a>
    <a href="#">ℹ️ About</a>
</div>

<div class="dashboard-container">
    <div class="signup-box glass">
        <h2 class="main-title">📝 Student Registration</h2>

        <div id="errorMsg" class="error-msg" style="display: none;"></div>

        <form id="signupForm" onsubmit="return registerStudent()">
            <div class="form-grid">
                <div class="input-group full-width">
                    <label>👤 Full Name</label>
                    <input type="text" id="fullname" placeholder="Enter Your Full Name" required>
                </div>

                <div class="input-group">
                    <label>🆔 IC Number</label>
                    <input type="text" id="ic_no" placeholder="Enter Your IC Number" required>
                </div>

                <div class="input-group">
                    <label>🎓 Matric Number</label>
                    <input type="text" id="matric_no" placeholder="Enter Your Matric Number" required>
                </div>

                <div class="input-group">
                    <label>📚 Semester</label>
                    <select id="semester" required>
                        <option value="">Select Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                    </select>
                </div>

                <!-- ===== PROGRAM (dulu COURSE) ===== -->
                <div class="input-group">
                    <label>📖 Program</label>
                    <select id="program" required>
                        <option value="">Select Program</option>
                        <option value="ITW">ITW</option>
                        <option value="DFD">DFD</option>
                        <option value="DNS">DNS</option>
                        <option value="DTB">DTB</option>
                        <option value="DCP">DCP</option>
                        <option value="DCS">DCS</option>
                        <option value="DGA">DGA</option>
                        <option value="DCB">DCB</option>
                        <option value="DTF">DTF</option>
                        <option value="DTW">DTW</option>
                        <option value="SBN">SBN</option>
                        <option value="SLR">SLR</option>
                        <option value="SSB">SSB</option>
                        <option value="STF">STF</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>📱 Phone Number</label>
                    <input type="text" id="phone_no" placeholder="Enter Your Phone Number" required>
                </div>

                <div class="input-group">
                    <label>📧 Email</label>
                    <input type="email" id="email" placeholder="name@gmail.com" required>
                </div>

                <!-- ===== VEHICLE DETAILS SECTION ===== -->
                <div class="vehicle-details">
                    <div class="vehicle-title">🚗 Vehicle Details</div>
                    <div class="form-grid-inner">
                        <div class="input-group">
                            <label>🚗 Plate Number</label>
                            <input type="text" id="plate_no" placeholder="ABC1234" style="text-transform: uppercase;" required>
                            <span class="hint">e.g., ABC1234, WUE5678</span>
                        </div>

                        <div class="input-group">
                            <label>🚙 Vehicle Type / Model</label>
                            <input type="text" id="vehicle_type" placeholder="e.g., Myvi, Vios, Axia" required>
                            <span class="hint">Enter your car model</span>
                        </div>

                        <!-- ===== VEHICLE COLOR - TEXT INPUT ===== -->
                        <div class="input-group" style="grid-column: span 2;">
                            <label>🎨 Vehicle Color</label>
                            <input type="text" id="vehicle_color" placeholder="e.g., White, Red, Black, Silver" required>
                            <span class="hint">Enter your car color</span>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>🔒 Password</label>
                    <input type="password" id="password" placeholder="Create a password (min 6 chars)" required>
                </div>

                <div class="input-group">
                    <label>🔒 Confirm Password</label>
                    <input type="password" id="confirm_password" placeholder="Confirm your password" required>
                </div>
            </div>

            <button type="submit" class="btn-start">Register →</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="student_login.php">Login here</a>
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

function registerStudent() {
    // Get form values
    let fullname = document.getElementById('fullname').value.trim();
    let ic_no = document.getElementById('ic_no').value.trim();
    let matric_no = document.getElementById('matric_no').value.trim();
    let semester = document.getElementById('semester').value;
    let program = document.getElementById('program').value;
    let phone_no = document.getElementById('phone_no').value.trim();
    let email = document.getElementById('email').value.trim();
    let plate_no = document.getElementById('plate_no').value.trim().toUpperCase();
    let vehicle_type = document.getElementById('vehicle_type').value.trim();
    let vehicle_color = document.getElementById('vehicle_color').value.trim();
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
    let errorMsg = document.getElementById('errorMsg');

    // Clear previous error
    errorMsg.style.display = 'none';
    errorMsg.innerHTML = '';

    // Validation - Password
    if(password !== confirm_password) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Passwords do not match';
        return false;
    }

    if(password.length < 6) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Password must be at least 6 characters';
        return false;
    }

    // Validation - Plate Number
    if(plate_no.length < 3) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Please enter a valid vehicle plate number (min 3 characters)';
        return false;
    }

    // Validation - Vehicle Type
    if(vehicle_type.length < 2) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Please enter your vehicle type/model';
        return false;
    }

    // Validation - Vehicle Color
    if(vehicle_color.length < 2) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Please enter your vehicle color';
        return false;
    }

    // Get existing students
    let students = JSON.parse(localStorage.getItem('students'));
    if(!students) {
        students = [];
    }

    // Check if email already exists
    if(students.some(s => s.email === email)) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Email already registered. Please login.';
        return false;
    }

    // Check if matric number already exists
    if(students.some(s => s.matric_no === matric_no)) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ Matric number already registered';
        return false;
    }

    // Check if plate number already exists
    if(students.some(s => s.plate_no === plate_no)) {
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = '❌ This plate number is already registered by another student';
        return false;
    }

    // Create new student object WITH vehicle details
    let newStudent = {
        id: Date.now(),
        name: fullname,
        ic_no: ic_no,
        matric_no: matric_no,
        semester: semester,
        program: program,
        phone_no: phone_no,
        email: email,
        password: password,
        plate_no: plate_no,
        vehicle_type: vehicle_type,
        vehicle_color: vehicle_color
    };

    // Save to localStorage
    students.push(newStudent);
    localStorage.setItem('students', JSON.stringify(students));

    // Save to sessionStorage for auto login
    let loggedInStudent = {
        id: newStudent.id,
        name: newStudent.name,
        email: newStudent.email,
        matric_no: newStudent.matric_no,
        ic_no: newStudent.ic_no,
        phone_no: newStudent.phone_no,
        plate_no: newStudent.plate_no,
        vehicle_type: newStudent.vehicle_type,
        vehicle_color: newStudent.vehicle_color,
        semester: newStudent.semester,
        program: newStudent.program
    };
    sessionStorage.setItem('loggedInStudent', JSON.stringify(loggedInStudent));

    // Redirect to student dashboard
    window.location.href = 'student_dashboard.php';
    
    return false;
}
</script>

</body>
</html>