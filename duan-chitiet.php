<!DOCTYPE html>
<html lang="vi">

<?php include('head.php'); ?>

<body>

    <?php include('header.php'); ?>

    <section class="about-banner">
        <div class="container">
            <div class="banner-text">
                <h1>Dự án</h1>
                <p class="breadcrumb-text mb-0">
                    <a href="#">Trang chủ</a> / <a href="#">Dự án</a> / <a href="#">Tên dự án</a>
                </p>
            </div>
        </div>
    </section>

    <section class="project-detail-section py-5">
        <div class="container">
            <h2 class="title">Tên dự án</h2>
            <div class="row align-items-start gy-4">
                <!-- Left: Info -->
                <div class="col-12 col-md-4">
                    <ul class="list-unstyled project-info">
                        <li><strong>Chủ đầu tư:</strong> Lorem Ipsum</li>
                        <li><strong>Khối lượng:</strong> 6000 tấn</li>
                        <li><strong>Diện tích:</strong> 200.000 m2</li>
                        <li><strong>Địa điểm:</strong> Lorem Ipsum</li>
                        <li><strong>Mô tả:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</li>
                    </ul>
                </div>

                <!-- Right: Gallery -->
                <div class="col-12 col-md-8">
                    <!-- Main Image Carousel -->
                    <div id="gallery" class="carousel-main mb-3" data-flickity='{"pageDots": false, "wrapAround": true, "contain": true, "prevNextButtons": false}'>
                        <div class="carousel-cell">
                            <a href="assets/images/duan01.jpg" class="carousel-cell" data-lg-size="1600-1200">
                                <img src="assets/images/duan01.jpg" alt="Main 1" class="img-fluid rounded w-100">
                            </a>
                        </div>
                        <div class="carousel-cell">
                            <a href="assets/images/duan02.jpg" class="carousel-cell" data-lg-size="1600-1200">
                                <img src="assets/images/duan02.jpg" alt="Main 2" class="img-fluid rounded w-100">
                            </a>
                        </div>
                        <div class="carousel-cell">
                            <a href="assets/images/duan03.jpg" class="carousel-cell" data-lg-size="1600-1200">
                                <img src="assets/images/duan03.jpg" alt="Main 3" class="img-fluid rounded w-100">
                            </a>
                        </div>
                    </div>

                    <!-- Thumbnail Nav Carousel -->
                    <div class="carousel-nav" data-flickity='{"asNavFor": ".carousel-main", "contain": true, "pageDots": false, "prevNextButtons": true }'>
                        <div class="carousel-cell">
                            <img src="assets/images/duan01.jpg" alt="Thumb 1" class="img-fluid rounded">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/duan02.jpg" alt="Thumb 2" class="img-fluid rounded">
                        </div>
                        <div class="carousel-cell">
                            <img src="assets/images/duan03.jpg" alt="Thumb 3" class="img-fluid rounded">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="project-detail-section py-5">
        <div class="container">
            <div class="d-flex mb-4 align-items-center">
                <h2 class="title mb-0">Dự án liên quan</h2>
                <a href="#" class="btn btn-xemtatca ms-auto">Xem tất cả <img src="assets/images/icons/i-arrow-right-blue.svg" alt="22"></a>
            </div>

            <div class="project-list">
                <ul class="projects-grid list-unstyled">
                    <li class="project-item">
                        <div class="project-thumb">
                            <a href="duan-chitiet.php"><img src="assets/images/duan01.jpg" alt="Project 1" class="img-fluid"></a>
                        </div>
                        <div class="project-content">
                            <h5 class="project-title d-flex justify-content-between align-items-center">
                                <a href="duan-chitiet.php">TÊN DỰ ÁN <span class="arrow">→</span></a>
                            </h5>
                            <ul class="project-meta list-unstyled mb-0">
                                <li><strong>Chủ đầu tư:</strong> Lorem Ipsum</li>
                                <li><strong>Diện tích:</strong> 200.000 sq square</li>
                                <li><strong>Địa điểm:</strong> Lorem Ipsum</li>
                            </ul>
                        </div>
                    </li>
                    <li class="project-item">
                        <div class="project-thumb">
                            <a href="duan-chitiet.php"><img src="assets/images/duan02.jpg" alt="Project 1" class="img-fluid"></a>
                        </div>
                        <div class="project-content">
                            <h5 class="project-title d-flex justify-content-between align-items-center">
                                <a href="duan-chitiet.php">TÊN DỰ ÁN <span class="arrow">→</span></a>
                            </h5>
                            <ul class="project-meta list-unstyled mb-0">
                                <li><strong>Chủ đầu tư:</strong> Lorem Ipsum</li>
                                <li><strong>Diện tích:</strong> 200.000 sq square</li>
                                <li><strong>Địa điểm:</strong> Lorem Ipsum</li>
                            </ul>
                        </div>
                    </li>
                    <li class="project-item">
                        <div class="project-thumb">
                            <a href="duan-chitiet.php"><img src="assets/images/duan03.jpg" alt="Project 1" class="img-fluid"></a>
                        </div>
                        <div class="project-content">
                            <h5 class="project-title d-flex justify-content-between align-items-center">
                                <a href="duan-chitiet.php">TÊN DỰ ÁN <span class="arrow">→</span></a>
                            </h5>
                            <ul class="project-meta list-unstyled mb-0">
                                <li><strong>Chủ đầu tư:</strong> Lorem Ipsum</li>
                                <li><strong>Diện tích:</strong> 200.000 sq square</li>
                                <li><strong>Địa điểm:</strong> Lorem Ipsum</li>
                            </ul>
                        </div>
                </ul>
            </div>
        </div>
    </section>










    <?php include('footer.php'); ?>
    <?php include('js-footer.php'); ?>
</body>

</html>