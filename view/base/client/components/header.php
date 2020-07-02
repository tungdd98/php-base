<header style="background: url(public/frontend/images/bg-header.png) no-repeat">
    <div class="container">
        <div class="wrap-head">
            <nav class="d-nav v1">
                <div class="logo-mb">
                    <a href="<?php echo "{$APP_URL}/admin"; ?>"><img src="public/frontend/images/logo.png"></a>
                </div>
                <ul>
                    <li class="active"><a class="smooth" href="index.html" title="">Trang chủ</a></li>
                    <li><a class="smooth" href="product.html" title="">Sản phẩm <i class="arrow_triangle-down"></i></a>
                        <ul>
                            <li class="active"><a class="smooth" href="#" title="">Thực phẩm tươi sống</a></li>
                            <li><a class="smooth" href="#" title="">Hoa quả</a></li>
                            <li><a class="smooth" href="#" title="">Đồ khô</a></li>
                            <li><a class="smooth" href="#" title="">Gia vị</a></li>
                            <li><a class="smooth" href="#" title="">Hóa mỹ phẩm hữu cơ</a></li>
                            <li><a class="smooth" href="#" title="">Bánh kẹo</a></li>
                            <li><a class="smooth" href="#" title="">Đồ gia dụng</a></li>
                        </ul>
                    </li>
                    <li><a class="smooth" href="promotion.html" title="">khuyến mãi</a></li>
                    <li><a class="smooth" href="#" title="">về chúng tôi</a></li>
                </ul>
            </nav>
            <a href="<?php echo "{$APP_URL}/admin"; ?>" class="logo"><img src="public/frontend/images/logo.png"
                    alt=""></a>
            <div class="head-right">
                <nav class="d-nav">
                    <ul>
                        <li><a class="smooth" href="faqs.html" title="">Hỗ trợ</a></li>
                        <li><a class="smooth" href="news.html" title="">tin tức</a></li>
                        <li><a class="smooth" href="contact.html" title="">liên hệ</a></li>
                    </ul>
                </nav>
                <div class="head-crt">
                    <div class="head-search">
                        <span class="ic-search"><i class="icon_search"></i></span>
                        <div class="form-search">
                            <div class="form-group">
                                <input type="text" placeholder="Tìm kiếm ...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="head-lang">
                        <img src="public/frontend/images/lang-vi.jpg" alt="">
                        <ul>
                            <li class="active"><a href="" title=""><img src="public/frontend/images/lang-vi.jpg"
                                        alt="">Tiếng Việt</a></li>
                            <li><a href="" title=""><img src="public/frontend/images/lang-japan.jpg" alt="">Tiếng
                                    Nhật</a></li>
                        </ul>
                    </div>
                    <?php
                    if ($_SESSION['email']) {
                        ?>
                    <div class="head-user">
                        <a href="javascript:;" title=""><img src="public/frontend/images/ic-user.jpg" alt=""><span><?php echo $_SESSION['email'] ?></span></a>
                        <ul class="nav-user">
                            <li class="active"><a href="" title=""><i class="lnr lnr-user"></i>Thông tin cá nhân</a>
                            </li>
                            <li><a href="" title=""><i class="lnr lnr-history"></i>Lịch sử mua hàng</a></li>
                            <li><a href="" title=""><i class="lnr lnr-cart"></i>Giỏ hàng của bạn </a><span>(1)</span>
                            </li>
                            <li><a href="" title=""><i class="lnr lnr-exit"></i>Đăng xuất</a></li>
                        </ul>
                    </div>
                    <?php } else {?>
                    <a href="javascript:;" title="" class="head-login" data-toggle="modal" data-target="#pu-login"><i
                            class="lnr lnr-user"></i><span>Đăng nhập</span></a>

                    <?php }?>
                </div>
            </div>
            <div class="icon-menu open-mnav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>