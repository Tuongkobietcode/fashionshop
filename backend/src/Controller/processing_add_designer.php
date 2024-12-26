
<?php
if(!empty($_POST['name_designer']) &&
   !empty($_POST['ttcn']) &&
   !empty($_POST['knlv']) &&
   !empty($_POST['pctk']) &&
   !empty($_POST['tittle']) &&
   !empty($_POST['descript_desginer']) &&
   !empty($_FILES['image']['tmp_name']) 
   ) {

    include(__DIR__ . '/../../config/connect.php');

    $name_designer = mysqli_real_escape_string($conn, $_POST['name_designer']);
    $ttcn = mysqli_real_escape_string($conn, $_POST['ttcn']);
    $knlv = mysqli_real_escape_string($conn, $_POST['knlv']);
    $descript_designer = mysqli_real_escape_string($conn, $_POST['descript_desginer']);
    $pctk = mysqli_real_escape_string($conn, $_POST['pctk']);
    $tittle = mysqli_real_escape_string($conn, $_POST['tittle']);

    // Xử lý file ảnh
    $target_dir ='uploads/'; // Thư mục lưu trữ ảnh
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra xem file có phải là ảnh không
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File là ảnh - " . $check["mime"] . ".";
    } else {
        echo "File không phải là ảnh.";
        $uploadOk = 0;
    }

    // Kiểm tra kích thước file
    if ($_FILES["image"]["size"] > 500000) { // Giới hạn kích thước 500KB
        echo "Xin lỗi, file của bạn quá lớn.";
        $uploadOk = 0;
    }

    // Kiểm tra định dạng file
    if(!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Xin lỗi, chỉ cho phép các định dạng JPG, JPEG, PNG & GIF.";
        $uploadOk = 0;
    }

    // Kiểm tra xem $uploadOk có được thiết lập thành 0 do lỗi
    if ($uploadOk == 0) {
        echo "Xin lỗi, file của bạn không được upload.";
    } else {
        // Nếu mọi thứ đều ổn, cố gắng upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES["image"]["name"])). " đã được upload.";

            // Lưu thông tin vào cơ sở dữ liệu
            $sql = "INSERT INTO `designer` (`name_designer`, `ttcn`, `knlv`, `pctk`, `descript_designer`,`srcImg`,`tittle`) 
        VALUES ('$name_designer', '$ttcn', '$knlv', '$pctk', '$descript_designer','$target_file','$tittle')";
            if (mysqli_query($conn, $sql)) {
                header('location:/fashionconnect/backend/admin.php');
            } else {
                echo "Lỗi: " . mysqli_error($conn);
            }
        } else {
            echo "Xin lỗi, đã xảy ra lỗi khi upload file của bạn.";
        }
    }
} else {
    echo "Vui lòng nhập đủ thông tin";
}
?>