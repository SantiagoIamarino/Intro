<?php

    require('../config.php');
    require('../../shared/language.php');

    $statement = $db->prepare('SELECT * FROM projects ORDER BY id DESC');
    $statement->execute();
    $projects = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tatee Theme Templates">
  <meta name="author" content="AuCreative">
  <meta name="keywords" content="Tatee Theme Templates">

  <!-- Title Page-->
  <title>Our projects - Intro Arquitectura</title>

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
  <link rel="apple-touch-icon" sizes="57x57" href="../../images/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../images/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../images/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../images/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../images/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../images/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../images/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../images/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../images/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../../images/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../images/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../images/icon/favicon-16x16.png">
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

  <style>
  .media__img img {
    min-height: 350px;
  }
  </style>

  <div class="page-wrapper">
    <!-- HEADER-->
    <?php require('../header.php') ?>
    <!-- END HEADER-->

    <!-- MAIN-->
    <main id="main">


      <!-- PAGE HEADING-->
      <section class="section p-t-100 p-b-65">
        <div class="container">
          <div class="page-heading">
            <!-- <h4 class="title-sub title-sub--c8 m-b-15">Últimos proyectos realizados</h4> -->
            <h2 class="title-2">Latest projects</h2>

            <!-- <h2 class="title-2">
                            Nuestros proyectos se destacan por estar orientados a brindar bienestar a los equipos de trabajo de nuestros clientes.
                        </h2> -->
          </div>
          <div class="extra-info mt-4">
            <p>
              Our projects stand out for being directed to provide well-being to our clients' work teams.
            </p>
            <p>Each designed space is distinguished by its versatility, modernity, sustainability, and adapted to the
              culture and organization of each company.</p>
            <p class=''>We specialize in turnkey project development, where we centralize all processes and
              requirements, providing our clients with support from the beginning till the end of the project, and the
              guarantee of having a 100% personalized, dynamic project executed with a single direct point of contact.
            </p>
            <!-- <h4 class='mt-4'>Compartimos nuestra selección de los últimos proyectos realizados:</h4> -->
          </div>
        </div>
      </section>
      <!-- END PAGE HEADING-->

      <!-- PROJECT-->
      <section class="section p-b-120">
        <div class="container">
          <div class="row gutter-xl projects-overview">

            <?php foreach ($projects as $key => $project) : ?>
            <div class="col-md-6 <?php echo ($key > 9) ? 'project-hidden' : '' ?>">
              <article class="media media-project m-b-50" onclick='goToProject(event)'>
                <figure class="media__img">
                  <img src="<?php echo $assets_url . 'uploads/' . $project['principal_img']?>"
                    alt="<?php echo $project['title'] ?>" />
                </figure>
                <div class="bg-overlay"></div>
                <span class="line"></span>
                <span class="line line--bottom"></span>
                <div class="media__body">
                  <h3 class="title">
                    <a href="./<?php echo $project['slug'] ?>">
                      <?php echo $project['title'] ?>
                    </a>
                  </h3>
                  <!--<div class="address"></div>-->
                </div>
              </article>
            </div>
            <?php endforeach ?>

          </div>

          <div class="text-center p-t-10 load-more-btn">
            <a onclick="seeAllProjects(event)" class="au-btn au-btn--c6 au-btn-lg" href="#">
              Load more
            </a>
          </div>
        </div>
      </section>
      <!-- END PROJECT-->
    </main>
    <!-- MAIN-->

    <!-- FOOTER-->
    <?php require('../footer.php') ?>
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