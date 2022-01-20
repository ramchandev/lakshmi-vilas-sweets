<!doctype html>
<html <?php language_attributes(); ?> class="no-js" style="margin: 0;">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' - '; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container'  => "nav", 'container_class' => "navigation__nav", 'menu_class'=>'navigation__list', 'add_li_class'=>'navigation__item' ) ); ?>
        </div>

        <?php if(is_home() || is_front_page()) { ?>
            <header class="header">
                <div class="header__logo-box">
                    <a href="<?php echo get_bloginfo('url') ?>" title="Lakshmi Vilas Sweets"><img src="<?php echo get_template_directory_uri() ?>/assets/img/lakshmi-vilas-sweets-logo.png" alt="lakshmi-vilas-sweets" class="header__logo"></a>
                </div>

                <div class="header__text-box">
                    <h1 class="heading-primary">
                        <a href="<?php echo get_bloginfo('url') ?>"><span class="heading-primary--main">Lakshmi Vilas Sweets</span></a>
                        <span class="heading-primary--sub">Since 1975</span>
                    </h1>

                    <a href="<?php echo get_bloginfo('url') ?>/about-us" class="btn btn--white btn--animated">Read More</a>
                </div>
            </header>
        <?php } else { ?>
            <header class="header header--sub">
                <div class="header__text-box">
                    <h1 class="heading-primary">
                        <a href="<?php echo get_bloginfo('url') ?>"><span class="heading-primary--main">Lakshmi Vilas Sweets</span></a>
                        <span class="heading-primary--sub">Since 1975</span>
                    </h1>
                </div>
            </header>
        <?php } ?>
        <!-- /header -->
