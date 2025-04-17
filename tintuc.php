<!DOCTYPE html>
<html lang="vi">

<?php include('head.php'); ?>

<body>

  <?php include('header.php'); ?>

  <section class="about-banner">
    <div class="container">
      <div class="banner-text">
        <h1>Tin tức</h1>
        <p class="breadcrumb-text mb-0">Trang chủ / Tin tức</p>
      </div>
    </div>
  </section>

  <section class="section-news">
    <div class="container">
      <h2 class="title">Tin mới</h2>

      <ul class="news-list">
        <li class="news-item">
          <div class="news-thumb">
            <a href="tintuc-chitiet.php"><img src="assets/images/duan01.jpg" alt="Tin mới 1" class="img-fluid"></a>
          </div>
          <div class="news-content">
            <h5 class="news-title">
              <a href="tintuc-chitiet.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
            </h5>
            <p class="news-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
            </p>
            <p class="d-flex justify-content-end">
              <a href="tintuc-chitiet.php" class="read-more">
                Xem thêm <span class="arrow">→</span>
              </a>
            </p>
          </div>
        </li>

        <li class="news-item">
          <div class="news-thumb">
            <!-- <a href="tintuc-chitiet.php"><img src="assets/images/duan02.jpg" alt="Tin mới 1" class="img-fluid"></a> -->
          </div>
          <div class="news-content">
            <h5 class="news-title">
              <a href="tintuc-chitiet.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
            </h5>
            <p class="news-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
            </p>
            <p class="d-flex justify-content-end">
              <a href="tintuc-chitiet.php" class="read-more">
                Xem thêm <span class="arrow">→</span>
              </a>
            </p>
          </div>
        </li>

        <li class="news-item">
          <div class="news-thumb">
            <!-- <a href="tintuc-chitiet.php"><img src="assets/images/duan03.jpg" alt="Tin mới 1" class="img-fluid"></a> -->
          </div>
          <div class="news-content">
            <h5 class="news-title">
              <a href="tintuc-chitiet.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
            </h5>
            <p class="news-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
            </p>
            <p class="d-flex justify-content-end">
              <a href="tintuc-chitiet.php" class="read-more">
                Xem thêm <span class="arrow">→</span>
              </a>
            </p>
          </div>
        </li>
      </ul>

      <!-- Pagination -->
      <nav class="custom-pagination mt-4" aria-label="Pagination">
        <ul class="pagination-list">
          <li><a href="#" class="page-link active">1</a></li>
          <li><a href="#" class="page-link">2</a></li>
          <li><a href="#" class="page-link">3</a></li>
          <li><span class="page-separator">...</span></li>
          <li><a href="#" class="page-link">10</a></li>
        </ul>
      </nav>
    </div>
  </section>













  <?php include('footer.php'); ?>
  <?php include('js-footer.php'); ?>
</body>

</html>