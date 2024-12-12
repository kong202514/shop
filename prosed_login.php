<?php
// 

// echo "<pre>". var_dump($u_email) . "</pre>";
// exit();
include 'connect.php';
session_start();



/// ใช้ เช็ค data

if(isset($_POST['submit'])) {

    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    $query_user_email = mysqli_query($connect, "SELECT * FROM register_user WHERE 	u_email = '$user_email'  ");
    $query_user_password = mysqli_query($connect, "SELECT * FROM register_user WHERE 	u_password = '$user_password'  ");
    $user_email = mysqli_num_rows($query_user_email);
    $user_password = mysqli_num_rows($query_user_password);

if($user_email == 1) {
if ($user_password == 1 ) {
$_SESSION['email']= $user_email;
    echo "<script>alert('กำลังเข้าสู่ระบบ'); window.location.href='home.php';</script>" ;
} else {
    echo "<script>alert('รหัสผ่านผิด '); 
    window.history.go(-1);
    </script>";
}

    } else {
        echo "<script>alert('ไม่พบ email'); 
        window.history.go(-1);
        </script>";
    }


}