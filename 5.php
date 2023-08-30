<?php
include "class/all.php";


?>

<?php
$product = new product;
$show_product = $product -> show_product();

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

    <!-- -------------------------- danh mục sản phẩm  ---------------------------- -->

    <section class="category">

        <div class="container">
            <div class="category-top row">
                <p>Trang chủ</p><span>&#8260;</span><p>Bàn Phím Cơ</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                        <li class="category-left-li"><a href="#">Bàn phím cơ</a>
                            <ul>
                                <?php
                                    $show_brand = $brand -> show_brand();
                                    if ($show_brand) {$i=0;
                                        while ($result = $show_brand->fetch_assoc()) {$i++;
                                ?>
                                <li><a href="<?php echo $result['brand_name']; echo '.php' ?>"><?php echo $result['brand_name']; ?></a></li>
                                <?php
                                        }
                                    } 
                                ?>
                            </ul>
                        </li>
                        <!-- <li class="cotegory-left-li"><a href="">Keycap</a>
                            <ul>
                                <li><a href="">AKKO</a></li>
                                <li><a href="">Keydous NJ</a></li>
                                <li><a href="">Royal Kludge</a></li>
                                <li><a href="">FL-Esports</a></li>
                                <li><a href="">Glorious</a></li>
                                <li><a href="">Steelseries</a></li>
                            </ul>
                        
                        </li> -->
                        <li class="cotegory-left-li"><a href="">Phụ kiện</a>
                        
                        
                        
                        
                        </li>
                        <li class="cotegory-left-li"><a href="">Khuyến mãi</a></li>
                    </ul>
                </div>

                <div class="category-right row">
                    <div class="category-right-top-item">
                        <p>Bàn phím cơ</p>

                    </div>

                    <div class="category-right-top-item">
                        <button><span>Bộ lọc</span> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg></button>

                     
                    </div>

                    <div class="category-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                            <option value="">Mới nhất</option>
                            <option value="">Cũ nhất</option>
                        </select>
                    </div>
                    <div class="category-right-content row">
                        
                        <?php 
                            $show_product = $product -> show_product();
                            if ($show_product) {$i=0;
                                while ($result = $show_product->fetch_assoc()) {$i++;

                        ?>

                                <div class="category-right-content-item">
                                    <a href="<?php echo $result['product_id']; echo '.php';?>">  
                                        <img src="uploads/<?php echo $result['product_img']; ?>" alt="">
                                        <h1><?php echo $result['product_name'];?></h1>
                                        <p><?php echo $result['product_price']; ?>₫</p>
                                    </a>
                                </div>

                        <?php
                                
                            }
                        }
                        ?>

                    </div>  
            
                    <div class="category-right-bottom row">
                        <div class="category-right-bottom-item">
                            <p>Hiển thị 2 <span> | </span>4 sản phẩm</p> 
                        </div>

                        <div class="category-right-bottom-item">
                            <p><span>&#171;</span> 1 2 3 <span>&#187;</span>Trang cuối</p> 
                        </div>
                    </div>


                </div>

                    
            </div>
        </div>
    </section>




    <!-- -------------------------- footer  ---------------------------- -->

    <footer class="footer-distributed">
        <div class="footer-left">
    
            <h3>Chứng nhận</h3>
    
        <a href="http://online.gov.vn/Home/WebDetails/74686?AspxAutoDetectCookieSupport=1">
            <div class="footer-img">
                <img src="images/thongbao.png">
            </div>
            
        </a>
    
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

