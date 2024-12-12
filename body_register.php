<?php 

include "head_register.php"
?>

<body>

    <br>

    <form action="prosed_register.php" method="POST">

        <center>

            ชื่อ
            <br>
            <input type="text" name="name"><br>

            นามสกุล
            <br>
            <input type="text" name="last_name"><br>

            อายุ
            <br>
            <input type="number" name="age"><br>

            วัน/เดือน/ปี เกิด
            <br>
            <input type="date" name="date"><br>

            email
            <br>
            <input type="email" name="email" id=""><br>

            รหัสผ่าน
            <br>
            <input type="password" name="password" id=""><br>


            ยืนยันรหัสผ่าน
            <br>
            <input type="password" name="re_password" id=""><br>

            <input type="submit" value="สมัคสมาชิก" name="submit">

        </center>
    </form>





</body>

</html>