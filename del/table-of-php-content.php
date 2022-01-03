<?php
	/*Template Name: Table of Content.  */
?>
<!-- ************************************************************ -->





    <?php get_header();?>
    <?php get_footer();?>






<!-- ================================================================================================================== -->
                            <!--    Start Comments For Custom Post Type     -->
<!-- ================================================================================================================== -->
    <!---------------------------------------------------------------------------------------------------------------- 
        'dynamic_sidebar' 	=>  'article__',            =>
        the_field 		    =>  'p_t_a_c_f__'			=>	 Video
        Post_type           => p_t_a__
            Name            => Singular__
            name            => __singular 	
            Names           => Plural__
            names           =>__plural
            taxonomies      => category_name
    ---------------------------------------------------------------------------------------------------------------->
<!-- ================================================================================================================== -->
                            <!--    End Comments For Custom Post Type     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Custom Post With Pagination Install   -->
<!-- ================================================================================================================== -->
    <?php
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}

		$args = array(
			'post_type' => 'p_t_a__', 
			'posts_per_page' => get_option('posts_per_page'),
			'paged' => $paged,
			'post_status' => 'publish',
			'ignore_sticky_posts' => true,
			'order' => 'DESC', 
			'orderby' => 'date'
		);
		$p_t_a__ = new WP_Query( $args );

		if ( $p_t_a__->have_posts() ) :
			while( $p_t_a__->have_posts() ) : $p_t_a__->the_post();
	?>
	<!-- ======================================================================================================= -->
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
            }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php the_title(); ?>" />
            <?php } 
        ?>

        <img src="<?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?>" />

        <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="post_meta">
            Posted By: <?php the_author_posts_link(); ?>
            | Posted On: <?php the_time('d M, y'); ?>
            | Posted In: <?php the_category(', '); ?>
            | <?php comments_popup_link("No Comments", "1 Comment", "% Comments", "Comments_class", "Comment off");?>
        </div>

        <p class="" ><?php echo excerpt('30'); ?></p>

        <p><?php echo the_content(); ?></p>

        <div class="comments"><?php comments_template(); ?></div>

        <?php the_field('p_t_a_c_f__'); ?>

        <div class="widget"><?php dynamic_sidebar('article__'); ?></div>

	<!-- ======================================================================================================= -->
	    <?php endwhile; ?>
    <!-- -------------------------------------------------------------------------------------------------------- -->
        <div class="pagination">
            <?php if ($p_t_a__->max_num_pages > 1) :  ?>
                <?php
                $orig_query = $wp_query;
                $wp_query = $p_t_a__;
                ?>
                <nav class="prev-next-posts">
                    <div class="prev-posts-link">
                        <?php echo get_next_posts_link( '<i class="bi bi-arrow-right-circle"></i>', $p_t_a__->max_num_pages ); ?>
                    </div>
                    <div class="next-posts-link">
                        <?php echo get_previous_posts_link( '<i class="bi bi-arrow-left-circle"></i>' ); ?>
                    </div>
                </nav>
                <?php
                $wp_query = $orig_query;
                ?>
            <?php else:echo"Sorry there are no post found !!!"; endif; ?>
        </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
        <div class="container">
            <?php if (function_exists("pagination")){pagination($p_t_a__->max_num_pages);} ?>
        </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
    
    <!-- -------------------------------------------------------------------------------------------------------- -->
        <!-- Master Pice -->
        <style>	
            #article-38-0 .pagination {
                background: var(--theme-glass-2-);
                padding: 9px;
                border: 1px solid currentColor;
                backdrop-filter: blur(4px);
                overflow: hidden;
            }
            #article-38-0 .pagination .pagination {
                max-width: 80%;
                display: inline-flex;
                border: none;
                background: none;
                backdrop-filter: none;
                margin: 0 auto;
            }
            #article-38-0 .pagination .pagination a {
                color: var(--t-c-white-);
                border: 1px solid currentColor;
                margin: 0px 6px;
                padding: 3px 6px;
            }
            #article-38-0 .pagination .pagination a:hover {
                color: var(--t-c-yellow-);
            }
            #article-38-0 .next-posts-link a {
                float: right;
                margin-right: 9px;
            }
            #article-38-0 .prev-posts-link a {
                float: left;
                margin-left: 9px;
            }
            #article-38-0 nav.prev-next-posts {
                width: 100%;
                display: flex;
                position: relative;
            }
            #article-38-0 .prev-posts-link {
                left: 0px;
                position: absolute;
            }
            #article-38-0 .next-posts-link {
                right: 0px;
                position: absolute;
            }
            #article-38-0 .pagination span {
                display: none;
            }
            #article-38-0 .pagination span.current {
                display: block;
                margin: 0px 5px;
                padding: 5px 5px;
                color: var(--t-c-yellow-);
                border: 1px solid currentColor;
                font-weight: bold;
                background: var(--theme-glass-4-);
            }
            #article-38-0 .pagination .inactive {
                color: var(--t-c-white-);
                border: 1px solid currentColor;
                padding: 5px 5px;
                font-weight: bold;
                background: var(--theme-glass-4-);
            }
            #article-38-0 i.bi.bi-arrow-right-circle,#article-38-0 i.bi.bi-arrow-left-circle{
                font-size: 33px;
                color: var(--t-c-yellow-);
                display: none;
            }
            @media screen and (max-width: 1240px) {
                
                #article-38-0 .pagination .pagination a {
                    display: none;
                }
                #article-38-0 .pagination .pagination a.inactive, #article-38-0 .pagination .pagination span.current {
                    display: block;
                }
                #article-38-0 i.bi.bi-arrow-right-circle,#article-38-0 i.bi.bi-arrow-left-circle{
                    display: block;
                }
            }
        </style>
        <div class="pagination container">
            <?php if ($p_t_a__->max_num_pages > 1) :  ?>
                <?php
                $orig_query = $wp_query;
                $wp_query = $p_t_a__;
                ?>
                <nav class="prev-next-posts">
                        <div class="next-posts-link">
                            <?php echo get_next_posts_link( '<i class="bi bi-arrow-right-circle"></i>', $p_t_a__->max_num_pages ); ?>
                        </div>
                            <?php if (function_exists("pagination")){pagination($p_t_a__->max_num_pages);} ?>
                        <div class="prev-posts-link">
                            <?php echo get_previous_posts_link( '<i class="bi bi-arrow-left-circle"></i>' ); ?>
                        </div>
                </nav>
                <?php
                $wp_query = $orig_query;
                ?>
            <?php endif; ?>
        </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
	<!-- ======================================================================================================== -->
