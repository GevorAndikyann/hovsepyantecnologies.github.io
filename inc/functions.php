<?php
include("../inc/connection.inc.php");
/*
 * @param Data $data fields and values
 * @return boolean
 * */
function create($table, $data){
    $fieldsArr = [];
    $valuesArr = [];
    foreach ($data as $field => $value){
        $fieldsArr[] = '`'.$field.'`';
        $valuesArr[] = "'".$value."'";
    }
    $fields = implode(',',$fieldsArr);
    $values = implode(',',$valuesArr);
    $sql = "INSERT INTO `$table` ($fields) VALUES ($values)";
//    var_dump($sql);die;
    return query($sql);
}


function edit($table,$data,$where){
    $fieldsArr = [];
    foreach ($data as $field => $value){
        $fieldsArr[] = '`'.$field."`='".$value."'";

    }
    $fields = implode(',',$fieldsArr);
    $conditionArr = [];
    foreach ($where as $field => $value){
        $conditionArr[] = '`'.$field.'`='.$value;
    }
     $condition = implode(' AND ',$conditionArr);
    $sql = "UPDATE `$table` SET $fields WHERE $condition";
    return query($sql);
}


function delete($table,$where){

    $conditionArr = [];
    foreach ($where as $field => $value){
        $conditionArr[] = '`'.$field.'`='.$value;
    }
    $condition = implode(' AND ',$conditionArr);
    $sql = "DELETE FROM `$table` WHERE $condition";
    return query($sql);
}
//
//function select($table,$where,$what = '*',$limit){
//    $conditionArr = [];
//    foreach ($where as $field => $value){
//        $conditionArr[] = '`'.$field.'`='.$value;
//    }
//    $condition = implode(' AND ',$conditionArr);
//    $fieldsArr = [];
//    $valuesArr = [];
//    foreach ($where as $field => $value){
//        $fieldsArr[] = '`'.$field.'`';
//        $valuesArr[] = "'".$value."'";
//    }
//    $fields = implode(',',$fieldsArr);
//    $values = implode(',',$valuesArr);
//    if (isset($order)==true && empty($order)==false){
//        $sql = "SELECT $what FROM `$table` WHERE  $condition LIKE '$order' LIMIT  $limit";
//    }else if (isset($limit)==true && empty($limit)==false){
//        $sql = "SELECT $what FROM `$table` WHERE  $condition";
//    }
//    else{
//        $sql = "SELECT $what FROM `$table` WHERE  $condition LIMIT  $limit";
//    }
////    var_dump($sql);die;
//    return query($sql);
//}




function select($table,$where = 1,$what = '*',$limit = 99999*9*9*9*9,$order=""){
    $conditionArr = [];
    foreach ($where as $field => $value){
        $conditionArr[] = "`".$field."`='".$value."'";
    }
    $condition = implode(' AND ',$conditionArr);

    if (isset($order)==true && empty($order)==false){
//        $sql = "SELECT $what FROM `$table` WHERE  $condition LIKE '$order' LIMIT  $limit";
        $sql = "SELECT $what FROM `$table` WHERE $condition ORDER BY $order DESC LIMIT $limit";
    }
    else{
        $sql = "SELECT $what FROM `$table` WHERE  $condition LIMIT  $limit";
//        var_dump($sql);die;
    }
//    var_dump($sql);die;
    return query($sql);
}


function query($sql){
    global $connecting;
    return mysqli_query($connecting,$sql);
}