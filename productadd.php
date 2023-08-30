<?php
include "header.php";
include "slider.php";
include "class/product_class.php"
?>
                                                                                                                                                                                             
<?php
    $product = new product;
    if($_SERVER['REQUEST_METHOD']  === 'POST'){
        
        // echo '<pre>';
        // echo print_r($_FILES['product_img_desc']['name']);
        // echo '</pre>';
        $insert_product = $product -> insert_product($_POST, $_FILES);

    }
?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm sản phẩm</h1>
                <br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color:red">*</span></label>
                    <input type="text" name="product_name" required>

                    <label for="">Chọn danh mục <span style="color:red">*</span></label>
                    <select name="cartegory_id" id="">
                        <option value="">---Chọn---</option>

                        <?php
                        $show_cartegory = $product -> show_cartegory();
                        if($show_cartegory) {$i=0;
                            while($result = $show_cartegory->fetch_assoc()) {$i++;


                        ?>
                        <option value="<?php echo $result['cartegory_id'];?>"><?php echo $result['cartegory_name'] ?></option>

                        <?php
                            }
                        } 
                        ?>
                    </select>

                    <label for="">Chọn hãng sản xuất <span style="color:red">*</span></label>
                    <select name="brand_id" id="">
                        <option value="">---Chọn---</option>
                        
                        <?php
                        $show_brand = $product->show_brand();
                        if($show_brand) {$i=0;
                            while($result = $show_brand -> fetch_assoc()){
                                $i++;

                        ?>
                        <option value="<?php echo $result['brand_id'];?>"><?php echo $result['brand_name']; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

                    <label for="">Nhập giá sản phẩm <span style="color:red">*</span></label>
                    <input type="text" name="product_price" placeholder="Nhập giá" required>

                    <label for="">Nhập giá khuyến mãi</label>
                    <input type="text" name="product_sale" placeholder="Nhập giá khuyến mãi" required>

                    <label for="">Mô tả sản phẩm</label>              
                    <textarea name="product_desc" id="editor1" cols="50" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea> <br>

                    <label for="">Ảnh sản phẩm <span style="color:red">*</span></label>              
                    <input type="file" name="product_img" required>

                    <label for="">Ảnh mô tả <span style="color:red">*</span></label>              
                    <input  type="file" name="product_img_desc[]" multiple required>


                    <button type="submit">Thêm</button>
                </form>
            </div>
</body>
<script>
              // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
	            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
}               
);
</script>
</html>