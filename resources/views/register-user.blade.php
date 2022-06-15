<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
    <form action="" method="POST">
        @csrf
        <input type="text" name="first_name" placeholder="first name"><br>
        <input type="text" name="last_name" placeholder="last name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <select name="type" id="">
            <option disabled selected value> -- select an option -- </option>
            <option value="seller">Seller</option>
            <option value="buyer">Buyer</option>
            <option value="renter">Renter</option>
            <option value="landlord">Landlord</option>
        </select><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>
