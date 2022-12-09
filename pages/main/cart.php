<?php
// session_start();
// if (isset($_SESSION['cart'])) {

//     echo '<pre>';
//     print_r($_SESSION['cart']);
//     echo '/<pre>';
// } else {
//     echo "<p>Khong co don hang nao de hien thi</p>";
// }
?>

<div class="cart_page">
    <section class="cart_contain">
        <div class="large_container">
            <div>
                <h1 class="cart_title">
                    <span>Giỏ hàng của bạn</span>
                </h1>
            </div>
            <div class="product_contain">
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
                        <div class="cart_body_box">
                            <!-- item1 -->
                            <?php
                            foreach ($_SESSION['cart'] as $item) {
                            ?>
                                <div class="item_cart" onclick="check('<?php echo $item['id'] ?>')">
                                    <div class="cart_body first_body">
                                        <a href="javascript:;">
                                            <span>
                                                <i class="bi bi-x-lg icon link_icon"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="cart_body second_body">
                                        <a href="#" title="item" class="product_image">
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
                                            <button class="button_down" type="button" onclick="Decrease('<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                                <i class="bi bi-caret-down-fill icon_button"></i>
                                            </button>
                                            <input type="text" min="1" max="10" maxlength="2" value="<?php echo $item['number'] ?>" class="number_cart" id="<?php echo $item['id'] ?>">
                                            <button class="button_up" type="button" onclick="Increase('<?php echo $item['id'] ?>', <?php echo $item['price'] ?>, 'price_<?php echo $item['id'] ?>')">
                                                <i class="bi bi-caret-up-fill icon_button"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart_body sixth_body">
                                        <span class="item_price" id="price_<?php echo $item['id'] ?>"><?php echo $item['price'] ?><sup>₫</sup></span>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
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
            </div>
        </div>
    </section>
</div>

<script>
    sessionStorage.setItem('cart', JSON.stringify({
        name: 1,
    }))
    var a = sessionStorage.getItem("cart");
    var b = JSON.parse(a);

    console.log(b['name']);
</script>