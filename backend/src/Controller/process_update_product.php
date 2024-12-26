<?php
    if(!empty($_POST['name_product'])&&
    !empty($_GET['id'])&&
    !empty($_POST['price_product'])&&
    !empty($_POST['quantity'])&&
    !empty($_POST['tittle'])
    ){   
        include(__DIR__ . '/../../config/connect.php');
        $id = $_GET['id'];
        $name_product = $_POST['name_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity'];
        $tittle = $_POST['tittle'];
    
        $sql =" UPDATE `products` SET `name_product`='$name_product',`price_product`='$price',`tittle`='$tittle',`quantity`='$quantity' WHERE `id_product` = '$id';";
        mysqli_query($conn, $sql);
        header('location:/fashionconnect/backend/admin.php');
    }else{
        echo "Vui lòng nhập";
    }
?>