<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <script src="https://kit.fontawesome.com/a0ff9460a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/dangky.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
    <div class="body">
        <div class="main"> 
            <div class="main_form">
                <h1>ĐĂNG KÝ TÀI KHOẢN TRỰC TUYẾN</h1>
                <p>Thông tin được cung cấp bên dưới sẽ được sử dụng để đăng nhập vào tài khoản của 
                    khách sạn cho nhu cầu đặt phòng của bạn.</p>
                <form action="" class="form" method="POST">
                     <div class="mainform1">
                        <div class="main1">
                            <div class="main11">Nhập họ và tên</div>
                            <div class="main12"><input type="text" name="hoten" id="hoten"></div>
                         </div>
                         <div class="main2">
                            <div class="main21">Nhập SĐT</div>
                            <div class="main22">
                                <input type="tell" name="sdt" id="sdt">
                            </div>
                          </div>
                        <div class="main3">
                             <div class="main31">Nhập PassWord</div>
                             <div class="main32"> <input type="password" name="pass" id="pass">  </div>
                         </div>

                         <div class="main3">
                             <div class="main31">Nhập Địa chỉ</div>
                             <div class="main32"> <input type="text" name="diachi" id="diachi">  </div>
                         </div>
                        </div>
                    <div class="mainform2">
                            <div class="main4">
                                <div class="main41">Nhập CMND</div>
                                <div class="main42"><input type="text" name="cmnd" id="cmnd"></div>
                             </div>
                             <div class="main5">
                                <div class="main51">Nhập EMAIL</div>
                                <div class="main52"><input type="email" name="email" id="email"></div>
                              </div>
                            <div class="main6">
                                <div class="main61">Giới Tính</div>
                                <div class=" d-flex align-items-center mt-4">
                                    <label for="nam">Nam</label>
                                    <input type="radio" id="nam" name="gender" value="0" style="height: 20px;">
                                
                                    <label for="nu">Nữ</label>
                                    <input type="radio" id="nu" name="gender" value="1" style="height: 20px;">
                                </div>
                                
                             </div>
                             <input type="submit" name="btn" id="btn" value="Đăng Ký">
                            </div>
                            
                    </form>
                    <div>
                                
                             </div>
            </div>
        
    <?php

            if($_SERVER['REQUEST_METHOD']=="POST" and ISSET($_POST['btn'])){
                $gender=$_POST["gender"];
                $hoten=$_POST["hoten"];
                $sdt=$_POST["sdt"];
                $email=$_POST["email"];
                $diachi=$_POST["diachi"];
                $cmnd=$_POST["cmnd"];
                $pass=$_POST["pass"];
            include('config.php');
            if(empty($hoten)||empty($sdt)||empty($email)||empty($cmnd)||empty($pass)||empty($gender)||empty($diachi)){
                echo '<script>
                alert("Nhập thiếu thông tin!"); 
                window.location="javascript: history.go(-1)";
                </script>';
                exit;
            }
            //kiểm tra email or sdt đã tồn tại chưa?
            $sql = "SELECT * FROM khachhang WHERE SDT = '$sdt' OR Email='$email'";
            $_result= mysqli_query($con,$sql);
            if (mysqli_num_rows($_result) > 0){
                echo '<script>
                alert("Email hoặc SĐT đã tồn tại! Vui lòng nhập lại!"); 
                window.location="javascript: history.go(-1)";
                </script>';
                exit;
   
            }
            else{
                $sql ="INSERT Into khachhang values ('','".$hoten."','".$sdt."','".$email."','".$cmnd."','".$diachi."','".$gender."','".$pass."',NULL)";
                $_result= mysqli_query($con,$sql);
                    if($_result==true){
                        echo '<script>
                        alert("Đăng ký thành công!"); 
                        window.location="index.php";
                        </script>';
                        exit;
                    }
                    else{
                        echo '<script>
                        alert("Lỗi Đăng Ký!"); 
                        window.location="javascript: history.go(-1)";
                        </script>';
                         exit;
                    }
                    mysqli_close($con);
                }
            } 
    ?>


        
        </div>
    </div>
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
                        <input type="email" name="" id="" placeholder="Email Address"> <button><img
                                src="./img/trangchu1/icon-send.png" alt="" class="logo"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>