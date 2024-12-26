<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style.css">
    <style>
          body{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: var(--primary-color);
        }
        form{
            width: 400px;
            border: solid 2px #000;
            height: 400px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px;
        }
        h2{
            text-transform: uppercase;
            background: linear-gradient(90deg, #ff7b00, #ff007f, #007fff);
            -webkit-background-clip: text; 
            color: transparent;
            margin-bottom: 30px;
        }

        .username , .password , .submit {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        input{
            padding: 15px;
            width: 80%;
            border-radius: 20px;
        }

        .submitButton{
            padding: 10px 15px;
            width: 30%;
            background-color: #007fff;
            color: #fff;
            transition: all 0.5s ease-in-out;
            margin-bottom: 10px;
        }

        .submitButton:hover{
            scale: 1.2;
            background: #ff007f;
        }
    </style>
</head>
<body>
    <?php
        if(!empty($_GET['id'])){
            include(__DIR__ . '/../../config/connect.php');
            $id = $_GET['id'];
            $sql = "select * from users WHERE id='$id'; " ;
            mysqli_query($conn, $sql);
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="/fashionconnect/backend/src/Controller/processing_update_admin.php?id=<?php echo $row['id'] ?>" method="post">
        <h2>Cập nhật thông tin admin</h2>
        <input type="text" placeholder="Tên admin" name="name" value="<?php echo $row['name'] ?>">
        <input type="text" placeholder="Tên đăng nhập" name="user_name" value="<?php echo $row['user_name'] ?>">
        <input type="text" placeholder="Mật khẩu" name="password" value="<?php echo $row['password'] ?>">
        <input class="submitButton" type="submit" value="Thay đổi"></input>
    </form>
    <?php }} ?>
</body>
</html>