<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="KiemTraNgay.js?v=<?php echo time(); ?>" ></script>
</head>

<body>
  <?php
    include('../config.php');
  ?>
  <section id="checknow">
    <div class="container check text-white p-4">
      <form action="roomstyle.php" onsubmit="return kiemtrangay()" method="POST">
        <div class="row">
          <div class="col">
            <div> Check-in </div>
            <div>
               <input type="datetime-local" name="ngayden" id="ngayden" onchange="chonngayden()" value="" required>
               </div>
            <div id="thongbaongayden" style="color: red"></div>
          
          </div>
          <div class="col">
            <div>
              Check-out
            </div>
            <div>
              <input type="datetime-local" name="ngaydi" id="ngaydi" onchange="chonngaydi()" value="" required>
            </div>
            <div id="thongbaongaydi" style="color: red"></div>

          </div>
          <div class="col">
            <div>
              Số Lượng
            </div>
            <div>
              <select name="room" id="room">
                <?php
                  for ($i = 1; $i <= 6; $i++) {
                    echo "<option value='$i'>$i người</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="col">
            <div>
              Loại Phòng
            </div>
            <div>
              <select name="category" id="category">
                <?php
                  $sql = "SELECT DISTINCT LoaiPhong FROM phong";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value ='" . $row['LoaiPhong'] . "'>" . $row["LoaiPhong"] . "</option>";
                    }
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="col d-flex justify-content-center pe-0" style="align-items: center;">
            <input class="buttonCheck" type="submit" name="btn" value="Check Now">
          </div>
          <script>
                function kiemtrangay() {
                  thongbaoden = document.getElementById("thongbaongayden").innerHTML;
                  thongbaodi = document.getElementById("thongbaongaydi").innerHTML;

                  if (thongbaoden || thongbaodi) {
                    alert("Vui lòng kiểm tra lại thông tin!");
                    return false; 
                  } 
                  else {
                    return true;
                  }
                }
          </script>
        </div>
      </form>

    </div>
  </section>
</body>
</html>