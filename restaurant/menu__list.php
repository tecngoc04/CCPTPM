<?php session_start(); ?>
<?php include('../config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet/less" type="text/css"
        href="../css/restaurant/menu/menulist.module.scss?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- link slick -->
    <link rel="stylesheet" type="text/css" href="../common/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../common/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
</head>

<body>
    <?php include('../logged/header.php'); ?>
     <!-- TODO: banner -->
     <section id="banner">
        <div class="container-fluid p-0 text-center">
            <div class="img h-100">
                <img src="../img/service/banner_service_1.jpg" alt="" class="w-100">
                <div class="box">
                    <div class="tieude"></div>
                    <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Restaurant</p>
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;">Menu List</h3>
                    <div class="tieude"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <section id="content">
        <?php
        if (isset($_GET['category'])) {
            $category = $_GET['category'];

            $count_sql = "SELECT COUNT(*) as count FROM doan WHERE PhanLoai = '$category'";
            $count_result = $con->query($count_sql);
            $total_rows = $count_result->fetch_assoc()['count'];

            $items_per_page = 5;

            if ($total_rows > 0) {
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($current_page - 1) * $items_per_page;

                $sql = "SELECT * FROM doan WHERE PhanLoai = '$category' LIMIT $start, $items_per_page";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $ID = $row["ID"];
                    echo '<div class="sub__content">
                    <div class="image">
                    <img src="' . $row["img"] . '" alt="hinhanhdoan" class="h-100"/>
                    </div>
                    <div class="detail">
                    <h4>' . $row["TenMon"] . '</h4>
                    <p class="describe">' . $row["MoTa"] . '</p>
                    <div class="sup__detail">
                    <p class="topic">Danh Mục: </p>
                    <p class="infor">' . $row["PhanLoai"] . '</p>
                    </div>
                    <div class="sup__detail">
                    <p class="topic">Hàm Lượng: </p>
                    <p class="infor">' . $row["HamLuongcalo"] . ' Calories</p>
                    </div>
                    <div class="sup__detail">
                    <p class="topic">Giá: </p>
                    <p class="infor">' . $row["ThanhTien"] . ' VNĐ</p>
                    </div>
                    <div class="sup__detail">
                    <p class="topic"></p>
                    <p class="infor"></p>
                    </div>';
                    ?>
                    
                    <a style="text-decoration:none;color:black;" href="menu_detail.php?ID=<?php echo $ID; ?>"><button>Xem Chi Tiết</button></a>
                    <button>Thêm giỏ hàng</button>
                    <?php
                    echo '</div>';
                    echo '</div>';
                
            }
                echo'<nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">';
                        if ($current_page > 1) {
                            $prev_page = $current_page - 1;
                            echo '<a href="?category=' . $category . '&page=' . $prev_page . '" class="page-link">Previous</a>';
                        }
                echo    '</li>
                        <li class="page-item d-flex">';
                        $total_pages = ceil($total_rows / $items_per_page);
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<a href="?category=' . $category . '&page=' . $i . '" class="page-link">' . $i . '</a>';
                        }
                echo    '</li>
                        
                <li class="page-item">';
                if ($result->num_rows == $items_per_page) {
                    $next_page = $current_page + 1;
                    echo '<a href="?category=' . $category . '&page=' . $next_page . '" class="page-link">Next</a>';
                } else {
                    if (isset($next_page)) {
                        echo '<style> a[href="?category=' . $category . '&page=' . $next_page . '"] { display: none; } </style>';
                    }
                }
                echo '</li>
                    </ul>
                </nav>';
            } else {
                echo "0 kết quả";
            }
        }
        ?>
        

    </section>


    <!-- footer -->
    <?php include('../logged/footer.php'); ?>

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