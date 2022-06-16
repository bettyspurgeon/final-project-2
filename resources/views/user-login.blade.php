<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Document</title>
</head>
<body>
    <form  class="form" action="" method="POST">
        @csrf
        <input class="forminput" id="first" type="email" name="email" placeholder="Email"><br>
        <input class="forminput" type="password" name="password" placeholder="Password"><br>
        <input class="forminput" type="submit" value="Login">
    </form>
</body>
</html>