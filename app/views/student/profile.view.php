<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.php"); ?>
    <div class="main">
        <div class="topbar">
            <div class="toggle">&#9776;</div> <!-- Add a menu icon here -->
            <h1 class="dashboardtype">Profile</h1>
            <div class="user">
                <img src="user-avatar.jpg" alt="User Avatar">
            </div>
        </div>

        <!-- Cards Section -->
        <div class="cardBox">
            <div class="card">
                <div class="numbers">5</div>
                <div class="cardName" style="padding-top: 5px;">Courses Enrolled</div>
            </div>
            <div class="class">
                <div class="cardName"><center>Progress</center></div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>  
            </div>
        </div>

        <!-- Section -->
        <div class="details">
            <!-- Recently viewed -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recently Viewed</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                
            </div>

            <!-- Badges and Achievements -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Achievements</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <ul class="achievements-list">
                    <li>Completed 3 Courses</li>
                    <li>Completed 10 Quizzes</li>
                    <li>Rapid Learner</li>
                    </ul>                      
            </div>
        </div>
    </div> 
    <script src="<?=ROOT?>/assets/js/index.js"></script>

</body>
</html>