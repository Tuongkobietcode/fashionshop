<?php
if(!empty($_POST['name']) &&
   !empty($_POST['user_name']) &&
   !empty($_POST['password'])) {

    include(__DIR__ . '/../../config/connect.php');
    $name = $_POST['name'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $sql="INSERT INTO `users`(`name`, `user_name`, `password`) VALUES ('$name','$username','$password');";
    mysqli_query($conn, $sql);
    header('location:/fashionconnect/backend/admin.php');
}
else{
    echo "Vui lòng nhập đầy đủ thông tin";
}
?>