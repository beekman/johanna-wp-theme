<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('Johanna'); ?></title>

<!-- Google Chrome Frame for IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- mobile meta (hooray!) -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<!-- or, set /favicon.ico for IE10 win -->
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- end of wordpress head -->

<!--drop Google Fonts here-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
<!-- end Google Fonts -->

<!-- drop Google Analytics Here -->

<!-- end analytics -->

</head>

<body <?php body_class();
?>>
<?php include_once("analyticstracking.php") ?>

<div id="container">

<header class="header" role="banner">

<div id="inner-header" class="wrap clearfix">
    <div class="site-id">
    <h1 class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><span></span></a><b> <?php bloginfo('name'); ?></b></h1>
      <div class="tagline">
      <a href="<?php echo home_url(); ?>" rel="nofollow">
        <?php bloginfo('description'); ?>
        </a>
      </div> <!-- /.tagline -->
    </div> <!-- /.site-id -->
  <nav role="navigation">
<?php johanna_main_nav(); ?>
</nav>
  </div>
  </div>


</div> <!-- end #inner-header -->

</header> <!-- end header -->
