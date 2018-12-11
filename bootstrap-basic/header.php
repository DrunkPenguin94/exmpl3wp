<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
		
		
		<header role="banner" class="gradient-head">
      <div class="white-line-bottom">
        <div class="container">
          <div class="row site-branding site-head-1">
            <div class="col-md-3 col-sm-3 head-adress right-line">
                <?echo get_field( "adress",2 );?>
            </div>
            <div class="col-md-3 col-sm-3 head-email">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <a href="mailto:<?echo get_field( "email",2 );?>"><?echo get_field( "email",2 );?></a>
            </div>
            <div class="col-md-3 col-sm-3 head-phone right-line">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <a href="tel:<?echo get_field( "phone",2 );?>"><?echo get_field( "phone",2 );?></a>
            </div>
            <div class="col-md-1  col-sm-1 head-link insta">
              <a href=" <?echo get_field( "insta_link",2 );?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-1 col-sm-1  head-link vk right-line">
              <a href=" <?echo get_field( "vk_link",2 );?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
            </div>
            
            <div class="col-md-1 col-sm-1 head-lupa">
              <a href="/search" ><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
          </div><!--.site-branding-->
        </div>
      </div>
      <div class="container  site-head-2">
				<div class="row main-navigation">
                      <div class="col-md-2 col-sm-2 head-logo">
                        <a href="/"><img src="/wp-content/themes/bootstrap-basic/img/logo.png"></a>
                      </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                            <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-md-10 col-sm-10 block-menu-link">
                        <nav class="navbar " role="navigation">


                            <div class="collapse navbar-collapse navbar-primary-collapse">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                                <?php dynamic_sidebar('navbar-right'); ?>
                            </div><!--.navbar-collapse-->
                        </nav>
                    </div>
				</div><!--.main-navigation-->
      </div>
      <div class="container  site-head-3">
        
        <div class="block"><? echo do_shortcode('[bvi text = "Версия для слабовидящих"]');?></div>
        
      </div >
		</header>
			
		
		
		<div class=" page-container">
			<?php do_action('before'); ?> 
		
			
			<div  class="">
				<div id="content" class="  site-content">
