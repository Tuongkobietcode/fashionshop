<?php
    
        $id = $_GET['id_product'];
        include(__DIR__ . '/../../config/connect.php');
        $sql = "DELETE FROM `products` WHERE `id_product` = '$id'";
        mysqli_query($conn, $sql);
        header('location:/fashionconnect/backend/admin.php');
   
?>