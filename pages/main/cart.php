<div class="cart_page" onclick="Check_Total_price()">
    <section class="cart_contain">
        <div class="large_container">
            <div>
                <h1 class="cart_title">
                    <span>Giỏ hàng của bạn</span>
                </h1>
            </div>
            <div class="product_contain">
                <?php
                if (!isset($_SESSION['cart']) || !count($_SESSION['cart'])) {
                    echo "<p>Không có sản phẩm nào để hiển thị</p>";
                } else {
                ?>
                    <form action="">
                        <div class="product_list">
                            <div class="cart_header_box">
                                <div class="cart_header first_header"></div>
                                <div class="cart_header second_header">Sản phẩm</div>
                                <div class="cart_header third_header"></div>
                                <div class="cart_header fourth_header">
                                    <span class="price">Giá</span>
                                </div>
                                <div class="cart_header fifth_header">Số lượng</div>
                                <div class="cart_header sixth_header">Thành tiền</div>
                            </div>
                        </div>
                        <div class="cart_body_box">
                            <!-- item1 -->
                            <?php
                            foreach ($_SESSION['cart'] as $item) {
                            ?>
                                <div class="item_cart item_<?php echo $item['id'] ?>_box">
                                    <div class="cart_body first_body">
                                        <a href="javascript:;" onclick="Remove_cart('item_<?php echo $item['id'] ?>_box')">
                                            <span>
                                                <i class="bi bi-x-lg icon link_icon deletecart" name="<?php echo $item['id'] ?>"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="cart_body second_body">
                                        <a href="#" title="item" class="product_image_c">
                                            <img class="" src="admin/modules/quanlysp/uploads/<?php echo $item['image'] ?>" alt="item" height="100%" width="100%">
                                        </a>
                                    </div>
                                    <div class="cart_body third_body">
                                        <h2 class="product_name">
                                            <a href="#" class="product_link"><?php echo $item['name'] ?></a>
                                        </h2>
                                    </div>
                                    <div class="cart_body fourth_body">
                                        <span class="item_price"><?php echo $item['price'] ?><sup>₫</sup></span>
                                    </div>
                                    <div class="cart_body fifth_body">
                                        <div class="number_box">
                                            <button class="button_down" type="button" onclick="Decrease('item_<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                                <i class="bi bi-caret-down-fill icon_button subcart" name="<?php echo $item['id'] ?>"></i>
                                            </button>
                                            <input type="text" min="1" max="10" maxlength="2" value="<?php echo $item['number'] ?>" class="number_cart item_<?php echo $item['id'] ?>">
                                            <button class="button_up" type="button" onclick="Increase('item_<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                                <i class="bi bi-caret-up-fill icon_button addcart" name="<?php echo $item['id'] ?>"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart_body sixth_body">
                                        <span class="item_price" id="price_<?php echo $item['id'] ?>"> <?php echo $item['price'] ?> <sup>₫</sup></span>
                                    </div>
                                </div>
                                <?php
                            }
                                ?>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="total">
                                <table class="total_table">
                                    <tfoot>
                                        <tr>
                                            <td class="talbe_content">
                                                <span class="total_header">Tổng số thành tiền:</span>
                                                <strong>
                                                    <span class="total_price">2.000.000<sup>₫</sup></span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <ul class="submit">
                                    <li>
                                        <button class="second_button" onclick="" type="button">
                                            <a href="pages/main/payment.php">
                                                <span>Tiến hành thanh toán</span>
                                            </a>
                                        </button>
                                        <button class="first_button" onclick="" type="button">
                                            <a href="index.php">
                                                <span>Tiếp tục mua sắm</span>
                                            </a>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="cart_mobile">
            <form action="">
                <div class="cart_sm_title">
                    <span>Giỏ hàng của bạn</span>
                </div>
                <div class="small_content_c">
                    <?php
                    if (!isset($_SESSION['cart']) || !count($_SESSION['cart'])) {
                        echo "<p style='padding: 0px 15px;'>Không có sản phẩm nào để hiển thị</p>";
                    } else {
                    ?>
                    <div class="content_product_c">
                        <?php
                        foreach ($_SESSION['cart'] as $item) {
                        ?>
                            <div class="small_product_c item_<?php echo $item['id'] ?>_box">
                                <div class="small_pic_bc">
                                    <a href="#" title="item" class="small_link_c">
                                        <img src="admin/modules/quanlysp/uploads/<?php echo $item['image'] ?>" alt="item" height="150" width="80">
                                    </a>
                                </div>
                                <div class="small_title_bc">
                                    <h3>
                                        <a href="#"><?php echo $item['name'] ?></a>
                                    </h3>
                                    <p>
                                        <span class="small_price_c"><?php echo $item['price'] ?><sup>₫</sup></span>
                                    </p>
                                </div>
                                <div class="number_bc">
                                    <div class="number_p_c">
                                        <button class="small_button_down" type="button" onclick="Decrease('item_<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                            <i class="bi bi-caret-down-fill icon_button subcart" name="<?php echo $item['id'] ?>"></i>
                                        </button>
                                        <input  type="text" min="1" max="10" maxlength="2" value="<?php echo $item['number'] ?>" class="input_bc item_<?php echo $item['id'] ?>">
                                        <button class="small_button_up" type="button" onclick="Increase('item_<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                            <i class="bi bi-caret-up-fill icon_button addcart" name="<?php echo $item['id'] ?>"></i>
                                        </button>
                                        <a href="javascript:;" class="small_remove" onclick="Remove_cart('item_<?php echo $item['id'] ?>_box')" name="<?php echo $item['id'] ?>">
                                            <span>Xóa</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                            ?>
                    </div>
                    <div class="small_total_bc">
                        <div class="small_total_c">
                            <h3>Tổng tiền</h3>
                            <a class="small_price">2.000.000<sup>₫</sup></a>
                        </div>
                        <div class="small_submit">
                            <button class="small_first_b" onclick="location.href='pages/main/payment.php'" type="button">
                                <span>Tiến hành thanh toán</span>
                            </button>
                            <button class="small_second_b" onclick="location.href='index.php'" type="button">
                                <span>Tiếp tục mua hàng</span>
                            </button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </section>
</div>

<!-- <script>
    sessionStorage.setItem('cart', JSON.stringify({
        name: 1,
    }))
    var a = sessionStorage.getItem("cart");
    var b = JSON.parse(a);

    console.log(b['name']);
</script> -->