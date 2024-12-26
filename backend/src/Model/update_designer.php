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
            if(!empty($_GET['id_designer'])){
            include(__DIR__ . '/../../config/connect.php');
            $id = $_GET['id_designer'];
            $sql = "SELECT * from designer where id_designer = '$id'";
            $result = mysqli_query($conn, $sql);
            while($member = mysqli_fetch_assoc($result)){
        ?>
      <h3>Sửa thông tin nhà thiết kế</h3>
      <form action="../Controller/processing_update_designer.php?id=<?php echo $member['id_designer']; ?>" method="POST">
        <input type="text" placeholder="Tên nhà thiết kế" name="name_designer" value="<?php echo $member['name_designer'];?>">
        <input type="text" placeholder="Thông tin nhà thiết kế" name="ttcn" value="<?php echo $member['ttcn']; ?>">
        <input type="text" placeholder="Kinh nghiệm làm việc" name="knlv" value="<?php echo $member['knlv']; ?>">
        <input type="text" placeholder="Phong cách thiết kế" name="pctk" value="<?php echo $member['pctk']; ?>">
        <input type="text" placeholder="Mô tả về phong cách thiết kế" name="descript" value="<?php echo $member['descript_designer']; ?>">
        <input type="text" placeholder="Sơ lược" name="tittle" value="<?php echo $member['tittle']; ?>">
        <button type="submit">Cập nhật</button>
      </form>
      <?php }}?>
</body>
</html>