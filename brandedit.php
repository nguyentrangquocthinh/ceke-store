<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>

<?php
$brand = new brand;
$brand_id = $_GET['brand_id'];
$get_brand = $brand-> get_brand($brand_id);

if ($get_brand) {
    $resultA = $get_brand -> fetch_assoc();
}

?>

<?php
$brand = new brand;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $update_brand = $brand -> update_brand($brand_name, $brand_id, $cartegory_id);
}
?>

<style>
    select {
        height: 30px;
        width: 200px;
        margin-bottom: 20px;
  

    }
</style>



<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Sửa hãng sản xuất</h1>
                <br>
                <form action="" method="POST">
                    <p><strong>Chọn danh mục: </strong></p> <br>
                    <select name="cartegory_id" id="">
                        
                        <option value="#">--Chọn danh mục</option>
                        
                        <?php
                            $show_cartegory = $brand -> show_cartegory();
                            if ($show_cartegory) {$i=0;
                                while ($result = $show_cartegory->fetch_assoc()) {$i++;
                        ?>
                        <option <?php if($resultA['cartegory_id'] == $result['cartegory_id'])  {echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                        <?php
                          }
                        }          
                        ?>

                    </select>

      
                    <p><strong>Nhập tên hãng: </strong></p>
                    
                    <input name="brand_name" type="text" placeholder="Nhập tên hãng sản xuất" required 
                    value="<?php echo $resultA['brand_name']?>">
                    <button type="submit">Sửa</button>

                </form>


            </div>
        </div>
    </section>
</body>
</html>