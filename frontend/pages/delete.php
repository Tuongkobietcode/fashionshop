<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fashionconnect_thang";
$port = 4307;

$conn = mysqli_connect($servername, $username, $password, $database, $port);
if (!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `contact` WHERE id_request = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: contact.php');
    } else {
        echo"error delete";
    }
}

?>