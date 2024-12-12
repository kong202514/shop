<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
session_start();

if ($_SESSION['email'] == "") {

    echo "<script> window.location.href='loby.php';</script>" ;

} 


?>

    <style>
    body {

        background-color: greenyellow;

    }
    </style>
</head>

<body>
    hi user
    <a href="logout.php">
        <button>logout</button>
    </a>

</body>

</html>