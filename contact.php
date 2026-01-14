<?php include 'includes/loader.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
$page_title = "Contact | Delta Group";
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
          <h1 class="mb-20px alt-font text-base-color">Contact</h1>
          <h3 class="fw-500 m-0 ls-minus-2px text-white alt-font">
            Crafting Landmarks. Building Trust.
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->

  <!-- start section -->
  <section class="bg-very-light-gray position-relative">
    <div class="container">
      <div class="row mb-8">
        <div
          class="col-xl-6 col-lg-6 md-mb-50px"
          data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
          <div
            class="bg-white border-radius-6px box-shadow-quadruple-large p-0 ps-5 pe-5 lg-ps-8 lg-pe-8 h-100 d-flex flex-wrap flex-column justify-content-center"
            data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <span
              class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex align-self-start"><i class="bi bi-chat-square-dots fs-16 me-5px"></i>Lets's work
              together</span>
            <h4 class="text-dark-gray ls-minus-1px fw-700 mb-15px">
              Ready to help you!
            </h4>
            <p class="w-85 sm-w-100">
              We're here to help and answer any question you might have.
            </p>
            <div class="row row-cols-1 row-cols-sm-2">
              <div class="col last-paragraph-no-margin mb-25px">
                <p class="text-dark fw-600 m-0">Corporate Office:</p>
                <p class="text-align-justify m-0 p-0">
                  13th Floor, V Times Square, Palm Beach Rd, Sector 15, CBD
                  Belapur, Navi Mumbai, Maharashtra 400614
                </p>
              </div>
              <div class="col last-paragraph-no-margin mb-25px">
                <p class="text-dark-gray fw-600 m-0">Need Email Support?</p>
                <a href="mailto:balajivtimes2@gmail.com">
                  balajivtimes2@gmail.com
                </a>
              </div>
              <div class="col last-paragraph-no-margin sm-mb-25px">
                <p class="text-dark-gray fw-600 m-0">Join growing team?</p>
                <a href="mailto:join@thedeltagroup.co.in" class="">join@thedeltagroup.co.in</a>
              </div>
              <div class="col last-paragraph-no-margin">
                <p class="text-dark-gray fw-600 m-0">Call Us</p>
                <a href="tel:+918448449226" class=""> +91 8448449226 </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-lg-5 offset-xl-1 md-mb-50px sm-mb-0"
          data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
          <h3 class="text-dark-gray ls-minus-2px fw-700">
            Looking for any help?
          </h3>
          <form
            action="email-templates/contact-form.php"
            method="post"
            class="contact-form-style-03">
            <label
              for="exampleInputEmail1"
              class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Enter your name*</label>
            <div class="position-relative form-group mb-20px">
              <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
              <input
                class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                id="exampleInputEmail1"
                type="text"
                name="name"
                placeholder="What's your good name" />
            </div>
            <label
              for="exampleInputEmail1"
              class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Email address*</label>
            <div class="position-relative form-group mb-20px">
              <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
              <input
                class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                id="exampleInputEmail2"
                type="email"
                name="email"
                placeholder="Enter your email address" />
            </div>
            <label
              for="exampleInputEmail1"
              class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Your message</label>
            <div class="position-relative form-group form-textarea mb-0">
              <textarea
                class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control"
                name="comment"
                placeholder="Describe about your project"
                rows="3"></textarea>
              <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
            </div>
            <div class="row mt-25px align-items-center">
              <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">
                <p class="mb-0 fs-14 lh-22 text-center text-sm-start">
                  We will never collect information about you without your
                  explicit consent.
                </p>
              </div>
              <div
                class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">
                <input
                  id="exampleInputEmail3"
                  type="hidden"
                  name="redirect"
                  value="" />
                <button
                  class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow submit"
                  type="submit">
                  Send message
                </button>
              </div>
              <div class="col-12 mt-20px mb-0 text-center text-md-start">
                <div class="form-results d-none"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section class="big-section pt-0">
    <div class="container">
      <div class="row justify-content-center mb-3 mt-3">
        <div class="col-xl-5 col-lg-6 text-center">
          <h2 class="text-dark-gray fw-600 ls-minus-2px">
            We'd love to hear from your side.
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <iframe
            title="map"
            class="w-100 h-550px sm-h-350px rounded-4"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15088.701133060613!2d73.0250993!3d19.0119963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3abc4558a03%3A0xdd18e2c6e52c824d!2sBalaji%20group%20-%20Navi%20mumbai!5e0!3m2!1sen!2sin!4v1763529738075!5m2!1sen!2sin"></iframe>
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