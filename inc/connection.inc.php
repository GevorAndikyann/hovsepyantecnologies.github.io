<?php
include ("../config/db.php");
$connecting = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if (!$connecting) {
    echo "DB connecting error";
}