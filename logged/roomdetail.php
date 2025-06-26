<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="../css/roomdetail.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- link slick -->
    <link rel="stylesheet" type="text/css" href="../common/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../common/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
  
</head>

<body>
    <!-- header -->
    <?php include('header.php'); ?>
    <?php
        include('../config.php');
       
        $MaPhong=$_GET['MaPhong'];
        $sql = "SELECT * From phong where  MaPhong='$MaPhong'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $KieuPhong=$row["KieuPhong"];
                $LoaiGiuong=$row["LoaiGiuong"];
                $TamNhin=$row["TamNhin"];
                $DienTich=$row["DienTich"];
                $SLMax=$row["SLMax"];
                $IMG=$row['IMG'];
            }
        }
        
    ?>
    <!-- Banner -->
 
    <section id="banner">
        <div class="container-fluid p-0 text-center">
            <div class="img">
                <img src="../img/pay/banner.jpg" alt="" class="img-fluid">
                <div class="box">
                    <div class="trangtri"></div>
                    <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Home - <span
                            style="color: #C89E4B;">Room</span></p>
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;"><?php echo $KieuPhong?></h3>
                    <div class="trangtri"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Banner -->

    <!-- checknow -->
   
    <!-- end checknow -->

    <!-- information -->
    <section id="information">
        <div class="container text-center">
            <p class="p-5" style="width: 67%; margin: 0 auto;font-family:Montserrat-Regular;">Phòng Deluxe nằm từ tầng 7 đến tầng 16, với diện tích
                32m². Với nội thất gỗ cao cấp, trang trí hoa anh đào đậm chất Việt Nam, và tầm nhìn đẹp cùng các tiện
                nghi sang trọng, các phòng đều mang lại cảm giác ấm áp và thoải mái cho khách hàng</p>
        </div>
        <section id="slider">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="slide-item carousel-item active">
                            <img src="<?php echo $IMG?>" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                        <div class="slide-item carousel-item">
                            <img src="../img/roomdetail/deluxe/roomstyle_deluxe2.png" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </section>
    <!-- end informationr -->

    <!-- overview -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3>Tổng Quan</h3>
                </div>
                <div class="col-4">
                    <p class="m-0">Tầm nhìn</p>
                    <span><?php echo $TamNhin?></span>
                    <p class="mb-0 mt-4">Loại giường</p>
                    <span><?php echo $LoaiGiuong?></span>
                </div>
                <div class="col-4">
                    <p class="m-0">Diện tích phòng</p>
                    <span><?php echo $DienTich?><sup>2</sup></span>
                    <p class="mb-0 mt-4">Sức chứa tối đa</p>
                    <span ><?php echo $SLMax?> người</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end overview -->

    <!-- special-features -->
    <section id="special-features">
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <h3>Tính năng đặc biệt</h3>
                </div>
                <div class="col-8">
                    <span>- Sử dụng miễn phí phòng tập, bể bơi trong nhà và phòng xông hơi</span> <br>
                    <span>- Internet có dây / không dây tốc độ cao miễn phí trong tất cả các phòng</span> <br>
                    <span>- Bồn tắm và phòng tắm đứng</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end special-features -->

    <!-- common -->
    <section id="common">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3>Tiện ích chung</h3>
                </div>
                <div class="col-4">
                    <p class="m-0">Tiện nghi</p>
                    <span>TV màn hình LED 43” / Đèn pin / Túi mua sắm / Dép đi trong phòng / Mini Bar / Bộ kim chỉ / Cân / Que xỏ giày / Đánh giày / Điện thoại / Két an toàn / Bàn làm việc / Tiện ích cho người khuyết tật</span>
                </div>
                <div class="col-4">
                    <p class="m-0">Các tiện nghi khác</p>
                    <span>Truyền hình cáp / Truyền hình vệ tinh / Hai chai nước khoáng miễn phí hàng ngày / Trà cà phê miễn phí / Dịch vụ thư thoại</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end common -->

    <!-- detail -->
    <section id="detail">
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <h3>Chi tiết</h3>
                </div>
                <div class="col-8">
                    <span>- Yêu cầu thêm bữa sáng với giá 303,000 VNĐ/người</span> <br>
                    <span>- Yêu cầu thêm giường cho 1 người: 720,000 VNĐ một đêm không bao gồm ăn sáng, 960,000 VNĐ một đêm bao gồm ăn sáng</span> <br>
                    <span>- Giá phòng ở trên là giá cho một phòng một đêm và có thể thay đổi theo ngày đặt phòng.</span>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button><a style="text-decoration:none; color:white" href="payddn.php?MaPhong=<?php echo $MaPhong?>">BOOKING NOW</a></button>
            </div>
        </div>
        <hr class="mb-0 mt-5">
       
    </section>
    <!-- end detail -->

    <!-- room -->
    <section id="room">
        <div class="container pb-5">
            <div class="row">
                <div class="col-3">
                    <div class="img h-100">
                        <img src="../img/trangchu1/accommodations_1.jpg" alt="" class="img-fluid h-100">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$134</span>/Đêm</p>
                            <h5>Small Suite</h5>
                            <div class="trangtri"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="img">
                        <img src="../img/trangchu1/room_2.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$199</span>/Đêm</p>
                            <h5>Deluxe Room</h5>
                            <div class="trangtri1"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="img">
                        <img src="../img/trangchu1/room_3.jpg" alt="" class="img-fluid h-100">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$134</span>/Đêm</p>
                            <h5>Small Suite</h5>
                            <div class="trangtri"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
    <?php include('footer.php'); ?>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
    <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <!-- slick -->
    <script src="../common/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../js/scrip.js"></script>
</body>

</html>