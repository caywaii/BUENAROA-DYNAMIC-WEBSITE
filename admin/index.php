<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/loginadmin.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="../assets/img/logobuena.png" alt="">
        </div>
        <br>
        <form class="p-3 mt-3" method="POST" action="backend/login.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <input type="submit" value="Login" name="submit" id="submit" class="btn mt-3"></input>
        </form>
    </div>
</body>
</html>

