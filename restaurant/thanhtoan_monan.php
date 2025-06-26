<?php
 session_start();
 require_once('../config.php');
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["btn"])) {
        $maphieudatphong = $_POST['maphieudatphong'];
        $tongtien=$_POST['tongtien'];
        $ngayhientai = date("Y-m-d");

        $sql = "SELECT * FROM phieudatphong pdp,chitietdatphong ctdp, hoadon hd
                WHERE pdp.MaPDP=ctdp.MaPDP AND pdp.MaPDP=hd.MaPDP AND pdp.MaPDP = $maphieudatphong AND MaKhachHang = " . $_SESSION['makhachhang'];
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $ngayden = $row['NgayDen'];
            $ngaydi=$row['NgayDi'];
            $mahoadon=$row['MaHoaDon'];
          
            if ($ngayden<=$ngayhientai && $ngayhientai<=$ngaydi) {
                $sql = "INSERT INTO phieumonan VALUES ('','" . $mahoadon . "','".$tongtien."')";
                if (mysqli_query($con, $sql)) {
                    $maphieudatmon = mysqli_insert_id($con);
                }
                $sql = "SELECT * FROM giohang Where makhachhang= '".$_SESSION['makhachhang']."'";
                $result = mysqli_query($con, $sql);
                $giohangs = array();
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $giohangs[] = array(
                                'mamonan' => $row['mamonan'], 'soluong' => $row['soluong']
                            );
                        }
                    }
                foreach ($giohangs as $key => $value) {
                $sql = "INSERT INTO chitietdatmon VALUES ('','" . $maphieudatmon . "','".$value["mamonan"]."','".$value["soluong"]."','')";
                mysqli_query($con, $sql);
                }
                $sql = "DELETE  FROM giohang WHERE makhachhang= '".$_SESSION['makhachhang']."'";
                mysqli_query($con, $sql);

               
            }
            else {
                echo $response = "Phòng đã được trả!";
                
            } 
        }
        else {
            echo  $response = "Nhập sai mã đặt phòng !";
        } 
       
    }
    
?>
