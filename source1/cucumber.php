<?php require('connect.php'); ?>
<?php
$sql = "SELECT * FROM picture ORDER BY id DESC ";
$result=mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถิติของระบบ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./01.css"> -->
</head>
<body>
 <?php require("navbar.php") ?>
<!-- table -->

  <div class="container">
    <h1 style="text-align: center;">ตารางข้อมูล</h1><br>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr class="table-danger" style="text-align: center;">
          <th scope="col">วันที่เวลา</th>
          <th scope="col">ชนิด</th>
          <th scope="col">คุณภาพ</th>
          <th scope="col">รูปภาพ</th>
        </tr>
      </thead>
      <tbody style="text-align: center;">
      <?php while($row=mysqli_fetch_assoc($result)) {
                    $image_data = base64_encode($row['img']);
                    if ($row["name"] == "cucumber") {
        ?>
      
      <?php require("tbody.php") ?> 
    <?php }}?>
      </tbody>
    </table>
  </div>
  </div>
</body>
</html>
