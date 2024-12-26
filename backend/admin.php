
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="../assets/backend/css/style-admin.css">
  <link rel="stylesheet" href="../assets/backend/css/style.css">
  <script src="../assets/backend/js/script-admin.js"></script>
</head>
<body>
  <div class="sidebar">
    <h2>Admin Page</h2>
    <ul>
      <li onclick="showSection('add-product')">Thêm Thiết kế</li>
      <li onclick="showSection('add-designer')">Thêm Designer</li>
      <li onclick="showSection('show-product')">Danh sách Thiết kế</li>
      <li onclick="showSection('show-designer')">Danh sách Designer</li>
      <li onclick="showSection('show-admin')">Danh sách Admin</li>
      <li onclick="showSection('contact-forms')">Form Liên Hệ</li>
      <li onclick="showSection('add-admin')">Thêm Admin</li>
      <li><a class="home" href="/fashionconnect/home.php">Về trang chủ</a></li>
    </ul>
  </div>

  <div class="content">
    <div id="add-product" class="form" style="display: none;">
    <form action="/fashionconnect/backend/src/Controller/process_add_product.php" method="POST" enctype="multipart/form-data">
  <h3>Thêm thông tin mẫu thiết kế</h3>
  <input type="text" name="name" placeholder="Tên thiết kế">
  <input type="text" name="tittle" placeholder="Mô tả sản phẩm">
  <input type="number" name="price" placeholder="nhập giá">
  <input type="number" name="quantity" placeholder="nhập số lượng">
  <select name="ntk" class="ntk">
  <?php
        include('../backend/config/connect.php');
        $result = $conn->query("SELECT id_designer, name_designer FROM designer");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id_designer']}'>{$row['name_designer']}</option>";
        }
        ?>
  </select>
  <input type="file" name="fileToUpload" id="fileToUpload" placeholder="nhập file">
  <button type="submit">Thêm</button>
  </form>
    </div>


    <div id="add-designer" class="form" style="display: none;">
      <h3>Thêm thông tin nhà thiết kế</h3>
      <form action="../backend/src/Controller/processing_add_designer.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Tên nhà thiết kế" name="name_designer">
      <input type="text" placeholder="Thông tin nhà thiết kế" name="ttcn">
      <input type="text" placeholder="Kinh nghiệm làm việc" name="knlv">
      <input type="text" placeholder="Phong cách thiết kế" name="pctk">
      <input type="text" placeholder="Mô tả về phong cách thiết kế" name="descript_desginer">
      <input type="text" placeholder="Sơ lược về phong cách thiết kế" name="tittle">
      <input type="file" name="image" id="image" accept="image/*" required placeholder="Ảnh nhà thiết kế">  
      <button type="submit">Thêm</button>
      </form>
    </div>


    <div id="show-product" class="table" style="display: none;">
    <h3>Danh sách thiết kế</h3>
        <table>
          <thead>
            <tr>
              <th>Tên</th>
              <th>Giá</th>
              <th>Tiêu đề</th>
              <th>Số lượng</th>
              <th>Ảnh</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <?php
            include('../backend/config/connect.php');
            $sql="Select * from products";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
          <tbody>
            <tr>
              <td><?php echo $row['name_product']; ?></td>
              <td><?php echo $row['price_product']; ?></td>
              <td><?php echo $row['tittle']; ?></td>
              <td><?php echo $row['quantity']; ?></td>
              <td><img src="../backend/src/Controller/<?php echo $row['srcImg']; ?>" class="img_admin"></td>
              <td>
                <a href="../backend/src/Model/update_product.php?id_product=<?php echo $row['id_product']; ?>" class="update" >Sửa</a>
                <a href="../backend/src/Controller/delete_product.php?id_product=<?php echo $row['id_product']; ?>" class="del" >Xóa</a>
              </td>
            </tr>
          </tbody>
          <?php } ?>
        </table>
    </div>


    <div id="show-designer" class="table" style="display: none;">
        <h3>Danh sách designer</h3>
        <table>
          <thead>
            <tr>
              <th>Tên</th>
              <th>Thông tin cá nhân</th>
              <th>Kinh nghiệm làm việc</th>
              <th>Phong cách thiết kế</th>
              <th>Mô tả về phong cách thiết kế</th>
              <th>Sơ lược</th>
              <th>Ảnh</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <?php
            include('../backend/config/connect.php');
            $sql="Select * from designer";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
          <tbody>
            <tr>
              <td><?php echo $row['name_designer']; ?></td>
              <td><?php echo $row['ttcn']; ?></td>
              <td><?php echo $row['knlv']; ?></td>
              <td><?php echo $row['pctk']; ?></td>
              <td><?php echo $row['descript_designer']; ?></td>
              <td><?php echo $row['tittle']; ?></td>
              <td><img src="../backend/src/Controller/<?php echo $row['srcImg']; ?>" class="img_admin"></td>
              <td>
                <a href="../backend/src/Model/update_designer.php?id_designer=<?php echo $row['id_designer']; ?>" class="update" style="margin-bottom;: 20px">Sửa</a>
                <a href="../backend/src/Controller/delete_designer.php?id_designer=<?php echo $row['id_designer']; ?>" class="del" style="margin-top: 20px">Xóa</a>
              </td>
            </tr>
          </tbody>
          <?php } ?>
        </table>
    </div>


    <div id="show-admin" class="table" style="display: none;">
      <h3>Danh sách Admin</h3>
      <table>
      <?php
            include('../backend/config/connect.php');
            $sql="Select * from users";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <thead>
          <tr>
            <th>Tên</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                <a href="../backend/src/Model/update-admin.php?id=<?php echo $row['id'] ?>" class="update">Sửa</a>
                <a href="../backend/src/Controller/processing_delete_admin.php?id=<?php echo $row['id'] ?>" class="del">Xóa</a>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div>


    <div id="contact-forms" class="table" style="display: none;">
      <h3>Các Thông tin liên hệ gửi về</h3>
      <table>
        <thead>
          <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Nội dung</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
        <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "fashionconnect";
         $port = 3306;
     
         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $database, $port);
     
         // Check connection
         if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
         }
         // echo "Connected successfully";


         $sql = "SELECT * FROM `contact`";

         $result = mysqli_query($conn, $sql);
?>
          <?php foreach ($result as $arr): ?>
            <tr>
              <td><?php echo $arr['name']; ?></td>
              <td><?php echo $arr['mail']; ?></td>
              <td><?php echo $arr['phone']; ?></td>
              <td><?php echo $arr['content']; ?></td>
              <td>
                <a href="/fashionconnect/backend/src/Controller/delete_support.php?id=<?php echo $arr['id_request']; ?>" class="del">Xóa</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div id="add-admin" class="form" style="display: none;">
    <form action="../backend/src/Controller/processing_add_admin.php" method="post">
      <input type="text" placeholder="Tên admin" name="name">
      <input type="text" placeholder="Tên đăng nhập" name="user_name">
      <input type="text" placeholder="Mật khẩu" name="password">
      <button type="submit">Thêm</button>
      </form>
    </div>
    
  </div>
</body>
</html>
