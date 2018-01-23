<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MonTheme
 */

?>
<div class="col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="card">
				<!--Card image-->
				<?php montheme_post_thumbnail(); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="card-body">
							<!--Title-->
							<?php
							if ( is_singular() ) :
								the_title( '<h4 class="card-title">', '</h4>' );
							else :
								the_title( '<h4 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
							endif;
							?>
							<!--Text-->
							<?php
								$content_post = get_post();
								$content = $content_post->post_content;
							?>
							<p class="card-text"><?php echo substr($content, 0, 50); ?> ... </p>
							<a href="#" class="btn btn-primary">Lire la suite (CA MARCHE PAS)</a>
					</div>
			<?php
			endif; ?>
		</header><!-- .entry-header -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
