<?php
$sql_lietke_sp = "SELECT * FROM product ORDER BY id_product DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>


<div class="area-post">
    <div class="display-product">
        <div class="tab-menu">
            <h3>
                <a href="">SẢN PHẨM MỜI VỀ</a>
            </h3>
        </div>

        <div class="list-product owl-carousel owl-theme" id="new-product-carousel">
            <?php
            while ($row = mysqli_fetch_array($query_lietke_sp)) {
            ?>
                <div class="item">
                    <div class="product">
                        <a href="#">
                            <div class="view-image">
                                <img src="admin/modules/quanlysp/uploads/<?php echo $row['image'] ?>" alt="" style="width: 100%; height:179px;">
                                <div class="list-btn-view" style="display: none;">
                                    <form method="POST" action="controllers/CartController.php?id=<?php echo $row['id_product'] ?>">
                                        <button type="submit" class="btn2" name="themgiohang">
                                            <i class="fas fa-cart-arrow-down" style="color: #f7941d;"></i>
                                        </button>
                                    </form>
                                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_product'] ?>" class="btn2" id="btn-detail">
                                        <i class="fas fa-eye" style="color: #f7941d;"></i>
                                    </a>

                                </div>
                            </div>
                        </a>
                        <div class="name">
                            <?php echo $row['name_product'] ?>
                        </div>
                        <div class="price">
                            <?php echo number_format($row['price'] * 1000, 0, ', ', '.') . ' VNĐ' ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>