<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vybe-energy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="../../assets/vendor/aos/dist/aos.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">

	<header id="header">
		<div class="head-container">
			<div class="top-header">
				<div class="logo">
					<a href="<?php echo esc_url(home_url()); ?>">
					<?php if ( $site_logo = get_field( 'site_logo','option' ) ) : ?>
					<img src="<?php the_field('site_logo','option');?>" alt="Vybe Energy" class="site-logo">
					<?php endif; ?>
				</a>
				</div>
				<div class="contact-no">
					<div class="info">
						<a href="tel:<?php the_field('phone_number','option');?>" class="tel">
						<?php if ( $phone_icon = get_field( 'phone_icon','option' ) ) : ?>
						<img src="<?php the_field('phone_icon','option');?>" alt="call" class="call">
						<?php endif; ?>
						<p> <?php the_field('phone_number','option');?></p>
					    </a>
					</div>
					<div class="info">
						<a href="mailto:<?php the_field('email_address','option');?>" class="tel"> 
						<?php if ( $email_icon = get_field( 'email_icon','option' ) ) : ?>
						<img src="<?php the_field('email_icon','option');?>" alt="call" class="call">
						<?php endif; ?>
						 <p><?php the_field('email_address','option');?></p></a>
					</div>	

				</div>

			</div>
			<div class="bottom-header mob-menu">
				<div class="home-nav">
					<nav id="nav" class="header-pages">

						<?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => '',
                            'order' => '',
                            'menu_class' => 'list-none flex v-center header-menu'
                        ));
                         ?>
						<div class="mob-hamburger">
							<button class="hamburger-btn"><span></span><span></span><span></span></button>
						</div>
					</nav>
				</div>

				<div class="header-button">
				<?php 
                   $link = get_field('sign_in_btn','option');
                   if( $link ): 
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                ?>
					<a href="https://dashboard.vybeenergy.com/sign-in?lang=en-US" target="_blank" class="sign-in"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				   <?php 
                   $link = get_field('get_started_btn','option');
                   if( $link ): 
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                   ?>
					
					<a href="<?php echo esc_url( $link_url ); ?>" class="start-btn"><?php echo esc_html( $link_title ); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.svg" alt="#"
							class="btn-arrow"></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<main id="main">
