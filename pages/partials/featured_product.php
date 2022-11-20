<div class="featured-product" style="margin-top: 60px;">
    <div class="row">
        <div class="col-md-4 left">
            <div class="count-down">
                <div class="image-view">
                    <a href="#">
                        <img src="./assets/images/item.png" alt="" style="width: 100%; height:100%;">
                    </a>
                    <div id="hot-label">HOT</div>
                </div>
                <div class="infomation">
                    <div class="clock">
                        <div id="time"></div>
                    </div>
                    <div class="name">
                        Ghế Luxury
                    </div>
                    <div class="type">
                        Luxury
                    </div>
                    <div class="price">
                        570.000 VNĐ
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
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <div class="item">
                            <div class="product">
                                <a href="#">
                                    <div class="view-image">
                                        <img src="./assets/images/item.png" alt="" style="width: 100%; height:179px;">
                                        <div class="list-btn-view" style="display: none;">
                                            <div class="btn2" id="btn-view">
                                                <i class="fas fa-eye"></i>
                                            </div>
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
                            <div class="product">
                                <a href="#">
                                    <div class="view-image">
                                        <img src="./assets/images/item.png" alt="" style="width: 100%; height:179px;">
                                        <div class="list-btn-view" style="display: none;">
                                            <div class="btn2" id="btn-view">
                                                <i class="fas fa-eye"></i>
                                            </div>
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
    </div>

</div>