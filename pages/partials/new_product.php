<div class="area-post">
    <div class="display-product">
        <div class="tab-menu">
            <h3>
                <a href="">SẢN PHẨM MỜI VỀ</a>
            </h3>
        </div>

        <div class="list-product owl-carousel owl-theme" id="new-product-carousel">
            <?php
            for ($i = 1; $i <= 6; $i++) {
            ?>
                <div class="item">
                    <div class="product">
                        <a href="#">
                            <div class="view-image">
                                <img src="./assets/images/item.png" alt="" style="width: 100%; height:179px;">
                                <div class="list-btn-view" style="display: none;">
                                    <form method="POST" action="cart.php?id=1">
                                        <button type="submit" class="btn2" id="btn-view">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                    <a href="#" class="btn2" id="btn-detail">
                                        <i class="fas fa-tools"></i>
                                    </a>

                                </div>
                            </div>
                        </a>
                        <div class="name">
                            Ghế Luxury
                        </div>
                        <div class="price">
                            570.000 VNĐ
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>