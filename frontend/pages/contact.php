<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <style>
    a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
<?php
$conn = mysqli_connect($servername, $username, $password, $database, $port);

$sql = "SELECT * FROM `contact`";

$result = mysqli_query($conn, $sql);
?>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Nội dung yêu cầu</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <?php foreach ($result as $arr) : ?>
      <tr>
        <td><?php echo $arr['name']; ?></td>
        <td><?php echo $arr['email']; ?></td>
        <td><?php echo $arr['phone']; ?></td>
        <td><?php echo $arr['content']; ?></td>
        <td>
          <button class="btn btn-danger"><a href="delete.php?id=<?php echo $arr['id_request']; ?>">Xóa</a></button>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>