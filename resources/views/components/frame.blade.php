<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'PageTitle' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container p-4">
        <div class="row align-items-center">
            <div class="col-2">
                <a href="/">
                    <img src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=612x612&w=0&k=20&c=wtqvbQ6OIHitRVDPTtoT_1HKUAOgyqa7YzzTMXqGRaQ="
                        alt="Logo Picture" class="rounded-circle" style="width: 40px; height: 40px;">
                </a>
            </div>
            <div class="col-6 text-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active-link' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active-link' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('menu') ? 'active-link' : '' }}" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('book') ? 'active-link' : '' }}" href="/book">Book Now</a>
                    </li>
                </ul>
            </div>

            <div class="col-4 d-flex justify-content-end">
                <a href="#" class="icon-link"><i class="fas fa-user"></i></a>
                <a href="#" class="icon-link"><i class="fas fa-shopping-cart"></i></a>
                <a href="#" class="icon-link"><i class="fas fa-search"></i></a>
                <a href="#" class="btn btn-primary btn-orange">Order Online</a>
            </div>
        </div>
    <hr style="border: 1px solid white;"> <!-- Add a horizontal line as a separator -->

    </div>
    <div class="container p-4">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjvP/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
