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
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Validate input
if(empty($email) || empty($password)) {
    header("Location: student_login.php?error=Please fill in all fields");
    exit();
}

// Query to check student
$sql = "SELECT * FROM students WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

// Verify password
if($student && password_verify($password, $student['password'])) {
    // Login success
    $_SESSION['user_id'] = $student['id'];
    $_SESSION['user_name'] = $student['name'];
    $_SESSION['user_email'] = $student['email'];
    $_SESSION['user_role'] = 'student';
    $_SESSION['matric_no'] = $student['matric_no'];
    $_SESSION['ic_no'] = $student['ic_no'];
    $_SESSION['phone_no'] = $student['phone_no'];
    $_SESSION['plate_no'] = $student['plate_no'];
    $_SESSION['semester'] = $student['semester'];
    $_SESSION['course'] = $student['course'];
    
    header("Location: student_dashboard.php");
    exit();
} else {
    // Login failed
    header("Location: student_login.php?error=Invalid email or password");
    exit();
}
?>