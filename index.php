<?php 
    session_start(); 
    require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <link rel="icon" href="./public_html/favicon.ico" type="image/png">
    <title>Dangnhap</title>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="#">BURNING HOTEL</a>
                </div>
                <div class="nav">
                    <a href="./not loggin/index.php"> <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPq_g8GxYJ20m_yIDaZRw6jq8NxMjZPY154w&usqp=CAU"
                            alt="thoat" height="40px"></a>
                </div>
            </div>
        </header>
        <div class="body">
            <form action="" method="POST">
                <h1 style="padding-left: 47px;font-size: 50px;">Chào mừng đến với Burning</h1>
                <div class="body-wrapper">
                    <div class="left">
                        <p style="font-size: 20px; padding-top: 25px;">Đăng nhập vào tài khoản của bạn</p> <br>
                        <div>
                            <label for="email">Email hoặc số điện thoại</label> <br>
                            <input type="text" name="email" id="email"> <br>
                        </div>
                        <div style="margin-top: 15px;">
                            <label for="password">Mật khẩu</label> <br>
                            <input type="password" name="password" id="password">
                        </div>

                        <div class="btn-footer">
                            <div>
                                <input type="submit" class="btn-login" name="btn" id="btn" value="Đăng nhập">
                            </div>
                        </div>
                        <a href="dangky.php">
                            <p style="margin-top:20px ;">Đăng kí tài khoản trực tuyến</p>
                        </a>
                        <?php
                            require_once 'config.php';
                            if (isset($_SESSION['user_token'])) {
                                header("Location: .\logged\home.php");
                            } else {
                                echo "<a href='" . $client->createAuthUrl() . "'>Login With Google</a>";
                            }
                        ?>
                        <a href="quenmatkhau.php">
                            <p style="margin-top:20px ;">Đổi Mật Khẩu</p>
                        </a>
                        <div class="footer">
                            Theo dõi chúng tôi:
                            <div class="icon"><img src="./img/dangnhap/icon_facebook-removebg-preview.png"
                                    alt="icon-facebook"></div>
                            <div class="icon"><img src="./img/dangnhap/icon_insta.png" alt="icon_insta"></div>
                            <div class="icon"><img src="./img/dangnhap/icon_twitter.png" alt="icon_twitter"></div>
                        </div>
                    </div>
                    <div class="right">
                        <p style="text-align: center; font-size: 25px;padding-bottom: 10px; ">Tham gia Burning</p>
                        <img src="https://b.zmtcdn.com/data/pictures/5/6801795/e2d0925b5cdd3c42b31f5ee3c76bd3b5.jpg"
                            alt="" height="300px" width="470px">
                        <p style="padding-top: 10px;">Tận hưởng mức giá ưu đãi của chúng tôi, mọi lúc</p>
                        <p style="padding-top:10px ;">Wi-fi miễn phí trong phòng</p>
                    </div>
                </div>
            </form>
            <?php
                    if($_SERVER['REQUEST_METHOD']=="POST" and ISSET($_POST['btn'])){
                    try {
                        $email=$_POST["email"];
                        $pass=$_POST["password"];
                    
                        // $con=mysqli_connect("localhost","root","","burninghotel");
                        if(!$con){
                            echo"Kết nối thất bại";
                            return;
                        }
                        if($email==""||$pass==""){
                            echo '<script>
                            alert("Vui lòng nhập đầy đủ thông tin");
                            window.location="javascript: history.go(-1)";
                            </script>';
                        exit;
                        }

                        $sql = "SELECT * FROM khachhang WHERE SDT = '$email' OR Email='$email'";
                        $_result= mysqli_query($con,$sql);
                        if (mysqli_num_rows($_result) == 0){
                            echo '<script>
                            alert("Tên đăng nhập không tồn tại!Vui lòng kiểm tra lại"); 
                            window.location="javascript: history.go(-1)";
                            </script>';
                        exit;
                        }

                        //Lấy mật khẩu trong database ra
                        $row = mysqli_fetch_assoc($_result);
                        //So sánh 2 mật khẩu có trùng khớp hay không
                        if ($pass != $row['PassWord']) {
                            echo '<script>
                            alert("Mật khẩu không đúng!Vui lòng kiểm tra lại"); 
                            window.location="javascript: history.go(-1)";
                            </script>';
                        exit;
                        }

                        else{
                            echo '<script>
                            alert("Chào Mừng BẠN ĐẾN VỚI BURNING HOTEL!"); 
                            window.location="./logged/home.php";
                            </script>';
                            $_SESSION['ten']=$row['HoTen'];
                            $_SESSION['sdt']=$row['SDT'];
                            $_SESSION['email']=$row['Email'];
                            $_SESSION['makhachhang']=$row['ID'];
                        }
                        }
                        catch (Exception $e) {
                            echo '<script>
                            alert("Lỗi: ' . $e->getMessage() . '"); 
                            window.location="javascript: history.go(-1)";
                            </script>';
                            echo 'Lỗi: ' . $e->getMessage();
                        }
                    }
            ?>
        </div>
    </div>
</body>

</html>