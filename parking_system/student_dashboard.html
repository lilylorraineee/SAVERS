<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - TVET Parking System</title>
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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
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

        .menu .logout-link {
            color: #ff1744;
            border-top: 1px solid rgba(255, 23, 68, 0.2);
            margin-top: 20px;
        }

        .menu .logout-link:hover {
            background: rgba(255, 23, 68, 0.1);
            color: #ff1744;
        }

        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05), 0 0 20px rgba(0, 245, 255, 0.05);
        }

        .dashboard-wrapper {
            display: flex;
            margin-top: 70px;
            min-height: calc(100vh - 70px);
        }

        /* LEFT SIDEBAR - Student Info */
        .sidebar {
            width: 300px;
            min-width: 300px;
            padding: 25px 20px;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(0, 245, 255, 0.1);
            height: calc(100vh - 70px);
            position: sticky;
            top: 70px;
            overflow-y: auto;
        }

        .sidebar .profile-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .profile-icon .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #00f5ff, #ff00cc);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            margin: 0 auto 10px;
            color: white;
        }

        .sidebar .profile-name {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #1a1a2e;
            margin-bottom: 5px;
        }

        .sidebar .profile-role {
            text-align: center;
            color: #6a6a8a;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .sidebar .info-divider {
            border: none;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            margin: 15px 0;
        }

        .sidebar .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sidebar .info-item .label {
            color: #6a6a8a;
            font-size: 13px;
        }

        .sidebar .info-item .value {
            color: #1a1a2e;
            font-size: 13px;
            font-weight: 500;
            text-align: right;
            max-width: 60%;
            word-break: break-word;
        }

        .sidebar .info-item .value.highlight {
            color: #00b4d8;
        }

        .sidebar .info-item .value.plate {
            color: #ff00cc;
            font-weight: bold;
        }

        .sidebar .info-item .value.vehicle {
            color: #6a6a8a;
            font-size: 12px;
        }

        /* MAIN CONTENT */
        .main-content {
            flex: 1;
            padding: 25px 30px;
            overflow-y: auto;
            max-height: calc(100vh - 70px);
        }

        .welcome-card {
            background: rgba(0, 245, 255, 0.08);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 20px;
            padding: 20px 25px;
            margin-bottom: 30px;
        }

        .welcome-card h2 {
            color: #1a1a2e;
            margin-bottom: 10px;
            font-size: 22px;
        }

        .welcome-card p {
            color: #4a4a6a;
            margin: 5px 0;
            font-size: 14px;
        }

        .welcome-card .plate-display {
            margin-top: 8px;
            color: #ff00cc;
            font-weight: 500;
        }

        /* ===== CURRENT BOOKING CARD ===== */
        .current-booking-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 0, 204, 0.2);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            display: block;
        }

        .current-booking-card h4 {
            color: #ff00cc;
            margin-bottom: 15px;
        }

        .booking-details {
            background: rgba(0, 245, 255, 0.05);
            border-radius: 15px;
            padding: 15px;
        }

        .booking-details p {
            margin: 8px 0;
            color: #1a1a2e;
        }

        .no-booking-state {
            text-align: center;
            padding: 30px 20px;
        }

        .no-booking-state .icon {
            font-size: 48px;
            margin-bottom: 15px;
            display: block;
        }

        .no-booking-state h3 {
            color: #1a1a2e;
            margin-bottom: 8px;
            font-size: 18px;
        }

        .no-booking-state p {
            color: #6a6a8a;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .no-booking-state .btn-book-now {
            display: inline-block;
            padding: 10px 30px;
            background: linear-gradient(135deg, #ff00cc, #00f5ff);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
            text-decoration: none;
        }

        .no-booking-state .btn-book-now:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 0, 204, 0.3);
        }

        /* ===== PARKING TYPE SECTION ===== */
        .parking-type-section {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(0, 245, 255, 0.2);
            border-radius: 25px;
            padding: 30px 25px 25px 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .parking-type-section:hover {
            border-color: rgba(255, 0, 204, 0.3);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.08);
        }

        .parking-type-section .section-header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(0, 245, 255, 0.15);
        }

        .parking-type-section .section-header h3 {
            color: #1a1a2e;
            font-size: 20px;
            margin: 0;
        }

        .choice-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .choice-card {
            flex: 1;
            min-width: 200px;
            max-width: 280px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(0, 0, 0, 0.08);
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .choice-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 20px;
            opacity: 0;
            transition: 0.3s;
            z-index: 0;
        }

        .choice-card:hover::before {
            opacity: 1;
        }

        .choice-card > * {
            position: relative;
            z-index: 1;
        }

        .choice-card:hover {
            transform: translateY(-8px);
        }

        .premium-card {
            border-color: rgba(255, 0, 204, 0.2);
        }

        .premium-card::before {
            background: linear-gradient(135deg, rgba(255, 0, 204, 0.05), rgba(255, 0, 204, 0.02));
        }

        .premium-card:hover {
            border-color: #ff00cc;
            box-shadow: 0 8px 35px rgba(255, 0, 204, 0.2);
        }

        .basic-card {
            border-color: rgba(0, 180, 216, 0.2);
        }

        .basic-card::before {
            background: linear-gradient(135deg, rgba(0, 180, 216, 0.05), rgba(0, 180, 216, 0.02));
        }

        .basic-card:hover {
            border-color: #00b4d8;
            box-shadow: 0 8px 35px rgba(0, 180, 216, 0.2);
        }

        .choice-card .card-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 10px;
            padding: 2px 12px;
            border-radius: 15px;
            font-weight: bold;
            z-index: 2;
        }

        .premium-card .card-badge {
            background: rgba(255, 0, 204, 0.15);
            color: #ff00cc;
        }

        .basic-card .card-badge {
            background: rgba(0, 180, 216, 0.15);
            color: #00b4d8;
        }

        .choice-icon {
            font-size: 48px;
            margin-bottom: 12px;
        }

        .choice-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .premium-title { color: #ff00cc; }
        .basic-title { color: #00b4d8; }

        .choice-desc {
            font-size: 13px;
            color: #6a6a8a;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .choice-price {
            font-size: 20px;
            font-weight: bold;
            color: #00e676;
            display: inline-block;
            padding: 4px 16px;
            background: rgba(0, 230, 118, 0.08);
            border-radius: 20px;
            border: 1px solid rgba(0, 230, 118, 0.15);
        }

        .choice-card .arrow-hint {
            display: inline-block;
            margin-top: 12px;
            font-size: 14px;
            color: #6a6a8a;
            transition: 0.3s;
        }

        .premium-card:hover .arrow-hint {
            color: #ff00cc;
            transform: translateX(5px);
        }

        .basic-card:hover .arrow-hint {
            color: #00b4d8;
            transform: translateX(5px);
        }

        .parking-section {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 20px;
            margin-top: 20px;
        }

        .map-container {
            position: relative;
            width: 100%;
            max-width: 550px;
            height: auto;
            min-height: 700px;
            background: rgba(200, 210, 230, 0.5);
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin: 0 auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .parking-spot {
            position: absolute;
            width: 65px;
            height: 45px;
            border: 2px solid #333;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: bold;
            transition: 0.2s;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .parking-spot:hover { transform: scale(1.02); }
        .parking-spot.selected { border: 3px solid #ff00cc; box-shadow: 0 0 15px #ff00cc; }

        .parking-spot.available { 
            background-color: #2ecc71; 
            color: white; 
            border-color: #27ae60; 
            cursor: pointer;
        }
        
        .parking-spot.pending { 
            background-color: #f1c40f; 
            color: #333; 
            border-color: #d4ac0d; 
            cursor: not-allowed;
        }
        
        .parking-spot.occupied { 
            background-color: #e74c3c; 
            color: white; 
            border-color: #c0392b; 
            cursor: not-allowed;
        }

        #spot1 { top: 80px; left: 80px; }
        #spot2 { top: 180px; left: 80px; }
        #spot3 { top: 230px; left: 80px; }
        #spot4 { top: 340px; left: 80px; }
        #spot5 { top: 480px; left: 50px; width: 45px; height: 60px; }
        #spot6 { top: 480px; left: 5px; width: 45px; height: 60px; }
        #spot7 { top: 570px; left: 60px; width: 45px; height: 70px; transform: rotate(25deg); }

        .right-column {
            position: absolute;
            right: 40px;
            top: 50px;
        }
        .right-column .parking-spot {
            position: relative;
            width: 60px;
            height: 40px;
            margin-bottom: 8px;
        }
        .right-column .parking-spot:last-child { margin-bottom: 0; }

        #spot8, #spot9, #spot10, #spot11, #spot12, #spot13, #spot14, #spot15 {
            position: relative;
        }

        .booking-info {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
        }

        .booking-info h4 {
            color: #1a1a2e;
            margin-bottom: 15px;
        }
        .booking-info p {
            color: #4a4a6a;
            margin: 5px 0;
            font-size: 14px;
        }

        .basic-info {
            text-align: center;
            padding: 40px;
        }

        .basic-info h3 {
            color: #00b4d8;
            margin-bottom: 20px;
        }

        .btn-book-basic {
            background: linear-gradient(135deg, #00b4d8, #00f5ff);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0, 180, 216, 0.3);
        }

        .btn-book-basic:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 180, 216, 0.4);
        }

        .btn-book-basic:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #6a6a8a;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #00f5ff;
        }

        .note {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #6a6a8a;
        }

        /* ===== MODAL PAYMENT ===== */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 20px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.15);
        }

        .modal-content h3 {
            color: #1a1a2e;
            margin-bottom: 20px;
        }

        .modal-content p {
            color: #4a4a6a;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .modal-content .plate-display {
            background: rgba(255, 0, 204, 0.08);
            padding: 12px;
            border-radius: 10px;
            margin: 15px 0;
            border: 1px solid rgba(255, 0, 204, 0.2);
        }

        .modal-content .plate-display strong {
            color: #ff00cc;
            font-size: 18px;
        }

        .modal-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .modal-buttons button {
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-confirm {
            background: linear-gradient(135deg, #ff00cc, #00f5ff);
            color: white;
        }

        .btn-cancel {
            background: rgba(255, 23, 68, 0.1);
            color: #ff1744;
        }

        .pay-btn {
            background: linear-gradient(135deg, #00e676, #00f5ff);
            color: #1a1a2e;
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: 0.3s;
        }

        .pay-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 0 30px rgba(0, 230, 118, 0.3);
        }

        /* Scrollbar styling */
        .sidebar::-webkit-scrollbar,
        .main-content::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar::-webkit-scrollbar-track,
        .main-content::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar::-webkit-scrollbar-thumb,
        .main-content::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.2);
            border-radius: 10px;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .dashboard-wrapper {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                min-width: unset;
                height: auto;
                position: relative;
                top: 0;
                border-right: none;
                border-bottom: 1px solid rgba(0, 245, 255, 0.1);
                padding: 15px;
            }
            .main-content {
                padding: 15px;
                max-height: none;
            }
            .choice-card {
                min-width: 150px;
                max-width: 100%;
                flex: 1 1 100%;
            }
            .sidebar .info-item {
                padding: 8px 0;
            }
            .sidebar .profile-icon .avatar {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }
            .parking-type-section {
                padding: 20px 15px;
            }
            .parking-type-section .section-header {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .topbar .brand {
                font-size: 14px;
            }
            .main-content {
                padding: 10px;
            }
            .welcome-card h2 {
                font-size: 18px;
            }
            .no-booking-state .icon {
                font-size: 36px;
            }
            .choice-card {
                padding: 20px 15px;
            }
            .choice-icon {
                font-size: 36px;
            }
            .choice-title {
                font-size: 17px;
            }
            .choice-price {
                font-size: 16px;
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
    <a href="#" class="logout-link" onclick="logout()">🚪 Logout</a>
</div>

<!-- ===== WRAPPER WITH SIDEBAR ===== -->
<div class="dashboard-wrapper">
    
    <!-- LEFT SIDEBAR - Personal Information -->
    <div class="sidebar" id="sidebar">
        <div class="profile-icon">
            <div class="avatar" id="avatarInitial">👤</div>
            <div class="profile-name" id="sidebarName">Student Name</div>
            <div class="profile-role">🎓 Student</div>
        </div>
        
        <hr class="info-divider">
        
        <div class="info-item">
            <span class="label">📚 Matric No</span>
            <span class="value highlight" id="sidebarMatric">-</span>
        </div>
        
        <!-- ===== PROGRAM (GANTI COURSE) ===== -->
        <div class="info-item">
            <span class="label">📖 Program</span>
            <span class="value" id="sidebarProgram">-</span>
        </div>
        
        <div class="info-item">
            <span class="label">📅 Semester</span>
            <span class="value" id="sidebarSemester">-</span>
        </div>
        <div class="info-item">
            <span class="label">📱 Phone</span>
            <span class="value" id="sidebarPhone">-</span>
        </div>
        <div class="info-item">
            <span class="label">🆔 IC No</span>
            <span class="value" id="sidebarIC">-</span>
        </div>
        
        <!-- ===== VEHICLE DETAILS ===== -->
        <div class="info-item" style="border-bottom: none;">
            <span class="label">🚗 Plate No</span>
            <span class="value plate" id="sidebarPlate">Not set</span>
        </div>
        
        <div class="info-item" style="border-bottom: none;">
            <span class="label">🚙 Vehicle Type</span>
            <span class="value vehicle" id="sidebarVehicleType">-</span>
        </div>
        
        <div class="info-item" style="border-bottom: none;">
            <span class="label">🎨 Vehicle Color</span>
            <span class="value vehicle" id="sidebarVehicleColor">-</span>
        </div>
        
        <hr class="info-divider">
        
        <div class="info-item" style="border-bottom: none;">
            <span class="label">📌 Booking Status</span>
            <span class="value" id="sidebarBookingStatus" style="color: #6a6a8a;">No Booking</span>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- Welcome Card -->
        <div class="welcome-card">
            <h2>Welcome, <span id="studentName"></span>! 👋</h2>
            <p>Manage your parking booking here.</p>
            <div class="plate-display">🚗 Your Plate Number: <strong id="welcomePlate"></strong></div>
        </div>

        <!-- ===== CURRENT BOOKING CARD ===== -->
        <div class="current-booking-card" id="currentBookingCard">
            <h4>📌 Current Booking</h4>
            
            <!-- ADA BOOKING -->
            <div id="bookingDetailsContainer">
                <div class="booking-details">
                    <p><span style="color: #00b4d8;">🅿️ Booked Lot:</span> <strong id="bookedSlot" style="color: #ff00cc; font-size: 18px;"></strong></p>
                    <p><span style="color: #00b4d8;">📅 Booking Time:</span> <span id="bookingTime"></span></p>
                    <p><span style="color: #00b4d8;">⏳ Status:</span> <span id="bookingStatusDetail" style="color: #f9a825;"></span></p>
                    <div id="payButtonContainer"></div>
                </div>
            </div>
            
            <!-- TIADA BOOKING -->
            <div id="noBookingState" class="no-booking-state" style="display: none;">
                <span class="icon">📭</span>
                <h3>No Active Booking</h3>
                <p>You don't have any active parking booking at the moment.</p>
                <button class="btn-book-now" onclick="scrollToBooking()">📅 Book Now</button>
            </div>
        </div>

        <!-- ===== PARKING TYPE SECTION ===== -->
        <div class="parking-type-section" id="choiceSection">
            <div class="section-header">
                <h3>🎫 Choose Parking Type</h3>
            </div>
            
            <div class="choice-container">
                <!-- PREMIUM CARD -->
                <div class="choice-card premium-card" onclick="selectParkingType('premium')">
                    <span class="card-badge">⭐ FIXED</span>
                    <div class="choice-icon">⭐</div>
                    <div class="choice-title premium-title">Premium Parking</div>
                    <div class="choice-desc">Reserved parking lot<br>No sharing, fixed spot</div>
                    <div class="choice-price">RM 50 / Semester</div>
                    <span class="arrow-hint">Select →</span>
                </div>

                <!-- BASIC CARD -->
                <div class="choice-card basic-card" onclick="selectParkingType('basic')">
                    <span class="card-badge">🅿️ FIRST COME</span>
                    <div class="choice-icon">🅿️</div>
                    <div class="choice-title basic-title">Basic Parking</div>
                    <div class="choice-desc">First come, first serve<br>Random parking spot</div>
                    <div class="choice-price">RM 30 / Semester</div>
                    <span class="arrow-hint">Select →</span>
                </div>
            </div>
        </div>

        <!-- PREMIUM SECTION -->
        <div id="premiumSection" style="display: none;">
            <a class="back-link" onclick="backToChoice()">← Back to Parking Type Selection</a>
            <h3 class="section-title">⭐ Premium Parking - Select Your Lot</h3>
            <p style="color:#6a6a8a; margin-bottom:15px;">
                🟢 Green = Available | 🟡 Yellow = Pending/Approved | 🔴 Red = Paid/Occupied
            </p>
            
            <div class="parking-section">
                <div class="map-container">
                    <div class="parking-spot available" id="spot1">1</div>
                    <div class="parking-spot available" id="spot2">2</div>
                    <div class="parking-spot available" id="spot3">3</div>
                    <div class="parking-spot available" id="spot4">4</div>
                    <div class="parking-spot available" id="spot5">5</div>
                    <div class="parking-spot available" id="spot6">6</div>
                    <div class="parking-spot available" id="spot7">7</div>
                    <div class="right-column">
                        <div class="parking-spot available" id="spot15">15</div>
                        <div class="parking-spot available" id="spot14">14</div>
                        <div class="parking-spot available" id="spot13">13</div>
                        <div class="parking-spot available" id="spot12">12</div>
                        <div class="parking-spot available" id="spot11">11</div>
                        <div class="parking-spot available" id="spot10">10</div>
                        <div class="parking-spot available" id="spot9">9</div>
                        <div class="parking-spot available" id="spot8">8</div>
                    </div>
                </div>
            </div>
            <div class="note">📍 Premium parking lots (1-15) - Reserved spot with no sharing</div>
        </div>

        <!-- BASIC SECTION -->
        <div id="basicSection" style="display: none;">
            <a class="back-link" onclick="backToChoice()">← Back to Parking Type Selection</a>
            <div class="basic-info glass">
                <h3>🅿️ Basic Parking (First Come, First Serve)</h3>
                <p style="margin-bottom: 20px;">No specific lot booking required.<br>Just park at any available basic parking zone.</p>
                <p style="color: #00e676; margin-bottom: 20px;">✅ Available basic lots: <span id="basicAvailableCount">55</span> / 55</p>
                <button class="btn-book-basic" onclick="bookBasicParking()">Book Basic Parking →</button>
                <p style="margin-top: 20px; font-size: 12px; color: #6a6a8a;">* First come, first serve basis. No fixed lot assigned.</p>
            </div>
        </div>

        <!-- Booking Info -->
        <div class="booking-info">
            <h4>📌 How to Book:</h4>
            <p><span style="color:#ff00cc;">⭐ Premium:</span> RM50/semester - Select your preferred fixed parking lot from the map.</p>
            <p><span style="color:#00b4d8;">🅿️ Basic:</span> RM30/semester - First come, first serve - park at any available basic zone.</p>
            <p>2. Your request will become <span style="color:#f9a825;">YELLOW (Pending)</span> and wait for staff approval.</p>
            <p>3. After approval, click <span style="color:#00e676;">PAY NOW</span> to complete booking.</p>
            <p>4. Once payment is successful, your booking is confirmed.</p>
        </div>
    </div>
</div>

<!-- ===== MODAL PAYMENT ===== -->
<div id="paymentModal" class="modal">
    <div class="modal-content">
        <h3>💳 Make Payment</h3>
        <p id="paymentAmount" style="color: #00e676; font-size: 24px; margin-bottom: 5px;">RM 0</p>
        <p style="font-size: 12px; color: #6a6a8a; margin-top: -5px; margin-bottom: 15px;">* Payment for one semester</p>
        
        <div class="plate-display">
            🚗 Plate Number: <strong id="paymentPlate">-</strong>
        </div>
        
        <p style="text-align: center; margin: 15px 0;">Click "Confirm Payment" to complete booking.</p>
        
        <button class="pay-btn" onclick="processDummyPayment()">✅ Confirm Payment</button>
        <button class="btn-cancel" onclick="closePaymentModal()" style="margin-top: 10px; padding: 10px 25px; border-radius: 10px; border: none; cursor: pointer; font-weight: bold; background: rgba(255, 23, 68, 0.1); color: #ff1744;">Cancel</button>
    </div>
</div>

<script>
// ============================================================
// VARIABLES GLOBAL
// ============================================================
let loggedInStudent = null;
let selectedParkingType = null;
let premiumSlots = [];
let currentBookingForPayment = null;
let isBookingInProgress = false;

// ============================================================
// STORAGE KEYS
// ============================================================
function getPremiumBookingKey() {
    return 'myPremiumBooking_' + loggedInStudent.id;
}

function getBasicBookingKey() {
    return 'myBasicBooking_' + loggedInStudent.id;
}

// ============================================================
// MENU FUNCTIONS
// ============================================================
function toggleMenu(){
    var menu = document.getElementById("menu");
    var overlay = document.getElementById("overlay");
    menu.classList.toggle("active");
    overlay.classList.toggle("active");
}

function logout() {
    sessionStorage.removeItem('loggedInStudent');
    window.location.href = 'index.php';
}

function backToChoice() {
    document.getElementById('choiceSection').style.display = 'block';
    document.getElementById('premiumSection').style.display = 'none';
    document.getElementById('basicSection').style.display = 'none';
    selectedParkingType = null;
}

function selectParkingType(type) {
    selectedParkingType = type;
    document.getElementById('choiceSection').style.display = 'none';
    
    if(type === 'premium') {
        document.getElementById('premiumSection').style.display = 'block';
        loadPremiumSlots();
        attachPremiumSlotEvents();
    } else if(type === 'basic') {
        document.getElementById('basicSection').style.display = 'block';
        updateBasicAvailableCount();
    }
}

function scrollToBooking() {
    document.getElementById('choiceSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// ============================================================
// LOAD STUDENT DATA
// ============================================================
loggedInStudent = JSON.parse(sessionStorage.getItem('loggedInStudent'));
if(!loggedInStudent) {
    window.location.href = 'student_login.php';
}

// Update Welcome Card
document.getElementById('studentName').innerText = loggedInStudent.name;
document.getElementById('welcomePlate').innerText = loggedInStudent.plate_no || 'Not set';

// Update Sidebar
document.getElementById('sidebarName').innerText = loggedInStudent.name;
document.getElementById('sidebarMatric').innerText = loggedInStudent.matric_no || '-';
document.getElementById('sidebarProgram').innerText = loggedInStudent.program || loggedInStudent.course || '-';
document.getElementById('sidebarSemester').innerText = loggedInStudent.semester || '-';
document.getElementById('sidebarPhone').innerText = loggedInStudent.phone_no || '-';
document.getElementById('sidebarIC').innerText = loggedInStudent.ic_no || '-';
document.getElementById('sidebarPlate').innerText = loggedInStudent.plate_no || 'Not set';
document.getElementById('sidebarVehicleType').innerText = loggedInStudent.vehicle_type || '-';
document.getElementById('sidebarVehicleColor').innerText = loggedInStudent.vehicle_color || '-';

// Avatar initial
let initial = loggedInStudent.name.charAt(0).toUpperCase();
document.getElementById('avatarInitial').innerHTML = initial;

// ============================================================
// UPDATE AVAILABLE COUNT
// ============================================================
function updateTotalAvailableCount() {
    let premiumSlotsData = JSON.parse(localStorage.getItem('premiumSlots')) || [];
    let premiumOccupied = premiumSlotsData.filter(s => 
        s.status === 'pending' || s.status === 'occupied' || s.status === 'paid'
    ).length;
    
    let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
    let basicOccupied = allBasicBookings.filter(b => 
        b.status === 'pending' || b.status === 'approved' || b.status === 'paid'
    ).length;
    
    let basicAvailEl = document.getElementById('basicAvailableCount');
    if(basicAvailEl) {
        basicAvailEl.innerText = Math.max(0, 55 - basicOccupied);
    }
}

// ============================================================
// GET ACTIVE BOOKING
// ============================================================
function getActiveBooking() {
    let premiumKey = getPremiumBookingKey();
    let myPremiumBooking = JSON.parse(localStorage.getItem(premiumKey));
    
    let basicKey = getBasicBookingKey();
    let myBasicBooking = JSON.parse(localStorage.getItem(basicKey));
    
    if(myPremiumBooking && myPremiumBooking.status !== 'cancelled') {
        return myPremiumBooking;
    }
    if(myBasicBooking && myBasicBooking.status !== 'cancelled') {
        return myBasicBooking;
    }
    return null;
}

// ============================================================
// REFRESH BOOKING DISPLAY
// ============================================================
function refreshBookingDisplay() {
    let booking = getActiveBooking();
    let sidebarStatusElement = document.getElementById('sidebarBookingStatus');
    let bookingDetailsContainer = document.getElementById('bookingDetailsContainer');
    let noBookingState = document.getElementById('noBookingState');
    let payContainer = document.getElementById('payButtonContainer');
    
    if(booking) {
        bookingDetailsContainer.style.display = 'block';
        noBookingState.style.display = 'none';
        
        if(booking.type === 'premium') {
            document.getElementById('bookedSlot').innerHTML = 'Premium Lot ' + booking.slotId;
        } else {
            document.getElementById('bookedSlot').innerHTML = 'Basic Parking (Random Lot)';
        }
        
        document.getElementById('bookingTime').innerText = new Date(booking.bookingTime).toLocaleString();
        
        let statusDetail = document.getElementById('bookingStatusDetail');
        payContainer.innerHTML = '';
        
        if(booking.status === 'pending') {
            statusDetail.innerHTML = '🟡 Pending (Waiting for Staff Approval)';
            statusDetail.style.color = '#f9a825';
            sidebarStatusElement.innerHTML = '🟡 Pending';
            sidebarStatusElement.style.color = '#f9a825';
        } 
        else if(booking.status === 'approved') {
            statusDetail.innerHTML = '🟢 Approved - Payment Required';
            statusDetail.style.color = '#00e676';
            sidebarStatusElement.innerHTML = '🟢 Approved';
            sidebarStatusElement.style.color = '#00e676';
            
            let amount = booking.type === 'premium' ? '50.00' : '30.00';
            payContainer.innerHTML = `
                <button onclick="openPaymentForBooking()" 
                    style="background: linear-gradient(135deg, #00e676, #00f5ff); 
                           color: #1a1a2e; 
                           padding: 14px 20px; 
                           border: none; 
                           border-radius: 10px; 
                           cursor: pointer; 
                           font-weight: bold; 
                           width: 100%; 
                           margin-top: 10px;
                           font-size: 16px;
                           transition: 0.3s;
                           box-shadow: 0 0 15px rgba(0, 230, 118, 0.3);">
                    💳 PAY NOW (RM ${amount})
                </button>
            `;
        } 
        else if(booking.status === 'paid') {
            statusDetail.innerHTML = '✅ Paid - Booking Confirmed';
            statusDetail.style.color = '#00e676';
            sidebarStatusElement.innerHTML = '✅ Confirmed';
            sidebarStatusElement.style.color = '#00e676';
        }
        
    } else {
        bookingDetailsContainer.style.display = 'none';
        noBookingState.style.display = 'block';
        sidebarStatusElement.innerHTML = 'No Booking';
        sidebarStatusElement.style.color = '#6a6a8a';
    }
}

// ============================================================
// PAYMENT FUNCTIONS
// ============================================================
function openPaymentForBooking() {
    let booking = getActiveBooking();
    
    if(booking && booking.status === 'approved') {
        currentBookingForPayment = booking;
        let amount = booking.type === 'premium' ? 'RM 50.00' : 'RM 30.00';
        document.getElementById('paymentAmount').innerHTML = amount;
        document.getElementById('paymentPlate').innerHTML = loggedInStudent.plate_no || 'Not set';
        document.getElementById('paymentModal').classList.add('active');
    } else {
        alert('No approved booking found for payment.');
    }
}

function closePaymentModal() {
    document.getElementById('paymentModal').classList.remove('active');
    currentBookingForPayment = null;
}

function processDummyPayment() {
    let booking = getActiveBooking();
    
    if(!booking || booking.status !== 'approved') {
        alert('No approved booking found for payment.');
        closePaymentModal();
        return;
    }
    
    if(booking.type === 'premium') {
        let premiumSlotsData = JSON.parse(localStorage.getItem('premiumSlots')) || [];
        let slot = premiumSlotsData.find(s => s.id == booking.slotId);
        if(slot) {
            slot.status = 'paid';
            localStorage.setItem('premiumSlots', JSON.stringify(premiumSlotsData));
        }
        
        booking.status = 'paid';
        let premiumKey = getPremiumBookingKey();
        localStorage.setItem(premiumKey, JSON.stringify(booking));
        
    } else if(booking.type === 'basic') {
        let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
        let index = allBasicBookings.findIndex(b => b.studentId === booking.studentId && b.status !== 'cancelled');
        if(index !== -1) {
            allBasicBookings[index].status = 'paid';
            localStorage.setItem('allBasicBookings', JSON.stringify(allBasicBookings));
        }
        
        booking.status = 'paid';
        let basicKey = getBasicBookingKey();
        localStorage.setItem(basicKey, JSON.stringify(booking));
    }
    
    closePaymentModal();
    
    loadPremiumSlots();
    attachPremiumSlotEvents();
    refreshBookingDisplay();
    updateBasicAvailableCount();
    
    alert('✅ Payment successful!\n\nYour parking lot has been confirmed for the semester.');
}

// ============================================================
// PREMIUM PARKING FUNCTIONS
// ============================================================
function initPremiumSlots() {
    let saved = localStorage.getItem('premiumSlots');
    
    if(saved && saved !== 'null' && saved !== 'undefined') {
        try {
            premiumSlots = JSON.parse(saved);
            for(let i = 1; i <= 15; i++) {
                if(!premiumSlots.find(s => s.id === i)) {
                    premiumSlots.push({ id: i, status: 'available' });
                }
            }
            localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
        } catch(e) {
            premiumSlots = [];
            for(let i = 1; i <= 15; i++) {
                premiumSlots.push({ id: i, status: 'available' });
            }
            localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
        }
    } else {
        premiumSlots = [];
        for(let i = 1; i <= 15; i++) {
            premiumSlots.push({ id: i, status: 'available' });
        }
        localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
    }
}

function loadPremiumSlots() {
    let saved = localStorage.getItem('premiumSlots');
    if(!saved || saved === 'null' || saved === 'undefined') {
        initPremiumSlots();
        saved = localStorage.getItem('premiumSlots');
    }
    
    try {
        premiumSlots = JSON.parse(saved);
    } catch(e) {
        initPremiumSlots();
        premiumSlots = JSON.parse(localStorage.getItem('premiumSlots'));
    }
    
    for(let i = 1; i <= 15; i++) {
        if(!premiumSlots.find(s => s.id === i)) {
            premiumSlots.push({ id: i, status: 'available' });
        }
    }
    localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
    
    let premiumKey = getPremiumBookingKey();
    let myPremiumBooking = JSON.parse(localStorage.getItem(premiumKey));
    
    for(let i = 1; i <= 15; i++) {
        let slotElement = document.getElementById('spot' + i);
        if(slotElement) {
            let slot = premiumSlots.find(s => s.id === i);
            if(slot) {
                slotElement.classList.remove('available', 'pending', 'occupied');
                
                let isMyBooking = myPremiumBooking && myPremiumBooking.slotId == i && 
                                 (myPremiumBooking.status === 'pending' || myPremiumBooking.status === 'approved');
                
                let isPaidOrOccupied = slot.status === 'paid' || slot.status === 'occupied';
                let isPendingByOthers = (slot.status === 'pending' || slot.status === 'approved') && !isMyBooking;
                
                if(isMyBooking) {
                    slotElement.classList.add('pending');
                    slotElement.style.cursor = 'not-allowed';
                }
                else if(isPaidOrOccupied) {
                    slotElement.classList.add('occupied');
                    slotElement.style.cursor = 'not-allowed';
                }
                else if(isPendingByOthers) {
                    slotElement.classList.add('pending');
                    slotElement.style.cursor = 'not-allowed';
                }
                else {
                    slotElement.classList.add('available');
                    slotElement.style.cursor = 'pointer';
                }
                
                slotElement.innerText = i;
            }
        }
    }
    updateTotalAvailableCount();
}

function attachPremiumSlotEvents() {
    for(let i = 1; i <= 15; i++) {
        let slotElement = document.getElementById('spot' + i);
        if(slotElement) {
            let newSlot = slotElement.cloneNode(true);
            slotElement.parentNode.replaceChild(newSlot, slotElement);
            newSlot.id = 'spot' + i;
            
            let slot = premiumSlots.find(s => s.id === i);
            
            if(slot && slot.status === 'available') {
                newSlot.onclick = (function(spotId) {
                    return function() { bookPremiumSlot(spotId); };
                })(i);
            } else {
                newSlot.onclick = null;
            }
            document.getElementById('spot' + i).innerText = i;
        }
    }
}

function bookPremiumSlot(spotId) {
    if(isBookingInProgress) {
        return;
    }
    
    let existingBooking = getActiveBooking();
    if(existingBooking) {
        alert('You already have a booking! Please wait for approval or cancellation.');
        return;
    }
    
    let currentSlots = JSON.parse(localStorage.getItem('premiumSlots'));
    if(!currentSlots) {
        alert('Parking data not found. Please refresh the page.');
        return;
    }
    
    let slot = currentSlots.find(s => s.id === spotId);
    if(!slot) {
        alert('Lot ' + spotId + ' not found. Please refresh and try again.');
        return;
    }
    
    if(slot.status !== 'available') {
        alert('This lot is not available for booking.\n\nStatus: ' + slot.status.toUpperCase());
        return;
    }
    
    let plateNo = loggedInStudent.plate_no || 'Not set';
    
    let confirm = window.confirm('Book Premium Lot ' + spotId + ' for RM50/semester?\n\nVehicle Plate: ' + plateNo);
    if(confirm) {
        proceedWithBooking(spotId);
    }
}

function proceedWithBooking(spotId) {
    if(isBookingInProgress) {
        return;
    }
    isBookingInProgress = true;
    
    try {
        let currentSlots = JSON.parse(localStorage.getItem('premiumSlots'));
        
        if(!currentSlots || currentSlots.length === 0) {
            alert('Parking data not found. Please refresh the page.');
            isBookingInProgress = false;
            return;
        }
        
        let slot = currentSlots.find(s => s.id === spotId);
        if(!slot) {
            alert('Lot ' + spotId + ' not found. Please refresh and try again.');
            isBookingInProgress = false;
            return;
        }
        
        if(slot.status !== 'available') {
            alert('This lot is not available for booking.\n\nStatus: ' + slot.status.toUpperCase());
            isBookingInProgress = false;
            return;
        }
        
        let existingBooking = getActiveBooking();
        if(existingBooking) {
            alert('You already have a booking! Please wait for approval or cancellation.');
            isBookingInProgress = false;
            return;
        }
        
        slot.status = 'pending';
        slot.bookedBy = loggedInStudent.id;
        slot.bookedByName = loggedInStudent.name;
        slot.studentIC = loggedInStudent.ic_no;
        slot.studentMatric = loggedInStudent.matric_no;
        slot.studentProgram = loggedInStudent.program || loggedInStudent.course;
        slot.studentSemester = loggedInStudent.semester;
        slot.studentPhone = loggedInStudent.phone_no;
        slot.plateNo = loggedInStudent.plate_no || 'Not set';
        slot.vehicleType = loggedInStudent.vehicle_type || '';
        slot.vehicleColor = loggedInStudent.vehicle_color || '';
        slot.bookingTime = new Date().toISOString();
        
        localStorage.setItem('premiumSlots', JSON.stringify(currentSlots));
        
        let booking = {
            studentId: loggedInStudent.id,
            studentName: loggedInStudent.name,
            studentIC: loggedInStudent.ic_no,
            studentMatric: loggedInStudent.matric_no,
            studentProgram: loggedInStudent.program || loggedInStudent.course,
            studentSemester: loggedInStudent.semester,
            studentPhone: loggedInStudent.phone_no,
            plateNo: loggedInStudent.plate_no || 'Not set',
            vehicleType: loggedInStudent.vehicle_type || '',
            vehicleColor: loggedInStudent.vehicle_color || '',
            slotId: spotId,
            type: 'premium',
            status: 'pending',
            bookingTime: new Date().toISOString()
        };
        
        let premiumKey = getPremiumBookingKey();
        localStorage.setItem(premiumKey, JSON.stringify(booking));
        
        premiumSlots = currentSlots;
        
        loadPremiumSlots();
        attachPremiumSlotEvents();
        refreshBookingDisplay();
        
        alert('✅ Premium Lot ' + spotId + ' booked for RM50/semester!\n\nStatus: PENDING (Yellow)\nWaiting for staff approval.');
    } catch(e) {
        alert('An error occurred: ' + e.message);
    }
    
    isBookingInProgress = false;
}

// ============================================================
// BASIC PARKING FUNCTIONS
// ============================================================
function bookBasicParking() {
    let existingBooking = getActiveBooking();
    
    if(existingBooking) {
        alert('You already have a booking! Please wait for approval or cancellation.');
        return;
    }
    
    let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
    let activeBasic = allBasicBookings.filter(b => b.status === 'pending' || b.status === 'approved' || b.status === 'paid').length;
    let available = 55 - activeBasic;
    
    if(available <= 0) {
        alert('No basic parking lots available! Please try premium parking.');
        return;
    }
    
    let plateNo = loggedInStudent.plate_no || 'Not set';
    
    let confirm = window.confirm('Book Basic Parking for RM30/semester?\n(First come, first serve basis)\n\nVehicle Plate: ' + plateNo);
    if(confirm) {
        let booking = {
            studentId: loggedInStudent.id,
            studentName: loggedInStudent.name,
            studentIC: loggedInStudent.ic_no,
            studentMatric: loggedInStudent.matric_no,
            studentProgram: loggedInStudent.program || loggedInStudent.course,
            studentSemester: loggedInStudent.semester,
            studentPhone: loggedInStudent.phone_no,
            plateNo: loggedInStudent.plate_no || 'Not set',
            vehicleType: loggedInStudent.vehicle_type || '',
            vehicleColor: loggedInStudent.vehicle_color || '',
            type: 'basic',
            status: 'pending',
            bookingTime: new Date().toISOString()
        };
        
        allBasicBookings.push(booking);
        localStorage.setItem('allBasicBookings', JSON.stringify(allBasicBookings));
        
        let basicKey = getBasicBookingKey();
        localStorage.setItem(basicKey, JSON.stringify(booking));
        
        updateBasicAvailableCount();
        refreshBookingDisplay();
        
        alert('✅ Basic Parking booked for RM30/semester!\n\nStatus: PENDING - Waiting for staff approval.');
    }
}

function updateBasicAvailableCount() {
    let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
    let activeBasic = allBasicBookings.filter(b => b.status === 'pending' || b.status === 'approved' || b.status === 'paid').length;
    let available = 55 - activeBasic;
    document.getElementById('basicAvailableCount').innerText = available >= 0 ? available : 0;
    updateTotalAvailableCount();
    
    let btn = document.querySelector('.btn-book-basic');
    if(btn) {
        if(available <= 0) {
            btn.disabled = true;
            btn.style.opacity = '0.5';
            btn.innerText = 'Full - No Basic Lots Available';
        } else {
            btn.disabled = false;
            btn.style.opacity = '1';
            btn.innerText = 'Book Basic Parking →';
        }
    }
}

// ============================================================
// FORCE REFRESH
// ============================================================
function forceRefreshDashboard() {
    refreshBookingDisplay();
    loadPremiumSlots();
    updateTotalAvailableCount();
    updateBasicAvailableCount();
}

// ============================================================
// INITIALIZATION
// ============================================================
(function init() {
    let premiumKey = getPremiumBookingKey();
    let basicKey = getBasicBookingKey();
    
    let myPremium = JSON.parse(localStorage.getItem(premiumKey));
    let myBasic = JSON.parse(localStorage.getItem(basicKey));
    
    let isFresh = sessionStorage.getItem('freshLogin') !== 'false';
    
    if(isFresh) {
        if(myPremium && myPremium.status !== 'paid') {
            let allPremium = JSON.parse(localStorage.getItem('premiumSlots')) || [];
            allPremium = allPremium.map(slot => {
                if(slot.id === myPremium.slotId && slot.bookedBy === loggedInStudent.id) {
                    return { id: slot.id, status: 'available' };
                }
                return slot;
            });
            localStorage.setItem('premiumSlots', JSON.stringify(allPremium));
            localStorage.removeItem(premiumKey);
        }
        
        if(myBasic && myBasic.status !== 'paid') {
            let allBasic = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
            allBasic = allBasic.filter(b => b.studentId !== loggedInStudent.id);
            localStorage.setItem('allBasicBookings', JSON.stringify(allBasic));
            localStorage.removeItem(basicKey);
        }
        
        sessionStorage.setItem('freshLogin', 'false');
    }
    
    initPremiumSlots();
    refreshBookingDisplay();
    loadPremiumSlots();
    updateBasicAvailableCount();
    updateTotalAvailableCount();
})();

// ============================================================
// AUTO REFRESH
// ============================================================
setInterval(function() {
    refreshBookingDisplay();
    loadPremiumSlots();
    updateTotalAvailableCount();
}, 3000);

setInterval(function() {
    forceRefreshDashboard();
}, 10000);
</script>

</body>
</html>