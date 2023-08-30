<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>

<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand -> insert_brand($cartegory_id, $brand_name);
}
?>

<style>
    select {
        height: 30px;
        width: 200px;
        margin-top: 20px;
        display:block;
    }
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm hãng sản xuất</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">--Chọn danh mục</option>
                        
                        <?php
                        $show_cartegory = $brand -> show_cartegory();
                        if ($show_cartegory) {$i=0;
                            while ($result = $show_cartegory->fetch_assoc()) {$i++;
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"> <?php echo $result['cartegory_name'] ?> </option>
                        <?php
                          }
                        }          
                        ?>

                    </select>

                    <input name="brand_name" type="text" placeholder="Nhập tên hãng sản xuất" required>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>