<!DOCTYPE html>
<html>

<head>
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .username-link {
            text-decoration: none; 
            color: black;
            font-size: 18px; 
            padding-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-6">
                <a href="/">
                    <img src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=612x612&w=0&k=20&c=wtqvbQ6OIHitRVDPTtoT_1HKUAOgyqa7YzzTMXqGRaQ="
                        alt="Logo Picture" class="rounded-circle" style="width: 40px; height: 40px;">
                </a>
            </div>
            <div class="col-6 text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="me-2">
                        <div class="dropdown">
                            <a href="#" class="username-link dropdown-toggle" id="usernameDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                0706012210034 John Doe <!-- Replace with the user's name -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="usernameDropdown">
                                <li><a class="dropdown-item" href="/userProfile">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="/userProfile">
                        <img src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=612x612&w=0&k=20&c=wtqvbQ6OIHitRVDPTtoT_1HKUAOgyqa7YzzTMXqGRaQ="
                            alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- The rest of your page content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
