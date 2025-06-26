<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="../css/pay.css?v=<?php echo time(); ?>" type='text/css'>
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
    <?php
        include('header.php');
        include('../config.php');
        $tiendichvu = 0;
    ?>
    <!-- Banner -->
    <form action="payb2ddn.php?MaPhong=<?php echo $_GET['MaPhong'] ?>" method="POST">
        <section id="banner">
            <div class="container-fluid p-0 text-center">
                <div class="img">
                    <img src="../img/pay/banner.jpg" alt="" class="img-fluid">
                    <div class="box">
                        <div class="trangtri"></div>
                        <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Home - <span style="color: #C89E4B;">Room List</span></p>
                        <h3 style="font-size:36px;font-family: Montserrat-Bold;">Thanh Toán</h3>
                        <div class="trangtri"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="step">
            <div class="a">
                <nav aria-label="...">
                    <ul class="pagination d-flex justify-content-between mb-0">
                        <li class="page-item" aria-current="page">
                            <span class="page-link rounded-circle">1</span>
                        </li>
                        <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
                        <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
            <div class="b">
                <nav aria-label="...">
                    <ul class="pagination d-flex justify-content-between mb-0">
                        <li class="page-item" aria-current="page">
                            <span class="page-link  border-0">Thông tin khách hàng</span>
                        </li>
                        <li class="page-item"><a class="page-link  border-0" href="#">Chi tiết thanh toán</a></li>
                        <li class="page-item"><a class="page-link  border-0" href="#">Thành công</a></li>
                    </ul>
                </nav>
            </div>
        </section>


        <section id="form" class="pt-5">
            <div class="container">
                <h5 style="font-family:Montserrat-Bold ;">Vui lòng điền thông tin.</h5>
                <div class="row">
                    <div class="col-6 ">
                        <div>
                            <label for="" style="font-family: Montserrat-SemiBold;"> Nhập Họ và Tên như trong hộ chiếu <span style="color: #937438;">*</span></label>
                        </div>
                        <div><input type="text" name="" id="" value="<?php echo $_SESSION['ten']; ?>"></div>
                    </div>

                    <div class="col-6 ">
                        <div>
                            <label for="" style="font-family: Montserrat-SemiBold;"> Nhập Email</label>
                        </div>
                        <div><input type="email" name="" id="" value="<?php echo $_SESSION['email']; ?>"></div>
                    </div>

                    <div class="col-6 ">
                        <div>
                            <label for="" style="font-family: Montserrat-SemiBold;">Nhập số điện thoại <span style="color: #937438;">*</span></label>
                        </div>
                        <div><input type="text" name="" id="" value="<?php echo $_SESSION['sdt']; ?>"></div>
                    </div>


                    <div style="font-family: Montserrat-SemiBold;">
                        Nếu quý khách nhập địa chỉ thư điện tử và không hoàn thành việc Đặt phòng thì chúng tôi có thể nhắc
                        nhờ giúp quý khách tiếp tục Đặt phòng.
                    </div>
                    <div class="mt-2 d-flex">
                        <input type="checkbox" name="datphongho" style="width: 22px; height: 22px;">
                        <label for="" class="ms-2" style="font-family: Montserrat-SemiBold;">Bạn Đặt phòng hộ người khác!</label>
                    </div>

                </div>
            </div>
            <hr style="width: 80%; margin: 0 auto; border: 0; border-top: 5px solid;">
        </section>

        <section id="service">

            <div class="container">
                <div class="ms-5 d-flex">
                    <div class="img d-flex">
                        <img src="../img/icon_dichvu.png" alt="">
                    </div>

                    <p class="mt-3 ms-2" style="font-size: 30px; font-family:Montserrat-Bold;">Dịch Vụ Phòng</p>
                </div>

                <?php

                $sql = "SELECT * From dichvu";
                $result = mysqli_query($con, $sql);
                $dichvus = array();
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $dichvus[] = array('DonGia' => $row['DonGia'], 'TenDichVu' => $row['TenDichVu'], 'MaDichVu' => $row['MaDichVu']);
                    }
                }

                ?>
                <div class="dichvu">
                    <?php foreach ($dichvus as $key => $value) { ?>
                        <div class="d-flex mt-2">
                            <input type="checkbox" name="dichvu[]" id="dichvu" value="<?php echo $value['DonGia'] . '-' . $value['MaDichVu'] ?>" style="width: 22px;height: 22px;">
                            <label for="dichvu" id="tendv" class="ms-2"><?php echo $value['TenDichVu'] ?></label>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <hr style="width: 80%; margin: 0 auto; border: 0; border-top: 5px solid;">
        </section>

        <section id="huyphong">
            <div class="container">
                <div class="ms-5 d-flex">
                    <div class="img d-flex">
                        <img src="../img/icon_HuyPhong.png" alt="">
                    </div>

                    <p class="mt-3 ms-2" style="font-size: 30px; font-family:Montserrat-Bold;">Chính Sách Huỷ Đặt Phòng</p>
                </div>
            </div>
            <div class="phi">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" style="background-color: #181A1B; color: white; font-family: Montserrat-SemiBold;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Huỷ phòng có thu phí
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body" style="background-color: #181A1B; color: white;font-family:Montserrat-Regular;">
                                Nếu hủy bỏ hoặc sửa đổi trước 3 ngày so với ngày đến khách sạn, bạn sẽ không bị tính phí.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" style="background-color: #181A1B; color: white;font-family: Montserrat-SemiBold;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Huỷ phòng không có thu phí
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="background-color: #181A1B; color: white; font-family:Montserrat-Regular;">
                                Nếu hủy bỏ hoặc sửa đổi muộn hơn 3 ngày trước ngày đến khách sạn, bạn sẽ phải trả số tiền
                                cọc
                                khi đặt phòng đối với khách hàng thanh toán trả sau.
                                Đối với khách hàng đã thanh toán toàn bộ giá trị đặt phòng bằng các phương thức thanh toán
                                khác,
                                bạn sẽ được hoàn trả lại số tiền đã thanh toán sau khi trừ đi khoản phí tương đương.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width: 80%; margin: 0 auto; border: 0; border-top: 5px solid;">
        </section>

        <section id="udai">
            <div class="container">
                <div class="ms-5 d-flex">
                    <div class="img d-flex">
                        <img src="../img/icon_UuDai.png" alt="">
                    </div>

                    <p class="mt-3 ms-2" style="font-size: 30px; font-family:Montserrat-Bold;">Ưu Đãi</p>
                </div>
                <div class="ud">
                    <h5>Tiện ích giảm giá cho chuyến đi của bạn</h5>
                    <div class="row">
                        <div class="col-9 d-flex">
                            <div class="ms-5 d-flex img">
                                <img src="../img/icon_HoanTra.png" alt="">
                            </div>
                            <div class="content">
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Không rủi ro và được hoàn lại toàn
                                    bộ</p>
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Huỷ trước 7 ngày kể từ ngày thanh toán
                                    quý khách sẽ không phải trả gì cả!</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-9 d-flex">
                            <div class="ms-5 d-flex img">
                                <img src="../img/icon_HoanTra.png" alt="">
                            </div>
                            <div class="content">
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Ưu đãi thành viên</p>
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Đơn hàng 6 triệu - 15 triệu được giảm giá 3%</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-9 d-flex">
                            <div class="ms-5 d-flex img">
                                <img src="../img/icon_HoanTra.png" alt="">
                            </div>
                            <div class="content">
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Đặc biệt</p>
                                <p class="m-0" style="font-family: Montserrat-SemiBold;">Đơn hàng > 15 triệu được giảm giá 5%
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr style="width: 80%; margin: 0 auto; border: 0; border-top: 5px solid;">
        </section>

        <section id="tieptuc">
            <div class="container d-flex justify-content-end">
                <button style="font-family: Montserrat-SemiBold; height:50px;width: 300px; background-color: #937438; color: white;" type="submit" name="submit">Tiếp Tục </button>
            </div>
        </section>
    </form>


    <!-- footer -->
    <?php
    include('footer.php');
    ?>

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