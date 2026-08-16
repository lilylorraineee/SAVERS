<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden Dashboard - TVET Parking System</title>
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
            font-size: 18px;
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

        .menu .logout-link {
            color: #d32f2f;
            border-top: 1px solid #ffcdd2;
            margin-top: 20px;
        }

        .menu .logout-link:hover {
            background: #ffebee;
            color: #c62828;
        }

        .dashboard-container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .main-title {
            font-size: 28px;
            margin-bottom: 5px;
            color: #1a237e;
            text-align: center;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
            font-size: 14px;
        }

        /* ===== STATS GRID ===== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 20px 0 30px 0;
        }

        .stat-box {
            background: white;
            padding: 20px 15px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(26, 35, 126, 0.15);
            border-color: #1a237e;
        }

        .stat-box:active {
            transform: scale(0.95);
        }

        .stat-box.active-filter {
            border-color: #1a237e;
            background: #e8eaf6;
            box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.2);
        }

        .stat-box .stat-icon {
            font-size: 28px;
            display: block;
            margin-bottom: 5px;
        }

        .stat-box .stat-label {
            font-size: 12px;
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-box .number {
            font-size: 34px;
            font-weight: bold;
            margin: 5px 0 0 0;
        }

        .stat-box .number.blue { color: #1a237e; }
        .stat-box .number.yellow { color: #f57f17; }
        .stat-box .number.green { color: #2e7d32; }
        .stat-box .number.purple { color: #6a1b9a; }

        .stat-box .stat-sub {
            font-size: 11px;
            color: #999;
            margin-top: 3px;
        }

        .stat-box .stat-sub.click-hint {
            color: #1a237e;
            font-weight: 500;
        }

        /* ===== FILTER BAR ===== */
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            padding: 15px 20px;
            background: white;
            border-radius: 15px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .filter-bar .filter-info {
            color: #666;
            font-size: 14px;
        }

        .filter-bar .filter-info span {
            color: #1a237e;
            font-weight: bold;
        }

        .filter-bar .filter-info .badge-filter {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 12px;
            font-size: 12px;
            margin-left: 5px;
            font-weight: 600;
        }

        .badge-course {
            background: #e8eaf6;
            color: #1a237e;
        }

        .badge-semester {
            background: #e0f7fa;
            color: #00695c;
        }

        .badge-type {
            background: #f3e5f5;
            color: #6a1b9a;
        }

        .badge-status {
            background: #fff3e0;
            color: #e65100;
        }

        .filter-btn-group {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-filter {
            padding: 10px 25px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
            font-size: 14px;
        }

        .btn-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 35, 126, 0.3);
        }

        .btn-filter.reset {
            background: #e0e0e0;
            color: #333;
        }

        .btn-filter.reset:hover {
            background: #bdbdbd;
            box-shadow: none;
            transform: translateY(-2px);
        }

        .btn-refresh {
            padding: 10px 20px;
            border-radius: 12px;
            border: 2px solid #1a237e;
            background: white;
            color: #1a237e;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-refresh:hover {
            background: #1a237e;
            color: white;
        }

        /* ===== PARKING BALANCE ===== */
        .parking-balance {
            margin-bottom: 20px;
        }

        .balance-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .balance-box {
            background: white;
            border-radius: 15px;
            padding: 20px;
            border: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: 0.3s;
            cursor: pointer;
        }

        .balance-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .balance-box .balance-icon {
            font-size: 32px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
            border-radius: 12px;
        }

        .balance-box.premium .balance-icon {
            background: #f3e5f5;
        }

        .balance-box.basic .balance-icon {
            background: #e0f7fa;
        }

        .balance-info {
            flex: 1;
        }

        .balance-label {
            font-size: 12px;
            color: #666;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .balance-numbers {
            display: flex;
            align-items: baseline;
            gap: 2px;
        }

        .balance-numbers .available {
            font-size: 24px;
            font-weight: bold;
        }

        .balance-box.premium .available { color: #6a1b9a; }
        .balance-box.basic .available { color: #00695c; }

        .balance-numbers .total {
            font-size: 14px;
            color: #999;
        }

        .balance-bar {
            width: 100%;
            height: 6px;
            background: #f0f0f0;
            border-radius: 10px;
            margin-top: 8px;
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            border-radius: 10px;
            transition: width 0.5s ease;
        }

        .premium-fill { background: linear-gradient(90deg, #6a1b9a, #ab47bc); }
        .basic-fill { background: linear-gradient(90deg, #00695c, #00897b); }

        .balance-box .click-hint {
            font-size: 10px;
            color: #999;
            margin-top: 2px;
            opacity: 0.7;
        }

        .balance-box:hover .click-hint {
            opacity: 1;
            color: #1a237e;
        }

        /* ===== TABLE ===== */
        .glass {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid #e0e0e0;
        }

        .table-wrapper {
            overflow-x: auto;
            border-radius: 15px;
            max-height: 600px;
            overflow-y: auto;
        }

        .table-wrapper::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .table-wrapper::-webkit-scrollbar-track {
            background: #f5f5f5;
            border-radius: 10px;
        }

        .table-wrapper::-webkit-scrollbar-thumb {
            background: #1a237e;
            border-radius: 10px;
        }

        .bookings-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            border: 1px solid #d0d0d0;
        }

        .bookings-table th {
            padding: 12px 10px;
            text-align: left;
            background: #e8eaf6;
            color: #1a237e;
            font-weight: 700;
            border-bottom: 2px solid #c5cae9;
            border-right: 1px solid #d0d0d0;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .bookings-table th:last-child {
            border-right: none;
        }

        .bookings-table td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
        }

        .bookings-table td:last-child {
            border-right: none;
        }

        .bookings-table tr:hover {
            background: #f5f5f5;
        }

        .bookings-table tr:last-child td {
            border-bottom: none;
        }

        .badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-pending {
            background: #fff3e0;
            color: #e65100;
        }

        .badge-approved {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .badge-paid {
            background: #e0f7fa;
            color: #00695c;
        }

        .badge-rejected {
            background: #ffebee;
            color: #c62828;
        }

        .btn-approve {
            background: #e8f5e9;
            color: #2e7d32;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            margin-right: 5px;
            transition: 0.3s;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-approve:hover {
            background: #2e7d32;
            color: white;
        }

        .btn-reject {
            background: #ffebee;
            color: #c62828;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-reject:hover {
            background: #c62828;
            color: white;
        }

        .btn-view {
            background: #e3f2fd;
            color: #0d47a1;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
        }

        .btn-view:hover {
            background: #0d47a1;
            color: white;
        }

        .empty-msg {
            text-align: center;
            padding: 40px;
            color: #999;
            font-size: 16px;
        }

        .course-tag {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            background: #e8eaf6;
            color: #1a237e;
        }

        .semester-tag {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            background: #e0f7fa;
            color: #00695c;
        }

        .type-tag {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }

        .type-premium {
            background: #f3e5f5;
            color: #6a1b9a;
        }

        .type-basic {
            background: #e0f7fa;
            color: #00695c;
        }

        .status-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .dot-pending { background: #ff9800; }
        .dot-approved { background: #4caf50; }
        .dot-paid { background: #00bcd4; }
        .dot-rejected { background: #f44336; }

        /* Clickable name in table */
        .clickable-name {
            color: #1a237e;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .clickable-name:hover {
            color: #ff00cc;
            text-decoration: underline;
        }

        /* ===== STUDENT DETAIL MODAL ===== */
        .student-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .student-modal.active {
            display: flex;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .student-modal-content {
            background: white;
            border-radius: 20px;
            width: 90%;
            max-width: 550px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 25px;
            border-bottom: 2px solid #e0e0e0;
            background: #e8eaf6;
            border-radius: 20px 20px 0 0;
        }

        .modal-header h2 {
            color: #1a237e;
            font-size: 20px;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 28px;
            color: #999;
            cursor: pointer;
            transition: 0.3s;
            padding: 0 5px;
            line-height: 1;
        }

        .modal-close:hover {
            color: #c62828;
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 25px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .detail-item {
            background: #f8f9fa;
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
        }

        .detail-item.full-width {
            grid-column: span 2;
        }

        .detail-item .label {
            font-size: 11px;
            color: #999;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 3px;
        }

        .detail-item .value {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        .detail-item .value .tag {
            display: inline-block;
            padding: 2px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .detail-item .value .tag-premium {
            background: #f3e5f5;
            color: #6a1b9a;
        }

        .detail-item .value .tag-basic {
            background: #e0f7fa;
            color: #00695c;
        }

        .detail-item .value .tag-pending {
            background: #fff3e0;
            color: #e65100;
        }

        .detail-item .value .tag-approved {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .detail-item .value .tag-paid {
            background: #e0f7fa;
            color: #00695c;
        }

        .detail-divider {
            grid-column: span 2;
            border-top: 2px dashed #e0e0e0;
            margin: 5px 0;
        }

        .modal-footer {
            padding: 15px 25px;
            border-top: 1px solid #e0e0e0;
            text-align: right;
            background: #f5f5f5;
            border-radius: 0 0 20px 20px;
        }

        .btn-close-modal {
            padding: 10px 30px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        .btn-close-modal:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 35, 126, 0.3);
        }

        /* ===== STUDENT LIST SECTION ===== */
        .student-section {
            margin-top: 20px;
        }

        .student-section .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .student-section .section-title {
            font-size: 20px;
            color: #1a237e;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .student-section .section-title .badge-count {
            background: #00695c;
            color: white;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        /* ===== LECTURER SECTION ===== */
        .lecturer-section {
            margin-top: 40px;
        }

        .lecturer-section .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .lecturer-section .section-title {
            font-size: 20px;
            color: #1a237e;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .lecturer-section .section-title .badge-count {
            background: #1a237e;
            color: white;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        .lecturer-table-wrapper {
            overflow-x: auto;
            border-radius: 15px;
            max-height: 400px;
            overflow-y: auto;
        }

        .lecturer-table-wrapper::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .lecturer-table-wrapper::-webkit-scrollbar-track {
            background: #f5f5f5;
            border-radius: 10px;
        }

        .lecturer-table-wrapper::-webkit-scrollbar-thumb {
            background: #1a237e;
            border-radius: 10px;
        }

        .lecturer-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        .lecturer-table th {
            padding: 12px 10px;
            text-align: left;
            background: #1a237e;
            color: white;
            font-weight: 700;
            border-bottom: 2px solid #0d1445;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .lecturer-table td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .lecturer-table tr:hover {
            background: #f5f5f5;
        }

        .lecturer-table tr:last-child td {
            border-bottom: none;
        }

        .lecturer-table .staff-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            background: #e8eaf6;
            color: #1a237e;
        }

        .lecturer-table .program-tag {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            background: #e0f7fa;
            color: #00695c;
        }

        /* ===== INSTRUCTIONS BOX ===== */
        .instructions-box {
            background: #e8eaf6;
            border-radius: 15px;
            padding: 20px;
            margin-top: 25px;
            border-left: 4px solid #1a237e;
        }

        .instructions-box h4 {
            color: #1a237e;
            margin-bottom: 10px;
        }

        .instructions-box p {
            color: #333;
            margin: 5px 0;
            font-size: 14px;
        }

        .instructions-box .highlight-green { color: #2e7d32; font-weight: 600; }
        .instructions-box .highlight-red { color: #c62828; font-weight: 600; }
        .instructions-box .highlight-blue { color: #1a237e; font-weight: 600; }
        .instructions-box .highlight-orange { color: #e65100; font-weight: 600; }

        /* ===== FILTER MODAL ===== */
        .filter-modal {
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

        .filter-modal.active {
            display: flex;
        }

        .filter-modal-content {
            background: white;
            border-radius: 20px;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .filter-modal-content h2 {
            color: #1a237e;
            margin-bottom: 10px;
            text-align: center;
        }

        .filter-modal-content .subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-group label {
            display: block;
            color: #1a237e;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .filter-group select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            background: white;
            color: #333;
            font-size: 14px;
            transition: 0.3s;
        }

        .filter-group select:focus {
            outline: none;
            border-color: #1a237e;
        }

        .filter-modal-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 25px;
        }

        .filter-modal-actions button {
            padding: 12px 30px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn-apply-filter {
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
        }

        .btn-apply-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(26, 35, 126, 0.3);
        }

        .btn-close-filter {
            background: #e0e0e0;
            color: #333;
        }

        .btn-close-filter:hover {
            background: #bdbdbd;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-btn-group {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .filter-modal-content {
                padding: 20px;
                margin: 10px;
            }
            
            .main-title {
                font-size: 22px;
            }

            .balance-grid {
                grid-template-columns: 1fr;
            }

            .student-section .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .lecturer-section .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }

            .detail-item.full-width {
                grid-column: span 1;
            }

            .detail-divider {
                grid-column: span 1;
            }

            .student-modal-content {
                width: 95%;
            }
        }

        @media (max-width: 500px) {
            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }
            
            .stat-box {
                padding: 15px;
            }
            
            .stat-box .number {
                font-size: 24px;
            }
            
            .stat-box .stat-icon {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<div class="topbar">
    <div class="brand">TVETMARA LUMUT - Warden Portal</div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
</div>

<div id="overlay" onclick="toggleMenu()"></div>

<div id="menu" class="menu">
    <a href="index.php">🏠 Home</a>
    <a href="login.php">🔐 Login</a>
    <a href="student_signup.php">📝 Student Sign Up</a>
    <a href="lecturer_signup.php">📝 Lecturer Sign Up</a>
    <a href="#" class="logout-link" onclick="logout()">🚪 Logout</a>
</div>

<div class="dashboard-container">
    <h2 class="main-title">👮 Parking Management Dashboard</h2>
    <p class="subtitle">Manage and filter all student parking bookings (Premium & Basic)</p>

    <!-- ===== STATISTICS ===== -->
    <div class="stats-grid">
        <div class="stat-box" id="statAll" onclick="filterByStatus('all')">
            <span class="stat-icon">📋</span>
            <div class="stat-label">Total Bookings</div>
            <div class="number blue" id="totalBookings">0</div>
            <div class="stat-sub click-hint">👆 Click to view all</div>
        </div>
        <div class="stat-box" id="statPending" onclick="filterByStatus('pending')">
            <span class="stat-icon">🟡</span>
            <div class="stat-label">Pending</div>
            <div class="number yellow" id="pendingCount">0</div>
            <div class="stat-sub click-hint">👆 Click to filter</div>
        </div>
        <div class="stat-box" id="statApproved" onclick="filterByStatus('approved')">
            <span class="stat-icon">🟢</span>
            <div class="stat-label">Approved</div>
            <div class="number green" id="approvedCount">0</div>
            <div class="stat-sub click-hint">👆 Click to filter</div>
        </div>
        <div class="stat-box" id="statPaid" onclick="filterByStatus('paid')">
            <span class="stat-icon">🔵</span>
            <div class="stat-label">Paid / Confirmed</div>
            <div class="number purple" id="paidCount">0</div>
            <div class="stat-sub click-hint">👆 Click to filter</div>
        </div>
    </div>

    <!-- ===== FILTER BAR ===== -->
    <div class="filter-bar">
        <div class="filter-info">
            📊 Showing: <span id="filterResultCount">0</span> bookings
            <span id="filterBadges"></span>
        </div>
        <div class="filter-btn-group">
            <button class="btn-filter" onclick="openFilterModal()">🔍 Filter</button>
            <button class="btn-filter reset" onclick="resetFilters()">↺ Reset</button>
            <button class="btn-refresh" onclick="loadAllData()">🔄 Refresh</button>
        </div>
    </div>

    <!-- ===== PARKING BALANCE ===== -->
    <div class="parking-balance">
        <div class="balance-grid">
            <div class="balance-box premium" onclick="filterPaidPremium()">
                <div class="balance-icon">⭐</div>
                <div class="balance-info">
                    <div class="balance-label">Premium Parking</div>
                    <div class="balance-numbers">
                        <span class="available" id="premiumAvailable">0</span>
                        <span class="total">/ <span id="premiumTotal">0</span></span>
                    </div>
                    <div class="balance-bar">
                        <div class="bar-fill premium-fill" id="premiumBar" style="width: 0%;"></div>
                    </div>
                    <div class="click-hint">👆 Click to view Paid Premium</div>
                </div>
            </div>
            <div class="balance-box basic" onclick="filterPaidBasic()">
                <div class="balance-icon">🅿️</div>
                <div class="balance-info">
                    <div class="balance-label">Basic Parking</div>
                    <div class="balance-numbers">
                        <span class="available" id="basicAvailable">0</span>
                        <span class="total">/ <span id="basicTotal">55</span></span>
                    </div>
                    <div class="balance-bar">
                        <div class="bar-fill basic-fill" id="basicBar" style="width: 0%;"></div>
                    </div>
                    <div class="click-hint">👆 Click to view Paid Basic</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== STUDENT LIST (Booking Table) ===== -->
    <div class="student-section">
        <div class="section-header">
            <div class="section-title">
                🎓 Student List
                <span class="badge-count" id="studentTotalCount">0</span>
            </div>
            <button class="btn-refresh" onclick="loadAllBookings()" style="font-size:13px; padding:8px 16px;">
                🔄 Refresh List
            </button>
        </div>

        <div class="glass">
            <div class="table-wrapper">
                <table class="bookings-table" id="bookingsTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Plate No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="bookingsBody">
                        <tr>
                            <td colspan="6" class="empty-msg">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===== LECTURER SECTION ===== -->
    <div class="lecturer-section">
        <div class="section-header">
            <div class="section-title">
                👨‍🏫 Registered Lecturers
                <span class="badge-count" id="lecturerTotalCount">0</span>
            </div>
            <button class="btn-refresh" onclick="loadLecturers()" style="font-size:13px; padding:8px 16px;">
                🔄 Refresh List
            </button>
        </div>

        <div class="glass">
            <div class="lecturer-table-wrapper">
                <table class="lecturer-table" id="lecturerTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Staff ID</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Program</th>
                            <th>Plate No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="lecturerBody">
                        <tr>
                            <td colspan="8" class="empty-msg">Loading lecturers...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===== INSTRUCTIONS ===== -->
    <div class="instructions-box">
        <h4>📌 Instructions:</h4>
        <p>✅ <span class="highlight-green">Approve</span> - Student will be notified to make payment</p>
        <p>❌ <span class="highlight-red">Reject</span> - Booking will be cancelled, slot becomes available again</p>
        <p>👆 Click <span class="highlight-orange">Total, Pending, Approved, or Paid</span> stat boxes to filter bookings by status</p>
        <p>👆 Click <span class="highlight-blue">Premium</span> or <span class="highlight-green">Basic</span> balance boxes to view paid bookings</p>
        <p>👆 Click on <span class="highlight-blue">Student Name</span> or <span class="highlight-green">View</span> button to see full details</p>
        <p style="margin-top: 8px; color: #666; font-size: 13px;">🔄 Table auto-refreshes every 10 seconds</p>
    </div>
</div>

<!-- ===== STUDENT DETAIL MODAL ===== -->
<div id="studentModal" class="student-modal">
    <div class="student-modal-content">
        <div class="modal-header">
            <h2>📋 Student Details</h2>
            <button class="modal-close" onclick="closeStudentModal()">&times;</button>
        </div>
        <div class="modal-body" id="studentModalBody">
            <!-- Content will be inserted here -->
        </div>
        <div class="modal-footer">
            <button class="btn-close-modal" onclick="closeStudentModal()">Close</button>
        </div>
    </div>
</div>

<!-- ===== FILTER MODAL ===== -->
<div id="filterModal" class="filter-modal">
    <div class="filter-modal-content">
        <h2>🔍 Filter Bookings</h2>
        <p class="subtitle">Select your filter options below</p>

        <div class="filter-group">
            <label>🎯 Course</label>
            <select id="filterCourse">
                <option value="all">All Courses</option>
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

        <div class="filter-group">
            <label>📅 Semester</label>
            <select id="filterSemester">
                <option value="all">All Semesters</option>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
            </select>
        </div>

        <div class="filter-group">
            <label>🅿️ Parking Type</label>
            <select id="filterType">
                <option value="all">All Types</option>
                <option value="premium">⭐ Premium</option>
                <option value="basic">🅿️ Basic</option>
            </select>
        </div>

        <div class="filter-group">
            <label>📌 Status</label>
            <select id="filterStatus">
                <option value="all">All Status</option>
                <option value="pending">🟡 Pending</option>
                <option value="approved">🟢 Approved</option>
                <option value="paid">🔵 Paid</option>
            </select>
        </div>

        <div class="filter-modal-actions">
            <button class="btn-apply-filter" onclick="applyFilterFromModal()">✅ Apply Filter</button>
            <button class="btn-close-filter" onclick="closeFilterModal()">❌ Close</button>
        </div>
    </div>
</div>

<script>
// ============================================================
// CHECK LOGIN
// ============================================================
let loggedInWarden = JSON.parse(sessionStorage.getItem('loggedInWarden'));
let loggedInAdmin = JSON.parse(sessionStorage.getItem('loggedInAdmin'));

if(!loggedInWarden && !loggedInAdmin) {
    window.location.href = 'login.php';
}

// ============================================================
// VARIABLES
// ============================================================
let allBookings = [];
let filteredBookings = [];
let activeStatusFilter = null;
let allLecturers = [];

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
    if (confirm('Are you sure you want to logout?')) {
        sessionStorage.removeItem('loggedInWarden');
        sessionStorage.removeItem('loggedInAdmin');
        window.location.href = 'login.php';
    }
}

// ============================================================
// STUDENT MODAL FUNCTIONS
// ============================================================
function openStudentModal(booking) {
    let body = document.getElementById('studentModalBody');
    
    let statusClass = '';
    if (booking.status === 'pending') statusClass = 'tag-pending';
    else if (booking.status === 'approved') statusClass = 'tag-approved';
    else if (booking.status === 'paid' || booking.status === 'occupied') statusClass = 'tag-paid';
    
    let typeClass = booking.type === 'premium' ? 'tag-premium' : 'tag-basic';
    
    body.innerHTML = `
        <div class="detail-grid">
            <div class="detail-item full-width">
                <span class="label">👤 Name</span>
                <span class="value">${booking.studentName || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">🪪 IC Number</span>
                <span class="value">${booking.studentIC || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">🎓 Matric No.</span>
                <span class="value">${booking.studentMatric || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">📖 Program</span>
                <span class="value">${booking.studentCourse || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">📅 Semester</span>
                <span class="value">${booking.studentSemester || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">📱 Phone</span>
                <span class="value">${booking.studentPhone || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">🚗 Plate No.</span>
                <span class="value">${booking.plateNo || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">🚙 Vehicle Type</span>
                <span class="value">${booking.vehicleType || 'N/A'}</span>
            </div>
            <div class="detail-item">
                <span class="label">🎨 Vehicle Color</span>
                <span class="value">${booking.vehicleColor || 'N/A'}</span>
            </div>
            <div class="detail-divider"></div>
            <div class="detail-item">
                <span class="label">🅿️ Booking Type</span>
                <span class="value"><span class="tag ${typeClass}">${booking.type || 'N/A'}</span></span>
            </div>
            <div class="detail-item">
                <span class="label">📍 Slot</span>
                <span class="value">${booking.slotId || 'Random'}</span>
            </div>
            <div class="detail-item">
                <span class="label">📌 Status</span>
                <span class="value"><span class="tag ${statusClass}">${booking.status || 'N/A'}</span></span>
            </div>
            <div class="detail-item">
                <span class="label">🕐 Booking Time</span>
                <span class="value">${new Date(booking.bookingTime).toLocaleString()}</span>
            </div>
        </div>
    `;
    
    document.getElementById('studentModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeStudentModal() {
    document.getElementById('studentModal').classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('studentModal').addEventListener('click', function(e) {
    if(e.target === this) {
        closeStudentModal();
    }
});

// ============================================================
// FILTER PAID PREMIUM
// ============================================================
function filterPaidPremium() {
    document.getElementById('filterCourse').value = 'all';
    document.getElementById('filterSemester').value = 'all';
    document.getElementById('filterType').value = 'premium';
    document.getElementById('filterStatus').value = 'paid';
    
    document.querySelectorAll('.stat-box').forEach(box => {
        box.classList.remove('active-filter');
    });
    
    activeStatusFilter = null;
    applyFilters();
}

// ============================================================
// FILTER PAID BASIC
// ============================================================
function filterPaidBasic() {
    document.getElementById('filterCourse').value = 'all';
    document.getElementById('filterSemester').value = 'all';
    document.getElementById('filterType').value = 'basic';
    document.getElementById('filterStatus').value = 'paid';
    
    document.querySelectorAll('.stat-box').forEach(box => {
        box.classList.remove('active-filter');
    });
    
    activeStatusFilter = null;
    applyFilters();
}

// ============================================================
// UPDATE PARKING BALANCE - HANYA PAID SAHAJA
// ============================================================
function updateParkingBalance() {
    // ===== PREMIUM SLOTS =====
    let premiumSlots = JSON.parse(localStorage.getItem('premiumSlots')) || [];
    let premiumTotal = premiumSlots.length;
    
    // Kira PREMIUM yang PAID sahaja
    let premiumPaid = premiumSlots.filter(s => s.bookedBy && s.bookedBy !== '' && (s.status === 'paid' || s.status === 'occupied')).length;
    
    document.getElementById('premiumAvailable').innerText = premiumPaid;
    document.getElementById('premiumTotal').innerText = premiumTotal;
    
    let premiumPercent = premiumTotal > 0 ? (premiumPaid / premiumTotal) * 100 : 0;
    document.getElementById('premiumBar').style.width = Math.min(premiumPercent, 100) + '%';
    
    // ===== BASIC SLOTS - 55 TOTAL =====
    let basicTotal = 55;
    
    // Kumpul BASIC yang PAID sahaja
    let basicPaid = 0;
    let basicStudentIds = new Set();
    
    // 1. Dari allBasicBookings - hanya PAID
    let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
    allBasicBookings.forEach(b => {
        if (b.studentId && (b.status === 'paid' || b.status === 'occupied')) {
            if (!basicStudentIds.has(b.studentId)) {
                basicStudentIds.add(b.studentId);
                basicPaid++;
            }
        }
    });
    
    // 2. Dari myBasicBooking_* - hanya PAID
    for(let key in localStorage) {
        if(key.startsWith('myBasicBooking_')) {
            try {
                let booking = JSON.parse(localStorage.getItem(key));
                if (booking && booking.studentId && (booking.status === 'paid' || booking.status === 'occupied')) {
                    if (!basicStudentIds.has(booking.studentId)) {
                        basicStudentIds.add(booking.studentId);
                        basicPaid++;
                    }
                }
            } catch(e) {}
        }
    }
    
    if (basicPaid > basicTotal) basicPaid = basicTotal;
    
    document.getElementById('basicAvailable').innerText = basicPaid;
    document.getElementById('basicTotal').innerText = basicTotal;
    
    let basicPercent = basicTotal > 0 ? (basicPaid / basicTotal) * 100 : 0;
    document.getElementById('basicBar').style.width = Math.min(basicPercent, 100) + '%';
}

// ============================================================
// FILTER BY STATUS
// ============================================================
function filterByStatus(status) {
    document.getElementById('filterType').value = 'all';
    
    document.querySelectorAll('.stat-box').forEach(box => {
        box.classList.remove('active-filter');
    });
    
    if (activeStatusFilter === status) {
        activeStatusFilter = null;
        document.getElementById('filterStatus').value = 'all';
        applyFilters();
        return;
    }
    
    activeStatusFilter = status;
    
    if (status === 'all') {
        document.getElementById('statAll').classList.add('active-filter');
        document.getElementById('filterStatus').value = 'all';
    } else if (status === 'pending') {
        document.getElementById('statPending').classList.add('active-filter');
        document.getElementById('filterStatus').value = 'pending';
    } else if (status === 'approved') {
        document.getElementById('statApproved').classList.add('active-filter');
        document.getElementById('filterStatus').value = 'approved';
    } else if (status === 'paid') {
        document.getElementById('statPaid').classList.add('active-filter');
        document.getElementById('filterStatus').value = 'paid';
    }
    
    applyFilters();
}

// ============================================================
// FILTER MODAL
// ============================================================
function openFilterModal() {
    document.getElementById('filterModal').classList.add('active');
}

function closeFilterModal() {
    document.getElementById('filterModal').classList.remove('active');
}

function applyFilterFromModal() {
    closeFilterModal();
    activeStatusFilter = null;
    document.querySelectorAll('.stat-box').forEach(box => {
        box.classList.remove('active-filter');
    });
    applyFilters();
}

// ============================================================
// UPDATE STATS
// ============================================================
function updateStats(bookings) {
    let total = bookings.length;
    let pending = bookings.filter(b => b.status === 'pending').length;
    let approved = bookings.filter(b => b.status === 'approved').length;
    let paid = bookings.filter(b => b.status === 'paid' || b.status === 'occupied').length;
    
    document.getElementById('totalBookings').innerText = total;
    document.getElementById('pendingCount').innerText = pending;
    document.getElementById('approvedCount').innerText = approved;
    document.getElementById('paidCount').innerText = paid;
    document.getElementById('studentTotalCount').innerText = total;
}

// ============================================================
// GET ALL BOOKINGS - PROGRAM BETUL
// ============================================================
function getAllBookings() {
    let bookings = [];
    let seen = new Set();
    
    let premiumSlots = JSON.parse(localStorage.getItem('premiumSlots')) || [];
    premiumSlots.forEach(slot => {
        if(slot.bookedBy) {
            let key = 'premium_' + slot.bookedBy + '_' + slot.id;
            if(!seen.has(key)) {
                seen.add(key);
                bookings.push({
                    studentId: slot.bookedBy,
                    studentName: slot.bookedByName || 'Unknown',
                    studentIC: slot.studentIC || 'N/A',
                    studentMatric: slot.studentMatric || 'N/A',
                    studentCourse: slot.studentCourse || slot.program || 'N/A',
                    studentSemester: slot.studentSemester || 'N/A',
                    studentPhone: slot.studentPhone || 'N/A',
                    plateNo: slot.plateNo || 'N/A',
                    slotId: slot.id,
                    type: 'premium',
                    status: slot.status || 'pending',
                    bookingTime: slot.bookingTime || new Date().toISOString(),
                    vehicleType: slot.vehicleType || 'N/A',
                    vehicleColor: slot.vehicleColor || 'N/A'
                });
            }
        }
    });
    
    for(let key in localStorage) {
        if(key.startsWith('myPremiumBooking_')) {
            try {
                let booking = JSON.parse(localStorage.getItem(key));
                if(booking && booking.studentId) {
                    let uniqueKey = 'premium_' + booking.studentId + '_' + (booking.slotId || '');
                    if(!seen.has(uniqueKey)) {
                        seen.add(uniqueKey);
                        bookings.push({
                            studentId: booking.studentId,
                            studentName: booking.studentName || 'Unknown',
                            studentIC: booking.studentIC || 'N/A',
                            studentMatric: booking.studentMatric || 'N/A',
                            studentCourse: booking.studentCourse || booking.program || 'N/A',
                            studentSemester: booking.studentSemester || 'N/A',
                            studentPhone: booking.studentPhone || 'N/A',
                            plateNo: booking.plateNo || 'N/A',
                            slotId: booking.slotId || 'N/A',
                            type: 'premium',
                            status: booking.status || 'pending',
                            bookingTime: booking.bookingTime || new Date().toISOString(),
                            vehicleType: booking.vehicleType || 'N/A',
                            vehicleColor: booking.vehicleColor || 'N/A'
                        });
                    }
                }
            } catch(e) {}
        }
    }
    
    let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
    allBasicBookings.forEach(booking => {
        if(booking.studentId) {
            let key = 'basic_' + booking.studentId;
            if(!seen.has(key)) {
                seen.add(key);
                bookings.push({
                    studentId: booking.studentId,
                    studentName: booking.studentName || 'Unknown',
                    studentIC: booking.studentIC || 'N/A',
                    studentMatric: booking.studentMatric || 'N/A',
                    studentCourse: booking.studentCourse || booking.program || 'N/A',
                    studentSemester: booking.studentSemester || 'N/A',
                    studentPhone: booking.studentPhone || 'N/A',
                    plateNo: booking.plateNo || 'N/A',
                    slotId: 'Random',
                    type: 'basic',
                    status: booking.status || 'pending',
                    bookingTime: booking.bookingTime || new Date().toISOString(),
                    vehicleType: booking.vehicleType || 'N/A',
                    vehicleColor: booking.vehicleColor || 'N/A'
                });
            }
        }
    });
    
    for(let key in localStorage) {
        if(key.startsWith('myBasicBooking_')) {
            try {
                let booking = JSON.parse(localStorage.getItem(key));
                if(booking && booking.studentId) {
                    let uniqueKey = 'basic_' + booking.studentId;
                    if(!seen.has(uniqueKey)) {
                        seen.add(uniqueKey);
                        bookings.push({
                            studentId: booking.studentId,
                            studentName: booking.studentName || 'Unknown',
                            studentIC: booking.studentIC || 'N/A',
                            studentMatric: booking.studentMatric || 'N/A',
                            studentCourse: booking.studentCourse || booking.program || 'N/A',
                            studentSemester: booking.studentSemester || 'N/A',
                            studentPhone: booking.studentPhone || 'N/A',
                            plateNo: booking.plateNo || 'N/A',
                            slotId: 'Random',
                            type: 'basic',
                            status: booking.status || 'pending',
                            bookingTime: booking.bookingTime || new Date().toISOString(),
                            vehicleType: booking.vehicleType || 'N/A',
                            vehicleColor: booking.vehicleColor || 'N/A'
                        });
                    }
                }
            } catch(e) {}
        }
    }
    
    return bookings;
}

// ============================================================
// APPLY FILTERS
// ============================================================
function applyFilters() {
    let course = document.getElementById('filterCourse').value;
    let semester = document.getElementById('filterSemester').value;
    let type = document.getElementById('filterType').value;
    let status = document.getElementById('filterStatus').value;
    
    filteredBookings = allBookings.filter(booking => {
        if(course !== 'all' && booking.studentCourse !== course) return false;
        if(semester !== 'all' && booking.studentSemester !== semester) return false;
        if(type !== 'all' && booking.type !== type) return false;
        if(status !== 'all' && booking.status !== status) return false;
        return true;
    });
    
    filteredBookings.sort((a, b) => new Date(b.bookingTime) - new Date(a.bookingTime));
    
    document.getElementById('filterResultCount').innerText = filteredBookings.length;
    updateFilterBadges(course, semester, type, status);
    renderTable(filteredBookings);
}

// ============================================================
// UPDATE FILTER BADGES
// ============================================================
function updateFilterBadges(course, semester, type, status) {
    let badgesHtml = '';
    
    if(course !== 'all') {
        badgesHtml += `<span class="badge-filter badge-course">📚 ${course}</span>`;
    }
    if(semester !== 'all') {
        badgesHtml += `<span class="badge-filter badge-semester">📅 Sem ${semester}</span>`;
    }
    if(type !== 'all') {
        badgesHtml += `<span class="badge-filter badge-type">${type === 'premium' ? '⭐ Premium' : '🅿️ Basic'}</span>`;
    }
    if(status !== 'all') {
        let statusLabel = status === 'pending' ? '🟡 Pending' : status === 'approved' ? '🟢 Approved' : '🔵 Paid';
        badgesHtml += `<span class="badge-filter badge-status">${statusLabel}</span>`;
    }
    
    document.getElementById('filterBadges').innerHTML = badgesHtml;
}

// ============================================================
// RESET FILTERS
// ============================================================
function resetFilters() {
    document.getElementById('filterCourse').value = 'all';
    document.getElementById('filterSemester').value = 'all';
    document.getElementById('filterType').value = 'all';
    document.getElementById('filterStatus').value = 'all';
    
    activeStatusFilter = null;
    document.querySelectorAll('.stat-box').forEach(box => {
        box.classList.remove('active-filter');
    });
    
    applyFilters();
}

// ============================================================
// RENDER TABLE
// ============================================================
function renderTable(bookings) {
    let tbody = document.getElementById('bookingsBody');
    
    if(bookings.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="empty-msg">📭 No bookings found matching the filters.</td></tr>';
        return;
    }
    
    tbody.innerHTML = '';
    bookings.forEach((booking, index) => {
        let row = tbody.insertRow();
        
        row.insertCell(0).innerText = index + 1;
        
        let nameCell = row.insertCell(1);
        let nameSpan = document.createElement('span');
        nameSpan.className = 'clickable-name';
        nameSpan.textContent = booking.studentName || 'Unknown';
        nameSpan.onclick = function() { openStudentModal(booking); };
        nameCell.appendChild(nameSpan);
        
        row.insertCell(2).innerHTML = `<span class="course-tag">${booking.studentCourse || 'N/A'}</span>`;
        row.insertCell(3).innerHTML = `<span class="semester-tag">Sem ${booking.studentSemester || 'N/A'}</span>`;
        row.insertCell(4).innerHTML = `<strong style="color:#1a237e;">${booking.plateNo || 'N/A'}</strong>`;
        
        let actionCell = row.insertCell(5);
        actionCell.style.display = 'flex';
        actionCell.style.gap = '5px';
        actionCell.style.flexWrap = 'wrap';
        
        let viewBtn = document.createElement('button');
        viewBtn.innerText = '👁️ View';
        viewBtn.className = 'btn-view';
        viewBtn.onclick = function() { openStudentModal(booking); };
        actionCell.appendChild(viewBtn);
        
        if(booking.status === 'pending') {
            let approveBtn = document.createElement('button');
            approveBtn.innerText = 'Approve';
            approveBtn.className = 'btn-approve';
            approveBtn.onclick = (function(b) { return function() { approveBooking(b); }; })(booking);
            actionCell.appendChild(approveBtn);
            
            let rejectBtn = document.createElement('button');
            rejectBtn.innerText = 'Reject';
            rejectBtn.className = 'btn-reject';
            rejectBtn.onclick = (function(b) { return function() { rejectBooking(b); }; })(booking);
            actionCell.appendChild(rejectBtn);
        }
    });
}

// ============================================================
// LOAD ALL BOOKINGS
// ============================================================
function loadAllBookings() {
    allBookings = getAllBookings();
    updateStats(allBookings);
    applyFilters();
}

// ============================================================
// APPROVE BOOKING
// ============================================================
function approveBooking(booking) {
    if(confirm(`Approve booking for ${booking.studentName} (${booking.type.toUpperCase()})?\n\nMatric: ${booking.studentMatric}\nCourse: ${booking.studentCourse}`)) {
        
        if(booking.type === 'premium') {
            let premiumSlots = JSON.parse(localStorage.getItem('premiumSlots')) || [];
            let slot = premiumSlots.find(s => s.id == booking.slotId);
            if(slot && slot.status === 'pending') {
                slot.status = 'approved';
                localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
            }
            
            let premiumKey = 'myPremiumBooking_' + booking.studentId;
            let myPremiumBooking = JSON.parse(localStorage.getItem(premiumKey));
            if(myPremiumBooking && myPremiumBooking.slotId == booking.slotId) {
                myPremiumBooking.status = 'approved';
                localStorage.setItem(premiumKey, JSON.stringify(myPremiumBooking));
            }
            
        } else if(booking.type === 'basic') {
            let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
            let index = allBasicBookings.findIndex(b => b.studentId === booking.studentId);
            if(index !== -1) {
                allBasicBookings[index].status = 'approved';
                localStorage.setItem('allBasicBookings', JSON.stringify(allBasicBookings));
            }
            
            let basicKey = 'myBasicBooking_' + booking.studentId;
            let myBasicBooking = JSON.parse(localStorage.getItem(basicKey));
            if(myBasicBooking && myBasicBooking.studentId === booking.studentId) {
                myBasicBooking.status = 'approved';
                localStorage.setItem(basicKey, JSON.stringify(myBasicBooking));
            }
        }
        
        alert('✅ Booking for ' + booking.studentName + ' has been APPROVED.\n\nStudent can now make payment.');
        loadAllData();
    }
}

// ============================================================
// REJECT BOOKING
// ============================================================
function rejectBooking(booking) {
    if(confirm(`Reject booking for ${booking.studentName} (${booking.type.toUpperCase()})?\n\nSlot will become available again.`)) {
        
        if(booking.type === 'premium') {
            let premiumSlots = JSON.parse(localStorage.getItem('premiumSlots')) || [];
            let slot = premiumSlots.find(s => s.id == booking.slotId);
            if(slot) {
                slot.status = 'available';
                delete slot.bookedBy;
                delete slot.bookedByName;
                delete slot.studentIC;
                delete slot.studentMatric;
                delete slot.studentCourse;
                delete slot.studentSemester;
                delete slot.studentPhone;
                delete slot.plateNo;
                delete slot.bookingTime;
                localStorage.setItem('premiumSlots', JSON.stringify(premiumSlots));
            }
            
            let premiumKey = 'myPremiumBooking_' + booking.studentId;
            localStorage.removeItem(premiumKey);
            
        } else if(booking.type === 'basic') {
            let allBasicBookings = JSON.parse(localStorage.getItem('allBasicBookings')) || [];
            let newBookings = allBasicBookings.filter(b => b.studentId !== booking.studentId);
            localStorage.setItem('allBasicBookings', JSON.stringify(newBookings));
            
            let basicKey = 'myBasicBooking_' + booking.studentId;
            localStorage.removeItem(basicKey);
        }
        
        alert('❌ Booking for ' + booking.studentName + ' has been REJECTED.\n\nSlot is now available for other students.');
        loadAllData();
    }
}

// ============================================================
// LECTURER FUNCTIONS
// ============================================================
function loadLecturers() {
    let lecturers = JSON.parse(localStorage.getItem('lecturers')) || [];
    allLecturers = lecturers;
    
    document.getElementById('lecturerTotalCount').innerText = lecturers.length;
    
    let tbody = document.getElementById('lecturerBody');
    
    if(lecturers.length === 0) {
        tbody.innerHTML = '<tr><td colspan="8" class="empty-msg">📭 No lecturers registered yet.</td></tr>';
        return;
    }
    
    tbody.innerHTML = '';
    lecturers.forEach((lecturer, index) => {
        let row = tbody.insertRow();
        
        row.insertCell(0).innerText = index + 1;
        row.insertCell(1).innerHTML = `<strong>${lecturer.name || 'N/A'}</strong>`;
        row.insertCell(2).innerHTML = `<span class="staff-badge">${lecturer.staff_id || 'N/A'}</span>`;
        row.insertCell(3).innerText = lecturer.email || 'N/A';
        row.insertCell(4).innerText = lecturer.phone_no || 'N/A';
        row.insertCell(5).innerHTML = `<span class="program-tag">${lecturer.program || 'N/A'}</span>`;
        row.insertCell(6).innerHTML = lecturer.plate_no ? `<strong style="color:#1a237e;">${lecturer.plate_no}</strong>` : '<span style="color:#999;">-</span>';
        
        let actionCell = row.insertCell(7);
        let viewBtn = document.createElement('button');
        viewBtn.innerText = '👁️ View';
        viewBtn.className = 'btn-view';
        viewBtn.onclick = function() {
            alert(`📋 Lecturer Details\n\nName: ${lecturer.name}\nStaff ID: ${lecturer.staff_id}\nEmail: ${lecturer.email}\nPhone: ${lecturer.phone_no}\nProgram: ${lecturer.program || 'N/A'}\nPlate No: ${lecturer.plate_no || 'Not registered'}`);
        };
        actionCell.appendChild(viewBtn);
    });
}

// ============================================================
// LOAD ALL DATA
// ============================================================
function loadAllData() {
    loadAllBookings();
    updateParkingBalance();
}

// ============================================================
// CLOSE MODAL ON CLICK OUTSIDE
// ============================================================
document.getElementById('filterModal').addEventListener('click', function(e) {
    if(e.target === this) {
        closeFilterModal();
    }
});

// ============================================================
// LOAD ON PAGE LOAD
// ============================================================
loadAllData();
loadLecturers();

// Auto refresh every 10 seconds
setInterval(loadAllData, 10000);
setInterval(loadLecturers, 30000);
</script>

</body>
</html>