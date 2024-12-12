<?php 


$sever = "localhost";
$usre = "root" ;
$pass ="";
$db = "user";

$connect = new mysqli($sever,$usre,$pass,$db);

// if($connect->connect_error) {
//    echo $connect->connect_error;
// }else{
//     echo "no error" ;
// }


$connect->set_charset("utf-8");

?>