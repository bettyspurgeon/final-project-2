<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/template.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <img src="https://thumbs.dreamstime.com/b/luxembourg-famous-travel-sketch-lineart-drawing-hand-greeting-card-design-vector-illustration-luxembourg-famous-travel-sketch-103524997.jpg"
                alt="">
            <ul class="navlist">
                <li><a href="/">Contact</a></li>
                <li><a href="/">About Us</a></li>
                <li><a href="/">Register</a></li>
                @if (session()->has('email'))
                <li>
                    <a href="/logout">Logout</a>
                </li>
            @else
                <li>
                    <a href="/login">Login</a>
                </li>
            @endif
            </ul>
        </nav>
    </header>




    <main>@yield('content')</main>






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

                <h1>Follow us</h1>
                <ul class="social-list">
                    <li><a href=""><img class="social-icons" src="css/assets/facebook-icon.png" /></a></li>
                    <li><a href=""><img class="social-icons" src="css/assets/instagram-icon.svg" /></a></li>
                    <li><a href=""><img class="social-icons" src="css/assets/twitter-icon.svg" /></a></li>
                </ul>
            </section>
        </div>

        <div class="copy">
            <p>© copyright MatchHome 2022</p>
        </div>

    </footer>
</body>

</html>