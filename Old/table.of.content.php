<?php
	/*Template Name: Table of Content.  */
?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->

	<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a__',
		);
		$p_t_a__ = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a__->have_posts() ): $p_t_a__->the_post();
	?>
	<!-- ======================================================================================================= -->
	<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
		}else{ ?>
			<img src="<?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?>" />
			<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php the_title(); ?>" />
		<?php } 
	?>
	<?php the_title(); ?>
	<?php echo the_content(); ?>
	<?php comments_template(); ?>
	<?php the_field('p_t_a_c_f__'); ?>

	<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<p class="" ><?php echo excerpt('30'); ?></p>
	<?php dynamic_sidebar('article__'); ?>

	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a__',
    	the_field => p_t_a_c_f__	=>	 Video
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a__     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a__
		Name    => Singular
		name    => _singular 	
		Names   => Plural
		names   =>_plural
	/*=====================================================================================================================================================*/
		$labels = array(
			'name'                  => _x( 'Plural', 'Post type general name', 'textdomain' ),
			'singular_name'         => _x( 'Singular', 'Post type singular name', 'textdomain' ),
			'menu_name'             => _x( 'Plural', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'        => _x( 'Singular', 'Add New on Toolbar', 'textdomain' ),
			'add_new'               => __( 'Add New', 'textdomain' ),
			'add_new_item'          => __( 'Add New Singular', 'textdomain' ),
			'new_item'              => __( 'New Singular', 'textdomain' ),
			'edit_item'             => __( 'Edit Singular', 'textdomain' ),
			'view_item'             => __( 'View Singular', 'textdomain' ),
			'all_items'             => __( 'All Plural', 'textdomain' ),
			'search_items'          => __( 'Search Plural', 'textdomain' ),
			'parent_item_colon'     => __( 'Parent Plural:', 'textdomain' ),
			'not_found'             => __( 'No _plural found.', 'textdomain' ),
			'not_found_in_trash'    => __( 'No _plural found in Trash.', 'textdomain' ),
			'featured_image'        => _x( 'Singular Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'archives'              => _x( 'Singular archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
			'insert_into_item'      => _x( 'Insert into _singular', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this _singular', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
			'filter_items_list'     => _x( 'Filter _plural list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
			'items_list_navigation' => _x( 'Plural list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
			'items_list'            => _x( 'Plural list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'p_t_a__' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a__', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a__     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->







<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article   |  Start 	 =========================== -->
<!-- ======================================================================================================= -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article   |  End 	 =========================== -->
<!-- ======================================================================================================= -->






<!-- ************************************************************ -->
<!-- ************************************************************ -->
<a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
<?php bloginfo('description'); ?>
<?php dynamic_sidebar('dynamic_sidebar'); ?>
<?php
	$args = array(
		'theme_location' => 'top_menu' ,
		'menu_class' 	   => 'menu' , 
	);
	wp_nav_menu( $args );
?>











<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php get_header();?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->












<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php the_custom_header_markup(); ?>
<?php the_custom_logo(); ?>
<a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?> </p>
<!-- ************************************************************ -->
<!-- ************************************************************ -->












<!-- ************************************************************ -->
<!-- ************************************************************ -->
<div class="post_meta">
	Posted By: <?php the_author_posts_link(); ?>
	| Posted On: <?php the_time('d M, y'); ?>
	| Posted In: <?php the_category(', '); ?>
	| <?php comments_popup_link("No Comments", "1 Comment", "% Comments", "Comments_class", "Comment off");?>
</div>

<?php comments_template(); ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ************************************************************ -->
<!-- ************************************************************ -->






















<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php
	$args = array(
		'post_type'  =>  'post_type_name',
	);

	$post_type_name = new WP_Query( $args );

	if ( have_posts() ):
		while ( $post_type_name->have_posts() ): $post_type_name->the_post();
?>
	<!-- Post Start here -->
	<?php the_field('the_field_name'); ?>
	<?php the_post_thumbnail(); ?>
	<?php the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']); ?>
	<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<p class="" ><?php echo excerpt('30'); ?></p>
	<?php echo the_content(); ?>
	<!-- Post end Here -->
<?php endwhile; else:echo"Sorry there are no post found !!!"; endif; ?> 
<!-- ************************************************************ -->
<!-- ************************************************************ -->
















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
		'post_type' => 'home_article', 
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
	<?php the_field('the_field_name'); ?>
		<?php the_post_thumbnail(); ?>
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']); ?>
		<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<p class="" ><?php echo excerpt('30'); ?></p>
		<?php echo the_content(); ?>
	<!-- Post end Here -->

<?php endwhile;else:echo"Sorry there are no post found !!!";endif;?>

<div class="pagination">
	<?php if ($custom_query->max_num_pages > 1) :  ?>
		<?php
		$orig_query = $wp_query;
		$wp_query = $custom_query;
		?>
		<nav class="prev-next-posts">
			<div class="prev-posts-link">
				<?php echo get_next_posts_link( '<i class="bi bi-arrow-right-circle"></i>', $custom_query->max_num_pages ); ?>
			</div>
			<div class="next-posts-link">
				<?php echo get_previous_posts_link( '<i class="bi bi-arrow-left-circle"></i>' ); ?>
			</div>
		</nav>
		<?php
		$wp_query = $orig_query;
		?>
	<?php endif; ?>
</div>
<!-- ************************************************************ -->
<!-- ************************************************************ -->
















<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php dynamic_sidebar('dynamic_sidebar'); ?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->

















<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php get_footer();?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->

























<!-- ************************************************************ -->
<!-- ************************************************************ -->


<!-- // Table of Content for functions.php -->
<?php
//////////////////////////////////////////////////////////////////////////////////////////
////////////////// Function for header	
//Calling custom header
 function themename_custom_header_setup() {
 	add_theme_support( 'custom-header', apply_filters( 'themename_custom_header_args', array(
 		'default-image'      => get_parent_theme_file_uri( '/ofline_required/img/bg_img.jpg' ),
 		'width'              => 2400,
 		'height'             => 1800,
 		'flex-height'        => true,
 		'video'              => true,
 	) ) );
 }
 add_action( 'after_setup_theme', 'themename_custom_header_setup' );
 //Calling Video Controls
 function themename_video_controls( $settings ) {
 	$settings['l10n']['play'] = '<span class="screen-reader-text">' . __( '<i class="fa fa-play"></i>', 'themename' ) . '</span>' . themename_get_svg( array( 'icon' => 'play' ) );
 	$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( '<i class="fa fa-pause"></i>', 'themename' ) . '</span>' . themename_get_svg( array( 'icon' => 'pause' ) );
 	return $settings;
 }
 add_filter( 'header_video_settings', 'themename_video_controls' );

// Calling custom logo
  function themename_setup() {
  	add_theme_support( 'custom-logo', array(
  		'width'       => 120,
  		'height'      => 80,
  		'flex-width'  => true,
  	) );
	
	//Featured Image
	add_theme_support('post-thumbnails');
  }
  add_action( 'after_setup_theme', 'themename_setup' );

//Calling Site header
 function themename_customize_register( $wp_customize ) {
 	$wp_customize->selective_refresh->add_partial( 'blogname', array(
 		'selector' => '.site-title',
 	) );

 	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
 		'selector' => '.site-description',
 	) );
 }
 add_action( 'customize_register', 'themename_customize_register' );

//Calling Site Descriptions
 function themename_get_svg( $args = array() ) {
 	if ( $args['title'] ) {
 		$aria_hidden     = '';
 		$unique_id       = uniqid();
 		$aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';
 	}
 	return $svg;
 }




 
/////  //Function for Post
// Excerpt Function use in post
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='"."read-more"."'>Continue reading...</a>";
	echo $excerpt;
}


	//Custom Pagination
function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}


//////////////////////////////////////////////////////////////////////////////////////////
?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->



















<!-- Start Google Ranking -->
<style>
    #google-text{
        display: none;
    }
</style>
<article>
<div id="google-text">
<!-- ************************************************************ -->
<?php
	$args = array(
		'post_type'  =>  'google_seo',
	);
	$google_seo = new WP_Query( $args );
	if ( have_posts() ):
		while ( $google_seo->have_posts() ): $google_seo->the_post();
            the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']);
            the_title();
            echo the_content();
        endwhile;
    endif;
?>
<!-- ************************************************************ -->
</div>
</article>
<!-- Stop Google Ranking -->













<!-- Search form  -->
<!-- ************************************************************ -->
<!-- ************************************************************ -->

<form action="<?php echo home_url( ' / ');?>" method="get">
	<input class="search-class" placeholder="Search" type="search" value="" name="s">
	<button type="submit"></button>
</form>
<!-- ====	Open in => search.php 		==  -->

<!-- ************************************************************ -->
<!-- ************************************************************ -->
























<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	
						
<?php endwhile; endif; ?>