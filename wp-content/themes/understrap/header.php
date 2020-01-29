<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="lioi, fabiano lioi" />
  	<meta http-equiv="author" content="Psicografici" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--Font Awesome Icons-->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Gloria+Hallelujah|Cedarville+Cursive&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="menu" class="fixed-top bg-dark my-0">

	<div class="container">

		<nav class="navbar navbar-expand-md navbar-dark">

		<?php if ( 'container' == $container ) : ?>
			
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand py-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand py-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

					<button class="menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<!-- <span class="navbar-toggler-icon"></span> -->

						<!--Hamburger menu svg-->
						<div class="ham-menu">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 385 135" style="enable-background:new 0 0 385 135;" xml:space="preserve">
							<style type="text/css">
								.st0{display:none;}
								.st1{display:inline; fill:#fff}
								.st2{fill:#fff;}
							</style>
							<g class="st0">
								<g id="Menu_1_" class="st1">
									<path d="M12,25.3h360.9c6.6,0,12-5.4,12-12s-5.4-12-12-12H12c-6.6,0-12,5.4-12,12S5.4,25.3,12,25.3z"/>
									<path d="M372.9,109.5H132.3c-6.6,0-12,5.4-12,12c0,6.6,5.4,12,12,12h240.6c6.6,0,12-5.4,12-12C385,114.9,379.6,109.5,372.9,109.5z
										"/>
								</g>
							</g>
							<rect y="1.2" class="st1" width="385" height="25"/>
							<rect y="109.5" class="st2" width="385" height="25"/>
							</svg>
						</div>
					</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-end text-center',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'navbar-nav mr-0',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

		<div class="accessibility bg-secondary">
			<div class="container d-flex justify-content-end">
			<button type="button" class="btn btn-success" onclick="default_bg()">A</button>
			<button type="button" class="btn btn-success ml-2" onclick="dark_bg()"><b>A</b></button>
			<button type="button" class="btn btn-light ml-2" onclick="resizeText(-1)">A</button>
			<button type="button" class="btn btn-light ml-2" onclick="resizeText(1)"><b>A</b></button>
			</div>
		</div>

	</div><!-- #wrapper-navbar end -->

	<section style="margin-top: 79px;"></section>
