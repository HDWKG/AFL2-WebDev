<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc-dDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .profile-details {
            margin-top: 20px;
        }

        .profile-details h1 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .profile-details p {
            font-size: 12px;
        }

        .course-list {
            margin-top: 20px;
        }

        .course-list h2 {
            font-size: 20px;
        }

        .course-list ul {
            list-style: none;
            padding: 0;
        }

        .course-list li {
            font-size: 12px;
            margin-bottom: 10px;
        }

        .course-list a {
            text-decoration: none;
            color: #007BFF;
        }

        .username-link {
            font-size: 16px;
            padding-left: 10px;
        }

        .profile-image img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .profile-image {
            float: left;
            margin-right: 20px;
        }

        .black-arrow {
            color: black;
            text-decoration: none; 
            font-size: 25px; 
        }
    </style>
</head>

<body>
    <div class="profile-container p-4">
        <div class="profile-details">
            <!-- Add the text "Dashboard" next to the back arrow -->
            <a href="/" class="btn btn-primary mb-3 black-arrow">←</a>
            <div class="d-flex align-items-center">
                <div class="profile-image">
                    <a href="/">
                        <img src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=612x612&w=0&k=20&c=wtqvbQ6OIHitRVDPTtoT_1HKUAOgyqa7YzzTMXqGRaQ="
                            alt="Profile Picture" class="rounded-circle">
                    </a>
                </div>
                <div class="username-link">
                    <h1 class="display-4">0706012210034 John Doe</h1>
                </div>
            </div>
            <p class="lead">Email: johndoe@example.com</p>
            <p class="lead">Country: Indonesia</p>
            <p class="lead">Study Program: Computer Science</p>
        </div>

        <div class="course-list">
            <h2 class="display-5">My Courses</h2>
            <ul>
                <li class="lead"><a href="#">Course 1: Introduction to Programming</a></li>
                <li class="lead"><a href="#">Course 2: Web Development Fundamentals</a></li>
                <li class="lead"><a href="#">Course 3: Data Structures and Algorithms</a></li>
                <li class="lead"><a href="#">Course 4: Database Management</a></li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q-zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
