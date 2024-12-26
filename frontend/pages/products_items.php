<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stylist</title>
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style-product-item.css">
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="/fashionconnect/assets/frontend/js/js-product-item.js"></script>
</head>


<body>  
    <div class="container">
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
        <!-- sản phẩm -->
        <div class="product" >
            <div class="left_product">
                <div class="img_produc"> 
                    <div class="big_img">
                    <?php
                if(!empty($_GET['id'])){
                    include('../../backend/config/connect.php');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM products WHERE `id_product` = '$id'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <img class="img_main" src="/fashionconnect/backend/src/Controller/<?php echo $row['srcImg'];?>" alt="">
                <?php }}?>
                     </div>
                </div>
                 <div class="list">
                    <div class="prother">
                         <p>Những sản phẩm nổi bật</p>
                    </div>
                    <div class="sample">
                         <div class="img1"><button onclick="updateImg('img1')"> <img class="img1" src="/fashionconnect/assets/frontend/img/phong1.jpg" alt=""></button></div>
                         <div class="img2"><button onclick="updateImg('img2')"> <img class="img2" src="/fashionconnect/assets/frontend/img/hoodle3.jpg" alt=""></button></div>
                         <div class="img3"><button onclick="updateImg('img3')"> <img class="img3" src="/fashionconnect/assets/frontend/img/sweeter1.jpg" alt=""></button></div>
                         <div class="img4"><button onclick="updateImg('img4')"> <img class="img4" src="/fashionconnect/assets/frontend/img/somi3.jpg" alt=""></button></div>
                    </div>
                 </div>
            </div>
            
            <div class="right_product"> 
                <div>
                    <?php
                if(!empty($_GET['id'])){
                include('../../backend/config/connect.php');
                $id = $_GET['id'];
                $sql = "SELECT * FROM products WHERE `id_product` = '$id'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
    ?>
            
                    <div class="name_product">
                        <h2 id="name_product1"><?php echo $row['name_product'];?></h2>
                    </div>
                <!-- giá -->
                    <div class="price">
                        <h3>Giá:</h3>
                        <p id="price1"><?php echo $row['price_product'];?>$</p>
                    </div>  
                    <div class="type" >
                    <h2>Dạng sản phẩm:</h2>
                    <ul>
                        <li id="cc1"><?php echo $row['tittle']?></li>
                    </ul>
                     </div>
                     <?php }}?>
                    </div> 
                <!-- người thiết kế -->
                 <div>
                <div class="contact">      
                    <a href="/fashionconnect/frontend/pages/support.php"> Xác nhận liên hệ </a>
                </div>
                <div class="suport">
                    <a href="/fashionconnect/frontend/pages/support.php"> Nếu bạn gặp vẫn đề gì hãy ấn vào đây để liên hệ trợ giúp</a>
                </div>
                </div>

            </div>
        </div>
       
        <!-- danh sách sản phẩm -->
        <div class="list_product">

        </div>
    </div>
</body>
</html>