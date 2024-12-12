<?php 


session_start();


session_destroy();

echo "<script>alert('กำลังเข้าออกจากระบบ'); window.location.href='loby.php';</script>" ;


?>