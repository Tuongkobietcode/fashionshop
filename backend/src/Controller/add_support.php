<?php
include(__DIR__ . '/../../config/connect.php');

if (!empty($_POST['lastname'])
&& !empty($_POST['firstname'])
&& !empty($_POST['email'])
&& !empty($_POST['phone'])
&& !empty($_POST['message'])) {
    $name = $_POST['lastname'] ." ". $_POST['firstname']; //nối chuỗi 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $content = $_POST['message'];

    $sql = "INSERT INTO `contact`(`name`, `mail`, `phone`, `content`) VALUES ('$name','$email','$phone','$content')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: /fashionconnect/frontend/pages/support.php');
    }
}
?>