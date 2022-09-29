<?php
session_start();
include("../inc/connection.inc.php");
include("../inc/functions.php");

$id = $_GET["id"];

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

$isDeleted =  delete('deleted_users',$data);


if ($isDeleted) {
    header('Location:../pages/recycleBin.php');die;
}
