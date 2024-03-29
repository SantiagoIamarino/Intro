<?php
   require('../config.php');
   require('../../shared/language.php');

   //m2 to sqft redondeado hacia arriba
    function m2_to_sqft($m2) {
        return ceil($m2 * 10.7639);
    }
   
    if(!isset($_GET['slug']) || empty($_GET['slug'])) {
        header('Location: ./');
        return;
    }

    $statement = $db->prepare("SELECT * FROM projects WHERE slug = :slug");
    $statement->execute(array( 'slug' => $_GET['slug'] ));
    $project = $statement->fetch();

    $projectId = $project['id'];

    if(empty($project)) {
        header('Location: ./');
        return;
    }

    require('../../shared/popularity.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $project['title'] ?> project Intro Arquitectura">
  <meta name="author" content="Intro Arquitectura">
  <meta name="keywords" content="Intro Arquitectura">
  <meta property="og:image" content="<?php echo $assets_url . 'uploads/' . $project['principal_img'] ?>" />

  <!-- Title Page-->
  <title><?php echo $project['title'] ?></title>

  <!-- Icons font CSS-->
  <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
  <!-- Base fonts of theme-->
  <link href="../../css/roboto-font.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->

  <!-- Bootstrap CSS-->
  <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="../../vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="../../css/main.min.css" rel="stylesheet" media="all">

  <!-- Fancybox -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


  <!--Favicons-->
  <link rel="apple-touch-icon" sizes="57x57" href="../images/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../images/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../images/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../images/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../images/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../images/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../images/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/icon/favicon-16x16.png">
  <link rel="manifest" href="../../images/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../images/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5M43SWV');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="animsition js-preloader">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M43SWV" ; height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="page-wrapper">
    <!-- HEADER-->
    <?php require('../header.php') ?>
    <!-- END HEADER-->

    <!-- MAIN-->
    <main id="main">
      <div class="container">
        <article class="project-style-4 mb-4 pb-4">
          <header class="entry-header">
            <h2 class="entry-title" style="text-transform: uppercase">
              <?php echo $project['title'] ?>
            </h2>
          </header>
          <div class="masonry-row js-isotope-wrapper">
            <div class="row isotope-content">
              <div class="col-md-6 col-lg-4 isotope-item isotope-item-sizer">
                <img class="wp-post-image" data-fancybox="gallery"
                  src="<?php echo $assets_url . 'uploads/' . $project['little_image_1'] ?>"
                  alt="<?php echo $project['title'] ?> Intro Arquitectura">
              </div>
              <div class="col-md-6 col-lg-4 isotope-item">
                <img class="wp-post-image" data-fancybox="gallery"
                  src="<?php echo $assets_url . 'uploads/' . $project['little_image_2'] ?>"
                  alt="<?php echo $project['title'] ?> Intro Arquitectura">
              </div>
              <div class="col-md-6 col-lg-4 isotope-item">
                <img class="wp-post-image" data-fancybox="gallery"
                  src="<?php echo $assets_url . 'uploads/' . $project['vertical_image'] ?>"
                  alt="<?php echo $project['title'] ?> Intro Arquitectura">
              </div>
              <div class="col-lg-8 isotope-item">
                <img class="wp-post-image" data-fancybox="gallery"
                  src="<?php echo $assets_url . 'uploads/' . $project['principal_img'] ?>"
                  alt="<?php echo $project['title'] ?> Intro Arquitectura">
              </div>
              <div class="col-md-6 col-lg-4 isotope-item">
                <img class="wp-post-image" data-fancybox="gallery"
                  src="<?php echo $assets_url . 'uploads/' . $project['under_vertical_image'] ?>"
                  alt="<?php echo $project['title'] ?> Intro Arquitectura">
              </div>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="col-lg-5">
              <div class="entry-meta">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="entry-meta__item">
                      <h4 class="key">INDUSTRY:</h4>
                      <span class="value"><?php echo $project['industry_en'] ?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="entry-meta__item">
                      <h4 class="key">LOCATION:</h4>
                      <span class="value"><?php echo $project['location'] ?></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="entry-meta__item">
                      <h4 class="key">YEAR:</h4>
                      <span class="value"><?php echo $project['year'] ?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="entry-meta__item">
                      <h4 class="key">SIZE:</h4>
                      <span class="value"><?php echo m2_to_sqft((double)$project['surface']) ?> sqtf.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="entry-content">
                <?php echo $project['en_content'] ?>
              </div>
              <div class="entry-share">
                <span class="key">Social networks :</span>
                <ul class="list-social list-social--md">
                  <li class="list-social__item">
                    <a class="ic-fb" target="_blank" href="https://www.facebook.com/IntroArquitectura/?fref=ts">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                  </li>
                  <li class="list-social__item">
                    <a class="ic-insta" target="_blank" href="https://www.instagram.com/intro_arquitectura/">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                  </li>
                  <li class="list-social__item">
                    <a class="ic-pinterest" target="_blank" href="https://www.pinterest.es/introarquitectura/">
                      <i class="zmdi zmdi-pinterest-box"></i>
                    </a>
                  </li>
                  <li class="list-social__item">
                    <a class="ic-tiktok" target="_blank" href="https://www.tiktok.com/@intro_arquitectura">
                      <img src="<?php echo $assets_url ?>/images/icon/tik-tok.png"
                        style='height: 13px !important; margin-top: -3px'>
                    </a>
                  </li>
                  <li class="list-social__item">
                    <a class="ic-linkeding" target="_blank"
                      href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                      <i class="zmdi zmdi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </article>
      </div>
      <nav class="navigation project-navigation d-none">
        <div class="container">
          <div class="nav-links">
            <div class="nav-previous">
              <a href="#">
                <span class="ti-arrow-left"></span>
              </a>
            </div>
            <div class="all-link-wrap">
              <a class="all-link" href="#">
                <span class="ti-menu"></span>
              </a>
            </div>
            <div class="nav-next">
              <a href="#">
                <span class="ti-arrow-right"></span>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </main>
    <!-- END MAIN-->

    <!-- FOOTER-->
    <?php require(__DIR__ . '/../footer.php') ?>
    <!-- END FOOTER-->
  </div>

  <!-- Jquery JS-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS-->
  <script src="../../vendor/animsition/animsition.min.js"></script>
  <script src="../../vendor/slick/slick.min.js"></script>
  <script src="../../vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../vendor/wow/wow.min.js"></script>
  <script src="../../vendor/jquery.counterup/jquery.counterup.min.js"></script>
  <script src="../../vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="../../vendor/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="../../vendor/matchHeight/jquery.matchHeight-min.js"></script>
  <script src="../../vendor/select2/select2.min.js"></script>
  <script src="../../vendor/sweetalert/sweetalert.min.js"></script>
  <script src="../../vendor/noUiSlider/nouislider.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

  <!-- Main JS-->
  <script src="../../js/global.js"></script>
  <script src="../../js/custom.js"></script>

</body>

</html>
<!-- end document-->