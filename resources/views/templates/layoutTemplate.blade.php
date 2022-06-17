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
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/home">
                <img src="{{ asset('css/assets/logo.png') }}" alt="">
            </a>
            <ul class="navlist">

                @if (session()->has('email'))
                    <li>
                        <a href="/">Help</a>
                    </li>
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>

                    </li>
                @else
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Contact</a></li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li><a href="/register">Register</a></li>
                @endif
            </ul>


            <button class="show-nav-list">
                <img src="{{ asset('css/assets/navbar-menu-icon.png') }}">
            </button>
        </nav>
    </header>




    <main class="main-content">@yield('content')</main>






    <footer class="footer">

        <div class="main-part">


            <section class="stuff">
                <h1>Stuff</h1>
                <ul class="stuff-list">
                    <li><a href="">Home</a> </li>
                    <li><a href="">Contact</a> </li>
                    <li><a href="">Become a partner</a> </li>
                    <li><a href="">About us</a> </li>
                </ul>
            </section>

            <section class="something">
                <h1>Subscribe for our newsletter</h1>
                <form action="">
                    <input type="text" name="email-subs" placeholder="Email">
                    <input type="submit" name="subsBtn" value=subscribe>
                </form>
            </section>

            <section class="social-media">

                <h1 class="subscribe">Follow us</h1>
                <ul class="social-list">
                    <li><a href=""><img class="social-icons" src="{{ asset('css/assets/facebook-icon-white.png') }}"
                                alt="facebook icon" /></a></li>
                    <li><a href=""><img class="social-icons"
                                src="{{ asset('css/assets/linkedin-icon-white.png') }}"
                                alt="Instagram icon" /></a></li>
                    <li><a href=""><img class="social-icons"
                                src="{{ asset('css/assets/instagram-icon-white.png') }}"
                                alt="Instagram icon" /></a></li>
                </ul>
            </section>
        </div>

        <div class="copy">
            <p>© copyright MatchHome 2022</p>
        </div>

    </footer>
</body>

</html>
