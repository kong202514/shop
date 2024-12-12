 <?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
    $u_name = $_POST['name'];
    $u_last_name = $_POST['last_name'];
    $u_age = $_POST['age'];
    $u_date = $_POST['date'];
    $u_email = $_POST['email'];
    $u_password = $_POST['password'];
    $u_re_password = $_POST['re_password'];

    // Validation checks
    if (empty($u_name)) {
        alertAndGoBack('กรุณาใส่ ชื่อ');
    } elseif (empty($u_last_name)) {
        alertAndGoBack('กรุณาใส่ นามสกุล');
    } elseif (empty($u_age)) {
        alertAndGoBack('กรุณาใส่ อายุ');
    } elseif (empty($u_date)) {
        alertAndGoBack('กรุณาใส่ วันเกิด');
    } elseif (empty($u_email)) {
        alertAndGoBack('กรุณาใส่ email');
    } elseif (empty($u_password)) {
        alertAndGoBack('กรุณาใส่ password');
    } elseif (empty($u_re_password)) {
        alertAndGoBack('กรุณา ยืนยันรหัสผ่าน');
    } elseif ($u_password !== $u_re_password) {
        alertAndGoBack('รหัสผ่านไม่ตรงกัน');
    } else {
        // Check if email already exists
        $query = $connect->prepare("SELECT * FROM register_user WHERE u_email = ?");
        $query->bind_param('s', $u_email);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            alertAndGoBack('email นี้ ใช้ไปแล้ว');
        } else {
            // Insert new user
            $stmt = $connect->prepare("INSERT INTO register_user (u_name, u_last_name, u_age, u_data, u_email, u_password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssisss', $u_name, $u_last_name, $u_age, $u_date, $u_email, $u_password);

            if ($stmt->execute()) {
                echo "1";
            } else {
                echo "0";
            }
        }
    }
}

// Helper function to show alert and go back
function alertAndGoBack($message) {
    echo "<script>alert('$message'); window.history.go(-1);</script>";
    exit;
}