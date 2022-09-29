<?php
session_start();
include("../inc/connection.inc.php");
include("../inc/functions.php");

$id = $_GET["id"];

$data = [
    "id" => $id
];
$result = select('users',$data,'*',1);
$user = mysqli_fetch_assoc($result);

$data = [
    'former_id' => $id,
    "firstname" => $user["firstname"],
    'lastname' => $user["lastname"],
    'phone' => $user["phone"],
    'email' => $user["email"],
    'country' => $user["country"],
    'addres' => $user["addres"],
    'productName' => $user["productName"],
];
$isOk = create('deleted_users', $data);
//var_dump($isOk);die;
if ($isOk) {
    if($id=="all"){
        $data = [
            "0" => 0
    ];
    }
    else{
        $data = [
            "id" => $id
        ];
    }
    $isDeleted =  delete('users',$data);
}

if ($isDeleted) {
    header('Location:../pages/userinfo.php');die;
}
