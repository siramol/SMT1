<?php require("./connect.php")?>
<?php require("./function.php")?>
<!-- table -->

  <div class="container">
    <h1 style="text-align: center;">ตารางแสดงการเกิดไฟป่า</h1><br>
     
  <div class="table-responsive" >
    <table id="myTable" class="table" style="font-size :large ; border : 2px solid" >
      <thead>
        <tr style="text-align: center; background-color: #8ee6ff; border : 2px solid ">
            <th scope="col">ลำดับ</th>
            <th scope="col">วันที่ - เวลา</th>
            <th scope="col">รูปภาพ</th>
        </tr>
      </thead>
      <tbody style="text-align: center;">
      <?php 
            $i = 1;
            while($row=mysqli_fetch_assoc($result)) {
                  $image_data = base64_encode($row['img']);
                  
      ?>
      
      <tr>
            <td class="align-middle" ><?php echo $i?></td>
            <td class="align-middle" ><?php echo PGM_DatetimeConvert($row["date"]);?></td>
            <td class="align-middle">
                <img class="popup-img rounded" src="data:image/jpeg;base64,<?php echo $image_data ?>" style="width: 300px; height: 200px; " data-bs-toggle="modal" data-bs-target="#exampleModal" >
            </td>
        </tr>
    <?php 
        $i++;
        }?>
      </tbody>
    </table>
  </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="img-modal" tabindex="-1" aria-labelledby="img-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="img-modal-label">รูปภาพ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="" class="img-fluid rounded" id="modal-img" alt="image" >
      </div>
    </div>
  </div>
</div>

<script>
  var modalImg = document.getElementById("modal-img");
  var imgModal = new bootstrap.Modal(document.getElementById("img-modal"));
  var popupImgs = document.getElementsByClassName("popup-img");

  for (var i = 0; i < popupImgs.length; i++) {
    popupImgs[i].addEventListener("click", function() {
      modalImg.src = this.src;
      imgModal.show();
    });
  }
</script>


