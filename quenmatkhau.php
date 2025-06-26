<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/doimatkhau.css?v=<?php echo time(); ?>">
    <link rel="icon" href="./public_html/favicon.ico" type="image/png">
</head>

<body>
    <header id="menu">
        <div class="menu-nav">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-5">
                    <a class="navbar-brand" href="#"><img src="./img/logoBurning.png" alt="BurningLogo" class="logo">
                        BURNING</a>
                    <div class="sub-nav collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                        <a href="./not loggin/index.php"><img src="./img/icon_DangXuat.png" alt=""></a>
                    </div>
            </nav>
        </div>
    </header>

    <section id="doimatkhau">
        <div>
            <h1 style="font-family: Montserrat-Bold;" class="mb-4">Đổi Mật Khẩu</h1>
            <p style="font-family: Montserrat-SemiBold;" class="mb-5">Thông tin được cung cấp bên dưới sẽ được sử dụng để đăng nhập vào tài khoản của khách sạn cho nhu cầu đặt phòng của bạn.</p>
        </div>
        <form action="" method="POST">
            <div class="row mb-2">
                <div class="left col-5 ">
                    <div>
                        <label id="mkc">Số Điện Thoại</label>
                    </div>
                    <div>
                        <label id="mkc">Mật Khẩu Mới</label>
                    </div>
                    <div>
                        <label id="mkm"> Nhập Lại Mật Khẩu</label>
                    </div>
                </div>
                <div class="right col-7">
                    <div>
                        <input type="text" name="sdt">
                    </div>

                    <div>
                        <input type="password" name="mkm">
                    </div>

                    <div>
                        <input type="password" name="nlmk">
                    </div>

                </div>
            </div>

            <div class="button">
                <button type="submit" name="btn" style="background-color:#937438;">Xác Nhận</button>
            </div>
        </form>
        <?php
        include('config.php');
        if (isset($_POST['btn'])) {
            $sdt = $_POST['sdt'];
            $passcu = $_POST['mkm'];
            $passmoi = $_POST['nlmk'];
            $sql = "SELECT  SDT FROM khachhang Where SDT='" . $sdt . "'";
            $_result = mysqli_query($con, $sql);
            if (mysqli_num_rows($_result) == 0) {
                echo '<script>
                    alert("Kiểm tra lại số điện thoại "); 
                    window.location="javascript: history.go(-1)";
                    </script>';
                exit;
            }
            if ($passcu != $passmoi) {
                echo '<script>
                    alert("Vui Lòng Nhập Lại Mật Khẩu!"); 
                    window.location="javascript: history.go(-1)";
                    </script>';
                exit;
            }
            $sql = "UPDATE khachhang SET PassWord='$passmoi'";
            $_result = mysqli_query($con, $sql);
            if ($_result == true) {
                echo '<script>
                    alert("Đổi mật khẩu thành công!"); 
                    window.location="index.php";
                    </script>';
                exit;
            } else {
                echo '<script>
                    alert("Lỗi Đổi Mật Khẩu!"); 
                    window.location="javascript: history.go(-1)";
                    </script>';
                exit;
            }
          
        }
        ?>

    </section>
    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a class="navbar-brand" href="#"><img src="./img/logoBurning.png" alt="BurningLogo" class="logo">
                        BURNING</a>
                    <p>Phasellus nisi sapien, rutrum placerat sapien eu, rhoncus tempus</p>
                    <div class="contact">
                        <span class="fa-stack fa-lg me-3 ">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-facebook-f fa-stack-1x"></i>
                        </span>
                        <span class="fa-stack fa-lg mx-3">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                        </span>
                        <span class="fa-stack fa-lg mx-3">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class=" fa fa-youtube-play fa-stack-1x"></i>
                        </span>
                        <span class="fa-stack fa-lg ms-3">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x"></i>
                        </span>
                    </div>
                </div>
                <div class="col-3">
                    <h5>INFORMATION</h5>
                    <ul>
                        <li>
                            <div class="img">
                                <img src="./img/trangchu1/icon-location.png" alt="" class="logo">
                            </div>
                            <p class="my-0 p-1">GXF4+8HQ Chippenham United Kingdom</p>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/trangchu1/icon-mail.png" alt="" class="logo">
                            </div>
                            <p class="my-0 p-1">help.info@gamil.com</p>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./img/trangchu1/icon-phone.png" alt="" class="logo">
                            </div>
                            <p class="my-0 p-1">+123 (458) 585 568</p>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>PAGES LINKS</h5>
                    <ul>
                        <li><a href="#">Room Cleaning</a></li>
                        <li><a href="#">Car Parking</a></li>
                        <li><a href="#">Swimming pool</a></li>
                        <li><a href="#">Fitness Gym</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>SUBSCRIBE</h5>
                    <div class="Send">
                        <input type="email" name="" id="" placeholder="Email Address"> <button><img src="./img/trangchu1/icon-send.png" alt="" class="logo"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>