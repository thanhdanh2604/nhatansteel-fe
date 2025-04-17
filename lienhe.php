<!DOCTYPE html>
<html lang="vi">

<?php include('head.php'); ?>

<body>

    <?php include('header.php'); ?>

    <section class="about-banner">
        <div class="container">
            <div class="banner-text">
                <h1>Liên hệ</h1>
                <p class="breadcrumb-text mb-0"><a href="#">Trang chủ</a> / <a href="tintuc.php">Liên hệ</a></p>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <h2 class="title mb-4">Liên hệ để được tư vấn</h2>
            <div class="row g-4">
                <!-- Form -->
                <div class="col-lg-6">
                    <div class="contact-form p-4 rounded">
                        <h5>Gửi tin nhắn cho chúng tôi</h5>
                        <form>
                            <input type="text" class="form-control mb-3" placeholder="Tên">
                            <div class="d-flex gap-2 flex-column flex-md-row mb-3">
                                <input type="text" class="form-control" placeholder="Số điện thoại">
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <input type="text" class="form-control mb-3" placeholder="Tiêu đề">
                            <textarea class="form-control mb-3" rows="3" placeholder="Nội dung"></textarea>
                            <select class="form-select mb-3">
                                <option>Bạn biết đến chúng tôi thông qua kênh nào</option>
                                <option>LinkedIn</option>
                                <option>Facebook</option>
                                <option>Người giới thiệu</option>
                                <option>Khác...</option>
                            </select>
                            <button type="submit" class="btn btn-orange">Gửi</button>
                        </form>
                    </div>
                </div>

                <!-- Info -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Trụ sở chính -->
                        <div class="col-md-6">
                            <div class="head-office">
                                <h6>Trụ sở chính</h6>
                                <div class="map"><img src="assets/images/map.png" alt="map" class="img-fluid rounded w-100"></div>
                                <p class="d-flex align-items-start"><img src="assets/images/icons/i-location.svg" alt="location" class="img-fluid" width="24"> 285/18A Trịnh Đình Trọng, P. Hòa Thạnh, Q. Tân Phú, TP.HCM</p>
                                <p><img src="assets/images/icons/i-call-2.svg" alt="call" class="img-fluid" width="24"> <a href="tel:0839733385">08.39733385</a></p>
                                <p><img src="assets/images/icons/i-email-2.svg" alt="email" class="img-fluid" width="24"> <a href="mailto:info@nhatansteel.com.vn">info@nhatansteel.com.vn</a></p>
                            </div>
                        </div>

                        <!-- Nhà máy -->
                        <div class="col-md-6">
                            <div class="head-office">
                                <h6>Our Factory</h6>
                                <div class="map"><img src="assets/images/map.png" alt="map" class="img-fluid rounded w-100"></div>
                                <p class="d-flex align-items-start"><img src="assets/images/icons/i-location.svg" alt="location" class="img-fluid" width="24"> Lô 1, Đường số 7A, KCN Nhơn Trạch, Đồng Nai</p>
                                <p><img src="assets/images/icons/i-call-2.svg" alt="call" class="img-fluid" width="24"> <a href="tel:0613569138">0613.569138</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="social-follow mt-4 gap-3">
                        <span>Theo dõi chúng tôi trên mạng xã hội</span>
                        <div class="d-flex gap-2">
                            <a href="#"><img src="assets/images/icons/i-fb.svg" alt="facebook" class="img-fluid" width="32"></a>
                            <a href="#"><img src="assets/images/icons/i-in.svg" alt="In" class="img-fluid" width="32"></a>
                            <a href="#"><img src="assets/images/icons/i-ytb.svg" alt="youtube" class="img-fluid" width="32"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('footer.php'); ?>
    <?php include('js-footer.php'); ?>
</body>

</html>