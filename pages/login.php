<?php
session_start();
include ("../layout/header_login.php")
?>

<div class="container">
<div class="d-flex justify-content-center h-100">
    <div class="card">
        <div class="card-header">
            <h3>Sign In</h3>
        </div>
<div class="card-body">
<form class="login-form" action="../actions/loginAction.php" method="post">
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input name="email" type="email" class="form-control" placeholder="username">

    </div>
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input name="password" type="password" class="form-control" placeholder="password">
    </div>
    <div class="row align-items-center remember">
        <input type="checkbox">Remember Me
    </div>
    <div class="form-group">
        <input type="submit" name = "Login" value="Login" class="btn float-right login_btn">
    </div>
</form>
</div>
        <span><?php echo $_SESSION['error']['login']; ?></span>
    </div>
</div>


<?php
include ("../layout/footer_login.php")

?>








<!--<!DOCTYPE html>-->
<!--<html lang="utf-8">-->
<!---->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="../css/style1.css">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="log">-->
<!--    <h1>-->
<!--         Sign in to Website-->
<!--    </h1>-->
<!--    <form class="login-form" action="../actions/loginAction.php" method="post">-->
<!--        <input type="email" class="username" name="email" autofocus="true" required="true" placeholder="Email" />-->
<!--        <input type="password" class="password" name="password" required="true" placeholder="Password" />-->
<!--        <input id="check" type="checkbox" class="check" checked>-->
<!--        <label for="check" id="checkLabel"> Keep me Signed in</label>-->
<!--        <input type="submit" id="loginSubmit" name="Login" value="Sign In" class="submit" />-->
<!--        <a href=".." id="RegistrationSubmit" >-->
<!--            <input type="button" id="RegistrationSubmit" name="Registration" value="Registration" class="submit" />-->
<!--        </a>-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->