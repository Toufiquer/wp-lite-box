<?php
/*Template Name: movies Template*/

?>
<?php get_header();?>

<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php
	if ( get_query_var('paged') ) {
		$paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) {
		$paged = get_query_var('page');
	} else {
		$paged = 1;
	}

	$custom_query_args = array(
		'post_type' => 'movies', 
		'posts_per_page' => get_option('posts_per_page'),
		'paged' => $paged,
		'post_status' => 'publish',
		'ignore_sticky_posts' => true,
		'order' => 'DESC', 
		'orderby' => 'date'
	);
	$custom_query = new WP_Query( $custom_query_args );

	if ( $custom_query->have_posts() ) :
		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

	<!-- Post Start here -->
		<?php the_post_thumbnail(); ?>
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']); ?>
		<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<p class="" ><?php echo excerpt('30'); ?></p>
		<?php echo the_content(); ?>
	<!-- Post end Here -->

<?php endwhile;else:echo"Sorry there are no post found !!!";endif;?>

<div class="pagination container">
    
	<?php if ($custom_query->max_num_pages > 1) :  ?>
		<?php
		$orig_query = $wp_query;
		$wp_query = $custom_query;
		?>
        
            <?php if (function_exists("pagination")) {    pagination();} ?>
		<?php
		$wp_query = $orig_query;
		?>
	<?php endif; ?>
</div>
<!-- ************************************************************ -->
<!-- ************************************************************ -->


<?php   get_footer();   ?>