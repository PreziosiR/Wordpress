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
