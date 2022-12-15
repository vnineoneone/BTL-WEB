<?php
if (isset($_GET['id'])) {
    $sql_pro = "SELECT * FROM product,category WHERE product.id_category = category.id_category AND product.id_category = '$_GET[id]' ORDER BY id_product DESC";
} else {
    $sql_pro = "SELECT * FROM product,category WHERE product.id_category = category.id_category ORDER BY id_product DESC";
}
$query_pro = mysqli_query($mysqli, $sql_pro);
$sql_brand = "SELECT * FROM brand";
$query_brand = mysqli_query($mysqli, $sql_brand);
?>


<div class="category_t">
    <div class="row">
        <div class="text_container">
            <div class="row">
                <aside class="sidebar col-md-12 col-lg-3">
                    <div class="side_container">
                        <aside class="side_box">
                            <div class="title_line_c">
                                <h2 class="side_title">
                                    <span>Thương hiệu</span>
                                </h2>
                            </div>
                            <div class="side_text_box">
                                <ul class="list-unstyled">
                                    <?php while ($row_brand = mysqli_fetch_array($query_brand)) { ?>
                                        <li class="filter-product">
                                            <span>
                                                <input type="checkbox" id="<?php echo $row_brand['name_brand'] ?>" value="<?php echo $row_brand['name_brand'] ?>">
                                                <label for="<?php echo $row_brand['name_brand'] ?>">
                                                    <?php echo $row_brand['name_brand'] ?>
                                                </label>
                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </aside>
                        <aside class="side_box" onclick="Filter_price_check()">
                            <div class="title_line_c">
                                <h2 class="side_title">
                                    <span>Khoảng giá</span>
                                </h2>
                            </div>
                            <div class="side_text_box">
                                <ul class="list-unstyled">
                                    <li class="filter-product">
                                        <span>
                                            <input type="checkbox" id="Duoi 100.000" value="Dưới 100.000đ" name="price_filter">
                                            <label for="Duoi 100.000">
                                                Dưới 100.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            <input type="checkbox" id="100.000đ - 200.000đ" value="100.000đ - 200.000đ" name="price_filter">
                                            <label for="100.000đ - 200.000đ">
                                                100.000đ - 200.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            <input type="checkbox" id="200.000đ - 500.000đ" value="200.000đ - 500.000đ" name="price_filter">
                                            <label for="200.000đ - 500.000đ">
                                                200.000đ - 500.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            <input type="checkbox" id="500.000đ - 1.000.000đ" value="500.000đ - 1.000.000đ" name="price_filter">
                                            <label for="500.000đ - 1.000.000đ">
                                                500.000đ - 1.000.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            <input type="checkbox" id="Tren 1.000.000" value="Trên 1.000.000đ" name="price_filter">
                                            <label for="Tren 1.000.000">
                                                Trên 1.000.000đ
                                            </label>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </aside>
                <div class="col-md-12 col-lg-9 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 inline">
                        <h1 class="Ghe_sort">
                            <?php
                            if (isset($row['name_category'])) {
                                echo $row['name_category'];
                            } else {
                                echo "Tất cả sản phẩm";
                            }
                            ?></h1>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 text-xs-left text-sm-right text-end inline">
                        <div class="sort">
                            <label class="label_sort">Sắp xếp theo:</label>
                            <div class="dropdown inline Macdinh">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="sort_text_c">
                                    Mặc định
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><button class="dropdown-item" type="button" onclick="Filter('all')">Mặc định</button></li>
                                    <li><button class="dropdown-item" type="button" onclick="Filter('increase')">Giá tăng dần</button></li>
                                    <li><button class="dropdown-item" type="button" onclick="Filter('decrease')">Giá giảm dần</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section>
                        <div class="row" id="filter_contain">
                            <div class="no_product" style="display: none;">
                                <div class="row">
                                    <div class="col">
                                        <span>Không có sản phẩm nào trong danh mục này.</span>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="buton_close">
                                            <span class="bt_close">x</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            while ($row = mysqli_fetch_array($query_pro)) {
                            ?>
                                <div class="filterDiv filter_<?php echo $row['id_product'] ?> col-xs-6 col-sm-4 col-md-3 col-lg-3" id="filter_<?php echo $row['id_product'] ?>">
                                    <div class="product_c">
                                        <div class="product_image" id="test">
                                            <a href="a" class="detail_link">
                                                <img src="admin/modules/quanlysp/uploads/<?php echo $row['image'] ?>" alt="Kệ đồ" class="img_t">
                                            </a>
                                            <div class="icon_box_d" style="display: none;">
                                                <div class="icon_group_d">
                                                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_product'] ?>" class="link_icon_d">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <form method="POST" action="controllers/CartController.php?id=<?php echo $row['id_product'] ?>">
                                                        <button type="submit" class="button_icon_d" name="themgiohang">
                                                            <i class="fas fa-dolly"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="image_text">
                                            <h3 class="product_namei">
                                                <a href="a" class="link_image"><?php echo $row['name_product'] ?></a>
                                            </h3>
                                            <div class="text-center">
                                                <span class="filter_<?php echo $row['id_product'] ?> product_price"><?php echo number_format($row['price'] * 1000, 0, ', ', '.')  ?><sup>₫</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </section>
                </div>
                <!-- <div class="icon_side_d" onclick="Show_icon_d()">
                    <i class="fa fa-align-right"></i>
                </div> -->
            </div>
        </div>
    </div>
</div>