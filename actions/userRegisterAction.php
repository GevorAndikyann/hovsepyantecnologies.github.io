<?php session_start();
include("../inc/connection.inc.php");
include("../inc/functions.php");
$email  = $_POST["email"];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.apilayer.com/email_verification/check?email=$email",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: text/plain",
        "apikey: {API-KEY}"
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST"
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
//$email = $_POST['email'];
//
//if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//
//    echo("invalid format");
//}
//$api_key = "YOUR_UNIQUE_API_KEY";
//$ch = curl_init();
//curl_setopt_array($ch, [
//    CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_FOLLOWLOCATION => true,
//]);
//
//$response = curl_exec($ch);
//curl_close($ch);
//$data = json_decode($response,true);
////var_dump($data);die;
//if ($data['deliverability'] === "UNDELIVERABLE") {
//    exit("Undeliverable");
//}
//
//if ($data["is_disposable_email"]["value"] === true) {
//    exit("Disposable");
//}
//echo "email address is  valid";
//
//
//$ch = curl_init();
//
//curl_setopt_array($ch, [
//    CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1?api_key=$api_key&email=$email",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_FOLLOWLOCATION => true
//]);
//
//$response = curl_exec($ch);
//
//curl_close($ch);
//
//$data = json_decode($response, true);
//
//if ($data['deliverability'] === "UNDELIVERABLE") {
//
//    exit("Undeliverable");
//
//}
//
//if ($data["is_disposable_email"]["value"] === true) {
//
//    exit("Disposable");
//
//}
//
//echo "email address is valid";

//$email = $_POST["email"];
//if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
//    $_SESSION["error"]["email"] ='<i class="fas fa-times-circle FalseIcon" id="FalseIcons" style="color: red; display: inline-block"></i> <p style="color: red; display: inline-block">Email is INVALID</p>';
//}

//$api_key = "YOUR_UNIQUE_API_KEY"

$regexPhone = "/^[+374]{4}(\s|-)[\d]{2}(\s|-)[\d]{2}(\s|-)[\d]{2}(\s|-)[\d]{2}|((([+374]{4})(\s|-)(\d{2})(\s|-)(\d{3})(\s|-)(\d{3})){1})$/";
///^[+374]{4}\s?\d{2}\s?[\d]{3}\s?[\d]{3}$/;
if (isset($_POST['phone']) && !empty($_POST['phone'])) {
    $Tel  = $_POST ['phone'];
    if (preg_match($regexPhone,$Tel)){
        $_SESSION['dates']["tel"] = $Tel;
        unset($_SESSION['error']['phone']);
    } else {
        header("location:../pages/".$_SESSION["productName"].".php##userData");
        unset($_SESSION['dates']["tel"]);
        $_SESSION['error']['phone'] = '<i class="fas fa-times-circle FalseIcon" id="FalseIcons" style="color: red; display: inline-block"></i> <p style="color: red; display: inline-block">Please write correct ex.(+374 00 000 000)</p>';
        die;
    }
} else {
    $_SESSION['error']['phone'] = '<i class="fas fa-times-circle FalseIcon" id="FalseIcons"></i> Tel is required';
}
$data = [
    "firstname" => $_POST["firstname"],
    'lastname' => $_POST["lastname"],
    'phone' => $Tel ,
    'email' => $_POST["email"],
//    'address' => $_POST["address"],
    'productName' => $_SESSION["productName"],
];
//var_dump($data);die;
$isOk = create('users',$data);
if($isOk){
    header("Location: ../pages/products.php");die;
} else {
    header("Location: ../pages/".$_SESSION["productName"].".php");die;
}