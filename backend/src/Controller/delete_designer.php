<?php
    if(!empty($_GET['id_designer'])){
        $id = $_GET['id_designer'];
        include(__DIR__ . '/../../config/connect.php');
        $sql = "DELETE FROM `designer` WHERE `id_designer` = '$id'";
        mysqli_query($conn, $sql);
        header('location:/fashionconnect/backend/admin.php');
    }
    else{
        
    }
?>