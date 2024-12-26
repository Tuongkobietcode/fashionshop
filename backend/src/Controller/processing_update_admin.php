<?php
    if(!empty($_POST['name'])&&
    !empty($_POST['user_name'])&&
    !empty($_POST['password'])&&
    !empty($_GET['id'])){
        include(__DIR__ . '/../../config/connect.php');
        $id = $_GET['id'];
        $name = $_POST['name'];
        $username = $_POST['name'];
        $password = $_POST['password'];
        $sql = "UPDATE `users` SET `name`='$name',`user_name`='$username',`password`='$password' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('location:/fashionconnect/backend/admin.php');
    }
    else{
        echo "Vui lòng nhập đầy đủ thông tin";
    }
?>