<?php
    if(!empty($_GET['id'])){
        include(__DIR__ . '/../../config/connect.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM `users` WHERE id = '$id';";
        mysqli_query($conn, $sql);
        header("location:/fashionconnect/backend/admin.php");
    }
?>