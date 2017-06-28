<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="theme-color" content="#ffc731">
    <meta name="msapplication-navbutton-color" content="#ffc731">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffc731">

    <title><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/assets/images/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,600" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-size--loaded' ); ?>>
    
    <div class="menu-button hide-for-large-up">
        <span>&nbsp;</span> <div class="menu-mobile">Menu</div>
    </div>

    <nav class="mobile-nav hide-for-large-up">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile_nav', 'menu_class' => 'menu menu--mobile', 'container' => 'ul' ) ); ?>
        <img  src="<?php echo THEME_DIR; ?>/assets/images/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="img-responsive logo-mobile" />

    </nav>

    <header class="header">
        <a href="<?php echo site_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header__logo logo logo--header">
            <img src="<?php echo THEME_DIR; ?>/assets/images/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="img-responsive" />
        </a>

        <div class="header__right text-right">
            <nav class="header__nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'menu menu--top', 'container' => 'ul' ) ); ?>
            </nav>


        </div>
    </header>

    <div id="content">