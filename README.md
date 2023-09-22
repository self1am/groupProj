# Academic Progress Tracking System

This is an academic progress tracking system designed to help high school students improve their academic performance. The system allows students to manage their studies, access educational resources, and interact with tutors and peers.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Folder Structure](#folder-structure)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **User Registration and Authentication:** Students can create accounts and log in securely.

- **Subject and Chapter Selection:** Students can choose their preferred subjects and chapters.

- **Dashboard:** A personalized dashboard provides an overview of progress, study plans, and course recommendations.

- **Study Plan Generator:** Students can generate and customize study plans based on their selected subjects and chapters.

- **Course Selection:** Access a list of available courses, select specific chapters, and purchase courses offered by tutors.

- **Progress Tracking:** Monitor academic progress with charts and statistics.

- **Model Papers:** Practice with model papers and receive automated evaluations.

- **Tutor Interaction:** Students can rate tutors and seek feedback.

- **Discussion Forum:** Engage in public forums for academic discussions.

## Technologies Used

- **Front-end:** HTML, CSS, JavaScript
- **Back-end:** PHP
- **Database:** MySQL

## Folder Structure

The project follows an MVC architecture. Here's an overview of the folder structure:

- **assets:** Static assets like CSS, JavaScript, and images.
- **controllers:** PHP controllers for handling business logic.
- **models:** PHP models for database interactions.
- **views:** HTML templates with embedded PHP for dynamic content.
- **config:** Configuration files, including database configuration.
- **lib:** Reusable PHP classes and functions.
- **public:** Web-accessible public files.
- **.gitignore:** Specifies files and directories to ignore in version control.
- **README.md:** Project documentation.

## Getting Started

1. Clone the repository to your local machine.

2. Set up your web server (e.g., Apache) and configure it to point to the project's `public` directory as the root directory.

3. Create a MySQL database and import the provided SQL dump file to set up the initial database schema.

4. Update the database connection configuration in `config/database.php` with your database credentials.

5. Start your web server and access the project via the configured URL.

## Usage

- Register as a student or log in with existing credentials.

- Choose subjects and chapters of interest.

- Generate a study plan and personalize it.

- Browse and purchase courses.

- Monitor progress and practice with model papers.

- Engage in discussions and rate tutors.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the project.

## License

This project is licensed under the [MIT License](LICENSE).
