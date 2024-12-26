<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/fashionconnect/assets/frontend/css/style_contact.css">
</head>
<body>
    <section class="support">
        <div class="container">
            <h2>Liên Hệ</h2>
            <div class="contact">
                <div class="form-area">
                    <form action="/fashionconnect/backend/src/Controller/add_support.php" method="post">
                        <div class="full">
                            <div class="half">
                                <p>Họ*</p>
                                <input type="text" name="lastname">
                            </div>
                            <div class="half">
                                <p>Tên*</p>
                                <input type="text" name="firstname">
                            </div>
                        </div>
                        <div class="full">
                            <div class="half">
                                <p>Email*</p>
                                <input type="email" name="email">
                            </div>
                            <div class="half">
                                <p>Số Điện Thoại*</p>
                                <input type="number" name="phone">
                            </div>
                        </div>
                        <div class="full-textarea">
                            <p>Nội dung*</p>
                            <textarea name="message" id=""></textarea>
                        </div>
                        <button type="submit">Gửi</button>
                    </form>
                </div>
                <div class="contact-info">
                    <ul>
                        <li>
                            <a href="#">
                                <i class='bx bx-envelope'></i>
                                <strong>Email:</strong>
                                duongtuong131004@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bxs-phone'></i>
                                <strong>Số ĐT:</strong>
                                0862128904
                            </a>
                        </li>
                        <li>
                            <div>
                                <a class="home" href="/fashionconnect/home.php">Về trang chủ</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="social-contact">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
        </div>
    </section>
</body>

</html>
