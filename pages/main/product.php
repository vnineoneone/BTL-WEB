<section class="specific_product" onclick="check_p()">
    <div class="row row_box1_p">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="image_product_t">
                <a href="" class="link_image_pt">
                    <img src="assets/images/item.png" class="image_pt">
                </a>
            </div>
            <div class="small_image_box">
                <div class="small_image_c">
                    <div class="image_item_c">
                        <a href="javascript:void(0)" class="link_small_image" onclick="Set_image('img_id1')">
                            <img class="style_small_image" src="assets/images/lamp-category.png" id="img_id1">
                        </a>
                    </div>
                    <div class="image_item_c">
                        <a href="javascript:void(0)" class="link_small_image" onclick="Set_image('img_id2')">
                            <img class="style_small_image" src="assets/images/shelf-category.png" id="img_id2">
                        </a>
                    </div>
                    <div class="image_item_c">
                        <a href="javascript:void(0)" class="link_small_image" onclick="Set_image('img_id3')">
                            <img class="style_small_image" src="assets/images/sofa-category.png" id="img_id3">
                        </a>
                    </div>
                    <div class="image_item_c">
                        <a href="javascript:void(0)" class="link_small_image" onclick="Set_image('img_id4')">
                            <img class="style_small_image" src="assets/images/table-category.png" id="img_id4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 detail_box_t">
            <h1 class="detail_title">Ghế luxury</h1>
            <div>
                <div class="name_product_box">
                    <span class="name_product_t">
                        Luxury
                    </span>
                </div>
                <div class="price_box_t">
                    <span class="product_price_w">570.000<sup>₫</sup></span>
                </div>
            </div>
            <div class="detail_text_box">
                <div class="detail_text_t">
                    <p>
                        Mặt ngồi ghế hõm sâu, dáng ghế như một thác nước đổ xuống giữ cho người ngồi thoải mái bằng cách giảm áp lực lên lưng và đùi. 
                        Qua đó bạn có thể ngồi lâu hơn trên ghế mà không cảm thấy mỏi.
                    </p>
                </div>
            </div>
            <div class="form_detail col-sm-12">
                <form action="" method="">
                    <div class="detail_color_box">
                        <div class="form_header_t">Màu sắc</div>
                        <div class="swatch_color color_detail">
                            <input id="swatch_đen" type="radio" name="option-1" value="Đen" checked>
                            <label for="swatch_đen" style="background-color: #000000;"></label>
                        </div>
                        <div class="swatch_color color_detail">
                            <input id="swatch_hồng" type="radio" name="option-1" value="Hồng">
                            <label for="swatch_hồng" style="background-color: #ff00d5;"></label>
                        </div>
                        <div class="swatch_color color_detail">
                            <input id="swatch_trắng" type="radio" name="option-1" value="Trắng">
                            <label for="swatch_trắng" style="background-color: white;"></label>
                        </div>
                    </div>
                    <div class="detail_size_box">
                            <div class="form_header_t">Kích thước</div>
                            <div class="swatch_size">
                                <input id="swatch_nhỏ" type="radio" name="option-2" value="Nhỏ" checked>
                                <label for="swatch_nhỏ" class="size_label_t">Nhỏ</label>
                            </div>
                            <div class="swatch_size">
                                <input id="swatch_to" type="radio" name="option-2" value="To">
                                <label for="swatch_to" class="size_label_t">To</label>
                            </div>
                        </div>
                        <div class="detail_sl_box">
                            <div class="sl_box">
                                <div class="sl_label">Số lượng</div>
                                <div class="sl_number">
                                    <button type="button" class="btn_number" onclick="Decrease_c()">-</button>
                                    <input type="text" id="item_c1" value="1" maxlength="2" class="text_number_t" onkeypress="return check_number_p(event)"> 
                                    <button type="button" class="btn_number btn_number2" onclick="Increase_c()">+</button>
                                </div>
                            </div>
                            <div class="detail_submit_box">
                                <div class="detail_submit">
                                    <button type="submit" class="detail_submit_p">
                                        <span class="text_submit">Thêm vào giỏ hàng</span>
                                    </button>
                                </div>
                            </div>
                            <div class="detail_phonenum">
                                <span>
                                    Gọi đặt mua
                                    <a href="" class="phone_detail">02838647256</a>
                                    (Miễn phí, 8-21h cả T7,CN)  
                                </span>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row row_box2_p">
        <div class="col-lg-12 col-md-12">
            <div class="detail_tab">
                <ul class="tab_header_p">
                    <li class="tab_link_p">
                        <p>
                            <span class="tab_header_text tab_current">Mô tả</span>
                        </p>
                    </li>
                    <li class="tab_link_p">
                        <p>
                            <span class="tab_header_text">Thông tin</span>
                        </p>
                    </li>
                </ul>
                <div id="Mô tả" class="tab_content_d">
                    <div class="tab_text_box">
                        <p><strong>Màu sắc:&nbsp;</strong></p>
                        <p>Chân: Trắng, đen, gỗ.</p>
                        <p>Mặt: Trắng, đen, xám, hồng.</p>
                        <p>
                            <strong>Kích thước:</strong>
                            &nbsp;H80/45 x D40 x R48.
                        </p>
                        <p>
                            <strong>Khối lượng thực tế:</strong>
                            &nbsp;5kg.
                        </p>
                        <p>
                            <strong>Chất liệu:</strong>
                            &nbsp; Chân sắt sơn tĩnh điện, mặt nhựa MDS.
                        </p>
                        <p><strong>Ý tưởng thiết kế:</strong></p>
                        <p>
                            Với những biến tấu đa dạng độc đáo, 
                            có thể nói Luxury là một trong những mẫu ghế hiện đại được ưa chuộng nhất hiện nay. 
                            Luxury có kiểu dáng DAW - một biểu tượng của thiết kế hiện đại ngày nay.
                        </p>
                        <p>
                            Phần tựa lưng ghế bằng nhựa với độ cao và độ ngả hợp lí giúp hỗ trợ xương sống. 
                            Chân ghế gỗ tự nhiên và cấu trúc cân bằng trọng lượng và tạo ra nét khác biệt.
                        </p>
                        <p>
                            Sự kết hợp độc đáo và sáng tạo giữa các chất liệu gỗ, nhựa, đệm… 
                            tạo nên một chiếc ghế đẹp và thanh lịch cho ngôi nhà của bạn.
                        </p>
                        <p><strong>Các điểm nổi bật:</strong></p>
                        <p>
                            Mặt ngồi ghế hõm sâu, dáng ghế như một thác nước đổ xuống giữ cho người ngồi thoải mái bằng cách giảm áp lực lên lưng và đùi. 
                            Qua đó bạn có thể ngồi lâu hơn trên ghế mà không cảm thấy mỏi.
                        </p>
                        <p>
                            Sử dụng những chiếc ghế Luxury xinh xắn là giải pháp thông minh tiết kiệm diện tích cho ngôi nhà của bạn. 
                            Bạn có thể tha hồ lựa chọn kết hợp màu sắc, thoải mái thay đổi cho mọi không gian, ứng dụng.
                        </p>
                        <p>
                            Chất liệu hiện đại, bền, chắc chắn. &nbsp;
                        </p>
                    </div>
                </div>
                <div id="Thông tin" class="tab_content_d" style="display: none;">
                    <div class="tab_text_box">Các nội dung Hướng dẫn mua hàng viết ở đây</div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 related_box_p">
            <div class="related_header_box">
                <p class="related_text">
                    <a href="" class="related_link">Sản phẩm liên quan</a>
                </p>
            </div>
            <div class="related_img_box">
                <div class="related_trasition">
                    <div class="rl_product_box">
                        <div class="rl_img_box">
                            <div class="img_box_d">
                                <a href="" title="" class="detail_link">
                                    <img src="assets/images/item.png" class="detail_img">
                                </a>
                                <div class="icon_box_d" style="display: none;">
                                    <form action="" method="">
                                        <div class="icon_group_d">
                                            <a href="" class="link_icon_d">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button class="button_icon_d">
                                                <i class="fas fa-dolly"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="name_box_d">
                                <p class="product_name_d">
                                    <a href="" class="product_link_d">Item1</a>
                                </p>
                                <div class="detail_price">
                                    <span class="price_pro_d">1.250.000<sup>₫</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rl_product_box">
                        <div class="rl_img_box">
                            <div class="img_box_d">
                                <a href="" title="" class="detail_link">
                                    <img src="assets/images/item.png" class="detail_img">
                                </a>
                                <div class="icon_box_d" style="display: none;">
                                    <form action="" method="">
                                        <div class="icon_group_d">
                                            <a href="" class="link_icon_d">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button class="button_icon_d">
                                                <i class="fas fa-dolly"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="name_box_d">
                                <p class="product_name_d">
                                    <a href="" class="product_link_d">Item1</a>
                                </p>
                                <div class="detail_price">
                                    <span class="price_pro_d">1.250.000<sup>₫</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>