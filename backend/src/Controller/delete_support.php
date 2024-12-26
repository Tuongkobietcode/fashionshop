<?php

include(__DIR__ . '/../../config/connect.php');

if (!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM contact WHERE id_request = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: /fashionconnect/backend/admin.php');
    } else {
        echo"error delete";
    }
}

?>

