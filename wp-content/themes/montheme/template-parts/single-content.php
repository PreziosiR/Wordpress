<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MonTheme
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header" style="padding-top: 100px">
				<!--Card image-->
				<?php if ( 'post' === get_post_type() ) : ?>
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
								$url = $content_post->guid;
							?>
							<?php echo $content; ?></p>
					</div>
			<?php
			endif; ?>
		</header><!-- .entry-header -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
