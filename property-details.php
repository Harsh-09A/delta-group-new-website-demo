<?php include 'includes/loader.php'; ?>
<?php

$slug = $_GET['slug'] ?? '';

// find project by slug
$project = null;
foreach ($projects as $p) {
  if ($p['project_info']['slug'] === $slug) {
    $project = $p;
    break;
  }
}

if (!$project) {
  // die("Project not found!");
  header("Location: /404.php");
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
// $page_title = "About | Delta Group";
$page_title = $project['project_info']['name'] . " | Delta Group";
include 'includes/head.php';
?>

<!--  -->
<?php
global $projectName;
$projectName = $project['project_info']['slug'];
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start section -->
  <section class="overflow-hidden top-space-margin py-4">
    <div class="container-fluid p-0">
      <div class="row align-items-center g-0">
        <div
          class="col-12 position-relative swiper-dark-pagination"
          data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
          <div
            class="swiper overflow-visible"
            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "centeredSlides": "true", "loop": true, "pagination": { "el": ".swiper-pagination-bullets-01", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1.8 }, "768": { "slidesPerView": 1.8 }, "320": { "slidesPerView": 1.3 } }, "effect": "slide" }'>
            <div class="swiper-wrapper align-items-center">
              <?php $galleryImages = $project['media']['gallery']; ?>

              <?php foreach ($galleryImages as $index => $slide): ?>
                <!-- start carousal item -->
                <div class="swiper-slide">
                  <img
                    class="border-radius-6px w-100"
                    src="<?php echo $slide ?>"
                    alt="" />
                </div>
                <!-- end carousal item -->
              <?php endforeach; ?>


            </div>
          </div>
          <!-- start slider pagination -->
          <div
            class="swiper-pagination swiper-pagination-clickable swiper-pagination-style-01 swiper-pagination-bullets-01 position-static mt-40px"></div>
          <!-- end slider pagination -->
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start page title -->
  <section class="cover-background page-title-big-typography py-1">
    <div class="container">
      <div
        class="row align-items-center align-items-lg-end justify-content-center g-0">
        <div
          class="col-xl-7 col-lg-8 position-relative page-title-extra-small md-mb-30px md-mt-auto"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <h3 class="alt-font fw-600 text-dark-gray mb-15px ls-minus-1px">
            <?php echo $project['project_info']['name']; ?>
          </h3>
          <h1 class="mb-0 d-flex">
            <i
              class="feather icon-feather-map-pin icon-extra-medium text-base-color me-5px"></i>
            <?php echo $project['location']['address']; ?>
          </h1>
        </div>
        <div
          class="col-lg-3 offset-xl-2 offset-lg-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
          <h4 class="text-dark-gray fw-700 alt-font mb-5px">
            ₹ <?php echo $project['project_info']['price']; ?>
          </h4>
          <span class="fw-500 fs-18">Starting From</span>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->

  <!-- Highlights Cards -->
  <section class="bg-white overflow-hidden py-5">
    <!-- cards -->
    <div class="container">
      <div
        class="row row-cols-1 row-cols-lg-5 row-cols-sm-2 counter-style-05">
        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-15px lg-p-15px border-solid border-light-gray border-1px-solid">
            <div class="feature-box-icon">
              <i
                class="bi bi-geo-alt icon-very-medium text-base-color my-10px"></i>
            </div>
            <div class="feature-box-content pt-10px">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 fs-16">
                Location
              </span>
              <p class="m-0">
                <?php echo $project['location']['city_area']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end counter item -->

        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-15px lg-p-15px border-solid border-light-gray border-1px-solid">
            <div class="feature-box-icon">
              <i
                class="bi bi-building icon-very-medium text-base-color my-10px"></i>
            </div>
            <div class="feature-box-content pt-10px">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 fs-16">
                Configuration
              </span>
              <p class="m-0">
                <?php echo $project['project_info']['configuration']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end counter item -->

        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-15px lg-p-15px border-solid border-light-gray border-1px-solid">
            <div class="feature-box-icon">
              <i
                class="bi bi-calendar3 icon-very-medium text-base-color my-10px"></i>
            </div>
            <div class="feature-box-content pt-10px">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 fs-16">
                Possession
              </span>
              <p class="m-0">
                <?php echo $project['project_info']['possession_date']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end counter item -->

        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-15px lg-p-15px border-solid border-light-gray border-1px-solid">
            <div class="feature-box-icon">
              <i
                class="bi bi-info-circle icon-very-medium text-base-color my-10px"></i>
            </div>
            <div class="feature-box-content pt-10px">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 fs-16">
                Status
              </span>
              <p class="m-0 text-capitalize">
                <?php echo $project['project_info']['status']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end counter item -->

        <!-- start counter item -->
        <div class="col transition-inner-all md-mb-30px">
          <div
            class="feature-box overflow-hidden bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-8px p-15px lg-p-15px border-solid border-light-gray border-1px-solid">
            <div class="feature-box-icon">
              <i
                class="bi bi-patch-check icon-very-medium text-base-color my-10px"></i>
            </div>
            <div class="feature-box-content pt-10px">
              <span
                class="d-inline-block alt-font text-dark-gray fw-700 fs-16">
                RERA ID
              </span>
              <p class="m-0">
                <?php echo $project['rera_details']['rera_id']; ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end counter item -->
      </div>
    </div>
  </section>
  <!--  -->


  <!-- start section -->
  <section class="position-relative pt-10px">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 md-mb-50px">
          <!-- Project Description -->
          <div class="row mb-15px">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Property description</span>
              <p>
                <?php echo $project['content']['description']; ?>
              </p>
            </div>
          </div>

          <!-- Project Hallmarks -->
          <div class="row mt-7">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Project Hallmarks
              </span>
            </div>
            <div class="col-12 col-sm-12">
              <?php $hallmarksLists = $project['content']['hallmarks']; ?>
              <!-- start list style -->
              <ul class="list-style-02 ps-0 mb-0 text-black fs-16">
                <!--  -->
                <?php foreach ($hallmarksLists as $hallmark): ?>
                  <li>
                    <i
                      class="bi bi-check-circle icon-small me-10px text-base-color"></i>
                    <?php echo $hallmark; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
              <!-- end list style -->
            </div>
          </div>

          <!-- Amenities -->
          <div class="row mt-7">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Amenities</span>
            </div>

            <!-- -------------- -->

            <?php
            $amenitiesLists = $project['amenities_details']['amenities'];

            // Split into 3 equal columns
            $chunks = array_chunk($amenitiesLists, ceil(count($amenitiesLists) / 3));
            ?>

            <div class="row m-0 p-0">
              <?php foreach ($chunks as $column): ?>
                <div class="col-6 col-sm-4"> <!-- 3 columns on desktop -->
                  <ul class="list-style-02 ps-0 mb-0">
                    <?php foreach ($column as $amenity): ?>
                      <li>
                        <i class="<?php echo $amenity['font_awesome_icon']; ?> icon-small me-10px text-base-color"></i>
                        <?php echo $amenity['amenity_name']; ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- --------------- -->

          </div>

          <!-- Location -->
          <div class="row mt-7">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Location</span>
            </div>
            <div class="col-12">
              <div>
                <iframe
                  src="<?php echo $project['location']['google_map_src']; ?>"
                  width="100%"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>

          <!-- Connectivity -->
          <div class="row mt-7">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Connectivity</span>
            </div>
            <!-- --------- -->

            <?php
            $connectivityLists = $project['location']['connectivities'];

            // Split into 2 equal columns
            $chunks2 = array_chunk($connectivityLists, ceil(count($connectivityLists) / 2));
            ?>

            <div class="row m-0 p-0">
              <?php foreach ($chunks2 as $column): ?>
                <div class="col-6 col-sm-6"> <!-- 2 columns on desktop -->
                  <ul class="list-style-02 ps-0 mb-0">
                    <?php foreach ($column as $connectivity): ?>
                      <li>
                        <i class=" bi bi-geo-fill icon-small me-10px text-base-color"></i>
                        <?php echo $connectivity; ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endforeach; ?>
            </div>

          </div>

          <!-- Floor Plans -->
          <div class="row mt-7">
            <div class="col-12">
              <span
                class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Floor Plans</span>
              <div class="row">
                <div class="col-md-12 mb-40px sm-mb-30px">
                  <div
                    class="swiper"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-08", "prevEl": ".slider-one-slide-prev-08" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper align-items-center">

                      <?php $planImages = $project['media']['floor_plans']; ?>
                      <?php foreach ($planImages as $index => $plan_slide): ?>
                        <!-- start carousal item -->
                        <div class="swiper-slide">
                          <img
                            src="<?php echo $plan_slide ?>"
                            alt="" />
                        </div>
                        <!-- end carousal item -->
                      <?php endforeach; ?>

                    </div>
                    <!-- start slider navigation -->
                    <div
                      class="slider-one-slide-prev-08 swiper-button-prev bg-white-transparent-very-light text-white h-50px w-50px slider-navigation-style-01">
                      <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div
                      class="slider-one-slide-next-08 swiper-button-next bg-white-transparent-very-light text-white h-50px w-50px slider-navigation-style-01">
                      <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <!-- end slider navigation -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Downloads -->
          <!-- <div class="row mt-7">
            <div class="col-12">
              <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Downloads</span>

              <div class="row">
                <?php // if (!empty($project['media']['brochure'])): ?>
                  <div class="col-md-12 mb-40px sm-mb-30px">
                    <a
                      href="<?php // echo $project['media']['brochure']; ?>"
                      class="btn btn-dark-gray btn-small btn-round-edge fw-600"
                      download>
                      <i class="fa-solid fa-download me-10px"></i> Download Brochure
                    </a>
                  </div>
                <?php // endif; ?>
              </div>

            </div>
          </div> -->

        </div>
        <!-- start sticky -->
        <div class="col-xl-4 offset-xl-1 col-lg-5 sticky-qr-section">
          <div
            class="bg-beige-soft border-radius-6px position-sticky top-120px">
            <div
              class="bg-black border-radius-6px feature-box feature-box-left-icon-middle overflow-hidden icon-with-text-style-08 ps-35px pe-35px pt-25px pb-20px xs-p-25px">
              <!-- start features box item -->
              <div
                class="feature-box-icon overflow-visible p-0 m-0 d-flex w-100 justify-content-center">
                <img
                  class="h-200px w-200px"
                  src="<?php echo $project['rera_details']['rera_qr_image']; ?>"
                  alt="" />
              </div>
              <!-- end features box item -->
              <!-- start features box item -->
              <div
                class="d-flex w-100 justify-content-center flex-column align-items-center">
                <p class="text-white text-uppercase fs-14">Scan to verify</p>
                <p class="text-white text-uppercase">
                  <strong>RERA ID: </strong><?php echo $project['rera_details']['rera_id']; ?>
                </p>
              </div>

              <!-- end features box item -->
              <!-- start social icon -->
              <!-- <div
                  class="elements-social social-icon-style-02 mt-5px w-100 text-start text-lg-center">
                  <ul class="medium-icon">
                    <li class="m-0">
                      <a
                        class="facebook text-white"
                        href="https://www.facebook.com/"
                        target="_blank"
                        ><i class="fa-brands fa-facebook-f"></i
                      ></a>
                    </li>
                    <li class="m-0">
                      <a
                        class="dribbble text-white"
                        href="http://www.dribbble.com"
                        target="_blank"
                        ><i class="fa-brands fa-dribbble"></i
                      ></a>
                    </li>
                    <li class="m-0">
                      <a
                        class="twitter text-white"
                        href="http://www.twitter.com"
                        target="_blank"
                        ><i class="fa-brands fa-twitter"></i
                      ></a>
                    </li>
                    <li class="m-0">
                      <a
                        class="instagram text-white"
                        href="http://www.instagram.com"
                        target="_blank"
                        ><i class="fa-brands fa-instagram"></i
                      ></a>
                    </li>
                  </ul>
                </div> -->
              <!-- end social icon -->
            </div>
            <div
              class="ps-45px pe-45px pt-35px pb-45px xs-p-25px contact-form-style-01 mt-0">
              <!-- <div class="mb-20px last-paragraph-no-margin">
                  <p class="mb-0 alt-font fw-500 text-dark-gray">
                    <i
                      class="feather icon-feather-phone-call icon-small text-base-color me-10px"></i
                    ><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block"
                      >Phone:</span
                    ><a
                      href="tel:12345678910"
                      class="text-dark-gray text-base-color-hover"
                      >+1 234 567 8910</a
                    >
                  </p>
                  <p class="alt-font fw-500 text-dark-gray">
                    <i
                      class="feather icon-feather-mail icon-small text-base-color me-10px"></i
                    ><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block"
                      >Email:</span
                    ><a
                      href="mailto:info@domain.com"
                      class="text-dark-gray text-decoration-line-bottom"
                      >info@domain.com</a
                    >
                  </p>
                </div> -->
              <span
                class="alt-font fs-20 fw-600 text-dark-gray d-block mb-25px">Leave your message here</span>
              <!-- start contact form -->
              <form action="email-templates/contact-form.php" method="post">
                <div class="position-relative form-group mb-15px">
                  <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                  <input
                    type="text"
                    name="name"
                    class="form-control border-color-white box-shadow-large required"
                    placeholder="Your name*" />
                </div>
                <div class="position-relative form-group mb-15px">
                  <span class="form-icon"><i class="bi bi-envelope"></i></span>
                  <input
                    type="email"
                    name="email"
                    class="form-control border-color-white box-shadow-large required"
                    placeholder="Your email address*" />
                </div>
                <div class="position-relative form-group mb-15px">
                  <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                  <input
                    type="tel"
                    name="phone"
                    class="form-control border-color-white box-shadow-large"
                    placeholder="Your phone" />
                </div>
                <div class="position-relative form-group form-textarea">
                  <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                  <textarea
                    placeholder="Your message"
                    name="comment"
                    class="form-control border-color-white box-shadow-large"
                    rows="3"></textarea>
                  <input type="hidden" name="redirect" value="" />
                  <button
                    class="btn btn-small btn-round-edge btn-base-color mt-20px submit"
                    type="submit">
                    Send message
                  </button>
                  <div class="form-results mt-20px d-none"></div>
                </div>
              </form>
              <!-- end contact form -->
            </div>
          </div>
        </div>
        <!-- end sticky -->
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section class="bg-gradient-very-light-gray">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h3
            class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none"
            data-shadow-animation="true"
            data-animation-delay="700">
            Similar
            <span class="fw-700 text-highlight d-inline-block">properties<span
                class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span>
          </h3>
        </div>
      </div>
      <!-- Get the Filtered list -->
      <?php
      // Get only ongoing projects
      $similarProjects = array_filter($projects, function ($project) {
        return $project['project_info']['status'] === 'ongoing' and $project['project_info']['slug'] !== $GLOBALS['projectName'];
      });

      // Limit to 6
      $similarProjects = array_slice($similarProjects, 0, 3);

      ?>

      <!-- Listing -->
      <div
        class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center"
        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php foreach ($similarProjects as $index => $project): ?>
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