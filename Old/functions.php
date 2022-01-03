<?php
/*  Calling style for Recource  */
/*******************************************************************************************************************************************************/
	function calling_recource(){

		/* Stylesheet */
		wp_enqueue_style('css_01' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', '', NULL , false  );
		wp_enqueue_style('css_02' , 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css', '', NULL , false  );
		wp_enqueue_style('css_03' , 'https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '', NULL , false  );

		wp_enqueue_style('css_04' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css', '', '1.0.0' , false  );
		wp_enqueue_style('css_05' , get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', '', '1.0.0' , false  );
		wp_enqueue_style('css_06' , get_template_directory_uri() . '/assets/css/magnific-popup.css', '', '1.0.0' , false  );

		wp_enqueue_style('css_07' , get_template_directory_uri() . '/assets/css/cd-headline.css', '', '1.0.0' , false  );
		wp_enqueue_style('css_08' , get_template_directory_uri() . '/assets/css/aos.css', '', '1.0.0' , false  );

		/*  Javascript  */
		wp_enqueue_script('javascript_01' , get_template_directory_uri() . '/assets/js/jquery.min-1.10.2.js', '', '1.10.2' , false  );
		wp_enqueue_script('javascript_02' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', '' , NULL  , true );
		// wp_enqueue_script('javascript_03' , 'https://code.jquery.com/jquery-3.5.1.min.js', '' , NULL  , true );
		// wp_enqueue_script('javascript_04' , get_template_directory_uri() . 'assets/js/jquery-2.1.1.js', '', '1.10.2' , true  );
		// wp_enqueue_script('javascript_05' , 'https://code.jquery.com/jquery-3.2.1.min.js', '' , NULL  , true );
		wp_enqueue_script('javascript_06' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', '', '1.10.2' , true  );
		wp_enqueue_script('javascript_07' , get_template_directory_uri() . '/assets/js/owl.carousel.min.js', '', '1.10.2' , true  );
		wp_enqueue_script('javascript_08' , get_template_directory_uri() . '/assets/js/scrollwatch.js', '', '1.10.2' , true  );
		// wp_enqueue_script('javascript_09' , get_template_directory_uri() . '/assets/js/highlight.min.js', '', '1.10.2' , true  );
		wp_enqueue_script('javascript_10' , get_template_directory_uri() . '/assets/js/aos.js', '', '1.10.2' , true  );
		wp_enqueue_script('javascript_11' , 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', '' , NULL  , true );
		wp_enqueue_script('javascript_12' , get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', '', '1.10.2' , true  );
		wp_enqueue_script('javascript_13' , get_template_directory_uri() . '/assets/js/theme.js', '', '1.10.2' , true  );

		/*Calling Main Stylesheet*/
		wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' , false );
	}
	add_action('wp_enqueue_scripts' , 'calling_recource');
/*******************************************************************************************************************************************************/












/* 		Start Navbar | Mene   &&   		Custom Logo			*/
/*******************************************************************************************************************************************************/
	/* adding li class from here */
	function bootstrap_theme_add_li_class($classes, $item, $args) {
		$classes [ ] = "";
		return $classes;
	}
	add_filter( "nav_menu_css_class", "bootstrap_theme_add_li_class", 1, 3);

	/* adding a class from here */
	function bootstrap_theme_add_a_class($classes, $item, $args) {
		$classes [ 'class'] = "";
		return $classes;
	}
	add_filter( "nav_menu_link_attributes", "bootstrap_theme_add_a_class", 1, 3);

	function our_theme_setup(){
		/*  Register Menu | Navbar */
		register_nav_menus(array(
			'top_menu' => __('Top menu', 'Lite Box' ),
			'bottom_menu' => __('Bottom menu', 'Lite Box' ),
			'index_menu' => __('Index menu', 'Lite Box' ),
			'user_menu' => __('User menu', 'Lite Box' )
		));
		/* Add theme support for Custom Logo.  */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
		/*  Featured Image  */
		add_theme_support('post-thumbnails');
		/* set_post_thumbnail_size(200, 200, true);  */
		/* add_image_size('my-image-class', 600, 600, true); */
	}
/*******************************************************************************************************************************************************/















/* 		Post =>	Start Excerpt Function 		&& 		Custom Pagination		*/
/*******************************************************************************************************************************************************/
	/* Excerpt Function */
	function excerpt($num) {
		$limit = $num+1;
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt). " <a class='btn-read' href='" .get_permalink() ."'> Continue Reading...</a>";
		echo $excerpt;
	}
	/* Custom Pagination */
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

	add_action('init' , 'our_theme_setup');
/*******************************************************************************************************************************************************/















/*		 Start widget		*/
/*******************************************************************************************************************************************************/
	function our_widgetinit(){
		/* Top address */
		register_sidebar(array(
			'name' => 'Top address',
			'id' => 'top_address',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
		/* Search Form */
		register_sidebar(array(
			'name' => 'Search Form',
			'id' => 'search_form',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
		/* Google maps  */
		register_sidebar(array(
			'name' => 'Google Maps',
			'id' => 'google_maps',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer google maps. Write what you want.', 'Lite Box' )
		));
		/* Address  */
		register_sidebar(array(
			'name' => 'Address',
			'id' => 'address',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
		/* Contact Form  */
		register_sidebar(array(
			'name' => 'Contact Form',
			'id' => 'contact_form',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
		/* Mini Footer  */
		register_sidebar(array(
			'name' => 'Mini Footer',
			'id' => 'min_footer',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
		/* Gallery Item  */
		register_sidebar(array(
			'name' => 'Gallery Item',
			'id' => 'gallery_item',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
			'description'   => __( 'Footer Text. Write what you want.', 'Lite Box' )
		));
	}
	add_action('widgets_init','our_widgetinit');
/*******************************************************************************************************************************************************/















/*  Start Required plugin */
/*******************************************************************************************************************************************************/
	require_once get_template_directory(). '/class-tgm-plugin-activation.php';
	require_once get_template_directory(). '/plugin-activation.php';
/*******************************************************************************************************************************************************/
















/*  Start Register Post Type */
/*******************************************************************************************************************************************************/
	function wpdocs_post_type_init() {
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post Type        ********************************************************************/
	/*=====================================================================================================================================================*/
	/*       Post_type => book		|		(Name/name) Singular&small => Book book 		|		(Names/names) Plural&Capital => Books books	   		   */
		$labels = array(
			'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
			'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
			'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
			'add_new'               => __( 'Add New', 'textdomain' ),
			'add_new_item'          => __( 'Add New Book', 'textdomain' ),
			'new_item'              => __( 'New Book', 'textdomain' ),
			'edit_item'             => __( 'Edit Book', 'textdomain' ),
			'view_item'             => __( 'View Book', 'textdomain' ),
			'all_items'             => __( 'All Books', 'textdomain' ),
			'search_items'          => __( 'Search Books', 'textdomain' ),
			'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
			'not_found'             => __( 'No books found.', 'textdomain' ),
			'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
			'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
			'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
			'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
			'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
			'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
		);
	
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'post_type_book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);
	
		register_post_type( 'book', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post Type          ********************************************************************/
	/*=====================================================================================================================================================*/

	/*=====================================================================================================================================================*/
	/****************************************************        Start Post Type        ********************************************************************/
	/*=====================================================================================================================================================*/
	/*       Post_type => post_type_article	|	(Name/name) Singular&small => Singular _singular 	|	(Names/names) Plural&Capital => Plural _plural	   */
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
			'rewrite'            => array( 'slug' => 'post_type_article' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'post_type_article', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post Type          ********************************************************************/
	/*=====================================================================================================================================================*/

		// flush_rewrite_rules();
	}
	add_action( 'init', 'wpdocs_post_type_init' );
/*******************************************************************************************************************************************************/