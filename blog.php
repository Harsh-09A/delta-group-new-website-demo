<?php include 'includes/loader.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
$page_title = "Blog | Delta Group";
include 'includes/head.php';
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start page title -->
  <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
    style="background-image: url(images/common/page_heading.jpg)">
    <div
      class="background-position-center-top h-100 w-100 position-absolute left-0px top-0 opacity-extra-medium bg-dark-gray">
    </div>
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
      data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container">
      <div class="row align-items-center extra-small-screen">
        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-large"
          data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <h1 class="mb-20px alt-font text-base-color">Blogs</h1>
          <h3 class="fw-500 m-0 ls-minus-2px text-white alt-font">
            Crafting Landmarks. Building Trust.
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->

  <!-- start section -->
  <section class="pt-0 ps-2 pe-2 xs-px-0">
    <div class="container-fluid">
      <div class="row blog-metro">
        <div class="col-12">
          <ul
            class="blog-metro blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large">
            <li class="grid-sizer"></li>

            <?php foreach ($blogs as $index => $blog): ?>

              <?php
              // Current item number (1-based)
              $num = $index + 1;
              // Add extra class on every 5th item
              $extraClass = ($num === 1 || (($num - 1) % 5 === 0)) ? 'grid-item-double' : ''; ?>

              <!-- start blog item -->
              <li class="grid-item <?= $extraClass ?>">
                <figure class="position-relative mb-0 overflow-hidden">
                  <!--  -->
                  <div class="blog-image bg-dark-slate-blue">
                    <!-- <img src="images/blogs/blog-image-1_1000.jpg" alt="" /> -->
                    <img src="<?php echo $blog['featured_image']['thumbnail']; ?>" alt="" />
                    <div class="blog-overlay"></div>
                  </div>
                  <!--  -->

                  <figcaption class="d-flex flex-column justify-content-end h-100 ps-7 pe-7 pt-6 pb-6">
                    <div class="blog-categories mb-auto">
                      <a href="<?php echo buildUrl('blog-details.php', $blog['slug']); ?>"
                        class="categories-btn bg-white text-dark-gray text-uppercase alt-font fw-700 ms-0 mb-auto align-self-start">
                        <?php echo $blog['categories'][0]; ?>
                      </a>
                    </div>

                    <?php
                    // Format the date
                    $date = new DateTime($blog['date']);
                    $formattedDate = $date->format("d F Y");
                    ?>
                    <p class="fs-13 fw-500 alt-font mb-5px text-white opacity-6 text-uppercase">
                      <?php echo $formattedDate; ?>
                    </p>

                    <a href="<?php echo buildUrl('blog-details.php', $blog['slug']); ?>"
                      class="text-white card-title fs-20 lh-30 fw-500 alt-font">
                      <?php echo $blog['title']; ?>
                    </a>
                  </figcaption>
                </figure>
              </li>

              <!-- end blog item -->
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <?php include_once "./includes/footer.php" ?>

  <!-- start scroll progress -->
  <div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
      <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
  </div>
  <!-- end scroll progress -->

  <!-- javascript libraries -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/vendors.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>