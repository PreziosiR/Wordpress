<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MonTheme
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
		<div class="container">
			<a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'navbar',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbarSupportedContent',
				'menu_class'        => 'navbar-nav mr-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker())
			);
			?>
		</div>
	</nav>
	<!--/.Navbar-->
	<!--Carousel Wrapper-->
	<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
		<!--Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-3" data-slide-to="1"></li>
			<li data-target="#carousel-example-3" data-slide-to="2"></li>
		</ol>
		<!--/.Indicators-->

		<!--Slider-->
		<div class="carousel-inner" role="listbox">
			<?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>
			<?php foreach($slider as $slide): ?>
				<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?> view hm-black-light" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>'); background-repeat: no-repeat; background-size: cover;">
				<div class="full-bg-img flex-center white-text">
					<ul class="animated fadeInUp col-md-12">
						<li>
							<h1 class="h1-responsive flex-item font-bold">Bienvenue sur notre site</h1>
							<li>
								<p class="flex-item">Un site propulsé par Wordpress</p>
							</li>
							<li>
								<a href="#" class="btn btn-primary waves-effect" rel="nofollow">Decouvrir</a>
							</li>
						</ul>
					</div>
				</div>
				<?php $count++; ?>
			<?php endforeach; ?>
			<!--Controls-->
			<a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!--/.Controls-->
		</div>
		<!-- PAGE -->
		<div id="page" class="site container">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'montheme' ); ?></a>

			<header id="masthead" class="site-header">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'montheme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
