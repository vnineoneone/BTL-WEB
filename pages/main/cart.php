<div class="cart_content">
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
                            <div class="item_cart" onclick="check('item1')">
                                <div class="cart_body first_body">
                                    <a href="javascript:;">
                                        <span>
                                            <i class="bi bi-x-lg icon link_icon"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="cart_body second_body">
                                    <a href="#" title="item" class="product_image">
                                        <img class="" src="item.png" alt="item" height="100%" width="100%">
                                    </a>
                                </div>
                                <div class="cart_body third_body">
                                    <h2 class="product_name">
                                        <a href="#" class="product_link">Item</a>
                                    </h2>
                                </div>
                                <div class="cart_body fourth_body">
                                    <span class="item_price">1.250.000<sup>₫</sup></span>
                                </div>
                                <div class="cart_body fifth_body">
                                    <div class="number_box">
                                        <button class="button_down" type="button" onclick="Decrease('item1', 1250000, 'price_item1')">
                                            <i class="bi bi-caret-down-fill icon_button"></i>
                                        </button>
                                        <input type="text" min="1" max="10" maxlength="2" value="1" class="number_cart" id="item1">
                                        <button class="button_up" type="button" onclick="Increase('item1', 1250000, 'price_item1')">
                                            <i class="bi bi-caret-up-fill icon_button"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="cart_body sixth_body">
                                    <span class="item_price" id="price_item1">1.250.000<sup>₫</sup></span>
                                </div>
                            </div>
                            <!-- item2 -->
                            <div class="item_cart" onclick="check('item2')">
                                <div class="cart_body first_body">
                                    <a href="javascript:;">
                                        <span>
                                            <i class="bi bi-x-lg icon link_icon"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="cart_body second_body">
                                    <a href="#" title="item" class="product_image">
                                        <img class="" src="item.png" alt="item" height="100%" width="100%">
                                    </a>
                                </div>
                                <div class="cart_body third_body">
                                    <h2 class="product_name">
                                        <a href="#" class="product_link">Item2</a>
                                    </h2>
                                </div>
                                <div class="cart_body fourth_body">
                                    <span class="item_price">900.000<sup>₫</sup></span>
                                </div>
                                <div class="cart_body fifth_body">
                                    <div class="number_box">
                                        <button class="button_down" type="button" onclick="Decrease('item2', 900000, 'price_item2')">
                                            <i class="bi bi-caret-down-fill icon_button"></i>
                                        </button>
                                        <input type="text" min="1" max="10" maxlength="2" value="1" class="number_cart" id="item2">
                                        <button class="button_up" type="button" onclick="Increase('item2', 900000, 'price_item2')">
                                            <i class="bi bi-caret-up-fill icon_button"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="cart_body sixth_body">
                                    <span class="item_price" id="price_item2">900.000<sup>₫</sup></span>
                                </div>
                            </div>
                             <!--    -->
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
                                        <span>Tiến hành thanh toán</span>
                                    </button>
                                    <button class="first_button" onclick="" type="button">
                                        <span>Tiếp tục mua hàng</span>
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