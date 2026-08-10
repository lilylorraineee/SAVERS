<?php
session_start();

// Database connection
$host = 'localhost';
$dbname = 'tvet_parking';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get form data
$fullname = $_POST['fullname'] ?? '';
$ic_no = $_POST['ic_no'] ?? '';
$matric_no = $_POST['matric_no'] ?? '';
$semester = $_POST['semester'] ?? '';
$course = $_POST['course'] ?? '';
$phone_no = $_POST['phone_no'] ?? '';
$plate_no = strtoupper($_POST['plate_no'] ?? '');
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// Validation
if(empty($fullname) || empty($ic_no) || empty($matric_no) || empty($semester) || empty($course) || empty($phone_no) || empty($plate_no) || empty($email) || empty($password)) {
    header("Location: student_signup.php?error=Please fill in all fields");
    exit();
}

// Check if password matches
if($password !== $confirm_password) {
    header("Location: student_signup.php?error=Passwords do not match");
    exit();
}

// Check password length
if(strlen($password) < 6) {
    header("Location: student_signup.php?error=Password must be at least 6 characters");
    exit();
}

// Check if email already exists
$checkEmail = $pdo->prepare("SELECT id FROM students WHERE email = :email");
$checkEmail->execute(['email' => $email]);
if($checkEmail->fetch()) {
    header("Location: student_signup.php?error=Email already registered. Please login.");
    exit();
}

// Check if matric number already exists
$checkMatric = $pdo->prepare("SELECT id FROM students WHERE matric_no = :matric_no");
$checkMatric->execute(['matric_no' => $matric_no]);
if($checkMatric->fetch()) {
    header("Location: student_signup.php?error=Matric number already registered");
    exit();
}

// Check if IC number already exists
$checkIc = $pdo->prepare("SELECT id FROM students WHERE ic_no = :ic_no");
$checkIc->execute(['ic_no' => $ic_no]);
if($checkIc->fetch()) {
    header("Location: student_signup.php?error=IC number already registered");
    exit();
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO students (name, email, password, matric_no, ic_no, phone_no, plate_no, semester, course) 
        VALUES (:name, :email, :password, :matric_no, :ic_no, :phone_no, :plate_no, :semester, :course)";

$stmt = $pdo->prepare($sql);
$result = $stmt->execute([
    'name' => $fullname,
    'email' => $email,
    'password' => $hashed_password,
    'matric_no' => $matric_no,
    'ic_no' => $ic_no,
    'phone_no' => $phone_no,
    'plate_no' => $plate_no,
    'semester' => $semester,
    'course' => $course
]);

if($result) {
    // Registration successful
    header("Location: student_login.php?success=Registration successful! Please login.");
    exit();
} else {
    header("Location: student_signup.php?error=Registration failed. Please try again.");
    exit();
}
?>