<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            height: 500px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px;
        }
        input{
          width: 80%;
          height: 30px;
        }
        button{
          width: 100px;
          height: 50px;
          background-color: blue;
          color: #fff;
          padding: 20px;
        }
    </style>
</head>
<body>
        <?php
            if(!empty($_GET['id_product'])){
            include(__DIR__ . '/../../config/connect.php');
            $id = $_GET['id_product'];
            $sql = "SELECT * from products where id_product = '$id'";
            $result = mysqli_query($conn, $sql);
            while($member = mysqli_fetch_assoc($result)){
        ?>
      <h3>Sửa thông tin sản phẩm </h3>
      <form action="../Controller/process_update_product.php?id=<?php echo $member['id_product']; ?>" method="POST">
        <input type="text" placeholder="Tên sản phẩm" name="name_product" value="<?php echo $member['name_product'];?>">
        <input type="text" placeholder="giá sản phẩm" name="price_product" value="<?php echo $member['price_product']; ?>">
        <input type="text" placeholder="ố  lượng " name="quantity" value="<?php echo $member['quantity']; ?>">
        <input type="text" placeholder="tiêu đề" name="tittle" value="<?php echo $member['tittle']; ?>">
       
        <button type="submit">Cập nhật</button>
      </form>
      <?php }}?>
</body>
</html>