<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="POST">
        @csrf
        <input type="text" name="first-name"><br>
        <input type="text" name="last-name"><br>
        <input type="email" name="email"><br>
        <input type="password" name="password"><br>
        <select name="type" id="">
            <option value="seller">Seller</option>
            <option value="buyer">Buyer</option>
            <option value="renter">Renter</option>
            <option value="landlord">Landlord</option>
        </select><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>