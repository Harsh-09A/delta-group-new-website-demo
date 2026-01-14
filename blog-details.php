<?php include 'includes/loader.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
$page_title = "About | Delta Group";
include 'includes/head.php';
?>

<?php
$slug = $_GET['slug'] ?? '';

// find project by slug
$blog = null;
foreach ($blogs as $p) {
  if ($p['slug'] === $slug) {
    $blog = $p;
    break;
  }
}

if (!$blog) {
  die("Project not found!");
  // header("Location: 404.php");
}
?>

<body
  data-mobile-nav-trigger-alignment="right"
  data-mobile-nav-style="modern"
  data-mobile-nav-bg-color="#000">

  <?php include_once "./includes/header.php" ?>

  <!-- start section -->
  <section class="cover-background one-half-screen d-flex align-items-center"
    style="background-image: url(<?php echo $blog['featured_image']['original']; ?>)">
    <div class="opacity-light bg-gradient-dark-transparent"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 position-relative">
          <div class="d-inline-block mb-20px text-white fs-18">
            <!-- DATE -->
            <?php
            // Format the date
            $date = new DateTime($blog['date']);
            $formattedDate = $date->format("d F Y");
            ?>
            <span class="text-white fw-600">
              <?php echo $formattedDate; ?>
            </span>
            <span class="d-inline-block fs-30 opacity-5 align-middle ms-15px me-15px">•</span>
            <span class="text-white fw-600">
              <?php echo $blog['categories'][0]; ?>
            </span>
          </div>
          <h1 class="text-white w-100 lg-w-75 sm-w-100 alt-font fw-500 ls-minus-2px text-shadow-double-large mb-0 ">
            <?php echo $blog['title']; ?>
          </h1>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section class="pb-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h4 class="fw-500 text-dark-gray w-90 md-w-100">
            <?php echo $blog['title']; ?>
          </h4>
        </div>

        <div class="col-lg-10 mb-6 sm-mb-35px">
          <?php echo $blog['content']; ?>
        </div>

        <div class="col-lg-10 mb-6 sm-mb-35px last-paragraph-no-margin text-center">
          <div class="h-1px w-100 bg-extra-medium-gray"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <!-- start blogs section  -->
  <section class="pt-0 ps-7 pe-7 xl-ps-2 xl-pe-2 xs-px-0">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <h5 class="text-dark-gray alt-font ls-minus-1px fw-700">
          Related Posts
        </h5>
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