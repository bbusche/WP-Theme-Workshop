<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <?php
      $site_title = get_bloginfo( 'name' );
      $site_description = get_bloginfo( 'description' );
    ?>
    <title><?php echo $site_title; ?></title>

    <!-- Bootstrap core CSS 
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">
    -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template
    <link href="carousel.css" rel="stylesheet"> 
    -->
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/carousel.css" rel="stylesheet"> 

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
<!-- NAVBAR
================================================== -->
  <body <?php body_class(); ?>>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo $site_title; ?></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <?php 
                if ( has_nav_menu( 'primary' ) ) {
                  wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'nav navbar-nav navbar-main',
                    'fallback_cb'     => 'wp_page_menu'
                    )
                  ); 
                }else{
                  wp_list_pages(array('title_li' => '', 'depth' => 1, 'exclude' => '701'));
                }
                ?>
                <!--
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul> -->
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>