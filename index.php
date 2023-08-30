<?php
include "class/all.php";


?>

<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory-> show_cartegory();
$brand = new brand;
$show_brand = $brand-> show_brand();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="icon" href="images/keyboard.ico" type="png">
    <link rel="stylesheet" href="css/style.css">
    <title>Cemetery Keyboard</title>
</head>
<body>
        <!-- -------------------------- header  ---------------------------- -->

    <header>
            <a href="index.php">
                <div class="logo">
                    <img src="images/vlu.png">
                </div>
            </a>

            <div class="menu">
                <li>                
                    <?php
                            $show_cartegory = $cartegory -> show_cartegory();
                            if ($show_cartegory) {$i=0;
                                while ($result = $show_cartegory->fetch_assoc()) {$i++;
                    ?>
                    <a class="<?php echo $result['cartegory_id']; ?>" href="<?php echo $result['cartegory_id']; echo '.php'; ?>"><?php echo $result['cartegory_name']; ?></a>

                    <?php
                                }
                            }
                        ?>
                </li>
            </div>

            <div class="others">
                <li><input placeholder="Tìm kiếm sản phẩm" type="text"><i class="fas fa-search"></i></li>
                <li><a class="fas fa-heart"></a></li>
                <li><a class="fas fa-shopping-bag"></a></li>
            </div>
    </header>

    <!-- -------------------------- tạo ảnh trượt  ---------------------------- -->

    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="images/slide2.jpg">
            <img src="images/slide3.jpg">
            <img src="images/slide4.jpg">
        </div>

<!-- tạo nút bấm chuyển ảnh -->

        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot active"></div>
            <div class="dot active"></div>
        </div>

    </section>

    <section class="app-container">
        <p>Tải ứng dụng trên!</p>
        <div class="app">
            <img a href="https://www.apple.com/app-store/" src="images/appstore.png" alt="Tải trên App Store">
            <img src="images/googleplay.png" alt="Tải trên Google Store">
        </div>

        <p>Nhận tin khuyến mãi</p>
        <input  type="text" placeholder="Nhập email của bạn" name="email"><i id="mail" class="fas fa-envelope"></i>
    </section>
    
    <!-- -------------------------- footer  ---------------------------- -->

<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Chứng nhận</h3>


        <div class="footer-img">
            <img src="images/thongbao.png">


        </div>

        <p class=""> © Bản quyền thuộc về chúng tôi</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fas fa-map-marker-alt"></i>
            <p><span>21 Pasteur</span> Phường Nguyễn Thái Bình, Quận 1, Thành phố Hồ Chí Minh</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>(+84)2345678</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">gloryglorymu@gmail.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About our team</span>
            Xin mẹ 500.000 VNĐ để đi khởi nghiệp bán Pokemon.
        </p>

        <div class="footer-icons">
            <a href="https://www.facebook.com/hadonghung">
                <i class="fab fa-facebook"></i>
            </a>
                
            <a href="#">
                <i class="fab fa-facebook-messenger"></i>
            </a>
    
            <a href="#">
                <i class="fab fa-youtube"></i>
            </a>
            
            <a href="#">
                <i class="fab fa-instagram-square"></i>
            </a>
               
            
        </div> 

    </div>

</footer>

</body>
    <!-- --------------------------  tạo slide ảnh  ---------------------------- -->
 
 <script type="text/javascript" src="JS/script.js"></script>


</html>