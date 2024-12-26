<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/frontend/css/style.css">
    <style>
        .warning{
            color: red; 
        }
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
        h1{
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
    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div class="username">
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div class="submit">
            <input class="submitButton" type="submit" value="Đăng Nhập">
        </div>
    
    <?php
        include('../backend/config/connect.php');
        if(isset($_POST['username']) && isset($_POST['password'])){
            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];

            $sql="SELECT * FROM `users` WHERE user_name = '$tenDangNhap' AND password = '$matKhau'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                // session_start();
                // $_SESSION["key"] = $tenDangNhap;
                #Cú pháp chuyển đến 1 trang khác
                header('location: /fashionconnect/backend/admin.php');
            }
            else{
                echo "<p class='warning'>Tên đăng nhập hoặc mật khẩu không chính xác!</p>";
            }
        }
    ?>
    </form>
</html>