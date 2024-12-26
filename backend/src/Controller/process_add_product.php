<?php
if(!empty($_POST['name'])
    && !empty($_POST['price'])
    && !empty($_POST['tittle'])
    && !empty($_POST['quantity'])){
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $tittle = $_POST['tittle'];
    $quantity = $_POST['quantity'];
    $ntk = $_POST['ntk'];

    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); 
    }
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "File không phải là ảnh.";
                    $uploadOk = 0;
                }
            }
    
            
            if (file_exists($target_file)) {
                echo "File này đã tồn tại trên hệ thông";
                $uploadOk = 2;
            }
    
            
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "File quá lớn";
                $uploadOk = 0;
            }
    
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                $uploadOk = 0;
            }
            
            if($uploadOk == 0){
                echo "File của bạn chưa được tải lên";
            }
            else{
                $sql =  "";
                if($uploadOk == 1){
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $image_path = $target_file;
                        $sql="INSERT INTO `products`(`name_product`, `price_product`, `tittle`,`id_ntk`, `srcImg`, `quantity`) VALUES ('$name','$price','$tittle','$ntk','$image_path','$quantity')";
                    }
                }
                else{
                    $image_path = $target_file;
                    $sql="INSERT INTO `products`(`name_product`, `price_product`, `tittle`,`id_ntk`, `srcImg`, `quantity`) VALUES ('$name','$price','$tittle','$ntk', '$image_path', '$quantity')";
                }
                include(__DIR__ . '/../../config/connect.php');
                mysqli_query($conn, $sql);
                header('location:/fashionconnect/backend/admin.php');
            }
        }

?>