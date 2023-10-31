<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminDash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Subject Admin Dashboard</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.admin.php"); ?>
    <div class="main">
        <div class="dashboard">
        <h2>Subject Admin Dashboard</h2>

<!-- Section for Total Students -->
<div class="card">
    <h3>Total Students</h3>
    <p>Number of students: <span id="totalStudents">-</span></p>
</div>

<!-- Section for Total Tutors -->
<div class="card">
    <h3>Total Tutors</h3>
    <p>Number of tutors: <span id="totalTutors">-</span></p>
</div>

<!-- Chart Section: Sales and Achievements -->
<div class="chart-section">
<canvas id="courseSalesChart" width="500" height="300"></canvas>
<canvas id="achievementsChart" width="500" height="300">></canvas>
</div>
    <!-- Chart Section: Tutor and Student Engagement -->
<div class="chart-section">
<canvas id="tutorEngagementChart" width="500" height="300">></canvas>
<canvas id="studentEngagementChart" width="500" height="300">></canvas>
</div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // JavaScript for Chart Data and Generation
    // Dummy data (replace with actual data)
    const totalStudents = 450;
    const totalTutors = 37;
    const tutorEngagementData = [30, 40, 45, 55, 60, 70, 80];
    const studentEngagementData = [20, 30, 35, 40, 45, 50, 60];
    const courseSalesData = [100, 120, 150, 200, 180, 210, 250];
    const achievementsData = [50, 70, 80, 90, 100, 120, 140];

    // Display total number of students
    document.getElementById('totalStudents').textContent = totalStudents;

    // Chart generation functions for better maintenance
    // Tutor engagement chart (Line chart)
new Chart(document.getElementById('tutorEngagementChart').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Tutor Engagement',
            data: tutorEngagementData,
            borderColor: 'blue',
            fill: false
        }]
    },
    options: {
        responsive: false, // Disable Chart.js auto-sizing
        maintainAspectRatio: false, // Prevent maintaining aspect ratio
        aspectRatio: 2, // Customize the aspect ratio as needed
        // Add size properties to enforce fixed dimensions
        width: 300,
        height: 150
    }
});

// Student engagement chart (Bar chart)
new Chart(document.getElementById('studentEngagementChart').getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Student Engagement',
            data: studentEngagementData,
            backgroundColor: 'green',
            borderColor: 'transparent'
        }]
    },
    options: {
        responsive: false, // Disable Chart.js auto-sizing
        maintainAspectRatio: false, // Prevent maintaining aspect ratio
        aspectRatio: 2, // Customize the aspect ratio as needed
        // Add size properties to enforce fixed dimensions
        width: 300,
        height: 150
    }
});

// Course sales chart (Line chart)
new Chart(document.getElementById('courseSalesChart').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Course Sales',
            data: courseSalesData,
            borderColor: 'red',
            fill: false
        }]
    },
    options: {
        responsive: false, // Disable Chart.js auto-sizing
        maintainAspectRatio: false, // Prevent maintaining aspect ratio
        aspectRatio: 2, // Customize the aspect ratio as needed
        // Add size properties to enforce fixed dimensions
        width: 300,
        height: 150
    }
});

// Achievements chart (Pie chart)
new Chart(document.getElementById('achievementsChart').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
        datasets: [{
            label: 'Programmatic Event Triggers',
            data: achievementsData,
            backgroundColor: ['orange', 'blue', 'green', 'red', 'purple', 'yellow', 'cyan']
        }]
    },
    options: {
        responsive: false, // Disable Chart.js auto-sizing
        maintainAspectRatio: false, // Prevent maintaining aspect ratio
        aspectRatio: 2, // Customize the aspect ratio as needed
        // Add size properties to enforce fixed dimensions
        width: 300,
        height: 150
    }
});
</script>

</body>
</html>