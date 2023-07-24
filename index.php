<?php require('connect.php'); ?>
<?php require('./function.php'); ?>
<?php 

$sql = "SELECT * FROM wildfire ORDER BY id DESC LIMIT 1";
$result=mysqli_query($connect,$sql);

?>

</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Drone wildfire </title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./static/style.css"> -->
</head>
<body>
    <!-- nav bar -->
    <?php require("navbar.php") ?>
    
    <h2 style="text-align: center;">การเกิดไฟป่าล่าสุด</h2><br>
    <!-- แสดงรูปภาพ -->
    <?php while($row=mysqli_fetch_assoc($result)) {
                  $image_data = base64_encode($row['img']);
                  
    ?>
    <img class="image-container rounded" src="data:image/jpeg;base64,<?php echo $image_data ?>" style="width: auto; height: auto;  display: block; margin: auto; justify-content: center; align-items: center; object-fit: contain;" >
    <br>
    
    <h3 style="text-align: center;">ณ วันที่ <?php echo PGM_DatetimeConvert($row["date"]);?> </h3>
    <br>
    <?php }?>
    <!-- <hr>
    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=358ekpwn">
        <img class="image-container" src="LINEBOT.png" style="width: 50%; height: 50%;  display: block; margin: auto; justify-content: center; align-items: center; object-fit: contain;" > 
    </a> --><?php
    
    /* if (mysqli_affected_rows($connect) > 0) {
      echo "<script>window.location.reload();</script>";
    }
    exit(); */?>
    <script>
      /* if (!localStorage.getItem('hasLoaded')) {
        localStorage.setItem('hasLoaded', true);
        window.location.reload();
      } */
    </script>
</body>
</html>
