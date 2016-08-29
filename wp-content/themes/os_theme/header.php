<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo bloginfo('name') ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- styles -->
        <link href="<?php echo bloginfo('template_directory') ?>/css/fonts/fonts.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_directory') ?>/css/fonts/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/js/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/js/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/js/masterslider/style/masterslider.css" />
        <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/js/masterslider/skins/default/style.css" />
        <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
        <link href="<?= bloginfo('template_directory') ?>/css/style.css" rel="stylesheet">

        <!--[if IE 7]>
                    <link href="css/ie7.css" rel="stylesheet">
            <![endif]-->

        <script src="<?= bloginfo('template_directory') ?>/js/jquery-1.11.1.min.js"></script>
        <script src="<?= bloginfo('template_directory') ?>/js/masterslider/masterslider.min.js"></script>
        <script src="<?= bloginfo('template_directory') ?>/js/masterslider/jquery.easing.min.js"></script>
        <script src="<?= bloginfo('template_directory') ?>/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= bloginfo('template_directory') ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?= bloginfo('template_directory') ?>/js/custom.js"></script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
              <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <![endif]-->

    </head>
    <body dir="rtl">
        <div id="wrapper">
            <header id="main-header">
                <div class="container">
                    <div class="topbar">
                        <nav>
                            <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
                        </nav>
                    </div>
                    <div class="header-content">
                        <a href="#" id="logo" class="float-right">Arabuem</a>
                        <div class="adbanner float-left">
                            <a href="#">
                                <img src="images/header-ad.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div id="menu">
                        <a href="#" class="menu-trigger">
                            <i class="fa fa-navicon"></i>
                            القائمة
                        </a>
                        <a href="#" class="search-trigger">
                            <i class="fa fa-search"></i>
                        </a>
                        <nav>
                            <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                        </nav>
                    </div>
                </div>
            </header>

            <section id="main-section">
                <div class="container">
