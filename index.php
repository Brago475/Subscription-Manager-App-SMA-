<?php
session_start();

require 'function.php'; 

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit;
}

$id = intval($_SESSION["id"]); 
$stmt = $conn->prepare("SELECT * FROM Users WHERE UserID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    $user = ["FirstName" => "Guest", "LastName" => ""];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="tp">
            <div class="logo">
                <img src="Assets/21CD1248-242B-4D85-8009-041173192031-removebg-preview (1).png" alt="logo" class="user-img">
                <span class="sma-name">SMA</span>
            </div>
            <div class="separator"></div>
        </div>
        
        <!-- Sidebar Menu -->
        <ul>
            <li><a href="#"><i class='bx bxs-dashboard'></i><span class="nav-item">Dashboard</span></a></li>
            <li><a href="Subscriptions.php"><i class='bx bx-diamond'></i><span class="nav-item">Subscriptions</span></a></li>
            <li><a href="#"><i class='bx bx-line-chart-down'></i><span class="nav-item">Overview</span></a></li>
            <li><a href="#"><i class='bx bx-money'></i><span class="nav-item">Bill</span></a></li>
            <li><a href="#"><i class='bx bx-line-chart'></i><span class="nav-item">Insights</span></a></li>
            <li><a href="#"><i class='bx bx-like'></i><span class="nav-item">Recommendations</span></a></li>
            <li><a href="#"><i class='bx bx-cog'></i><span class="nav-item">Settings</span></a></li>
            <li>
    <a href="logout.php">
        <i class='bx bx-log-out-circle'></i>
        <span class="nav-item">Log out</span>
    </a>
</li>
<div class="separator"></div>
 <!-- Profile Section -->
 <div class="profile">
        <a href="#">
            <i class='bx bx-user-circle'></i>
            <span class="nav-item">
                <?php echo htmlspecialchars($user["FirstName"] . ' ' . $user["LastName"]); ?>
            </span>
        </a>
    </div>

    </div>
        </ul>
    </div>
    

    <!-- Navbar -->
    <div class="navbar">
        <h1>SMA</h1>
        <div class="logo">
            <div style="display: flex; align-items: center; gap: 5px;">
                <img src="Assets/21CD1248-242B-4D85-8009-041173192031-removebg-preview (1).png" alt="Logo">
                <div class="right-section">
                    <i class="bx bxs-bell"></i> <!-- Notification Bell -->
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-text">
        <div class="name">
            <h1>Welcome <?php echo htmlspecialchars($user["FirstName"] . ' ' . $user["LastName"]); ?></h1>
        </div>

        <!-- Calendar Section -->
        <div class="calendar-container">
            <header class="calendar-header">
                <p class="calendar-current-date"></p>
                <div class="calendar-navigation">
                    <span id="calendar-prev" class="material-symbols-rounded">chevron_left</span>
                    <span id="calendar-next" class="material-symbols-rounded">chevron_right</span>
                </div>
            </header>

            <!-- Calendar Buttons -->
            <div class="calendar-buttons">

            
                <button id="today-btn" class="calendar-btn"><i class='bx bx-check'></i> Subscriptions</button>
                <button id="reset-btn" class="calendar-btn"><i class='bx bx-x'></i> Subscriptions</button>
                <button id="toggle-view-btn" class="calendar-btn"><i class='bx bx-show-alt'></i> View Subscriptions</button>
            </div>

            <!-- Calendar Body -->
            <div class="calendar-body">
                <ul class="calendar-weekdays">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                <ul class="calendar-dates"></ul>
            </div>
        </div>

        <!-- Additional Section -->
        <div class="calendar-buttons"> 
            <button id="today-btn" class="calendar-btn"><i class='bx bx-info-circle'></i> More</button>
        </div>
    </div>

   

    <script src="script.js"></script>
</body>
</html>
