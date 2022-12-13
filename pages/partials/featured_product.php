<?php
$sql_lietke_sp = "SELECT * FROM product ORDER BY id_product";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
$query_sp1 = mysqli_query($mysqli, $sql_lietke_sp);
$row = mysqli_fetch_array($query_sp1);
?>


<div class="featured-product" style="margin-top: 60px;">
    <div class="row">
        <div class="col-md-4 left">
            <div class="count-down">
                <div class="image-view">
                    <a href="#">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row['image'] ?>" alt="" style="width: 100%; height:100%;">
                    </a>
                    <div id="hot-label">HOT</div>
                </div>
                <div class="infomation">
                    <div class="clock">
                        <div class="time" id="time1"></div>
                    </div>
                    <div class="name">
                        <?php echo $row['name_product'] ?>
                    </div>
                    <div class="type">
                        <?php echo $row['brand'] ?>

                    </div>
                    <div class="price">
                        <?php echo number_format($row['price'] * 1000, 0, ', ', '.') . ' VNĐ' ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 right">
            <div class="display-product">
                <div class="tab-menu">
                    <h3>
                        <a href="">SẢN PHẨM NỔI BẬT</a>
                    </h3>
                    <ul class="list-menu">
                        <li>
                            <a href="">Sofa</a>
                        </li>
                        <li>
                            <a href="">Ghế</a>
                        </li>
                        <li>
                            <a href="">Trang trí</a>
                        </li>
                        <li>
                            <a href="">Kệ sách</a>
                        </li>
                        <li>
                            <a href="">Bàn</a>
                        </li>
                        <li>
                            <a href="">Xem Tất cả</a>
                        </li>
                    </ul>
                </div>

                <div class="list-product owl-carousel owl-theme featured-product-carousel">

                    <?php
                    while ($row1 = mysqli_fetch_array($query_lietke_sp)) {
                    ?>
                        <div class="item">
                            <div class="product">
                                <a href="#">
                                    <div class="view-image">
                                        <img src="admin/modules/quanlysp/uploads/<?php echo $row1['image'] ?>" alt="" style="width: 100%; height:179px;">
                                        <div class="list-btn-view" style="display: none;">
                                            <form method="POST" action="controllers/CartController.php?id=<?php echo $row1['id_product'] ?>">
                                                <button type="submit" class="btn2" name="themgiohang">
                                                    <i class="fas fa-cart-arrow-down" style="color: #f7941d;"></i>
                                                </button>
                                            </form>
                                            <a href="index.php?quanly=sanpham&id=<?php echo $row1['id_product'] ?>" class="btn2" id="btn-detail">
                                                <i class="fas fa-eye" style="color: #f7941d;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                <div class=" name">
                                    <?php echo $row1['name_product'] ?>
                                </div>
                                <div class="price">
                                    <?php echo number_format($row1['price'] * 1000, 0, ', ', '.') . ' VNĐ' ?>
                                </div>
                            </div>
                            <?php
                            $row2 = mysqli_fetch_array($query_lietke_sp);
                            if ($row2) {
                            ?>
                                <div class="product">
                                    <a href="#">
                                        <div class="view-image">
                                            <img src="admin/modules/quanlysp/uploads/<?php echo $row2['image'] ?>" alt="" style="width: 100%; height:179px;">
                                            <div class="list-btn-view" style="display: none;">
                                                <form method="POST" action="controllers/CartController.php?id=<?php echo $row2['id_product'] ?>">
                                                    <button type="submit" class="btn2" name="themgiohang">
                                                        <i class="fas fa-cart-arrow-down" style="color: #f7941d;"></i>
                                                    </button>
                                                </form>
                                                <a href="index.php?quanly=sanpham&id=<?php echo $row2['id_product'] ?>" class="btn2" id="btn-detail">
                                                    <i class="fas fa-eye" style="color: #f7941d;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                    <div class=" name">
                                        <?php echo $row2['name_product'] ?>
                                    </div>
                                    <div class="price">
                                        <?php echo number_format($row2['price'] * 1000, 0, ', ', '.') . ' VNĐ' ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>