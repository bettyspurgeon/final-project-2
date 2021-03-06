<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match Home</title>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/home">
                <img class="nav-logo" src="{{ asset('css/assets/logo.png') }}" alt="">
            </a>
            <ul class="navlist">

                @if (session()->has('email'))
                    <li>
                        <a href="/contact">Help</a>
                    </li>
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>

                    </li>
                @else
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li><a href="/register">Register</a></li>
                @endif
            </ul>

            <div class="container-menu" onclick="myFunction(this),toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>


        </nav>
    </header>


    <div class="hidden-menu">
        <ul class="menu-box" id="menu-box">
            @if (session()->has('email'))
                <li>
                    <a href="/contact">Help</a>
                </li>
                <li>
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/logout">Logout</a>

                </li>
            @else
                <li><a href="/aboutus">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li>
                    <a href="/login">Login</a>
                </li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>

    <main class="main-content">@yield('content')</main>


    <footer class="footer">

        <div class="footer-container">


            <div class="actions">
                <h1 class="footer-headers">Need help?</h1>
                <ul class="actions-list">
                    <li><a href="/">Home</a> </li>
                    <li><a href="/contact">Contact</a> </li>
                    <li><a href="/">Become a partner</a> </li>
                    <li><a href="/aboutus">About us</a> </li>
                </ul>
            </div>

            <div class="newsletter">
                <h1 class="footer-headers">Subscribe for our newsletter</h1>
                <form class="form-container"action="">
                    <input class="subs-email"type="text" name="email-subs" placeholder="Email">
                    <input class="subs-submit-btn"type="submit" name="subsBtn" value=Subscribe!>
                </form>
            </div>

            <div class="social-media">

                <h1 class="footer-headers">Follow us</h1>
                <ul class="social-list">
                    <li><a href=""><img class="social-icons"
                                src="{{ asset('css/assets/facebook-icon-white.png') }}" alt="facebook icon" /></a>
                    </li>
                    <li><a href=""><img class="social-icons"
                                src="{{ asset('css/assets/linkedin-icon-white.png') }}" alt="Instagram icon" /></a>
                    </li>
                    <li><a href=""><img class="social-icons"
                                src="{{ asset('css/assets/instagram-icon-white.png') }}" alt="Instagram icon" /></a>
                    </li>

                </ul>



            </div>
        </div>

        <!--  -->

    </footer>
    <div class="copy">
        <p>&copy; copyright MatchHome 2022</p>
    </div>

    <script type="text/javascript" src="{{ asset('js/template.js') }}"></script>

</body>

</html>
