<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/restaurant/main.css?v= <?php echo time(); ?>">
  <link rel="icon" href="../public_html/favicon.ico" type="image/png">
  <script src="https://kit.fontawesome.com/a0ff9460a2.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
</head>

<body>
  <!-- header -->
  <?php include("../logged/header.php") ?>
  <!-- banner -->
  <section id="banner">
    <div class="container-fluid p-0 text-center">
      <div class="img h-100">
        <img src="../img/restaurant/main/banner.png" alt="" class="w-100">
        <div class="box">
          <p style="border-top: 2px solid #937438;border-bottom: 2px solid #937438;text-align:left; width:100px; margin-bottom:0px">RESERVATION</p>
          <b style="font-size: 45px;text-align:left;">This evening will be great!</b>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis</p>
          <div>
            <Button class="btbook">Book a Table</Button>
            <Button class="btget"><a href="./menu.php" style="text-decoration: none;border: none;color: white;">View menu</a></Button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end banner -->

  </section>
  <!--History -->
  <section id="history" class="py-5">
    <div class="container">
      <div class="row pb-5">
        <div class="col-4 d-flex">
          <div class="img d-flex p-2">
            <img src="../img/restaurant/main/icondiachi.png" alt="" class="rounded-circle" style="background-color: black;width:70px; height:70px">
          </div>
          <div class="content p-2">
            <h5>Locate Us</h5>
            <p>Riverside 25, San Francisco, California</p>
          </div>
        </div>
        <div class="col-4 d-flex">
          <div class="img d-flex p-2">
            <img src="../img/restaurant/main/icondiachi.png" alt="" class="rounded-circle" style="background-color: black;width:70px; height:70px">
          </div>
          <div class="content p-2">
            <h5>Open Hours</h5>
            <p>Mon to Fri 9:00 AM - 9:00 PM</p>
          </div>
        </div>
        <div class="col-4 d-flex">
          <div class="img d-flex p-2">
            <img src="../img/restaurant/main/icondiachi.png" alt="" class="rounded-circle" style="background-color: black;width:70px; height:70px">
          </div>
          <div class="content p-2">
            <h5>Reservation</h5>
            <p>Hirestaurantate@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6" style="border-right: 1px solid #B29A90">
          <img src="../img/restaurant/main/anh1.png" alt="" class="img-fluid" style="width:500px">
        </div>
        <div class="col-6 content ps-5">
          <h3>The Story</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum sapiente rem incidunt! Illo perferendis laudantium blanditiis adipisci rem tempora beatae amet velit. Ex eius consequatur velit, delectus possimus rerum veniam.</p>
          <div class= "row">
            <div class="col-6">
              <h3>1996</h3>
              <p>Lorem Ipsum is that it has a more-or-less normal distribution </p>
            </div>
            <div class="col-6">
              <h3>2021</h3>
              <p>Lorem Ipsum is that it has a more-or-less normal Content content</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end History-->

  <!-- Menu -->
  <section id="menumonan" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <p class="m-0" style="border-top: 2px solid #937438;border-bottom: 2px solid #937438; width: 48px">MENU</p>
          <h3>Try Our Special Offers</h3>
          <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content making it look like readable English. </p>
          <img src="../img/restaurant/main/anh4.png" alt="" class="img-fluid">
          <button> <a href="./menu.php" style="text-decoration: none;color:#937438">See all dishes</a></button>   
        </div>
        <div class="col-1"></div>
        <div class="col-7 p-4">
          <h4>Loại đồ ăn 1</h4>
          <div class="row">
            <div class="col-2 d-flex justify-content-center">
            <img src="../img/restaurant/main/monan1.png" alt="" class="rounded-circle" style="width:70px; height:70px">
            </div>
            <div class="col-8">
              <h4>Raw Scallops from Erquy</h4>
              <p>Candied Jerusalem artichokes, truffle</p>
            </div>
            <div class="col-2 d-flex align-items-end">
              <b style="margin-bottom: 1rem;">100k</b>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Menu -->

  <!-- service -->
  <section id="service">
    <div class="container py-5">
      <div class="row bg-right">
        <div class="col-6 py-4 ps-0">
          <p style="border-top: 2px solid #937438;border-bottom: 2px solid #937438;text-align:left; width:67px">FEATURE</p>
          <h3 style="width:200px">Always fresh ingredients</h3>
          <p style="width:400px">the people, food and the prime locations make Rodich the perfect place good frinds & family to come together and have great time </p>
          <button class="p-2"><a href="./menu.php" style="text-decoration: none;color:#937438">View menu</a></button>
        </div>
        <div class="col-6 p-0">
          <div class="img1 d-flex justify-content-end">
            <img src="../img/restaurant/main/anh2.png" alt="" style="width: 600px;">
          </div>
        </div>
      </div>
      <div class="row bg-left">
        <div class="col-6 p-0">
          <div class="img1 d-flex justify-content-start">
            <img src="../img/restaurant/main/anh3.png" alt="" style="width: 600px;">
          </div>
        </div>
        <div class="col-6 p-4">
          <p style="border-top: 2px solid #937438;border-bottom: 2px solid #937438;text-align:left; width:67px">FEATURE</p>
          <h3>We invite you to visit our restaurant</h3>
          <p style="width:400px">Every time you perfectly dine with us, it should happy for great inspired food in an environment designed with individual touches unique to the local area. </p>
          <button class="p-2"><a href="./menu.php" style="text-decoration: none;color:#937438">View menu</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- end service -->

  <!-- book table -->
  <?php
  include('booktable.php')
  ?>
  <!-- footer -->
  <?php
  include('../logged/footer.php');
  ?>

  <!-- <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
  <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script> -->
</body>

</html>