<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MonTheme
*/

get_header(); ?>
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
<div id="primary" class="content-area container">
	<main id="main" class="site-main">
		<div class="row" style="padding-top: 50px;">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
	</div>
</main><!-- #main -->
</div><!-- #primary -->
<script type="text/javascript">
$('.navbar').removeClass('black');
  $(document).ready(function(){
    $('.navbar').addClass('scrolling-navbar');
  })
</script>
<?php
get_sidebar();
get_footer();
