<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhà thiết kế</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style-designer.css">
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="/fashionconnect/assets/frontend/js/script-designer.js"></script>
</head>
<body>
    <div class="contanier">
    <header>
        <div class="logo">
            <img src="/fashionconnect/assets/frontend/img/logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a class="nav_item" href="/fashionconnect/home.php">Trang chủ</a></li>
                <li><a class="nav_item" href="/fashionconnect/frontend/pages/list_designers.php">Nhà Thiết kế</a></li>
                <li><a class="nav_item" href="/fashionconnect/frontend/pages/products.php">sản phẩm</a></li>
                <li><a class="nav_item" href="/fashionconnect/frontend/pages/support.php">liên hệ</a></li>  
            </ul>
        </nav>
        <div class="account_icon">
            <a href="/fashionconnect/frontend/login.php"><i class="fa-solid fa-circle-user fa-2xl"></i></a>
        </div>
    </header>
    <?php
    if(!empty($_GET['id'])){
        include('../../backend/config/connect.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM designer WHERE id_designer = '$id';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="information">
            <div class="avatar">
                <img src="/fashionconnect/backend/src/Controller/<?php echo $row['srcImg']?>" alt="avatar">
            </div>
            <div class="detail">
                <div id="in4-1">
                    <h2>Thông tin cá nhân</h2>
                    <p><?php echo $row['name_designer']; ?></p>
                    <p><?php echo $row['ttcn']; ?></p>
                </div>
                <div id="in4-2">
                    <h2>Kinh nghiệm làm việc</h2>
                    <p><?php echo $row['knlv']; ?></p>
                </div>
                <div id="in4-3">
                    <h2>Phong cách thiết kế</h2>
                    <p><?php echo $row['pctk']; ?></p>
                </div>  
            </div>
        </div>
        <div class="featured-products">
        <h2 id="name-product">Phong cách thiết kế tiêu biểu</h2>
            <div class="item-product">
                <?php
                include('../../backend/config/connect.php');
                $id = $_GET['id'];
                $sql = "SELECT p.srcImg 
                FROM products p 
                JOIN designer d ON p.id_ntk = d.id_designer 
                WHERE d.id_designer = '$id'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                ?>
                    <div class="image-product">
                        <img src="/fashionconnect/backend/src/Controller/<?php echo $row['srcImg']?>">
                    </div>
                    <?php }?>
                    <div class="button">
                        <button class="toggle-info" onclick="toggleInfo()"><p id="button"><i class='fas fa-angle-double-down'></i></p></button>
                        <?php
                        if(!empty($_GET['id'])){
                            include('../../backend/config/connect.php');
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM designer WHERE id_designer = '$id';";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <p class="info" style="display: none;"><?php echo $row['descript_designer']; ?></p>
                        <?php }}?>
                    </div>
            </div>
            
        </div>
        <?php }}
        else{
            echo "Không có thông tin";
        }
        ?>
        <footer>
        <h1 id="contact">Liên hệ</h1>
            <h2 id="contact_subtittle">Kết nối với chúng tôi</h2>
            <div id="contact_area">
                <ul id="contact_lists">
                    <li id="contact_list">
                        <p>-Bắc Từ Liêm, Hà Nội</p>
                    </li>
                        <li id="contact_list">
                        <p>-Phone: 0865503797</p>
                    </li>
                    <li id="contact_list">
                        <p>-Email: maixuandai178@gmail.com</p>
                    </li>
                </ul>
                <ul id="contact_icons">
                    <li id="contact_icon"><a href="https://www.facebook.com/kazuma.sato.7161"><i class="fa-brands fa-facebook"></i></a></li>
                    <li id="contact_icon"><a href="https://www.instagram.com/maiixdai/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li id="contact_icon"><a href="https://github.com/gordonrampay"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
    </footer>
    </div>
</body>
</html>