<!-- ================================================================================================================== -->
                            <!--    End Custom Post With Pagination Install     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Custom Post Without Pagination Install   -->
<!-- ================================================================================================================== -->
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
        <!-- The Post Goes Here -->
	<!-- ======================================================================================================= -->
	    <?php endwhile; endif; ?>
<!-- ================================================================================================================== -->
                            <!--    End Custom Post Without Pagination Install     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Custom Post Without Pagination Install   -->
<!-- ================================================================================================================== -->
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- ======================================================================================================= -->
        <!-- The Post Goes Here -->
	<!-- ======================================================================================================= -->
    <?php endwhile; endif; ?>
<!-- ================================================================================================================== -->
                            <!--    End Custom Post Without Pagination Install     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Register Custom Post Type & Taxonomies    -->
<!-- ================================================================================================================== -->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a__     ************************************************************/
	/*=======================================================================================================================================================
		Post_type       => p_t_a__
		Name            => Singular__
		name            => __singular 	
		Names           => Plural__
		names           =>__plural
        taxonomies      => category_name
	/*=====================================================================================================================================================*/
        /* Common For All Custom Post Type */
        $supports = array(
            'title', // post title
            'editor', // post content
            'author', // post author
            'thumbnail', // featured images
            'excerpt', // post excerpt
            'custom-fields', // custom fields
            'comments', // post comments
            'revisions', // post revisions
            'post-formats', // post formats
        );
	/*=====================================================================================================================================================*/
		$labels = array(
			'name'                  => _x( 'Plural__', 'Post type general name', 'textdomain' ),
			'Singular___name'         => _x( 'Singular__', 'Post type Singular__ name', 'textdomain' ),
			'menu_name'             => _x( 'Plural__', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'        => _x( 'Singular__', 'Add New on Toolbar', 'textdomain' ),
			'add_new'               => __( 'Add New', 'textdomain' ),
			'add_new_item'          => __( 'Add New Singular__', 'textdomain' ),
			'new_item'              => __( 'New Singular__', 'textdomain' ),
			'edit_item'             => __( 'Edit Singular__', 'textdomain' ),
			'view_item'             => __( 'View Singular__', 'textdomain' ),
			'all_items'             => __( 'All Plural__', 'textdomain' ),
			'search_items'          => __( 'Search Plural__', 'textdomain' ),
			'parent_item_colon'     => __( 'Parent Plural__:', 'textdomain' ),
			'not_found'             => __( 'No __plural found.', 'textdomain' ),
			'not_found_in_trash'    => __( 'No __plural found in Trash.', 'textdomain' ),
			'featured_image'        => _x( 'Singular__ Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'archives'              => _x( 'Singular__ archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
			'insert_into_item'      => _x( 'Insert into __singular', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this __singular', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
			'filter_items_list'     => _x( 'Filter __plural list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
			'items_list_navigation' => _x( 'Plural__ list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
			'items_list'            => _x( 'Plural__ list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        	'attributes'            => __( 'Item Attributes', 'textdomain' ),
            'update_item'           => __( 'Update Item', 'textdomain' ),
            'view_items'            => __( 'View Items', 'textdomain' ),
		);

		$args = array(
			'labels'                => $labels,
			'public'                => true,
			'publicly_queryable'    => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'p_t_a__' ),
			'capability_type'       => 'post', /* 'page', */
			'has_archive'           => true,
			'hierarchical'          => false,
			'menu_position'         => null,
			'supports'              => $supports
            'description'           => 'Holds our News and specific data',
            'taxonomies'            => array( 'category', 'post_tag','slug_category_cpt_ui' ),
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'exclude_from_search'   => false,
            'show_in_rest'          => true,
            'menu_icon'             => 'dashicons-megaphone',
		);

        /******************************************************************************************************************************** */
            $labels_cat = array(
                'name'              => __('category_name'),
                'Singular___name'     => __('category_name'),
                'search_items'      => __('Search'),
                'popular_items'     => __('More Used'),
                'all_items'         => __('All Categories'),
                'parent_item'       => null,
                'parent_item_colon' => null,
                'edit_item'         => __('Add new'),
                'update_item'       => __('Update'),
                'add_new_item'      => __('Add new category_name'),
                'new_item_name'     => __('New')
            );
            register_taxonomy('slug_category_cpt_ui', array('p_t_a__'), array(
                'hierarchical' => true,
                'labels' => $labels_cat,
                'Singular___label' => 'slug_category_cpt_ui',
                'all_items' => 'category_name',
                'query_var' => true,
                'rewrite' => array('slug' => 'cat'))
            );
        /******************************************************************************************************************************** */
		register_post_type( 'p_t_a__', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a__     **************************************************************/
	/*=====================================================================================================================================================*/
    ---------------------------------------------------------------------------------------------------------------------------------------------------------
    ---------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-- ================================================================================================================== -->
                            <!--    End Register Custom Post Type & Taxonomies     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Start Google Ranking    -->
<!-- ================================================================================================================== -->
    <style>#google-text{display:none;}</style>
        <main id="google-text">
            <!-- ************************************************************ -->
                <?php
                    $args = array(
                        'post_type'  =>  'google_seo',
                    );
                    $google_seo = new WP_Query( $args );
                    if ( have_posts() ):
                        while ( $google_seo->have_posts() ): $google_seo->the_post();
                            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                            the_title();
                            ?>
                                <head><?php the_title();?></head>
                                <article><?php echo the_content();?></article>
                            <?php
                        endwhile;
                    endif;
                ?>
            <!-- ************************************************************ -->
        </main>
<!-- ================================================================================================================== -->
                            <!--    End Stop Google Ranking     -->
<!-- ================================================================================================================== -->






<!-- ================================================================================================================== -->
                            <!--    Start Custom Header Markup & Logo    -->
<!-- ================================================================================================================== -->
        <?php the_custom_header_markup(); ?>
        <?php the_custom_logo(); ?>
        <a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?> </p>
<!-- ================================================================================================================== -->
                            <!--    End Custom Header Markup & Logo     -->
<!-- ================================================================================================================== -->






<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->






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






<!-- // Table of Content for functions.php -->
<!-- ************************************************************ -->
    <!-- ************************************************************ -->
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
<!-- ************************************************************ -->






<!-- ================================================================================================================== -->
                            <!--    Start     -->
<!-- ================================================================================================================== -->
<!-- ================================================================================================================== -->
                            <!--    End      -->
<!-- ================================================================================================================== -->






<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article   |  Start 	 =========================== -->
<!-- ======================================================================================================= -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article   |  End 	 =========================== -->
<!-- ======================================================================================================= -->