<?php
include "class/all.php";


?>

<?php
$product = new product;
$show_product = $product -> show_product();
$show_product_img = $product ->show_product_img();
if($show_product_img) {
    $result2 = $show_product_img->fetch_assoc();
}

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

    <!-- --------------------------  sản phẩm  ---------------------------- -->

    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p><span> &#8260;</span><p>Bàn phím cơ</p><span> &#8260;</span><p>ZOUYA</p><span> &#8260;</span> <p>GMK 67</p>
                </p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                    <?php
                            $show_product = $product->show_product();
                            // $show_product_img = $product->show_product_img();

                            if($show_product) {$i=0;
                                while($result = $show_product ->fetch_assoc()){$i++;
                                    if($result['product_id'] == 22){
                        ?>
                        <img src="uploads/<?php echo $result['product_img'] ?>" alt="">
                    </div>

                    <div class="product-content-left-small-img">
                        <?php
                        if($show_product_img) {$k=0;
                            while($result2 = $show_product_img ->fetch_assoc()){$k++;
                                if($result2['product_id'] == 22){
                        ?>

                        <img src="uploads/<?php echo $result2['product_img_desc'] ?>" alt="img">

                        <?php
                                }
                            }
                        }
                        ?>

                    </div>
                </div>

                <div class="product-content-right">
                    <div class="product-content-right-product-name">

                        <h1><?php echo $result['product_name']; ?></h1>

                        <p>Mã sản phẩm: AM007PC</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo $result['product_price'] ?> VNĐ</p>
                    </div>

                    <div class="product-content-right-product-switch">
                        <p style="font-weight: bold;">Switch: </p>
                        <div class="switch">
                            <span>Cream Yellow Pro</span>
                            <span>Cream Blue Pro</span>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng: </p>
                        <input type="number" min="0" value="1">
                    </div>
                    <p style="color: red;">Vui lòng chọn switch</p>

                    <div class="product-content-right-product-button">
                        <button><i class="fas fa-shopping-bag"></i>
                            <p>MUA NGAY</p></button>
                        <button><p>TÌM TẠI CỬA HÀNG</p></button>
                    </div>
                    
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/> </svg><p> Hotline</p>
                        </div>

                        <div class="product-content-right-product-icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg><p>Chat</p>
                        </div>

                        <div class="product-content-right-product-icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg><p>Mail
                            </p>
                            
                        </div>
                    </div>

                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                          
                            <img src=images/image-down.png" alt="">
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item mota">
                                    <p>Thông số kỹ thuật</p>
                                </div>

                                <div class="product-content-right-bottom-content-title-item thongso">
                                    <p>Mô tả sản phẩm</p>
                                    
                                </div>

                            </div>

                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-mota">
                                    <p><?php echo $result['product_desc'] ?>
                                </p>
                                </div>

                                <div class="product-content-right-bottom-content-thongso">
                                
                                        <p>
                                            &#8226; Layout 75%, mạch xuôi có núm <br> <br>
                                            &#8226; PCBA có flex cut giúp tăng độ nhún <br><br>
                                            &#8226; Gasket mount kết hợp với full foam đi kèm (Plate foam + Case foam + Switch pad) giúp âm không rỗng <br><br>
                                            &#8226; AKKO CS switch – Cream Yellow và keycap Blue on White (Cherry profile / PBT Double-shot) giúp âm gõ gây ấn tượng với người dùng <br><br>
                                            &#8226; Stab đã được tinh chỉnh sẵn giúp trải nghiệm được tối ưu <br><br>
                                        </p>

                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                                }
                            }
                        }
    ?>
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

