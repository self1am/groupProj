<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Student Dashboard</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.php"); ?>

    <div class="main">
        <div class="dashboard">
            <div class="progress-summary">
                <h2>Syllabus Progress</h2>
                <div class="progress-bar overall-progress">
                    <div class="progress-label">Overall Progress</div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width: 70%;">70%</div>
                    </div>
                </div>
                <div class="subject-progress">
                    <div class="subject-progress-bar">
                        <div class="subject-label">Subject 1</div>
                        <div class="progress-track">
                            <div class="progress-fill" style="width: 50%;">50%</div>
                        </div>
                    </div>
                    <!-- More subject progress bars -->
                </div>
            </div>

            <div class="course-completion">
                <h2>Course Completion</h2>
                <div class="course-cards">
                    <div class="course-card">
                        <h3>Matter and Radiation</h3>
                        <div class="course-progress">60% completed</div>
                    </div>
                    <!-- More course cards -->
                </div>
            </div>

            <div class="performance-metrics">
                <h2>Performance Metrics</h2>
                <div class="metric-charts">
                    <canvas id="grades-chart" width="400" height="200"></canvas>
                    <canvas id="time-spent-chart" width="400" height="200"></canvas>
                    <!-- Add more canvas elements for additional charts -->
                </div>
            </div>
        </div>

        <div class="achievements-section">
            <div class="card">
                <h2 class="card-header">Achievements</h2>
                <a href="#" class="btn">View All</a>
                <ul class="achievements-list">
                    <li>
                        <span class="achievement-title">Completed 3 Courses</span>
                        <p class="achievement-description">Successfully finished 3 courses</p>
                    </li>
                    <li>
                        <span class="achievement-title">Completed 10 Quizzes</span>
                        <p class="achievement-description">Finished 10 quizzes with good scores</p>
                    </li>
                    <li>
                        <span class="achievement-title">Rapid Learner</span>
                        <p class="achievement-description">Recognized for fast learning pace</p>
                    </li>
                    <!-- Add more achievements as needed -->
                </ul>
            </div>
        </div>

    </div>

    <script>
                // Simulated data - Replace with actual data retrieval logic
        const syllabusProgress = 70; // Example syllabus completion percentage
        const subjectsProgress = [50, 80, 60]; // Example progress for subjects

        // Update overall syllabus progress bar
        const progressElement = document.querySelector('.progress-bar');
        progressElement.style.width = syllabusProgress + '%';

        // Create subject progress bars
        const subjectProgress = document.querySelector('.subject-progress');
        subjectsProgress.forEach(progress => {
            const subjectBar = document.createElement('div');
            subjectBar.classList.add('subject-bar');
            subjectBar.style.width = progress + '%';
            subjectProgress.appendChild(subjectBar);
        });

        // Simulated course data
        const courses = [
            { name: 'Course 1', completion: 80 },
            { name: 'Course 2', completion: 60 },
            // Add more course data
        ];

        // Display course cards
        const courseCards = document.querySelector('.course-cards');
        courses.forEach(course => {
            const card = document.createElement('div');
            card.classList.add('course-card');
            card.textContent = `${course.name} - ${course.completion}% completed`;
            courseCards.appendChild(card);
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
                // Wait for the DOM content to load
        document.addEventListener("DOMContentLoaded", function() {
            // Chart.js initialization
            var gradesCtx = document.getElementById("grades-chart").getContext("2d");
            var timeSpentCtx = document.getElementById("time-spent-chart").getContext("2d");

            // Dummy data for the charts
            var gradesData = {
                labels: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5"],
                datasets: [{
                    label: "Grades",
                    data: [80, 85, 78, 92, 88], // Replace with actual data
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1
                }]
            };

            var timeSpentData = {
                labels: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5"],
                datasets: [{
                    label: "Time Spent (hours)",
                    data: [15, 20, 18, 22, 19], // Replace with actual data
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    borderColor: "rgba(255, 99, 132, 1)",
                    borderWidth: 1
                }]
            };

            // Create dummy line charts
            var gradesChart = new Chart(gradesCtx, {
                type: "line",
                data: gradesData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var timeSpentChart = new Chart(timeSpentCtx, {
                type: "line",
                data: timeSpentData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

    </script>

</body>
</html>
