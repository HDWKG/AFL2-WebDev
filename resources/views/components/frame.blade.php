<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'PageTitle' }}</title>
    <link rel="icon"
        href="https://static.vecteezy.com/system/resources/previews/008/480/737/original/burger-icon-simple-colored-burger-icon-fast-food-logo-free-png.png"
        type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/nav_welcome_style.css') }}">
    <style>
        ::-webkit-scrollbar {
            width: 1em;
            border-radius: 2em;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
            margin-block: .5em;
            border-radius: 2em;
        }

        ::-webkit-scrollbar-thumb {
            background-image: url("https://i.pinimg.com/originals/47/54/32/475432e58b578f20c84931371ec5c65f.png");
            background-size: cover;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 0, 0, 75%);
            border-radius: 2em;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(235, 0, 0, 100%);
            background-size: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://static.vecteezy.com/system/resources/previews/008/480/737/original/burger-icon-simple-colored-burger-icon-fast-food-logo-free-png.png"
                    alt="Logo Picture" class="logo" />
                <h3 class="company-name">Fast Delight</h3>
            </a>

            <button class="navbar-toggler custom-toggler-icon" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
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
            <a href="#" class="btn btn-primary btn-orange">Order Online</a>
        </div>
    </nav>
    <hr style="border: 1px solid white;">
    </div>
    <div class="container p-4">
        {{ $slot }}
    </div>
    {{ $layout_image }}
    <div class="container p-4">
        {{ $slot_about }}
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>order online</h4>
                    <ul>
                        <li><a href="#">Shopee Food</a></li>
                        <li><a href="#">Gojek</a></li>
                        <li><a href="#">Grab</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="fas fa-angle-up" id="scroll-top"></a>
    <script>
        window.onscroll = () => {
            if (window.scrollY > 60) {
                document.querySelector('#scroll-top').classList.add('active');
            } else {
                document.querySelector('#scroll-top').classList.remove('active');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjvP/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
