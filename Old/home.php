<?php get_header();?>
<div class="container">
	<div class="display-1">
	    Home Page <br>
		<a target="blank" href="http://localhost/lite-box/lite-box/">Lite-Box-page</a><br>
		<a target="blank" href="http://localhost/lite-box/appointment/">Appointment-page</a><br>
		<a target="blank" href="http://localhost/lite-box/movies/">Movies</a><br>
		<a target="blank" href="http://localhost/lite-box/book/">Book</a><br>
	</div>
</div>


<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="container m-2">
		<div class="row">
			<div class="col-12 col-md-3 img-wrapper">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
					}else{ ?>
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="<?php the_title(); ?>" />
					<?php }
				?>
			</div>
			<div class="col-12 col-md-9">
				<?php the_title(); ?>
				<p><?php echo excerpt('30'); ?></p>
			</div>
		</div>
	</div>
	
<?php endwhile; endif; ?>
		<?php if (function_exists("pagination")){pagination();} ?>
<?php   get_footer();   ?>