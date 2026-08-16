<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Dashboard - TVET Parking System</title>
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

        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .glass {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .welcome-title {
            font-size: 24px;
            color: #1a237e;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .section-title {
            font-size: 18px;
            color: #1a237e;
            margin: 25px 0 15px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 10px;
        }

        .info-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            transition: 0.3s;
        }

        .info-item:hover {
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border-color: #1a237e;
        }

        .info-item label {
            color: #1a237e;
            font-size: 11px;
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-item p {
            font-size: 15px;
            font-weight: 500;
            color: #333;
        }

        .info-item .empty-value {
            color: #999;
            font-style: italic;
            font-weight: normal;
        }

        .vehicle-section {
            background: #f0f7ff;
            border-radius: 12px;
            padding: 20px;
            margin-top: 10px;
            border: 1px solid #d4e4ff;
        }

        .vehicle-section .vehicle-title {
            font-size: 14px;
            font-weight: bold;
            color: #1a237e;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .vehicle-section .vehicle-title span {
            font-size: 20px;
        }

        .vehicle-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
        }

        .vehicle-item {
            background: white;
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
        }

        .vehicle-item label {
            color: #1a237e;
            font-size: 11px;
            display: block;
            margin-bottom: 3px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .vehicle-item p {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .btn-logout {
            padding: 10px 25px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #d32f2f, #c62828);
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-logout:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(211, 47, 47, 0.3);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .action-btn {
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            flex: 1;
            min-width: 120px;
        }

        .action-btn:hover {
            transform: translateY(-2px);
        }

        .action-btn.primary {
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
        }

        .action-btn.primary:hover {
            box-shadow: 0 5px 20px rgba(26, 35, 126, 0.3);
        }

        .action-btn.warning {
            background: linear-gradient(135deg, #e65100, #f57c00);
            color: white;
        }

        .action-btn.warning:hover {
            box-shadow: 0 5px 20px rgba(230, 81, 0, 0.3);
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: #e8f5e9;
            color: #2e7d32;
        }

        .program-tag {
            display: inline-block;
            padding: 4px 14px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 600;
            background: #e8eaf6;
            color: #1a237e;
        }

        /* Update Vehicle Modal */
        .update-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .update-modal.active {
            display: flex;
        }

        .update-modal-content {
            background: white;
            border-radius: 20px;
            padding: 35px;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .update-modal-content h2 {
            color: #1a237e;
            margin-bottom: 10px;
            text-align: center;
        }

        .update-modal-content .modal-subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .update-modal-content .input-group {
            margin-bottom: 18px;
        }

        .update-modal-content .input-group label {
            display: block;
            color: #1a237e;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 13px;
        }

        .update-modal-content .input-group input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            font-size: 14px;
            transition: 0.3s;
            box-sizing: border-box;
        }

        .update-modal-content .input-group input:focus {
            outline: none;
            border-color: #1a237e;
        }

        .update-modal-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 25px;
        }

        .update-modal-actions button {
            padding: 12px 30px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
        }

        .btn-save {
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
        }

        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 35, 126, 0.3);
        }

        .btn-cancel {
            background: #e0e0e0;
            color: #333;
        }

        .btn-cancel:hover {
            background: #bdbdbd;
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .vehicle-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-btn {
                width: 100%;
            }

            .update-modal-content {
                padding: 25px;
            }
        }

        @media (max-width: 500px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .vehicle-grid {
                grid-template-columns: 1fr;
            }

            .update-modal-actions {
                flex-direction: column;
            }

            .update-modal-actions button {
                width: 100%;
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
    <a href="student_signup.php">📝 Student Sign Up</a>
    <a href="lecturer_login.php">👨‍🏫 Lecturer Login</a>
    <a href="lecturer_signup.php">📝 Lecturer Sign Up</a>
    <a href="warden_login.php">👮 Warden Login</a>
</div>

<div class="dashboard-container">
    <div class="glass" id="dashboardContent">
        <h2 class="welcome-title">👨‍🏫 Welcome, <span id="lecturerName">Lecturer</span>!</h2>
        <p class="subtitle">📊 Lecturer Dashboard - Personal Information</p>

        <!-- ===== PERSONAL INFORMATION SECTION ===== -->
        <div class="section-title">👤 Personal Information</div>
        <div class="info-grid">
            <div class="info-item">
                <label>📧 Email</label>
                <p id="lecturerEmail">-</p>
            </div>
            <div class="info-item">
                <label>🆔 Staff ID</label>
                <p id="lecturerStaffId">-</p>
            </div>
            <div class="info-item">
                <label>📱 Phone Number</label>
                <p id="lecturerPhone">-</p>
            </div>
            <div class="info-item">
                <label>📖 Program</label>
                <p id="lecturerProgram">-</p>
            </div>
        </div>

        <!-- ===== VEHICLE INFORMATION SECTION ===== -->
        <div class="section-title">🚗 Vehicle Information</div>
        <div class="vehicle-section">
            <div class="vehicle-title">
                <span>🚙</span> Registered Vehicle Details
                <span class="status-badge" id="vehicleStatus">No Vehicle</span>
            </div>
            <div class="vehicle-grid" id="vehicleGrid">
                <div class="vehicle-item">
                    <label>🚗 Plate Number</label>
                    <p id="lecturerPlateNo"><span class="empty-value">Not registered</span></p>
                </div>
                <div class="vehicle-item">
                    <label>🚙 Vehicle Model</label>
                    <p id="lecturerVehicleType"><span class="empty-value">Not registered</span></p>
                </div>
                <div class="vehicle-item">
                    <label>🎨 Vehicle Color</label>
                    <p id="lecturerVehicleColor"><span class="empty-value">Not registered</span></p>
                </div>
            </div>
        </div>

        <!-- ===== ACTION BUTTONS ===== -->
        <div class="section-title">⚡ Quick Actions</div>
        <div class="action-buttons">
            <button class="action-btn primary" onclick="reportIssue()">📋 Report Issue</button>
            <button class="action-btn warning" onclick="openUpdateModal()">🚗 Update Vehicle</button>
        </div>

        <button class="btn-logout" onclick="logout()">🚪 Logout</button>
    </div>
</div>

<!-- ===== UPDATE VEHICLE MODAL ===== -->
<div id="updateModal" class="update-modal">
    <div class="update-modal-content">
        <h2>🚗 Update Vehicle</h2>
        <p class="modal-subtitle">Update your vehicle details below</p>

        <div class="input-group">
            <label>🚗 Plate Number</label>
            <input type="text" id="updatePlate" placeholder="e.g., ABC1234" style="text-transform: uppercase;">
        </div>

        <div class="input-group">
            <label>🚙 Vehicle Model</label>
            <input type="text" id="updateModel" placeholder="e.g., Myvi, Vios, Axia">
        </div>

        <div class="input-group">
            <label>🎨 Vehicle Color</label>
            <input type="text" id="updateColor" placeholder="e.g., White, Red, Black, Silver">
        </div>

        <div class="update-modal-actions">
            <button class="btn-save" onclick="saveVehicleUpdate()">✅ Save Changes</button>
            <button class="btn-cancel" onclick="closeUpdateModal()">❌ Cancel</button>
        </div>
    </div>
</div>

<script>
// ============================================================
// CHECK LOGIN
// ============================================================
let lecturerData = JSON.parse(sessionStorage.getItem('loggedInLecturer'));

if (!lecturerData) {
    window.location.href = 'lecturer_login.php';
} else {
    // Display personal information
    document.getElementById('lecturerName').textContent = lecturerData.name || 'Lecturer';
    document.getElementById('lecturerEmail').textContent = lecturerData.email || '-';
    document.getElementById('lecturerStaffId').textContent = lecturerData.staff_id || '-';
    document.getElementById('lecturerPhone').textContent = lecturerData.phone_no || '-';
    
    // Display Program with badge
    let program = lecturerData.program || '-';
    if (program !== '-') {
        document.getElementById('lecturerProgram').innerHTML = `<span class="program-tag">${program}</span>`;
    } else {
        document.getElementById('lecturerProgram').textContent = '-';
    }

    // Display vehicle information
    let plateNo = lecturerData.plate_no || '';
    let vehicleType = lecturerData.vehicle_type || '';
    let vehicleColor = lecturerData.vehicle_color || '';

    if (plateNo || vehicleType || vehicleColor) {
        document.getElementById('vehicleStatus').textContent = '✅ Registered';
        document.getElementById('vehicleStatus').style.background = '#e8f5e9';
        document.getElementById('vehicleStatus').style.color = '#2e7d32';
        document.getElementById('lecturerPlateNo').textContent = plateNo || '-';
        document.getElementById('lecturerVehicleType').textContent = vehicleType || '-';
        document.getElementById('lecturerVehicleColor').textContent = vehicleColor || '-';
    } else {
        document.getElementById('vehicleStatus').textContent = '⚠️ No Vehicle';
        document.getElementById('vehicleStatus').style.background = '#fff3e0';
        document.getElementById('vehicleStatus').style.color = '#e65100';
    }
}

// ============================================================
// MENU FUNCTIONS
// ============================================================
function toggleMenu() {
    var menu = document.getElementById("menu");
    var overlay = document.getElementById("overlay");
    menu.classList.toggle("active");
    overlay.classList.toggle("active");
}

// ============================================================
// ACTION FUNCTIONS
// ============================================================
function reportIssue() {
    alert('📋 Report Issue\n\nPlease describe your issue below:\n\n1. Parking spot damaged\n2. Unauthorized vehicle\n3. Other concerns\n\nOur team will investigate and resolve it.');
}

// ============================================================
// UPDATE VEHICLE MODAL FUNCTIONS
// ============================================================
function openUpdateModal() {
    // Load current vehicle data into modal
    let currentPlate = document.getElementById('lecturerPlateNo').textContent;
    let currentModel = document.getElementById('lecturerVehicleType').textContent;
    let currentColor = document.getElementById('lecturerVehicleColor').textContent;
    
    // Check if values are empty or placeholder
    if (currentPlate.includes('Not registered') || currentPlate === '-') currentPlate = '';
    if (currentModel.includes('Not registered') || currentModel === '-') currentModel = '';
    if (currentColor.includes('Not registered') || currentColor === '-') currentColor = '';
    
    document.getElementById('updatePlate').value = currentPlate;
    document.getElementById('updateModel').value = currentModel;
    document.getElementById('updateColor').value = currentColor;
    
    document.getElementById('updateModal').classList.add('active');
}

function closeUpdateModal() {
    document.getElementById('updateModal').classList.remove('active');
}

function saveVehicleUpdate() {
    let newPlate = document.getElementById('updatePlate').value.trim().toUpperCase();
    let newModel = document.getElementById('updateModel').value.trim();
    let newColor = document.getElementById('updateColor').value.trim();
    
    // Validation - at least one field must be filled
    if (!newPlate && !newModel && !newColor) {
        alert('⚠️ Please fill in at least one vehicle detail.');
        return;
    }

    // Validation - plate number minimum 3 characters if provided
    if (newPlate && newPlate.length < 3) {
        alert('⚠️ Plate number must be at least 3 characters.');
        return;
    }

    // ============================================================
    // KESELAMATAN: Sahkan lecturer ID sebelum update
    // ============================================================
    let lecturers = JSON.parse(localStorage.getItem('lecturers')) || [];
    
    // Cari lecturer berdasarkan ID yang sedang login
    let index = lecturers.findIndex(l => l.id === lecturerData.id);
    
    if (index === -1) {
        alert('❌ Error: Lecturer data not found. Please login again.');
        return;
    }

    // ============================================================
    // KESELAMATAN: Check jika plate number sudah digunakan oleh orang lain
    // ============================================================
    if (newPlate) {
        let existingLecturer = lecturers.find((l, i) => 
            l.plate_no === newPlate && i !== index
        );
        if (existingLecturer) {
            alert('❌ This plate number "' + newPlate + '" is already registered by another staff.');
            return;
        }
    }

    // ============================================================
    // UPDATE DATA
    // ============================================================
    // Simpan data lama untuk reference
    let oldPlate = lecturers[index].plate_no || 'Not registered';
    let oldModel = lecturers[index].vehicle_type || 'Not registered';
    let oldColor = lecturers[index].vehicle_color || 'Not registered';
    
    // Update lecturer data
    if (newPlate) lecturers[index].plate_no = newPlate;
    if (newModel) lecturers[index].vehicle_type = newModel;
    if (newColor) lecturers[index].vehicle_color = newColor;
    
    // Save back to localStorage
    localStorage.setItem('lecturers', JSON.stringify(lecturers));
    
    // Update sessionStorage
    if (newPlate) lecturerData.plate_no = newPlate;
    if (newModel) lecturerData.vehicle_type = newModel;
    if (newColor) lecturerData.vehicle_color = newColor;
    sessionStorage.setItem('loggedInLecturer', JSON.stringify(lecturerData));
    
    // Close modal
    closeUpdateModal();
    
    // Show success message with changes
    let changes = [];
    if (newPlate && newPlate !== oldPlate) changes.push('Plate: ' + oldPlate + ' → ' + newPlate);
    if (newModel && newModel !== oldModel) changes.push('Model: ' + oldModel + ' → ' + newModel);
    if (newColor && newColor !== oldColor) changes.push('Color: ' + oldColor + ' → ' + newColor);
    
    if (changes.length > 0) {
        alert('✅ Vehicle information updated successfully!\n\n' + changes.join('\n'));
    } else {
        alert('ℹ️ No changes were made to your vehicle information.');
    }
    
    // Refresh the page to show updated data
    location.reload();
}

// ============================================================
// CLOSE MODAL ON CLICK OUTSIDE
// ============================================================
document.getElementById('updateModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeUpdateModal();
    }
});

// ============================================================
// LOGOUT
// ============================================================
function logout() {
    if (confirm('Are you sure you want to logout?')) {
        sessionStorage.removeItem('loggedInLecturer');
        window.location.href = 'lecturer_login.php';
    }
}
</script>

</body>
</html>