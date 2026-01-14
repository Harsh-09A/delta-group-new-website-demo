<?php include 'includes/loader.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
$page_title = "Home | Delta Group";
include 'includes/head.php';
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start slider section -->
  <section class="p-0 bg-dark-gray top-space-margin">
    <div
      class="swiper lg-no-parallax full-screen md-h-600px sm-h-650px swiper-light-pagination ipad-top-space-margin"
      data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1200, "autoplay": { "delay": 8000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
      <div class="swiper-wrapper">
        <!-- start slider 2 item -->
        <div class="swiper-slide overflow-hidden">
          <div
            class="cover-background position-absolute top-0 start-0 w-100 h-100 home_slider_2"
            style="background-image: url('images/home/home_slider_09.jpg')"
            data-swiper-parallax="1000">
            <div
              class="opacity-medium bg-gradient-black-bottom-transparent hide-on-mobile"></div>
            <div
              class="container h-100 hide-on-mobile"
              data-swiper-parallax="-300">
              <div class="row align-items-center h-100">
                <div
                  class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                  <img
                    src="images/projects/project_logos/delta_stellar.png"
                    class="img-fluid slider_logo"
                    alt="" />
                  <span
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,0.7], "duration": 1500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                      class="fw-600 fs-22 opacity-7 mb-15px d-inline-block text-uppercase">
                      A Commercial Landmark Built for Tomorrow
                    </span>
                  </span>
                  <span
                    class="opacity-7 fs-60 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px sm-mb-30px xs-mb-20px d-inline-block swiper-parallax-fancy-text text-uppercase"
                    data-fancy-text='{ "effect": "rotate", "string": ["Destination for Visionaries and Brands That Lead"] }'></span>
                  <div
                    data-anime='{ "el": "childs", "translateY": [80, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a
                      href=" <?php echo buildUrl('property-details.php', "delta-stellar"); ?> "
                      target=""
                      class="btn btn-large btn-gradient-gold btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                      <span>
                        <span class="btn-text">Discover Stellar</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                    <a
                      href="projects.php"
                      target="_blank"
                      class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                      <span>
                        <span class="btn-text">View All Projects</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->

        <!-- start slider 3 item -->
        <div class="swiper-slide overflow-hidden">
          <div
            class="cover-background position-absolute top-0 start-0 w-100 h-100 home_slider_3"
            style="background-image: url('images/home/home_slider_10.jpg')"
            data-swiper-parallax="1000">
            <div
              class="opacity-medium bg-gradient-black-bottom-transparent hide-on-mobile"></div>
            <div
              class="container h-100 hide-on-mobile"
              data-swiper-parallax="-300">
              <div class="row align-items-center h-100">
                <div
                  class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                  <img
                    src="images/projects/project_logos/delta_prestige.png"
                    class="img-fluid slider_logo"
                    alt="" />
                  <span
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,0.7], "duration": 1500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                      class="fw-600 fs-22 opacity-7 mb-15px d-inline-block text-uppercase">
                      A Landmark of Lasting Prestige
                    </span>
                  </span>
                  <span
                    class="opacity-7 fs-60 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px sm-mb-30px xs-mb-20px d-inline-block swiper-parallax-fancy-text text-uppercase"
                    data-fancy-text='{ "effect": "rotate", "string": ["Crafting A Legacy of Distinction"] }'></span>
                  <div
                    data-anime='{ "el": "childs", "translateY": [80, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a
                      href="<?php echo buildUrl('property-details.php', 'delta-prestige'); ?>"
                      target=""
                      class="btn btn-large btn-gradient-gold btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                      <span>
                        <span class="btn-text">Discover Prestige</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                    <a
                      href="projects.php"
                      target="_blank"
                      class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                      <span>
                        <span class="btn-text">View All Projects</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->

        <!-- start slider 1 item -->
        <div class="swiper-slide overflow-hidden">
          <div
            class="cover-background position-absolute top-0 start-0 w-100 h-100 home_slider_1"
            style="background-image: url('images/home/home_slider_08.jpg')"
            data-swiper-parallax="1000">
            <div
              class="opacity-medium bg-gradient-black-bottom-transparent hide-on-mobile"></div>
            <div
              class="container h-100 hide-on-mobile"
              data-swiper-parallax="-300">
              <div class="row align-items-center h-100">
                <div
                  class="col-xl-7 col-lg-9 col-md-10 position-relative text-white">
                  <img
                    src="images/projects/project_logos/delta_luxuria.png"
                    class="img-fluid slider_logo"
                    alt="" />
                  <span
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,0.7], "duration": 1500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                      class="fw-600 fs-22 opacity-7 mb-15px d-inline-block text-uppercase">
                      Crafted for Connoisseurs of Fine Living
                    </span>
                  </span>
                  <span
                    class="opacity-7 fs-60 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px sm-mb-30px xs-mb-20px d-inline-block swiper-parallax-fancy-text text-uppercase"
                    data-fancy-text='{ "effect": "rotate", "string": ["Luxury, Refined to Perfection"] }'></span>
                  <div
                    data-anime='{ "el": "childs", "translateY": [80, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a
                      href="<?php echo buildUrl('property-details.php', "delta-luxuria"); ?>"
                      target=""
                      class="btn btn-large btn-gradient-gold btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
                      <span>
                        <span class="btn-text">Discover Luxuria</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                    <a
                      href="projects.php"
                      target="_blank"
                      class="btn btn-large btn-transparent-white-light border-1 btn-hover-animation btn-box-shadow btn-round-edge xs-m-10px">
                      <span>
                        <span class="btn-text">View All Projects</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
      </div>
      <!-- start slider pagination -->
      <div
        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
      <!-- end slider pagination -->
      <!-- start slider navigation -->
      <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
      <!-- end slider navigation -->
    </div>
  </section>
  <!-- end slider section -->

  <!-- start about section -->
  <section id="down-section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div
          class="col-lg-5 col-md-10 position-relative z-index-1 md-mb-40px">
          <div class="atropos" data-atropos>
            <div
              class="atropos-scale"
              data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <div class="atropos-rotate">
                <div class="atropos-inner">
                  <div data-atropos-offset="3">
                    <img
                      src="images/home/home_01.jpg"
                      class="border-radius-6px w-100"
                      alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-xl-5 col-lg-6 offset-lg-1 col-md-9 text-center text-lg-start lg-ps-15px"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span
            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About Delta Group</span>
          <h3
            class="fw-600 text-dark-gray ls-minus-2px alt-font sm-w-80 xs-w-100 mx-auto sm-mb-20px">
            Constructing Class, Building Marvels
          </h3>
          <p>
            Success of a company is always based on the foundation of its
            values. At Delta Group values hold the highest position. Every
            project of the group represents the value for quality &
            innovation.
          </p>
          <p>
            Timely execution and before time possession of
            projects reflect the value for customer satisfaction. Extraordinary amenities and facilities signify the value for
            aesthetics and lifestyle.
          </p>
          <a
            href="about.php"
            class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Know More<i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- start counters section -->
  <section class="bg-warm-ivory overflow-hidden">
    <!-- heading -->
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <h3 class="text-brown-dark alt-font ls-minus-1px fw-700">
          Why Delta Stands Apart
        </h3>
        <p
          class="text-dark-gray d-inline-block fw-400 ls-0px w-80 xs-w-100 mx-auto">
          A proven legacy of transparency, timely delivery, and superior construction.
        </p>
      </div>
    </div>

    <!-- cards -->
    <div class="container">
      <div
        class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 counter-style-05">
        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
            <div class="feature-box-icon">
              <i
                class="bi bi-patch-check icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
            </div>
            <div class="feature-box-content">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18"> Trusted Transparency
              </span>
              <p>
                Ensuring transparency and accountability in every project.
              </p>
            </div>
            <div class="feature-box-overlay bg-gradient-gold-metallic"></div>
          </div>
        </div>
        <!-- end counter item -->
        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
            <div class="feature-box-icon">
              <i
                class="bi bi-clock icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
            </div>
            <div class="feature-box-content">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">On-Time Delivery
              </span>
              <p>A proven track record of delivering homes as promised.</p>
            </div>
            <div class="feature-box-overlay bg-gradient-gold-metallic"></div>
          </div>
        </div>
        <!-- end counter item -->
        <!-- start counter item -->
        <div class="col transition-inner-all xs-mb-30px">
          <div
            class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
            <div class="feature-box-icon">
              <i
                class="bi bi-buildings icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
            </div>
            <div class="feature-box-content">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Quality Construction
              </span>
              <p>Using premium materials for lasting and beautiful homes.</p>
            </div>
            <div class="feature-box-overlay bg-gradient-gold-metallic"></div>
          </div>
        </div>
        <!-- end counter item -->
        <!-- start counter item -->
        <div class="col transition-inner-all">
          <div
            class="feature-box overflow-hidden hover-box dark-hover bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-35px lg-p-25px">
            <div class="feature-box-icon">
              <i
                class="bi bi-people-fill icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
            </div>
            <div class="feature-box-content">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">NRI Trust
              </span>
              <p>The preferred choice for global investors in Navi Mumbai.</p>
            </div>
            <div class="feature-box-overlay bg-gradient-gold-metallic"></div>
          </div>
        </div>
        <!-- end counter item -->
      </div>
    </div>
    <!-- counters -->
    <div class="container mt-50px">
      <div
        class="row g-0 counter-style-04"
        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div
          class="col-lg-3 col-md-6 feature-box text-center hover-box border-start sm-border border-color-extra-medium-gray ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px md-ps-35px md-pe-35px md-mb-50px sm-mb-30px">
          <div class="feature-box-content">
            <h2
              class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 mb-0 ls-minus-1px"
              data-text="+ "
              data-to="40">
              <sup class="text-base-color top-0"><i
                  class="feather icon-feather-arrow-up icon-extra-medium"></i></sup>
            </h2>
            <p
              class="text-dark-gray mt-25 mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">
              Years of trust & excellence.
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 feature-box text-center hover-box border-start sm-border border-color-extra-medium-gray md-border-end ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px md-mb-50px sm-mb-30px">
          <div class="feature-box-content">
            <h2
              class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 mb-0 ls-minus-1px"
              data-text=".2M+"
              data-to="3">
              <sup class="text-base-color top-0"><i
                  class="feather icon-feather-arrow-up icon-extra-medium"></i></sup>
            </h2>

            <p
              class="text-dark-gray mt-25 mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">
              Sq. ft. of delivered projects.
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 feature-box text-center hover-box border-start sm-border border-color-extra-medium-gray ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px sm-mb-30px">
          <div class="feature-box-content">
            <h2
              class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 mb-0 ls-minus-1px"
              data-text="+"
              data-to="16">
              <sup class="text-base-color top-0"><i
                  class="feather icon-feather-arrow-up icon-extra-medium"></i></sup>
            </h2>

            <p
              class="text-dark-gray mt-25 mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">
              Projects under various stages of construction.
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 feature-box text-center hover-box border-start sm-border border-color-extra-medium-gray md-border-end ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px">
          <div class="feature-box-content">
            <h2
              class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 mb-0 ls-minus-1px"
              data-text="M+"
              data-to="10">
              <sup class="text-base-color top-0"><i
                  class="feather icon-feather-arrow-up icon-extra-medium"></i></sup>
            </h2>

            <p
              class="text-dark-gray mt-25 mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">
              Sq. ft. of ongoing developments.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end counters section -->

  <!-- start projects section -->
  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row align-items-center mb-6 xs-mb-8">
        <div
          class="col-md-8 text-center text-md-start sm-mb-20px"
          data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <h3
            class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none"
            data-shadow-animation="true"
            data-animation-delay="700">
            Ongoing
            <span class="fw-700 text-highlight d-inline-block">Projects<span
                class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>
          </h3>
        </div>
        <div
          class="col-md-4"
          data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="d-flex justify-content-center justify-content-md-end">
            <a
              href="projects.php"
              class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">View all property<span
                class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i class="feather icon-feather-arrow-right"></i></span></a>
          </div>
        </div>
      </div>

      <!-- Get the Filtered list -->
      <?php
      // Get only ongoing projects
      $ongoingProjects = array_filter($projects, function ($project) {
        return $project['project_info']['status'] === 'ongoing';
      });

      // Limit to 6
      $ongoingProjects = array_slice($ongoingProjects, 0, 6);

      ?>

      <!-- Listing -->
      <div
        class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center"
        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php foreach ($ongoingProjects as $index => $project): ?>
          <!-- start box item -->
          <div class="col mb-30px">
            <div
              class="border-radius-6px overflow-hidden box-shadow-large">
              <div class="image position-relative">
                <a href="<?php echo buildUrl('property-details.php', $project['project_info']['slug']); ?>">
                  <img
                    src="<?php echo $project['media']['featured_image']; ?>"
                    alt="" />
                </a>
                <div
                  class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">
                  <?php echo $project['project_info']['type']; ?>
                </div>
                <!-- <div
                          class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute right-20px top-20px">
                          <?php // echo $project['rera_details']['rera_id']; 
                          ?>
                        </div> -->
              </div>
              <div class="bg-white">
                <div
                  class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                  <div class="d-flex align-items-center">
                    <a
                      href="<?php echo buildUrl('property-details.php', $project['project_info']['slug']); ?>"
                      class="alt-font text-dark-gray fw-700 fs-22 me-10px">
                      <?php echo $project['project_info']['name']; ?>
                    </a>
                  </div>
                  <p class="m-0">
                    <?php echo $project['location']['address']; ?>
                  </p>

                  <div class="row g-0">
                    <div class="col">
                      <div class="d-flex align-items-center">
                        <i
                          class="fa-solid fa-bed text-base-color me-20px"></i>
                        <span
                          class="d-block lh-18 fs-15 text-black fw-600">
                          <?php echo $project['project_info']['configuration']; ?>
                        </span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="d-flex align-items-center">
                        <i
                          class="fa-solid fa-calendar text-base-color me-20px"></i>
                        <span
                          class="d-block lh-18 fs-15 text-black fw-600">
                          <?php echo $project['project_info']['possession_date']; ?>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 mt-2">
                    <div class="col">
                      <div class="d-flex align-items-center">
                        <i
                          class="fa-solid fa-id-card text-base-color me-20px"></i>
                        <span
                          class="d-block lh-18 fs-15 text-black fw-600">
                          RERA ID:
                        </span>
                        <span
                          class="d-block lh-18 fs-15 text-black fw-600 ms-10px">
                          <?php echo $project['rera_details']['rera_id']; ?>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
                <div
                  class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                  <div class="col">
                    <a
                      href="<?php echo buildUrl('property-details.php', $project['project_info']['slug']); ?>"
                      class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">View details</a>
                  </div>
                  <div class="col text-end">
                    <a
                      href="<?php echo buildUrl('property-details.php', $project['project_info']['slug']); ?>"
                      class="btn btn-transparent-base-color btn-very-small btn-round-edge fw-600">Download Brochure</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end box item -->
        <?php endforeach; ?>
      </div>
    </div>
    </div>
  </section>
  <!-- end projects section -->

  <!-- start testimonial section -->
  <section
    class="bg-black background-position-center-top"
    style="background-image: url('images/common/layer_1.jpg')">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <span
            class="text-white text-uppercase fw-500 d-inline-block ls-1px fs-15">What clients say</span>
          <h3 class="text-white fw-500 ls-minus-1px">Clients testimonial</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div
          class="col-xl-8 col-lg-10 testimonials-style-10 position-relative ps-4 pe-4 swiper-number-pagination-progress"
          data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div
            class="swiper magic-cursor sm-pt-3 pb-6"
            data-slider-options='{"slidesPerView": 1, "loop": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-number-line-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav-01", "prevEl": ".swiper-button-previous-nav-01", "effect": "fade" } }'
            data-swiper-number-pagination-progress="true">
            <div class="swiper-wrapper">
              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “Moving into a Delta project felt like a real upgrade in lifestyle. The planning, amenities, and open spaces make daily life so much smoother. Their team was helpful even after possession, which is rare these days.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Priya Shah, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “We chose Delta because of the trust factor. Everything promised during the site visit was delivered without compromise. The kids love the play area, and we love the community vibe.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Rohan & Aditi Mehta, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “We wanted a home with good ventilation, security, and enough space for our parents. Delta checked all the boxes. The community events they organize also add a personal touch.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ The Patel Family, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “I had visited so many projects before deciding, but none offered this balance of design and practicality. Delta's team patiently explained everything, which made the buying process smooth.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Namrata Joshi, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “The moment I walked into the apartment, I could feel the difference in finishing. The clubhouse, greenery, and overall environment make it a place you actually enjoy coming home to.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Riya Malhotra, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “Delta projects have consistently given me strong rental returns. Their locations are well researched, and that shows in the appreciation over the years. I am already considering my next investment with them.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Sameer Kulkarni, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “Buying from abroad is stressful, but Delta made the entire process transparent. Regular updates, clear paperwork, and zero surprises. I felt fully confident from day one.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Vinit DSouza, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->

              <!-- start testimonial item -->
              <div class="swiper-slide">
                <div class="d-flex flex-column">
                  <div
                    class="align-self-center text-center w-90 last-paragraph-no-margin">
                    <h6 class="fw-100 lh-42 mb-0 text-white">
                      “What I like most about Delta is their consistency. Every project reflects thoughtful planning and strong execution. Their properties have been a dependable asset in my portfolio.”
                      <br />
                      <span class="text-base-color fw-500">
                        @ Harshad Parab, <br /><small>Navi Mumbai </small>
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <!-- end testimonial item -->
            </div>
          </div>
          <!-- start slider pagination -->
          <div
            class="swiper-pagination-wrapper d-flex align-items-center justify-content-center">
            <div class="number-prev fs-15 text-white"></div>
            <div class="swiper-pagination-progress bg-medium-gray">
              <span class="swiper-progress"></span>
            </div>
            <div class="number-next fs-15 text-white"></div>
          </div>
          <!-- end slider pagination -->
          <!-- start slider navigation -->
          <div
            class="swiper-button-previous-nav-01 swiper-button-prev icon-extra-medium left-0px">
            <i class="bi bi-arrow-left icon-extra-medium text-white"></i>
          </div>
          <div
            class="swiper-button-next-nav-01 swiper-button-next icon-extra-medium right-0px">
            <i class="bi bi-arrow-right icon-extra-medium text-white"></i>
          </div>
          <!-- end slider pagination -->
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonial section -->

  <!-- start blogs section  -->
  <section
    class="pt-0 ps-7 pe-7 xl-ps-0 xl-pe-0 xs-px-0 top-space-margin container-fluid overflow-hidden">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <h5 class="text-dark-gray alt-font ls-minus-1px fw-700">
          Navi Mumbai Real Estate Insights
        </h5>
        <p
          class="text-dark-gray d-inline-block fw-400 ls-0px w-80 xs-w-100 mx-auto">
          Stay informed with the latest trends and news from our experts.
        </p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <ul
            class="blog-simple blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
            <li class="grid-sizer"></li>

            <?php foreach (array_slice($blogs, 0, length: 4) as $blog): ?>
              <!-- start blog item -->
              <li class="grid-item">
                <figure class="position-relative mb-0 box-hover">
                  <div class="blog-image">
                    <!-- <img src="https://placehold.co/800x1145" alt="" /> -->
                    <img src="<?php echo $blog['featured_image']['thumbnail']; ?>" alt="" />
                    <span class="box-overlay bg-dark-slate-blue"></span>
                    <span
                      class="bg-gradient-gray-light-dark-transparent position-absolute opacity-6 top-0px left-0px w-100 h-100"></span>
                  </div>
                  <figcaption class="d-flex flex-column h-100">
                    <div class="my-auto w-100 text-center blog-hover-icon">
                      <a href="<?php echo buildUrl('blog-details.php', $blog['slug']); ?>" class="d-inline-block"><i
                          class="line-icon-Arrow-OutRight icon-extra-large text-white"></i></a>
                    </div>
                    <div class="position-relative post-content p-14 text-center last-paragraph-no-margin">
                      <div class="position-relative z-index-2 overflow-hidden">

                        <!-- DATE -->
                        <?php
                        // Format the date
                        $date = new DateTime($blog['date']);
                        $formattedDate = $date->format("d F Y");
                        ?>

                        <a href="<?php echo buildUrl('blog-details.php', $blog['slug']); ?>" class="d-inline-block fs-15 text-gradient-gold mb-5px text-uppercase fw-600">
                          <?php echo $formattedDate; ?>
                        </a>

                        <!--  -->
                        <?php
                        $title = $blog['title'];
                        $maxLength = 50;

                        if (strlen($title) > $maxLength) {
                          $title = substr($title, 0, $maxLength) . '...';
                        }
                        ?>

                        <a href="<?php echo buildUrl('blog-details.php', $blog['slug']); ?>" class="card-title fs-20 alt-font fw-500 text-white mb-0 d-block text-crop">
                          <?php echo $title; ?>
                        </a>

                      </div>
                      <div class="box-overlay bg-dark-slate-blue"></div>
                    </div>
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

  <!-- start cta section -->
  <section
    class="cover-background big-section"
    style="background-image: url('images/common/cta_image_3.jpg')">
    <div class="opacity-extra-medium bg-dark-gray"></div>
    <div class="container position-relative">
      <div
        class="row justify-content-center bg-backdrop-gradient-black p-50px rounded-5">
        <div class="col-xl-4 col-lg-5 md-mb-40px">
          <h3 class="text-white fw-500 ls-minus-1px">
            Your Dream Home Awaits, Book a Site Visit Now
          </h3>
          <p class="text-white opacity-7">
            Experience the Delta difference firsthand. Schedule your
            personalized tour today and find your future home.
          </p>
          <div class="row row-cols-1 justify-content-center mt-30px">
            <!-- start features box item -->
            <!-- <div class="col icon-with-text-style-08">
                <div
                  class="feature-box feature-box-left-icon-middle overflow-hidden">
                  <div
                    class="feature-box-icon feature-box-icon-rounded bg-orange w-80px h-80px rounded-circle me-20px">
                    <i class="bi bi-envelope text-white icon-very-medium"></i>
                  </div>
                  <div class="feature-box-content last-paragraph-no-margin">
                    <span class="text-white opacity-7 d-block"
                      >Join our growing team?</span
                    >
                    <span class="d-block fs-22 text-white"
                      ><a
                        href="mailto:careers@domain.com"
                        class="text-white text-decoration-line-bottom"
                        >careers@domain.com</a
                      ></span
                    >
                  </div>
                </div>
              </div> -->
            <!-- end features box item -->
          </div>
        </div>
        <div class="col-lg-7 offset-xl-1">
          <form
            action="email-templates/contact-form.php"
            method="post"
            class="row row-cols-1 row-cols-md-2 justify-content-center">
            <div class="col mb-30px">
              <input
                class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control required"
                type="text"
                name="name"
                placeholder="Your name*" />
            </div>
            <div class="col mb-30px">
              <input
                class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control"
                type="tel"
                name="phone"
                placeholder="Your phone" />
            </div>
            <div class="col mb-30px">
              <input
                class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control required"
                type="email"
                name="email"
                placeholder="Your email address*" />
            </div>
            <div class="col sm-mb-30px">
              <input
                class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control"
                type="text"
                name="subject"
                placeholder="Your subject" />
            </div>
            <div class="col-md-12">
              <textarea
                class="border-color-transparent-white-very-light bg-transparent placeholder-light form-control"
                cols="40"
                rows="4"
                name="comment"
                placeholder="Your message"></textarea>
              <input type="hidden" name="redirect" value="" />
              <button
                class="btn btn-medium btn-white mt-30px btn-round-edge submit fw-700">
                Send message
              </button>
              <div class="form-results mt-20px d-none"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end cta section -->

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