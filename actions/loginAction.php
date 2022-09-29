<?php
session_start();
include("../inc/connection.inc.php");
include("../inc/functions.php");

if (isset($_POST["email"])) {
        $email = $_POST["email"];
    unset($_SESSION["error"]["login"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error']['login'] = '<p style="color: red">Email or Password is required<p/>';
    }
    unset($_SESSION['error']["login"]);

} else {
    $_SESSION['error']['login'] = '<p style="color: red">Email or Password is required<p/>';
}

if (isset($_POST['password'])) {
    $password = $_POST["password"];
    unset($_SESSION["error"]["login"]);
} else {
    $_SESSION['error']['login'] = '<p style="color: red">Email or Password is required<p/>';
//    $_SESSION["error"]["login"] = '<i class="fas fa-times-circle FalseIcon" id="FalseIcons"></i> Password is required';
}

$date = [
    "email" => $email,
];

$result = select('admin_info',$date,'*',1);
$user = mysqli_fetch_assoc($result);

if (password_verify($_POST['password'],$user["password"])) {
    $_SESSION['user_id'] = $user['id'];
    unset($_SESSION['error']['login']);
    header('Location:../pages/userinfo.php');die;
} else {
    $_SESSION['error']['login'] = '<p style="color: red">Email or Password is required<p/>';
    header('Location:../pages/login.php');die;
}


