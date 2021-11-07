<header id="header">
    <div class="header header-1 d-none d-lg-block js-header-1">
        <div class="header__bar light">
            <div class="wrap wrap--w1790">
                <div class="container-fluid">
                    <div class="header__content">
                        <div class="logo">
                            <a href="<?php echo $url ?>">
                                <img src="<?php echo $assets_url ?>images/icon/logo-black.png" alt="Intro Arquitectura" 
                                    style='padding: 8px 0;'/>
                            </a>
                        </div>
                        <div class="header__content-right">
                            <nav class="header-nav-menu">
                                <ul class="menu nav-menu">
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>">Inicio</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>about-us/">Nosotros</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>proyectos/">Proyectos</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>blog/">Blog</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>noticias/">Noticias</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo $url ?>contacto/">Contacto</a>
                                    </li>
                                    <li class="menu-item language-item">
                                        <a href="#">
                                            <img src="<?php echo $assets_url ?>/images/icon/spain-flag-icon.png"
                                                style='height: auto !important; padding: 3px' class='active'>
                                        </a>

                                        <a href="./?language=en">
                                            <img src="<?php echo $assets_url ?>/images/icon/usa-flag-icon.png"
                                                style='height: auto !important;' class='ml-2'>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-social">
                                <ul class="list-social">
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
                                        <a class="ic-linkedin" target="_blank" href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-youtube" target="_blank" href="https://www.youtube.com/channel/UC2FmA2sVcrsHigia6ciMWww">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile__bar-inner">
                    <a class="logo" href="<?php echo $url ?>">
                        <img src="<?php echo $assets_url ?>images/icon/logo-black.png" alt="Intro Arquitectura" />
                    </a>
                    <div class="right d-flex align-items center">
                        <div class="socials mt-1">
                            <ul class="list-social">
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
                                    <a class="ic-linkedin" target="_blank" href="https://www.linkedin.com/company/intro-arquitectura-srl-">
                                        <i class="zmdi zmdi-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-social__item">
                                    <a class="ic-youtube" target="_blank" href="https://www.youtube.com/channel/UC2FmA2sVcrsHigia6ciMWww">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <button class="hamburger hamburger--slider float-right" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>   
                    </div>
                </div>
            </div>
        </div>
        <nav class="header-nav-menu-mobile">
            <div class="container-fluid">
                <ul class="menu nav-menu menu-mobile">
                    <li class="menu-item">
                        <a href="<?php echo $url ?>">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>about-us/">Nosotros</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>proyectos/">Proyectos</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>blog/">Blog</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>noticias/">Noticias</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo $url ?>contacto/">Contacto</a>
                    </li>
                </ul>
                <div class="search-bar-mobile light">
                    <?php require('../shared/search.php') ?>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="light d-flex justify-content-center">
    <div class="search-bar search-bar-header wrap--w1790 w-100">
        <?php require('../shared/search.php') ?>
    </div>
</div>