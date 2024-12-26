<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Design</title>
    <link rel="stylesheet" href="assets/frontend/css/style-home.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="assets/frontend/js/script-home.js"></script>
</head>
<body>
    <?php
    include("backend/config/connect.php")
    ?>
    <header>
        <div class="logo">
            <img src="assets/frontend/img/logo.png" alt="logo">
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
    <div id="slider">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/frontend/img/slide_1_img.webp" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/frontend/img/slide_2_img.webp" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/frontend/img/slide_3_img.webp" alt="Image 3">
                </div>
            </div>
            </div>
    </div>
    <div class="content">
    <div id="section_1"> 
            <h2 id="tittle_section"><a href="">Sản phẩm nổi bật</a></h2> 
            <div id="carts">
            <?php
                $sql="Select * from products";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
                <div id="product-card">
                    <img src="/fashionconnect/backend/src/Controller/<?php echo $row['srcImg'] ?>" alt="Product Image" id="product-image">
                    <div id="product-details">
                        <h2 id="product-title"><?php echo $row['name_product'] ?></h2>
                        <p id="product-description"><?php echo $row['tittle'] ?></p>
                        <p id="product-price"><?php echo $row['price_product'] ?></p>
                        <?php
                        $id0 = $row['id_ntk'];
                        $sql0 = "SELECT d.name_designer
                        FROM designer d
                        JOIN products p  ON d.id_designer =  p.id_ntk
                        WHERE d.id_designer = '$id0'";
                        $result0 = mysqli_query($conn, $sql0);
                        $row0 = mysqli_fetch_array($result0)
                        ?>
                        <p id="designer"><?php echo $row0['name_designer'] ?></p>
                        <?php ?>
                        <div class="contain_link">
                        <a id="link_ntk" href="/fashionconnect/frontend/pages/products_items.php?id=<?php echo $row['id_product']?>" id="add-to-cart" style="text-decoration:none;">Thông tin</a></div>
                        </div>
                </div>
            
            <?php } ?>
        </div>

        <div id="section_2">
            <h2 id="tittle_section"><a href="">Nhà thiết kế hàng đầu</a></h2>
            <div id="carts">
            <?php
                $sql="Select * from designer";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
                <div id="product-card">
                    <img src="/fashionconnect/backend/src/Controller/<?php echo $row['srcImg'] ?>" alt="Designer_img" id="product-image">
                    <div id="product-details">
                        <p id="designer"><?php echo $row['name_designer'] ?></p>
                        <p id="product-description"><?php echo $row['tittle'] ?></p>
                        <a id="add-to-cart" href="/fashionconnect/frontend/pages/designers.php?id=<?php echo $row['id_designer'] ?>">Thông tin</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
    <footer>
        <h1 id="contact">Liên hệ</h1>
            <h2 id="contact_subtittle">Kết nối với chúng tôi</h2>
            <div id="contact_area">
                <ul id="contact_lists">
                    <li id="contact_list">
                        <p>-Hà Đông, Hà Nội</p>
                    </li>
                        <li id="contact_list">
                        <p>-Phone: 0862128904</p>
                    </li>
                    <li id="contact_list">
                        <p>-Email:duongtuong131004@gmail.com</p>
                    </li>
                </ul>
                <ul id="contact_icons">
                    <li id="contact_icon"><a href="https://www.facebook.com/nguyen.tuong.501408"><i class="fa-brands fa-facebook"></i></a></li>
                    <li id="contact_icon"><a href="https://github.com/Tuongkobietcode"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
    </footer>
</body>
</html>