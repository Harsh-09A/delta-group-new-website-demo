<?php include 'includes/loader.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
$page_title = "Projects | Delta Group";
include 'includes/head.php';
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start page title -->
  <section
    class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
    style="background-image: url(images/common/page_heading.jpg)">
    <div
      class="background-position-center-top h-100 w-100 position-absolute left-0px top-0 opacity-extra-medium bg-dark-gray"></div>
    <div
      id="particles-style-01"
      class="h-100 position-absolute left-0px top-0 w-100"
      data-particle="true"
      data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
    <div class="container">
      <div class="row align-items-center extra-small-screen">
        <div
          class="col-xl-8 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-large"
          data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <h1 class="mb-20px alt-font text-base-color">Projects</h1>
          <h3 class="fw-500 m-0 ls-minus-2px text-white alt-font">
            Crafting Landmarks. Building Trust.
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->

  <!-- start listing section -->
  <section class="bg-gradient-very-light-gray position-relative">
    <div class="container">
      <div class="row">
        <div class="col tab-style-01">
          <ul
            class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600 mb-3 projects-tabs-nav">
            <li class="nav-item">
              <a class="nav-link " data-bs-toggle="tab" href="#completed_tab">Completed Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#ongoing_tab">Ongoing Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#upcoming_tab">Upcoming Projects</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- start tab content : Completed -->
            <div class="tab-pane fade in " id="completed_tab">
              <!-- Listing -->
              <div
                class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <?php foreach ($projects as $index => $project): ?>
                  <?php if ($project['project_info']['status'] !== 'completed') {
                    continue;
                  } ?>
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
                            <?php echo $project['location']['city_area']; ?>
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
                              href="#popup-contact-form"
                              class="btn btn-transparent-base-color btn-very-small btn-round-edge fw-600 popup-with-move-anim">Download Brochure</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end box item -->
                <?php endforeach; ?>
              </div>
            </div>
            <!-- end tab content -->

            <!-- start tab content : Ongoing -->
            <div class="tab-pane fade in active show" id="ongoing_tab">
              <!-- Listing -->
              <div
                class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <?php foreach ($projects as $index => $project): ?>
                  <?php if ($project['project_info']['status'] !== 'ongoing') {
                    continue;
                  } ?>
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
                            <?php echo $project['location']['city_area']; ?>
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
                              href="#popup-contact-form"
                              class="btn btn-transparent-base-color btn-very-small btn-round-edge fw-600 popup-with-move-anim">Download Brochure</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end box item -->
                <?php endforeach; ?>
              </div>
            </div>
            <!-- end tab content -->

            <!-- start tab content : Upcoming -->
            <div class="tab-pane fade in" id="upcoming_tab">
              <!-- Listing -->
              <div
                class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <?php foreach ($projects as $index => $project): ?>
                  <?php if ($project['project_info']['status'] !== 'upcoming') {
                    continue;
                  } ?>
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
                            <?php echo $project['location']['city_area']; ?>
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
                              href="#popup-contact-form"
                              class="btn btn-transparent-base-color btn-very-small btn-round-edge fw-600 popup-with-move-anim">Download Brochure</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end box item -->
                <?php endforeach; ?>
              </div>
            </div>
            <!-- end tab content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end listing section -->

  <!-- start cta section -->
  <section class="">
    <div class="container">
      <div
        class="row justify-content-center"
        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <div
          class="col-12"
          data-bottom-top="transform:scale(1, 1);"
          data-top-bottom="transform:scale(1.1, 1.1);">
          <div
            class="border-radius-6px h-450px md-h-350px sm-h-400px d-flex flex-wrap align-items-center justify-content-center overflow-hidden cover-background box-shadow-quadruple-large pt-15 md-pt-7 sm-pt-11"
            style="background-image: url('images/common/background_2.jpg')">
            <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
            <div class="row justify-content-center align-items-center">
              <div
                class="col-xl-6 col-lg-7 col-md-8 col-sm-9 z-index-1 text-center text-lg-start md-mb-20px">
                <h3
                  class="text-white mb-0 fw-500 ls-minus-1px ps-10px pe-10px">
                  Begin Your Journey to Better Living.
                </h3>
              </div>
              <div
                class="col-xl-3 col-lg-4 position-relative z-index-1 text-center md-mb-20px">
                <a
                  href="#"
                  class="btn btn-large btn-white btn-box-shadow btn-rounded text-transform-none fw-600 primary-font ls-0px">Free consultation<i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <div
              class="w-100 text-center position-relative mt-auto pt-20px pb-25px ps-15px pe-15px border-top border-color-transparent-white-light">
              <div class="fs-14 text-uppercase text-white fw-500 ls-05px">
                Let's make something great work together.
                <a href="#" class="text-decoration-line-bottom text-white">Connect with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end cta section -->

  <?php include_once "./includes/popup-form.php" ?>

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