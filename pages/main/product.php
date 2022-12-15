<?php
$sql_sp = "SELECT * FROM product WHERE id_product = '" . $_GET['id'] . "'";
$query_sp = mysqli_query($mysqli, $sql_sp);
$row = mysqli_fetch_array($query_sp);
$sql_bl = "SELECT * FROM comment,user WHERE id_product = '" . $_GET['id'] . "' AND comment.id_user = user.id ORDER BY comment.id DESC";
$sql_bl1 = "SELECT COUNT(*) as count FROM comment WHERE id_product = '" . $_GET['id'] . "'";
$sql_bl2 = "SELECT * FROM comment WHERE id_product = '" . $_GET['id'] . "'";
$query_bl = mysqli_query($mysqli, $sql_bl);
$query_bl1 = mysqli_query($mysqli, $sql_bl1);
$query_bl2 = mysqli_query($mysqli, $sql_bl2);
$row1 = mysqli_fetch_array($query_bl1);
$star5 = 0;
$star4 = 0;
$star3 = 0;
$star2 = 0;
$star1 = 0;
$avg_star1 = 0;
$avg_star2 = 0;
$avg_star3 = 0;
$avg_star4 = 0;
$avg_star5 = 0;
$j = 0;
$avg = 0;
while ($row_bl2 = mysqli_fetch_array($query_bl2)) {
    $j++;
    if ($row_bl2['star'] == 5) {
        $star5 +=  1;
    }
    if ($row_bl2['star'] == 4) {
        $star4 +=  1;
    }
    if ($row_bl2['star'] == 3) {
        $star3 +=  1;
    }
    if ($row_bl2['star'] == 2) {
        $star2 +=  1;
    }
    if ($row_bl2['star'] == 1) {
        $star1 +=  1;
    }
}
if ($j != 0) {
    $avg_star1 = round($star1 / $j, 2);
    $avg_star2 = round($star2 / $j, 2);
    $avg_star3 = round($star3 / $j, 2);
    $avg_star4 = round($star4 / $j, 2);
    $avg_star5 = round($star5 / $j, 2);
    $avg = ($star1 + $star2 * 2 + $star3 * 3 + $star4 * 4 + $star5 * 5) / $j;
    $avg = round($avg, 2);
}
?>

<section class="specific_product" onclick="check_p()">
    <div class="row row_box1_p">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 first_col_p">
            <div class="image_product_t">
                <a href="" class="link_image_pt">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['image'] ?>" class="image_pt">
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
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 detail_box_t">
            <h1 class="detail_title"><?php echo $row['name_product'] ?></h1>
            <div>
                <div class="name_product_box">
                    <span class="name_product_t">
                        <?php echo $row['brand'] ?>
                    </span>
                </div>
                <div class="price_box_t">
                    <span class="product_price_w"><?php echo number_format($row['price'] * 1000, 0, ', ', '.') ?><sup>₫</sup></span>
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
                <form method="POST" action="controllers/CartController.php?id=<?php echo $row['id_product'] ?>">
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

                                <button type="submit" class="detail_submit_p" name="themgiohang">
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
                            <span class="tab_header_text">Đánh giá</span>
                        </p>
                    </li>
                </ul>
                <div id="Mô tả" class="tab_content_d">
                    <div class="tab_text_box">
                        <?php echo $row['detail'] ?>
                    </div>
                </div>
                <div id="Đánh giá" class="tab_content_d" style="display: none;">
                    <div class="tab_text_box container">
                        <div class=" container mt-5 mb-5" style="width: 100%;">
                            <div class="card">
                                <div class="row no-gutters" style="width: 100%;">
                                    <div class="col-md-2 border-right">
                                        <div class="ratings text-center p-4 py-5">
                                            <span class="badge bg-success"><?php echo $avg ?> <i class="fa fa-star-o"></i></span>
                                            <span class="d-block about-rating">Rất tốt</span>
                                            <span class="d-block total-ratings"><?php echo $row1['count'] ?> đánh giá</span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <div class="rating-progress-bars p-3">
                                            <div class="progress-1 align-items-center">
                                                <div class="pog">
                                                    <div class="progress-star">
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $avg_star5 * 100 ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $avg_star5 * 100 ?>%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pog">
                                                    <div class="progress-star">
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-custom" role="progressbar" style="width: <?php echo $avg_star4 * 100 ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $avg_star4 * 100 ?>%</div>
                                                    </div>
                                                </div>
                                                <div class="pog">
                                                    <div class="progress-star">
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $avg_star3 * 100 ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $avg_star3 * 100 ?>%</div>
                                                    </div>
                                                </div>
                                                <div class="pog">
                                                    <div class="progress-star">
                                                        <i class="fas fa-star" id="star"></i>
                                                        <i class="fas fa-star" id="star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $avg_star2 * 100 ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $avg_star2 * 100 ?>%</div>
                                                    </div>
                                                </div>
                                                <div class="pog">
                                                    <div class="progress-star">
                                                        <i class="fas fa-star" id="star"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $avg_star1 * 100 ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $avg_star1 * 100 ?>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <form action="controllers/CommentController.php" method="POST"> -->
                        <div class="card">
                            <div class="row">
                                <input type="text" id="id_product" value="<?php echo $_GET['id'] ?>" name="id" class="d-none">
                                <div class="col-2 avatar-cmt">
                                    <img src="assets/images/avatar.png" width="70" class="rounded-circle mt-2" style="margin-bottom: 20px;">
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="comment-box ml-2">
                                        <h4>Thêm bình luận</h4>

                                        <div class="comment-area">
                                            <textarea class="form-control" name="content" id="comment_content" placeholder="Bạn nghĩ gì về sản phẩm" rows="1"></textarea>
                                        </div>
                                        <div class="comment-btns mt-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="pull-right mt-2">
                                                        <button class="btn btn-success send btn-sm" id="post_comment">Đăng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                        <div class="review-list">
                            <ul id="review-list2">
                                <?php
                                while ($row_bl = mysqli_fetch_array($query_bl)) {
                                ?>
                                    <li>
                                        <div class="d-flex">
                                            <div class="left">
                                                <span>
                                                    <img src="assets/images/avatar.png" class="profile-pict-img img-fluid" alt="" />
                                                </span>
                                            </div>
                                            <div class="right">
                                                <h4>
                                                    <?php echo $row_bl['name'] ?>
                                                    <span class="gig-rating text-body-2">
                                                        <?php
                                                        for ($i = 0; $i < $row_bl['star']; $i++) {
                                                        ?>
                                                            <i class="fas fa-star" id="star"></i>
                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                </h4>
                                                <div class="country d-flex align-items-center">
                                                    <span class="publish py-2 d-inline-block w-100"> <?php echo $row_bl['created_at'] ?></span>
                                                </div>
                                                <div class="review-description">
                                                    <p>
                                                        <?php echo $row_bl['content'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-lg-12 related_box_p">
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
                                <span class="price_pro_d"><?php echo number_format($row['price'] * 1000, 0, ', ', '.') ?><sup>₫</sup></span>
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
                                <span class="price_pro_d"><?php echo number_format($row['price'] * 1000, 0, ', ', '.') ?><sup>₫</sup></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </div>
</section>