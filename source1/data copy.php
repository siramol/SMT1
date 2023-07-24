<?php
require('connect.php');
header('content-Type: application/json');
$sql = "SELECT name, Quality FROM picture";
$result = mysqli_query($connect,$sql);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);

?>
