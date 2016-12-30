<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<div class="sidebar-header1">
			<div class="container">
				<div class="col-md-6">
					<div class="row">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<aside class="sidebar-header2">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</aside>
					</div>
				</div>
			</div>
		</div>


	<header class="top_header">
		<div class="container">
			<div class="col-md-3">
				<div class="row">


					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-9">
					<div class="row">
						<aside class="sidebar-header3">
									<?php if (class_exists('woocommerce')) :?>
										<?php global $woocommerce; ?>
										<?php _e( 'Cart:', 'fashion-store-lite' ); ?> <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'fashion-store-lite'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'fashion-store-lite'), $woocommerce->cart->cart_contents_count);?> <?php echo $woocommerce->cart->get_cart_total(); ?></a>
									<?php endif; ?>	
						</aside>
					</div>
				
					<div class="row">
						<aside class="sidebar-header3">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</aside>
					</div>
			</div>			

		</div>
		
	</header>
<div class="top-menu">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
				</div>
			</div>
</div>

<div id="content" class="site-content">