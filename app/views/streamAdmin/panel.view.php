<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/adminDash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Subject Admin Panel</title>
</head>
<body>
    <?php require_once("../app/views/components/sidebar.admin.php");  ?>
    
    <div class="main">
        <div class="admin-panel">
            <h2>Physical-Science Admin Panel</h2>
            <button onclick="openCreateForm()">Create New Tutor</button>
            <table class="tutors-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Courses</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tutor data will be populated dynamically here -->
                </tbody>
            </table>
        </div>

        <!-- Modal for creating new tutor -->
        <div class="modal" id="createTutorModal">
            <div class="modal-content">
                <span class="close" onclick="closeCreateForm()">&times;</span>
                <h3>Create New Tutor</h3>
                <form id="createForm">
                    <label for="tutorName">Tutor Name:</label>
                    <input type="text" id="tutorName" required><br><br>
                    
                    <label for="tutorSubject">Subject:</label>
                    <input type="text" id="tutorSubject" required><br><br>
                    
                    <label for="tutorCourses">Courses:</label>
                    <input type="text" id="tutorCourses" required><br><br>
                    
                    <button type="submit">Add Tutor</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        // Sample tutor data (can be fetched from a server)
        const tutorsData = [
            { id: 1, name: "Hanafe Mira", subject: "Physics", courses: ["Mechanics", "Optics"] },
            { id: 2, name: "Ravishan Jayathilake", subject: "Mathematics", courses: ["Algebra", "Calculus"] },
            { id: 3, name: "Rishmi Dissanayake", subject: "Chemistry", courses: ["Bonding", "Organics"] },
            { id: 4, name: "Madasha Liyanage", subject: "ICT", courses: ["Programming Concepts", "Database"] },
        ];

        // Function to display tutors in the admin panel
        function displayTutors() {
            const tutorsList = document.querySelector('.tutors-list');
            tutorsList.innerHTML = '';

            tutorsData.forEach(tutor => {
                const tutorElement = document.createElement('div');
                tutorElement.classList.add('tutor-item');
                tutorElement.innerHTML = `
                    <h3>${tutor.name}</h3>
                    <p>Subject: ${tutor.subject}</p>
                    <p>Courses: ${tutor.courses.join(', ')}</p>
                    <button class="view-details-btn" data-tutor-id="${tutor.id}">View Details</button>
                `;
                tutorsList.appendChild(tutorElement);
            });

            // Add event listeners to each "View Details" button
            const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
            viewDetailsButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const tutorId = event.target.getAttribute('data-tutor-id');
                    const selectedTutor = tutorsData.find(tutor => tutor.id == tutorId);

                    if (selectedTutor) {
                        // In this example, it displays the tutor name. You can extend it further.
                        alert(`Selected tutor: ${selectedTutor.name}`);
                    }
                });
            });
        }

        // Display tutors when the page loads
        document.addEventListener("DOMContentLoaded", function() {
            displayTutors();
        });

    </script>
    <script>
        const tutorsTable = document.querySelector('.tutors-table');

        // Function to display tutors in the table
        function displayTutors() {
            tutorsTable.querySelector('tbody').innerHTML = '';

            tutorsData.forEach(tutor => {
                const row = tutorsTable.insertRow();

                row.innerHTML = `
                    <td>${tutor.id}</td>
                    <td>${tutor.name}</td>
                    <td>${tutor.subject}</td>
                    <td>${tutor.courses.join(', ')}</td>
                    <td>
                        <button onclick="editTutor(${tutor.id})">Edit</button>
                        <button onclick="deleteTutor(${tutor.id})">Delete</button>
                    </td>
                `;
            });
        }

        // Function to open create new tutor modal
        function openCreateForm() {
            const createTutorModal = document.getElementById('createTutorModal');
            createTutorModal.style.display = 'block';
            // Additional logic to display the form for creating a new tutor
        }

        // Function to close create new tutor modal
        function closeCreateForm() {
            const createTutorModal = document.getElementById('createTutorModal');
            createTutorModal.style.display = 'none';
        }

        // Function to edit tutor
        function editTutor(tutorId) {
            // Logic to edit the selected tutor's details
            alert(`Editing tutor with ID: ${tutorId}`);
        }

        // Function to delete tutor
        function deleteTutor(tutorId) {
            // Logic to delete the selected tutor's account
            alert(`Deleting tutor with ID: ${tutorId}`);
        }

        // Initially display tutors when the page loads
        document.addEventListener("DOMContentLoaded", function() {
            displayTutors();
        });

    </script>
</body>
</html>