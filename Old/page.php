<?php get_header();?>
<div class="container">
	<div class="display-1">
	    Page
	</div>
</div>


<div id="content">
				<?php
					
					if(have_posts()) :
						while (have_posts()) : the_post(); ?>
						
					<article id="main_article_single">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div id="imgp_wrap">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<p><?php echo excerpt('49'); ?></p>
						</div>
					</article>
						
						
				<?php		endwhile;
					endif;
					
				?>
				
		<?php if (function_exists("pagination")) {    pagination();} ?>
				
				</div>
<?php   get_footer();   ?>