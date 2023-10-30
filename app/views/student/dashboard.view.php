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
                        <h3>Course Title 1</h3>
                        <div class="course-progress">60% completed</div>
                    </div>
                    <!-- More course cards -->
                </div>
            </div>

            <div class="performance-metrics">
                <h2>Performance Metrics</h2>
                <div class="metric-charts">
                    <canvas id="grades-chart"></canvas>
                    <canvas id="time-spent-chart"></canvas>
                    <!-- More charts -->
                </div>
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

</body>
</html>
