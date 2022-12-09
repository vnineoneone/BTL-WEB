<?php
$sql_pro = "SELECT * FROM product,category WHERE product.id_category = category.id_category AND product.id_category = '$_GET[id]' ORDER BY id_product DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<!-- <h1>Category</h1>

<?php
while ($row = mysqli_fetch_array($query_pro)) {
?>
    <li>
        <?php
        echo $row['name_product']
        ?>
    </li>
<?php
}
?> -->

<div class="category_t">
    <div class="row">
        <div class="text_container">
            <div class="row">
                <aside class="sidebar col-md-12 col-lg-3 openf">
                    <aside class="side_box">
                        <div class="title_line_c">
                            <h2 class="side_title">
                               <span>Danh mục</span>
                            </h2>
                        </div>
                        <div class="side_text_box">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="" class="nav_link">Trang chủ</a></li>
                                    <li><a href="" class="nav_link">Giới thiệu</a></li>
                                    <li>
                                        <a href="" class="nav_link">Sản phẩm</a>
                                    </li>
                                    <li><a href="" class="nav_link">Tin tức</a></li>
                                    <li><a href="" class="nav_link">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <div class="side_container">
                        <aside class="side_box">
                            <div class="title_line_c">
                                <h2 class="side_title">
                                    <span>Thương hiệu</span>
                                </h2>
                            </div>
                            <div class="side_text_box">
                                <ul class="list-unstyled">
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="MOHO" value="MOHO">
                                            <label for="MOHO">
                                                MOHO
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="KOAS" value="KOAS">
                                            <label for="KOAS">
                                                KOAS
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="BG" value="BG">
                                            <label for="BG">
                                                BG
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="GOVI" value="GOVI">
                                            <label for="GOVI">
                                                GOVI
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id=" Piron" value=" Piron">
                                            <label for=" Piron">
                                                Piron
                                            </label>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="side_box">
                            <div class="title_line_c">
                                <h2 class="side_title">
                                    <span>Khoảng giá</span>
                                </h2>
                            </div>
                            <div class="side_text_box">
                                <ul class="list-unstyled">
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="Duoi 100.000" value="Dưới 100.000đ">
                                            <label for="Duoi 100.000">
                                                Dưới 100.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="100.000đ - 200.000đ" value="100.000đ - 200.000đ">
                                            <label for="100.000đ - 200.000đ">
                                                100.000đ - 200.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="200.000đ - 500.000đ" value="200.000đ - 500.000đ">
                                            <label for="200.000đ - 500.000đ">
                                                200.000đ - 500.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="500.000đ - 1.000.000đ" value="500.000đ - 1.000.000đ">
                                            <label for="500.000đ - 1.000.000đ">
                                                500.000đ - 1.000.000đ
                                            </label>
                                        </span>
                                    </li>
                                    <li class="filter-product">
                                        <span>
                                            
                                            <input type="checkbox" id="Tren 1.000.000" value="Trên 1.000.000đ">
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
                        <h1 class="Ghe_sort">Ghế</h1>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 text-xs-left text-sm-right text-end inline">
                        <div class="sort">
                            <label class="label_sort">Sắp xếp theo:</label>
                            <div class="dropdown inline Macdinh">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mặc định
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><button class="dropdown-item" type="button">Mặc định</button></li>
                                    <li><button class="dropdown-item" type="button">Giá tăng dần</button></li>
                                    <li><button class="dropdown-item" type="button">Giá giảm dần</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="product_c">
                                    <div class="product_image">
                                        <a href="#" title="Ghế Luxury">
                                            <img src="assets/images/item.png" alt="Ghế Luxury" class="img_t">
                                        </a>
                                    </div>
                                    <div class="image_text">
                                        <h3 class="product_namei">
                                            <a href="#" title="Ghế Luxury" class="link_image">Ghế Luxury</a>
                                        </h3>
                                        <div class="text-center">
                                            <span class="product_price">500.000<sup>₫</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="product_c">
                                    <div class="product_image">
                                        <a href="#" title="Ghế Luxury" class=" link_image">
                                            <img src="assets/images/item.png" alt="Ghế Luxury" class="img_t">
                                        </a>
                                    </div>
                                    <div class="image_text">
                                        <h3 class="product_namei">
                                            <a href="#" title="Ghế Woody" class="link_image">Ghế Woody</a>
                                        </h3>
                                        <div class="text-center">
                                            <span class="product_price">90.000<sup>₫</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="product_c">
                                    <div class="product_image">
                                        <a href="#" title="Ghế Luxury" class=" link_image">
                                            <img src="assets/images/item.png" alt="Ghế Luxury" class="img_t">
                                        </a>
                                    </div>
                                    <div class="image_text">
                                        <h3 class="product_namei">
                                            <a href="#" title="Ghế Euro" class="link_image">Ghế Euro</a>
                                        </h3>
                                        <div class="text-center">
                                            <span class="product_price">700.000<sup>₫</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="product_c">
                                    <div class="product_image">
                                        <a href="#" title="Ghế Luxury" class=" link_image">
                                            <img src="assets/images/item.png" alt="Ghế Luxury" class="img_t">
                                        </a>
                                    </div>
                                    <div class="image_text">
                                        <h3 class="product_namei">
                                            <a href="#" title="Ghế Euro" class="link_image">Ghế Gaming</a>
                                        </h3>
                                        <div class="text-center">
                                            <span class="product_price">1.100.000<sup>₫</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</div>