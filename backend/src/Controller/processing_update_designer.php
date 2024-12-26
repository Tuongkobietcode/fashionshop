<?php
    if(!empty($_POST['name_designer'])&&
    !empty($_GET['id'])&&
    !empty($_POST['ttcn'])&&
    !empty($_POST['knlv'])&&
    !empty($_POST['pctk'])&&
    !empty($_POST['descript'])&&
    !empty($_POST['tittle'])){   
        include(__DIR__ . '/../../config/connect.php');
        $id = $_GET['id'];
        $name_designer = $_POST['name_designer'];
        $ttcn = $_POST['ttcn'];
        $knlv = $_POST['knlv'];
        $pctk = $_POST['pctk'];
        $descript = $_POST['descript'];
        $tittle = $_POST['tittle'];
        $sql = "UPDATE `designer` SET `name_designer`='$name_designer',`descript_designer`='$descript',`ttcn`='$ttcn',`knlv`='$knlv',`pctk`='$pctk',`tittle`='$tittle' WHERE id_designer = '$id';";
        mysqli_query($conn, $sql);
        header('location:/fashionconnect/backend/admin.php');
    }else{
        echo "Vui lòng nhập";
    }
?>