
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 21.0  |  Start Gallery   ************************ -->
<!-- ******************************************************************************** -->
    <div>
		<style>
			/* Start Article 21.0  |  Start Gallery  */
			#article-21{
				border-top: 1px solid var(--t-c-white-);
				background: var(--theme-glass-3-);
			}
			#article-21 .title h1{
				font-size: 35px;
				color: var(--t-c-yellow-);
			}
			#article-21 img{
				height: auto;
				width: 100%;
			}
			#article-21 .image-0{
				padding:0px;
				margin-top: 1px;
			}
			#article-21 .image-0:hover{
				opacity: .5;
			}
			.mfp-counter {
				padding-right: 50%;
				font-size: 19px;
				padding-top: 8px;
			}
			/* End Article 21.0 |  End Gallery  */
		</style>
		<article id="article-21">
			<!-- Start Article 21.0  |  Start Gallery  -->
			<div class="title">
				<div class="container pt-5 pb-1">
					<div class="text-center">
						<h1>Gallery 21</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container pt-1 pb-5">
				<div class="row">
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Gallery Title" />
					</a>
				</div>
			</div>
			<!-- End Article 21.0 |  End Gallery  -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 21.0 |  End Gallery   ***************************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 21.0  |  Start Gallery 	 =================================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_21_0',
		);
		$p_t_a_21_0 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_21_0->have_posts() ): $p_t_a_21_0->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 21.0  |  Start Gallery  */
			#article-21{
				border-top: 1px solid var(--t-c-white-);
				background: var(--theme-glass-3-);
			}
			#article-21 .title h1{
				font-size: 35px;
				color: var(--t-c-yellow-);
			}
			#article-21 img{
				height: auto;
				width: 100%;
			}
			#article-21 .image-0{
				padding:0px;
				margin-top: 1px;
			}
			#article-21 .image-0:hover{
				opacity: .5;
			}
			.mfp-counter {
				padding-right: 50%;
				font-size: 19px;
				padding-top: 8px;
			}
			/* End Article 21.0 |  End Gallery  */
		</style>
		<article id="article-21">
			<!-- Start Article 21.0  |  Start Gallery  -->
			<div class="title">
				<div class="container pt-5 pb-1">
					<div class="text-center">
						<h1><?php the_title(); ?></h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container pt-1 pb-5">
				<div class="row">
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_1'); ?>" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_2'); ?>" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_3'); ?>" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_4'); ?>" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_5'); ?>" alt="Gallery Title" />
					</a>
					<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="assets/img/bg.jpg">
						<img src="<?php the_field('p_t_a_c_f_21_0_6'); ?>" alt="Gallery Title" />
					</a>
				</div>
			</div>
			<!-- End Article 21.0 |  End Gallery  -->
		</article>
	</div>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_21_0',
    	the_field => p_t_a_c_f_21_0_1	=>	 Image-url
    	the_field => p_t_a_c_f_21_0_2	=>	 Image-url
    	the_field => p_t_a_c_f_21_0_3	=>	 Image-url
    	the_field => p_t_a_c_f_21_0_4	=>	 Image-url
    	the_field => p_t_a_c_f_21_0_5	=>	 Image-url
    	the_field => p_t_a_c_f_21_0_6	=>	 Image-url
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_21_0     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_21_0
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
			'rewrite'            => array( 'slug' => 'p_t_a_21_0' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_21_0', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_21_0     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 21.0 |  End Gallery 	 ======================================= -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 22.0  |  Start Counter   ************************ -->
<!-- ******************************************************************************** -->
	<div class="container">
		<div class="py-5 my-5">
			<div class="container display-1 text-center">Counter 22</div>
			<p class="counter text-center text-light display-4">5000</p>
		</div>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22.0  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 22.0  |  Start Counter	 =================================== -->
<!-- ======================================================================================================= -->
	<!-- No PHP -->
	<div class="container">
		<div class="py-5 my-5">
			<div class="container display-1 text-center">Counter 22</div>
			<p class="counter text-center text-light display-4">5000</p>
		</div>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 22.0  |  End Counter 	 ======================================= -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 22.1  |  Start Counter   ************************ -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 22.1  |  Start Counter  */
			#article-22-1{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-22-1 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: center;
			}
			#article-22-1 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
			}
			#article-22-1 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				padding: 9px;
			}
			#article-22-1 .main-wrapper .text-wrap, #article-22-1 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			/* End Article 22.1  |  End Counter  */
		</style>
		<article id="article-22-1">
			<!-- Start Article 22.1  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2>Main Article Title 22.1</h2> <hr>
							<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<h3 class="text-wrap"><span class="counter">500</span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<h3 class="text-wrap"><span class="counter">500</span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<h3 class="text-wrap"><span class="counter">500</span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<h3 class="text-wrap"><span class="counter">500</span>+</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 22.1  |  End Counter  -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22.1  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP |  Start Article 22.1  |  Start Counter 	 =============================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_22_1',
		);
		$p_t_a_22_1 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_22_1->have_posts() ): $p_t_a_22_1->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 22.1  |  Start Counter  */
			#article-22-1{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-22-1 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: center;
			}
			#article-22-1 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
			}
			#article-22-1 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				padding: 9px;
			}
			#article-22-1 .main-wrapper .text-wrap, #article-22-1 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			/* End Article 22.1  |  End Counter  */
		</style>
		<article id="article-22-1">
			<!-- Start Article 22.1  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2><?php the_title(); ?></h2> <hr>
							<p class="lead"><?php echo the_content(); ?></p>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_21_1_1'); ?></h3>
								<h3 class="text-wrap"><span class="counter"><?php the_field('p_t_a_c_f_21_1_2'); ?></span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_21_1_3'); ?></h3>
								<h3 class="text-wrap"><span class="counter"><?php the_field('p_t_a_c_f_21_1_4'); ?></span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_21_1_5'); ?></h3>
								<h3 class="text-wrap"><span class="counter"><?php the_field('p_t_a_c_f_21_1_6'); ?></span>+</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_21_1_7'); ?></h3>
								<h3 class="text-wrap"><span class="counter"><?php the_field('p_t_a_c_f_21_1_8'); ?></span>+</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 22.1  |  End Counter  -->
		</article>
	</div>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_22_1',
    	the_field => p_t_a_c_f_21_1_1	=>	 Title
    	the_field => p_t_a_c_f_21_1_2	=>	 Number (500)
    	the_field => p_t_a_c_f_21_1_3	=>	 Title
    	the_field => p_t_a_c_f_21_1_4	=>	 Number (500)
    	the_field => p_t_a_c_f_21_1_5	=>	 Title
    	the_field => p_t_a_c_f_21_1_6	=>	 Number (500)
    	the_field => p_t_a_c_f_21_1_7	=>	 Title
    	the_field => p_t_a_c_f_21_1_8	=>	 Number (500)
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_22_1     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_22_1
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
			'rewrite'            => array( 'slug' => 'p_t_a_22_1' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_22_1', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_22_1     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 22.1  |  End Counter  	 =================================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 22.2  |  Start Counter   ************************ -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 22.2  |  Start Counter  */
			#article-22-2{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-22-2 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: start;
			}
			#article-22-2 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
				margin-bottom: 10px;
			}
			#article-22-2 .main-wrapper .full-wrapper{
				margin-bottom: 15px;
				border: 1px solid var(--t-c-yellow-);
			}
			#article-22-2 .main-wrapper .content-wrapper-bg{
				background: var(--theme-glass-2-);
				padding-top: 1px;
			}
			#article-22-2 .main-wrapper .content-wrapper{
				height: 100%;
				display: flex;
				align-items: center;
			}
			#article-22-2 .main-wrapper .text-wrap, #article-22-2 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			/* End Article 22.2  |  End Counter  */
		</style>
		<article id="article-22-2">
			<!-- Start Article 22.2  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2>Main Article Title 22.2</h2> <hr>
							<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 22.2  |  End Counter  -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22.2  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP |  Start Article 22.2  |  Start Counter	 =================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 22.2  |  Start Counter  */
			#article-22-2{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-22-2 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: start;
			}
			#article-22-2 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
				margin-bottom: 10px;
			}
			#article-22-2 .main-wrapper .full-wrapper{
				margin-bottom: 15px;
				border: 1px solid var(--t-c-yellow-);
			}
			#article-22-2 .main-wrapper .content-wrapper-bg{
				background: var(--theme-glass-2-);
				padding-top: 1px;
			}
			#article-22-2 .main-wrapper .content-wrapper{
				height: 100%;
				display: flex;
				align-items: center;
			}
			#article-22-2 .main-wrapper .text-wrap, #article-22-2 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			/* End Article 22.2  |  End Counter  */
		</style>
		<article id="article-22-2">
			<!-- Start Article 22.2  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<?php dynamic_sidebar('article_22_2'); ?>
						</div>

						<?php
							$args = array(
								'post_type'  =>  'p_t_a_22_2',
							);
							$p_t_a_22_2 = new WP_Query( $args );
							if ( have_posts() ):
								while ( $p_t_a_22_2->have_posts() ): $p_t_a_22_2->the_post();
						?>
						<!-- ======================================================================================================= -->
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3><?php the_field('p_t_a_c_f_22_2_1'); ?></h3>
											<h3 class="text-wrap"><span class="counter"><?php the_field('p_t_a_c_f_22_2_2'); ?></span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2><?php the_title(); ?></h2> <hr>
									<p class="lead"><?php echo the_content(); ?></p>
								</div>
							</div>
						</div>

						<!-- ======================================================================================================= -->
						<!-- ======================================================================================================= -->
						<?php endwhile; endif; ?>
						<!-- ======================================================================================================= -->
						<!-- ======================================================================================================= -->
						<!-- -----------------------------------------------------------------------------------------------------------
						'post_type'  =>  'p_t_a_22_2',
							the_field => p_t_a_c_f_22_2_1	=>	 Circle Title
							the_field => p_t_a_c_f_22_2_2	=>	 Number (500)
						----------------------------------------------------------------------------------------------------------------
						/*=====================================================================================================================================================*/
						/****************************************************        Start Post_type => p_t_a_22_2     **********************************************************/
						/*=======================================================================================================================================================
							Post_type => p_t_a_22_2
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
								'rewrite'            => array( 'slug' => 'p_t_a_22_2' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'menu_position'      => null,
								'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
							);

							register_post_type( 'p_t_a_22_2', $args );

						/*=====================================================================================================================================================*/
						/****************************************************        End Post_type => p_t_a_22_2     ************************************************************/
						/*=====================================================================================================================================================*/
						------------------------------------------------------------------------------------------------------------ -->
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 content-wrapper-bg">
									<div class="content-wrapper">
										<div class="w-100">
											<h3>Article Title</h3>
											<h3 class="text-wrap"><span class="counter">500</span>+</h3>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 22.2  |  End Counter  -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 22.2  |  End Counter 	 ======================================= -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 23.0  | Start Circle Bar   ********************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 23.0  | Start Circle Bar */
			#article-23 svg.radial-progress {
			height: auto;
			max-width: 200px;
			padding: 1em;
			transform: rotate(-90deg);
			width: 100%;
			}
			#article-23 svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
			}
			#article-23 svg.radial-progress circle.incomplete { opacity: 0.25; }
			#article-23 svg.radial-progress circle.complete { stroke-dasharray: 219.91148575129; }
			#article-23 svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
			}
			#article-23 svg.radial-progress circle { stroke: #000; }
			#article-23 .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			background: aquamarine;
			margin: 0 auto;
			}
			#article-23 .main-circle .circle-bg{
			position: absolute;
			}
			#article-23 .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
			}
			/* End Article 23.0  | End Circle Bar */
		</style>
		<article id="article-23">
			<!-- Start Article 23.0  | Start Circle Bar -->
			<div class="main-circle">
				<div class="circle-bg">
					<svg class="radial-progress" data-percentage="56" viewBox="0 0 80 80">
						<circle class="incomplete" cx="40" cy="40" r="35"></circle>
						<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
				</div>
				<div class="circle-center">
					<span class="counter">56</span><span>%</span>
				</div>
			</div>
			<!-- End Article 23.0  | End Circle Bar -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 23.0  | End Circle Bar   ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 23.0  | Start Circle Bar 	 =============================== -->
<!-- ======================================================================================================= -->
	<!-- No PHP -->
	<div>
		<style>
			/* Start Article 23.0  | Start Circle Bar */
			#article-23 svg.radial-progress {
			height: auto;
			max-width: 200px;
			padding: 1em;
			transform: rotate(-90deg);
			width: 100%;
			}
			#article-23 svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
			}
			#article-23 svg.radial-progress circle.incomplete { opacity: 0.25; }
			#article-23 svg.radial-progress circle.complete { stroke-dasharray: 219.91148575129; }
			#article-23 svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
			}
			#article-23 svg.radial-progress circle { stroke: #000; }
			#article-23 .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			background: aquamarine;
			margin: 0 auto;
			}
			#article-23 .main-circle .circle-bg{
			position: absolute;
			}
			#article-23 .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
			}
			/* End Article 23.0  | End Circle Bar */
		</style>
		<article id="article-23">
			<!-- Start Article 23.0  | Start Circle Bar -->
			<div class="main-circle">
				<div class="circle-bg">
					<svg class="radial-progress" data-percentage="56" viewBox="0 0 80 80">
						<circle class="incomplete" cx="40" cy="40" r="35"></circle>
						<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
				</div>
				<div class="circle-center">
					<span class="counter">56</span><span>%</span>
				</div>
			</div>
			<!-- End Article 23.0  | End Circle Bar -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 23.0  | End Circle Bar 	 =================================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 23.1  |  Start Circle Bar   ********************* -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 23.1  |  Start Circle Bar  */
			#article-23-1{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-23-1 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: center;
			}
			#article-23-1 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
			}
			#article-23-1 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				padding: 9px;
			}
			#article-23-1 .main-wrapper .main-circle, #article-23-1 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			#article-23-1 svg.radial-progress {
				height: auto;
				max-width: 200px;
				padding: 1em;
				transform: rotate(-90deg);
				width: 100%;
			}
			#article-23-1 svg.radial-progress circle {
				fill: rgba(0,0,0,0);
				stroke: #fff;
				stroke-dashoffset: 219.91148575129;
				stroke-width: 10;
			}
			#article-23-1 svg.radial-progress circle.incomplete{
				opacity: 0.25;
			}
			#article-23-1 svg.radial-progress circle.complete{
				stroke-dasharray: 219.91148575129;
			}
			#article-23-1 svg.radial-progress text{
				fill: #fff;
				font: 400 1em/1 'Oswald', sans-serif;
				text-anchor: middle;
			}
			#article-23-1 svg.radial-progress circle{
				stroke: var(--t-c-yellow-);
			}
			#article-23-1 .main-circle{
				position: relative;
				height: 200px;
				width: 200px;
				margin: 0 auto;
			}
			#article-23-1 .main-circle .circle-center{
				position: absolute;
				position: absolute;
				top: 33%;
				left: 33%;
				font-size: 42px;
			}
			/* End Article 23.1  |  End Circle Bar  */
		</style>
		<article id="article-23-1">
			<!-- Start Article 23.1  |  Start Circle Bar  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2>Main Article Title 23.1</h2> <hr>
							<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
						</div>
						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<div class="main-circle">
									<div class="circle-bg">
										<svg class="radial-progress" data-percentage="46" viewBox="0 0 80 80">
											<circle class="incomplete" cx="40" cy="40" r="35"></circle>
											<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
											<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
										</svg>
									</div>
									<div class="circle-center">
										<span class="counter">46</span><span>%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<div class="main-circle">
									<div class="circle-bg">
										<svg class="radial-progress" data-percentage="25" viewBox="0 0 80 80">
											<circle class="incomplete" cx="40" cy="40" r="35"></circle>
											<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
											<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
										</svg>
									</div>
									<div class="circle-center">
										<span class="counter">25</span><span>%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<div class="main-circle">
									<div class="circle-bg">
										<svg class="radial-progress" data-percentage="51" viewBox="0 0 80 80">
											<circle class="incomplete" cx="40" cy="40" r="35"></circle>
											<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
											<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
										</svg>
									</div>
									<div class="circle-center">
										<span class="counter">51</span><span>%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3>Article Title</h3>
								<div class="main-circle">
									<div class="circle-bg">
										<svg class="radial-progress" data-percentage="80" viewBox="0 0 80 80">
											<circle class="incomplete" cx="40" cy="40" r="35"></circle>
											<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
											<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
										</svg>
									</div>
									<div class="circle-center">
										<span class="counter">80</span><span>%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 23.1  |  End Circle Bar  -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 23.1  |  End Circle Bar    ********************* -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 23.1  |  Start Circle Bar 	 =============================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_23_1',
		);
		$p_t_a_23_1 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_23_1->have_posts() ): $p_t_a_23_1->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 23.1  |  Start Circle Bar  */
			#article-23-1{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-23-1 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: center;
			}
			#article-23-1 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
			}
			#article-23-1 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				padding: 9px;
			}
			#article-23-1 .main-wrapper .main-circle, #article-23-1 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			#article-23-1 svg.radial-progress {
				height: auto;
				max-width: 200px;
				padding: 1em;
				transform: rotate(-90deg);
				width: 100%;
			}
			#article-23-1 svg.radial-progress circle {
				fill: rgba(0,0,0,0);
				stroke: #fff;
				stroke-dashoffset: 219.91148575129;
				stroke-width: 10;
			}
			#article-23-1 svg.radial-progress circle.incomplete{
				opacity: 0.25;
			}
			#article-23-1 svg.radial-progress circle.complete{
				stroke-dasharray: 219.91148575129;
			}
			#article-23-1 svg.radial-progress text{
				fill: #fff;
				font: 400 1em/1 'Oswald', sans-serif;
				text-anchor: middle;
			}
			#article-23-1 svg.radial-progress circle{
				stroke: var(--t-c-yellow-);
			}
			#article-23-1 .main-circle{
				position: relative;
				height: 200px;
				width: 200px;
				margin: 0 auto;
			}
			#article-23-1 .main-circle .circle-center{
				position: absolute;
				position: absolute;
				top: 33%;
				left: 33%;
				font-size: 42px;
			}
			/* End Article 23.1  |  End Circle Bar  */
		</style>
		<article id="article-23-1">
			<!-- Start Article 23.1  |  Start Circle Bar  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2><?php the_title(); ?></h2> <hr>
							<p class="lead"><?php echo the_content(); ?></p>
						</div>

						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_23_1_1'); ?></h3>
								<div class="main-circle">
									<div class="circle-bg">
										<?php the_field('p_t_a_c_f_23_1_2'); ?>
									</div>
									<div class="circle-center">
										<span class="counter"><?php the_field('p_t_a_c_f_23_1_3'); ?></span><span>%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_23_1_4'); ?></h3>
								<div class="main-circle">
									<div class="circle-bg">
										<?php the_field('p_t_a_c_f_23_1_5'); ?>
									</div>
									<div class="circle-center">
										<span class="counter"><?php the_field('p_t_a_c_f_23_1_6'); ?></span><span>%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_23_1_7'); ?></h3>
								<div class="main-circle">
									<div class="circle-bg">
										<?php the_field('p_t_a_c_f_23_1_8'); ?>
									</div>
									<div class="circle-center">
										<span class="counter"><?php the_field('p_t_a_c_f_23_1_9'); ?></span><span>%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-3">
							<div class="content-wrapper">
								<h3><?php the_field('p_t_a_c_f_23_1_10'); ?></h3>
								<div class="main-circle">
									<div class="circle-bg">
										<?php the_field('p_t_a_c_f_23_1_11'); ?>
									</div>
									<div class="circle-center">
										<span class="counter"><?php the_field('p_t_a_c_f_23_1_12'); ?></span><span>%</span>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- End Article 23.1  |  End Circle Bar  -->
		</article>
	</div>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_23_1',
    	the_field => p_t_a_c_f_23_1_1	=>	 Title
    	the_field => p_t_a_c_f_23_1_2	=>	 SVG(Circle)
    	the_field => p_t_a_c_f_23_1_3	=>	 Number (500)
    	the_field => p_t_a_c_f_23_1_4	=>	 Title
    	the_field => p_t_a_c_f_23_1_5	=>	 SVG(Circle)
    	the_field => p_t_a_c_f_23_1_6	=>	 Number (500)
    	the_field => p_t_a_c_f_23_1_7	=>	 Title
    	the_field => p_t_a_c_f_23_1_8	=>	 SVG(Circle)
    	the_field => p_t_a_c_f_23_1_9	=>	 Number (500)
    	the_field => p_t_a_c_f_23_1_10	=>	 Title
    	the_field => p_t_a_c_f_23_1_11	=>	 SVG(Circle)
    	the_field => p_t_a_c_f_23_1_12	=>	 Number (500)
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_23_1     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_23_1
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
			'rewrite'            => array( 'slug' => 'p_t_a_23_1' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_23_1', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_23_1     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 23.1  |  End Circle Bar	 =================================== -->
<!-- ======================================================================================================= -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 23.2  |  Start Counter   ************************ -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 23.2  |  Start Counter  */
			#article-23-2{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-23-2 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: start;
			}
			#article-23-2 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
				margin-bottom: 10px;
			}
			#article-23-2 .main-wrapper .full-wrapper{
				margin-bottom: 15px;
				border: 1px solid var(--t-c-yellow-);
			}
			#article-23-2 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				height: 100%;
				display: flex;
				align-items: center;
			}
			#article-23-2 .main-wrapper .text-wrap, #article-23-2 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			#article-23-2 .full-wrapper .circle-bg-dark{
				background: var(--theme-glass-2-);
			}
			#article-23-2 svg.radial-progress {
				height: auto;
				max-width: 200px;
				padding: 1em;
				transform: rotate(-90deg);
				width: 100%;
			}
			#article-23-2 svg.radial-progress circle {
				fill: rgba(0,0,0,0);
				stroke: #fff;
				stroke-dashoffset: 219.91148575129;
				stroke-width: 10;
			}
			#article-23-2 svg.radial-progress circle.incomplete{
				opacity: 0.25;
			}
			#article-23-2 svg.radial-progress circle.complete{
				stroke-dasharray: 219.91148575129;
			}
			#article-23-2 svg.radial-progress text{
				fill: #fff;
				font: 400 1em/1 'Oswald', sans-serif;
				text-anchor: middle;
			}
			#article-23-2 svg.radial-progress circle{
				stroke: var(--t-c-yellow-);
			}
			#article-23-2 .main-circle{
				position: relative;
				height: 200px;
				width: 200px;
				margin: 0 auto;
			}
			#article-23-2 .main-circle .circle-center{
				position: absolute;
				position: absolute;
				top: 33%;
				left: 33%;
				font-size: 42px;
			}
			#article-23-2 .main-circle .circle-center .counter, #article-23-2 .main-circle .circle-center span{
				color: var(--t-c-yellow-);
			}
			/* End Article 23.2  |  End Counter  */
		</style>
		<article id="article-23-2">
			<!-- Start Article 23.2  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<h2>Main Article Title 23.2</h2> <hr>
							<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 circle-bg-dark">
									<div class="main-circle">
										<div class="circle-bg">
											<svg class="radial-progress" data-percentage="46" viewBox="0 0 80 80">
												<circle class="incomplete" cx="40" cy="40" r="35"></circle>
												<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
												<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
											</svg>
										</div>
										<div class="circle-center">
											<span class="counter">46</span><span>%</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 circle-bg-dark">
									<div class="main-circle">
										<div class="circle-bg">
											<svg class="radial-progress" data-percentage="46" viewBox="0 0 80 80">
												<circle class="incomplete" cx="40" cy="40" r="35"></circle>
												<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
												<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
											</svg>
										</div>
										<div class="circle-center">
											<span class="counter">46</span><span>%</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 circle-bg-dark">
									<div class="main-circle">
										<div class="circle-bg">
											<svg class="radial-progress" data-percentage="46" viewBox="0 0 80 80">
												<circle class="incomplete" cx="40" cy="40" r="35"></circle>
												<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
												<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
											</svg>
										</div>
										<div class="circle-center">
											<span class="counter">46</span><span>%</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 circle-bg-dark">
								<div class="main-circle">
									<div class="circle-bg">
										<svg class="radial-progress" data-percentage="46" viewBox="0 0 80 80">
											<circle class="incomplete" cx="40" cy="40" r="35"></circle>
											<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
											<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
										</svg>
									</div>
									<div class="circle-center">
										<span class="counter">46</span><span>%</span>
									</div>
								</div>
								</div>
								<div class="col-12 col-md-8">
									<h2>Main Article Title</h2> <hr>
									<p class="lead">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 23.2  |  End Counter  -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 23.2  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 23.2  |  Start Counter 	 =================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 23.2  |  Start Counter  */
			#article-23-2{
				height: fit-content;
				width: 100%;
				padding: 9px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-23-2 .main-wrapper h2{
				color: var(--t-c-yellow-);
				font-size: 35px;
				text-align: start;
			}
			#article-23-2 .main-wrapper p{
				text-align: justify;
				font-size: 18px;
				color: var(--t-c-white-);
				margin-bottom: 10px;
			}
			#article-23-2 .main-wrapper .full-wrapper{
				margin-bottom: 15px;
				border: 1px solid var(--t-c-yellow-);
			}
			#article-23-2 .main-wrapper .content-wrapper{
				background: var(--theme-glass-2-);
				height: 100%;
				display: flex;
				align-items: center;
			}
			#article-23-2 .main-wrapper .text-wrap, #article-23-2 .main-wrapper .content-wrapper h3{
				font-size: 28px;
				color: var(--t-c-yellow-);
				text-align: center;
			}
			#article-23-2 .full-wrapper .circle-bg-dark{
				background: var(--theme-glass-2-);
			}
			#article-23-2 svg.radial-progress {
				height: auto;
				max-width: 200px;
				padding: 1em;
				transform: rotate(-90deg);
				width: 100%;
			}
			#article-23-2 svg.radial-progress circle {
				fill: rgba(0,0,0,0);
				stroke: #fff;
				stroke-dashoffset: 219.91148575129;
				stroke-width: 10;
			}
			#article-23-2 svg.radial-progress circle.incomplete{
				opacity: 0.25;
			}
			#article-23-2 svg.radial-progress circle.complete{
				stroke-dasharray: 219.91148575129;
			}
			#article-23-2 svg.radial-progress text{
				fill: #fff;
				font: 400 1em/1 'Oswald', sans-serif;
				text-anchor: middle;
			}
			#article-23-2 svg.radial-progress circle{
				stroke: var(--t-c-yellow-);
			}
			#article-23-2 .main-circle{
				position: relative;
				height: 200px;
				width: 200px;
				margin: 0 auto;
			}
			#article-23-2 .main-circle .circle-center{
				position: absolute;
				position: absolute;
				top: 33%;
				left: 33%;
				font-size: 42px;
			}
			#article-23-2 .main-circle .circle-center .counter, #article-23-2 .main-circle .circle-center span{
				color: var(--t-c-yellow-);
			}
			/* End Article 23.2  |  End Counter  */
		</style>
		<article id="article-23-2">
			<!-- Start Article 23.2  |  Start Counter  -->
			<div class="container">
				<div class="main-wrapper">
					<div class="row">
						<div class="col-12">
							<?php dynamic_sidebar('article_23_2'); ?>
						</div>

						<?php
							$args = array(
								'post_type'  =>  'p_t_a_23_2',
							);
							$p_t_a_23_2 = new WP_Query( $args );
							if ( have_posts() ):
								while ( $p_t_a_23_2->have_posts() ): $p_t_a_23_2->the_post();
						?>
						<!-- ======================================================================================================= -->
						<div class="col-12 full-wrapper">
							<div class="row">
								<div class="col-12 col-md-4 circle-bg-dark">
									<div class="main-circle">
										<?php the_field('p_t_a_c_f_23_2_1'); ?>
										</div>
										<div class="circle-center">
											<span class="counter"><?php the_field('p_t_a_c_f_23_2_2'); ?></span><span>%</span>
										</div>
									</div>
								<div class="col-12 col-md-8">
									<h2><?php the_title(); ?></h2> <hr>
									<p class="lead"><?php echo the_content(); ?></p>
								</div>
							</div>
						</div>
						<!-- ======================================================================================================= -->
						<!-- ======================================================================================================= -->
						<?php endwhile; endif; ?>
						<!-- ======================================================================================================= -->
						<!-- ======================================================================================================= -->
						<!-- -----------------------------------------------------------------------------------------------------------
						'post_type'  =>  'p_t_a_23_2',
							the_field => p_t_a_c_f_23_2_1	=>	 SVG (Circle)
							the_field => p_t_a_c_f_23_2_2	=>	 Number (500)
						----------------------------------------------------------------------------------------------------------------
						/*=====================================================================================================================================================*/
						/****************************************************        Start Post_type => p_t_a_23_2     **********************************************************/
						/*=======================================================================================================================================================
							Post_type => p_t_a_23_2
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
								'rewrite'            => array( 'slug' => 'p_t_a_23_2' ),
								'capability_type'    => 'post',
								'has_archive'        => true,
								'hierarchical'       => false,
								'menu_position'      => null,
								'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
							);

							register_post_type( 'p_t_a_23_2', $args );

						/*=====================================================================================================================================================*/
						/****************************************************        End Post_type => p_t_a_23_2     ************************************************************/
						/*=====================================================================================================================================================*/
						------------------------------------------------------------------------------------------------------------ -->
						
					</div>
				</div>
			</div>
			<!-- End Article 23.2  |  End Counter  -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 23.2  |  End Counter 	 ======================================= -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 24.0  | Start CD Headline    ******************** -->
<!-- ******************************************************************************** -->
	<div>
		<div class="cd-title">
			<h1>Animated Headlines 24</h1>
		</div>
		
		<div class="cd-intro">
		
			<h1 class="cd-headline rotate-1">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div>
		<div class="cd-intro">
			<h1 class="cd-headline letters type">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper waiting">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters rotate-2">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline loading-bar">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline slide">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline clip is-full-width">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline zoom">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters rotate-3">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters scale">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline push">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
	</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 24.0  | End CD Headline    ********************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 24.0  | Start CD Headline 	 =============================== -->
<!-- ======================================================================================================= -->
	<!-- NO PHP -->
	<div>
		<div class="cd-title">
			<h1>Animated Headlines 24</h1>
		</div>
		
		<div class="cd-intro">
		
			<h1 class="cd-headline rotate-1">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div>
		<div class="cd-intro">
			<h1 class="cd-headline letters type">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper waiting">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters rotate-2">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline loading-bar">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline slide">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline clip is-full-width">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline zoom">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters rotate-3">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline letters scale">
				<span>My favourite food is</span> 
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
		<div class="cd-intro">
			<h1 class="cd-headline push">
				<span>My favourite food is</span>
				<span class="cd-words-wrapper">
					<b class="is-visible">pizza</b>
					<b>sushi</b>
					<b>steak</b>
				</span>
			</h1>
		</div> 
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 24.0  | End CD Headline 	 =================================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************    Start Article 25.0  | Start Card Filter    ****************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 25.0  | Start Card Filter */
			#article-25 h2 {
				color: var(--t-c-crimson-);
				font-size: 35px;
				text-align: center;
			}
			#article-25 #myBtnContainer {
				padding: 9px 0px;
				font-size:18px;
				text-align: center;
			}
			#article-25 .main {
				max-width: 1000px;
				margin: auto;
			}
			#article-25 .content h4{
				padding-top: 5px;
				color: var(--t-c-white-);

			}
			#article-25 .content p{
				padding-top: 3px;
				color: var(--t-c-white-);

			}
			#article-25 a{
				float: right;
				position: absolute;
				bottom: 15px;
				right: 10px;
				font-size: 16px;
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
			}
			#article-25 a:hover{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background: none;
			}
			#article-25 .row {
				margin: 8px -16px;
			}
			#article-25 .row,
			#article-25 .row > .column {
				padding: 8px;
			}
			#article-25 .column {
				display: none;
			}
			#article-25 .row:after {
				content: "";
				display: table;
				clear: both;
			}
			#article-25 .content {
				background: var(--theme-glass-3-);
				position: relative;
				padding: 10px;
			}
			#article-25 .show {
				display: block;
			}
			#article-25 #myBtnContainer .my-btn {
				font-size: 18px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				outline: none;
				padding: 8px 8px;
			}
			#article-25 #myBtnContainer button:hover {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			#article-25 #myBtnContainer .active-filter{
				display: inline;
			}
			#article-25 #myBtnContainer .active .my-btn{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* End Article 25.0  | End Card Filter */
		</style>
		<article id="article-25">
			<!-- Start Article 25.0  | Start Card Filter -->
			<h2>PORTFOLIO 25</h2>
			<div class="line-one"></div>
			<div id="myBtnContainer">
				<div class="active-filter active"><button class="my-btn" onclick="filterSelection('all-my-card')"> Show all</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('nature')"> Nature</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('cars')"> Cars</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('people')"> People</button></div>
			</div>

			<div class="container">
				<div class="row">
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Lights" style="width:100%">
							<h4>Lights</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Nature" style="width:100%">
							<h4>Forest</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>

					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Retro</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Fast</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Classic</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>

					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Girl</h4>
							<p>Lorem ipsum dolor..</p>
							<a class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Man</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Woman</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 25.0  | End Card Filter -->
		</article>
		
		<script>
			/* Start Article 25.0  | Start Card Filter */
				filterSelection("all-my-card")
				function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all-my-card") c = "";
					for (i = 0; i < x.length; i++) {
						w3RemoveClass(x[i], "show");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
					}
				}
				function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
					for (i = 0; i < arr2.length; i++) {
						if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
						}
					}
				}
				function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
					}
				}
				element.className = arr1.join(" ");
				}

				var elements = document.getElementsByClassName("active-filter");
				for(var i = 0; i < elements.length; i++)
				{
					elements[i].onclick = function(){
						
						/* > </ > > </ > </ > */
						
						var el = elements[0];
						while(el)
						{
							if(el.tagName === "DIV"){
								el.classList.remove("active");
								
							}
							el = el.nextSibling;
						}
						
					this.classList.add("active");  
					};
				}
			/* End Article 25.0  | End Card Filter */
		</script>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 25.0  | End Card Filter    ********************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 25.0  | Start Card Filter 	 =============================== -->
<!-- ======================================================================================================= -->
	<!-- NO CUSTOMIZE -->
	<div>
		<style>
			/* Start Article 25.0  | Start Card Filter */
			#article-25 h2 {
				color: var(--t-c-crimson-);
				font-size: 35px;
				text-align: center;
			}
			#article-25 #myBtnContainer {
				padding: 9px 0px;
				font-size:18px;
				text-align: center;
			}
			#article-25 .main {
				max-width: 1000px;
				margin: auto;
			}
			#article-25 .content h4{
				padding-top: 5px;
				color: var(--t-c-white-);

			}
			#article-25 .content p{
				padding-top: 3px;
				color: var(--t-c-white-);

			}
			#article-25 a{
				float: right;
				position: absolute;
				bottom: 15px;
				right: 10px;
				font-size: 16px;
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
			}
			#article-25 a:hover{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background: none;
			}
			#article-25 .row {
				margin: 8px -16px;
			}
			#article-25 .row,
			#article-25 .row > .column {
				padding: 8px;
			}
			#article-25 .column {
				display: none;
			}
			#article-25 .row:after {
				content: "";
				display: table;
				clear: both;
			}
			#article-25 .content {
				background: var(--theme-glass-3-);
				position: relative;
				padding: 10px;
			}
			#article-25 .show {
				display: block;
			}
			#article-25 #myBtnContainer .my-btn {
				font-size: 18px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				outline: none;
				padding: 8px 8px;
			}
			#article-25 #myBtnContainer button:hover {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			#article-25 #myBtnContainer .active-filter{
				display: inline;
			}
			#article-25 #myBtnContainer .active .my-btn{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* End Article 25.0  | End Card Filter */
		</style>
		<article id="article-25">
			<!-- Start Article 25.0  | Start Card Filter -->
			<h2>PORTFOLIO 25</h2>
			<div class="line-one"></div>
			<div id="myBtnContainer">
				<div class="active-filter active"><button class="my-btn" onclick="filterSelection('all-my-card')"> Show all</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('nature')"> Nature</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('cars')"> Cars</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('people')"> People</button></div>
			</div>

			<div class="container">
				<div class="row">
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Lights" style="width:100%">
							<h4>Lights</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column nature col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Nature" style="width:100%">
							<h4>Forest</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>

					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Retro</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Fast</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column cars col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Car" style="width:100%">
							<h4>Classic</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>

					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Girl</h4>
							<p>Lorem ipsum dolor..</p>
							<a class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Man</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
					<div class="column people col-12 col-lg-6">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="People" style="width:100%">
							<h4>Woman</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 25.0  | End Card Filter -->
		</article>
		
		<script>
			/* Start Article 25.0  | Start Card Filter */
				filterSelection("all-my-card")
				function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all-my-card") c = "";
					for (i = 0; i < x.length; i++) {
						w3RemoveClass(x[i], "show");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
					}
				}
				function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
					for (i = 0; i < arr2.length; i++) {
						if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
						}
					}
				}
				function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
					}
				}
				element.className = arr1.join(" ");
				}

				var elements = document.getElementsByClassName("active-filter");
				for(var i = 0; i < elements.length; i++)
				{
					elements[i].onclick = function(){
						
						/* > </ > > </ > </ > */
						
						var el = elements[0];
						while(el)
						{
							if(el.tagName === "DIV"){
								el.classList.remove("active");
								
							}
							el = el.nextSibling;
						}
						
					this.classList.add("active");  
					};
				}
			/* End Article 25.0  | End Card Filter */
		</script>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 25.0  | End Card Filter	 =================================== -->
<!-- ======================================================================================================= -->













<!-- ******************************************************************************** -->
<!-- ***************    Start Article 25.1  | Start Card Filter    ****************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 25.1  | Start Card Filter */
			/* Center website */
			#article-25-1 h2 {
				color: var(--t-c-crimson-);
				font-size: 35px;
				text-align: center;
			}
			#article-25-1 #myBtnContainer {
				padding: 9px 0px;
				font-size:18px;
				text-align: center;
			}
			/* Add padding BETWEEN each column-1 (if you want) */
			#article-25-1 .row,
			#article-25-1 .row > .column-1 {
				padding: 8px;
			}
			/* Create three equal column-1s that floats next to each other */
			#article-25-1 .column-1 {
				/* float: left; */
				/* width: 33.33%; */
				display: none; /* Hide column-1s by default */
				background: var(--theme-glass-3-);
				margin: -1px;
			}
			/* Clear floats after rows */
			#article-25-1 .row:after {
				content: "";
				display: table;
				clear: both;
			}
			/* Content */
			#article-25-1 .content {
				/* background: var(--theme-glass-3-); */
				border: 1px solid var(--t-c-white-);
				position: relative;
				padding: 10px;
			}
			#article-25-1 .content:hover {
				background: var(--theme-glass-3-);
				border: 1px solid var(--t-c-yellow-);
			}
			/* The "show-1" class is added to the filtered elements */
			#article-25-1 .show-1 {
				display: block;
			}
			/* Style the buttons */
			#article-25-1 #myBtnContainer .my-btn {
				font-size: 18px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				outline: none;
				padding: 8px 8px;
			}
			/* Add a grey background color on mouse-over */
			#article-25-1 #myBtnContainer button:hover {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* Add a dark background color to the active button */
			#article-25-1 #myBtnContainer .active-filter-1{
				display: inline;
			}
			#article-25-1 #myBtnContainer .active .my-btn{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* End Article 25.1  | End Card Filter */
		</style>
		<article id="article-25-1">
			<!-- Start Article 25.1  | Start Card Filter -->
			<h2>PORTFOLIO</h2>
			<div class="line-one"></div>
			<div id="myBtnContainer">
				<div class="active-filter-1 active"><button class="my-btn" onclick="filterSelection('all-my-card-1')"> show-1 all</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('my-dvl')">Developed</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('mt-des')">Design</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('full-p')">Fullpage</button></div>
			</div>

			<!-- Portfolio Gallery Grid -->
			<div class="container">
				<div class="row">

					<div class="column-1 full-p col-12 col-lg-6">
						<a target="blanck" title="Click for Open" class="btn-wrapper" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 full-p col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 mt-des col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 mt-des col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- END GRID -->
			<!-- End Article 25.1  | End Card Filter -->
		</article>
		<script>
			// Start Article 25.1  | Start Card Filter
				filterSelection("all-my-card-1")
				function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column-1");
				if (c == "all-my-card-1") c = "";
					for (i = 0; i < x.length; i++) {
						w3RemoveClass(x[i], "show-1");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show-1");
					}
				}
				function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
					for (i = 0; i < arr2.length; i++) {
						if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
						}
					} // </ >
				}
				function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
					}
				}
				element.className = arr1.join(" ");
				}

				var elements = document.getElementsByClassName("active-filter-1");
				for(var i = 0; i < elements.length; i++)
				{
					elements[i].onclick = function(){
						
						// remove class from sibling
						
						var el = elements[0];
						while(el)
						{
							if(el.tagName === "DIV"){
								//remove class
								el.classList.remove("active");
								
							}
							// pass to the new sibling
							el = el.nextSibling;
						}
						
					this.classList.add("active");  
					};
				}
			// End Article 25.1  | End Card Filter 
		</script>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 25.1  | End Card Filter    ********************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 25.1  | Start Card Filter 	 =============================== -->
<!-- ======================================================================================================= -->
	<!-- NO CUSTOMIZE -->
	<div>
		<style>
			/* Start Article 25.1  | Start Card Filter */
			/* Center website */
			#article-25-1 h2 {
				color: var(--t-c-crimson-);
				font-size: 35px;
				text-align: center;
			}
			#article-25-1 #myBtnContainer {
				padding: 9px 0px;
				font-size:18px;
				text-align: center;
			}
			/* Add padding BETWEEN each column-1 (if you want) */
			#article-25-1 .row,
			#article-25-1 .row > .column-1 {
				padding: 8px;
			}
			/* Create three equal column-1s that floats next to each other */
			#article-25-1 .column-1 {
				/* float: left; */
				/* width: 33.33%; */
				display: none; /* Hide column-1s by default */
				background: var(--theme-glass-3-);
				margin: -1px;
			}
			/* Clear floats after rows */
			#article-25-1 .row:after {
				content: "";
				display: table;
				clear: both;
			}
			/* Content */
			#article-25-1 .content {
				/* background: var(--theme-glass-3-); */
				border: 1px solid var(--t-c-white-);
				position: relative;
				padding: 10px;
			}
			#article-25-1 .content:hover {
				background: var(--theme-glass-3-);
				border: 1px solid var(--t-c-yellow-);
			}
			/* The "show-1" class is added to the filtered elements */
			#article-25-1 .show-1 {
				display: block;
			}
			/* Style the buttons */
			#article-25-1 #myBtnContainer .my-btn {
				font-size: 18px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				outline: none;
				padding: 8px 8px;
			}
			/* Add a grey background color on mouse-over */
			#article-25-1 #myBtnContainer button:hover {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* Add a dark background color to the active button */
			#article-25-1 #myBtnContainer .active-filter-1{
				display: inline;
			}
			#article-25-1 #myBtnContainer .active .my-btn{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* End Article 25.1  | End Card Filter */
		</style>
		<article id="article-25-1">
			<!-- Start Article 25.1  | Start Card Filter -->
			<h2>PORTFOLIO</h2>
			<div class="line-one"></div>
			<div id="myBtnContainer">
				<div class="active-filter-1 active"><button class="my-btn" onclick="filterSelection('all-my-card-1')"> show-1 all</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('my-dvl')">Developed</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('mt-des')">Design</button></div>
				<div class="active-filter-1"><button class="my-btn" onclick="filterSelection('full-p')">Fullpage</button></div>
			</div>

			<!-- Portfolio Gallery Grid -->
			<div class="container">
				<div class="row">

					<div class="column-1 full-p col-12 col-lg-6">
						<a target="blanck" title="Click for Open" class="btn-wrapper" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 full-p col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 mt-des col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 mt-des col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</a>
					</div>

					<div class="column-1 my-dvl col-12 col-lg-6">
						<a target="blanck" class="btn" href="#" id="filter_btn">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Mountains" style="width:100%">
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- END GRID -->
			<!-- End Article 25.1  | End Card Filter -->
		</article>
		<script>
			// Start Article 25.1  | Start Card Filter
				filterSelection("all-my-card-1")
				function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column-1");
				if (c == "all-my-card-1") c = "";
					for (i = 0; i < x.length; i++) {
						w3RemoveClass(x[i], "show-1");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show-1");
					}
				}
				function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
					for (i = 0; i < arr2.length; i++) {
						if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
						}
					} // </ >
				}
				function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
					}
				}
				element.className = arr1.join(" ");
				}

				var elements = document.getElementsByClassName("active-filter-1");
				for(var i = 0; i < elements.length; i++)
				{
					elements[i].onclick = function(){
						
						// remove class from sibling
						
						var el = elements[0];
						while(el)
						{
							if(el.tagName === "DIV"){
								//remove class
								el.classList.remove("active");
								
							}
							// pass to the new sibling
							el = el.nextSibling;
						}
						
					this.classList.add("active");  
					};
				}
			// End Article 25.1  | End Card Filter 
		</script>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 25.1  | End Card Filter 	 =================================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 26.0 | Start New Year Countdown   *************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 26.0 | Start New Year Countdown */
			@keyframes animate-count {
			0% {
				background-position: 0%;
			}
			100% {
				background-position: 100%;
			}
			}

			#article-26 .container {
				background-image: linear-gradient(
					315deg,
					rgba(248, 155, 158, 0.3) 0%,
					rgba(150, 200, 251, 0.3) 30%,
					rgba(62, 229, 119, 0.3) 60%,
					rgba(201, 217, 255, 0.3) 100%
					);
				background-size: 500% 500%;
				animation: animate-count 10s ease infinite;
				animation-direction: alternate;
				width: 100vw;
				min-height: 100vh;
				margin-left: auto;
				margin-right: auto;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}
			#article-26 .container .title {
				color: var(--t-c-yellow-);
				width: max-content;
				position: absolute;
				font-size: 35px;
				top: -30px;
				left: 50%;
				transform: translateX(-50%);
			}
			@media only screen and (max-width: 768px) {
			#article-26 .container .title {
				top: -35px;
				font-size: 25px;
			}
			}
			#article-26 .container .skeleton {
				position: relative;
				max-width: 620px;
				width: 100%;
				height: 180px;
				display: grid;
				grid-template-columns: repeat(4, 1fr);
				background: rgba(0, 0, 0, 0.3);
				border-radius: 30px;
				transform: skewX(-8deg);
				text-align: center;
				align-content: center;
				align-items: center;
				box-shadow: 2px 1px 10px rgba(0, 0, 0, 0.3);
			}
			@media only screen and (max-width: 768px) {
			.container .skeleton {
				grid-template-columns: 1fr 1fr;
				grid-template-rows: 1fr 1fr;
				transform: none;
				width: 90%;
				height: auto;
			}
			}
			#article-26 .container .skeleton .box {
				background: rgba(0, 0, 0, 0.1);
				border-radius: 30px;
				margin: 20px;
				padding: 10px;
			}
			@media only screen and (max-width: 768px) {#article-26 
			.container .skeleton .box {
				margin: 10px;
				padding: 40px 0;
			}
			}
			#article-26 .container .skeleton .box h2 {
				font-size: 50px;
				color: var(--t-c-white-);
			}
			#article-26 .container .skeleton .box span {
				font-size: 16px;
				color: var(--t-c-yellow-);
			}
			@media only screen and (max-width: 768px) {
				#article-26 .container .skeleton .box h2 {
					font-size: 40px;
				}
			}
			/* End Article 26.0 | End New Year Countdown */
		</style>

		<article id="article-26">
			<!-- Start Article 26.0 | Start New Year Countdown -->
			<div class="container">
				<div class="skeleton">
					<h1 class="title">New Year Countdown 26</h1>
					<div class="box">
						<h2 id="days">##</h2>
						<span>Days</span>
					</div>
					<div class="box">
						<h2 id="hours">##</h2>
						<span>Hours</span>
					</div>
					<div class="box">
						<h2 id="minutes">##</h2>
						<span>Minutes</span>
					</div>
					<div class="box">
						<h2 id="seconds">##</h2>
						<span>Seconds</span>
					</div>
				</div>
			</div>
			<!-- End Article 26.0 | End New Year Countdown -->
		</article>

		<script>
			/* Start Article 26.0 | Start New Year Countdown */
			var date = new Date();
			var v_minute = date.getMinutes();
			var v_hour = date.getHours();
			var v_date = date.getDate() + 2;
			var v_month = date.getMonth() + 2;
			var v_year = date.getFullYear();
			var newYear__ = v_month+ " " +v_date + " " + " " + v_year + " " + v_hour +  ":" + v_minute + ":47";
			console.log(newYear__);
			var newYear = newYear__;
			/* var newYear = "2 17 2022 22:38:47 "; */
			var countdown = function (e) {
				var diff = new Date(e).valueOf() - new Date().valueOf();
				var total = Math.floor(diff / 1000);
				var days = Math.floor(total / 3600 / 24);
				var hours = Math.floor((total / 3600) % 24);
				var minutes = Math.floor(total / 60) % 60;
				var seconds = Math.floor(total) % 60;
				ui(days, hours, minutes, seconds);
			};
			var ui = function (d, h, m, s) {
				var days = document.querySelector('#days');
				var hours = document.querySelector('#hours');
				var minutes = document.querySelector('#minutes');
				var seconds = document.querySelector('#seconds');
				days.innerText = zero(d);
				hours.innerText = zero(h);
				minutes.innerText = zero(m);
				seconds.innerText = zero(s);
			};
			var zero = function (e) { return (e < 10 ? ("0" + e).toString() : e.toString()); };
			/* > </ > >  */
			countdown(newYear);
			setInterval(function () { return countdown(newYear); }, 1000);
			/* End Article 26.0 | End New Year Countdown */
		</script>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 26.0 | End New Year Countdown    **************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 26.0 | Start New Year Countdown 	 ======================= -->
<!-- ======================================================================================================= -->
	<!-- No Customize -->
	<div>
		<style>
			/* Start Article 26.0 | Start New Year Countdown */
			@keyframes animate-count {
			0% {
				background-position: 0%;
			}
			100% {
				background-position: 100%;
			}
			}

			#article-26 .container {
				background-image: linear-gradient(
					315deg,
					rgba(248, 155, 158, 0.3) 0%,
					rgba(150, 200, 251, 0.3) 30%,
					rgba(62, 229, 119, 0.3) 60%,
					rgba(201, 217, 255, 0.3) 100%
					);
				background-size: 500% 500%;
				animation: animate-count 10s ease infinite;
				animation-direction: alternate;
				width: 100vw;
				min-height: 100vh;
				margin-left: auto;
				margin-right: auto;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}
			#article-26 .container .title {
				color: var(--t-c-yellow-);
				width: max-content;
				position: absolute;
				font-size: 35px;
				top: -30px;
				left: 50%;
				transform: translateX(-50%);
			}
			@media only screen and (max-width: 768px) {
			#article-26 .container .title {
				top: -35px;
				font-size: 25px;
			}
			}
			#article-26 .container .skeleton {
				position: relative;
				max-width: 620px;
				width: 100%;
				height: 180px;
				display: grid;
				grid-template-columns: repeat(4, 1fr);
				background: rgba(0, 0, 0, 0.3);
				border-radius: 30px;
				transform: skewX(-8deg);
				text-align: center;
				align-content: center;
				align-items: center;
				box-shadow: 2px 1px 10px rgba(0, 0, 0, 0.3);
			}
			@media only screen and (max-width: 768px) {
			.container .skeleton {
				grid-template-columns: 1fr 1fr;
				grid-template-rows: 1fr 1fr;
				transform: none;
				width: 90%;
				height: auto;
			}
			}
			#article-26 .container .skeleton .box {
				background: rgba(0, 0, 0, 0.1);
				border-radius: 30px;
				margin: 20px;
				padding: 10px;
			}
			@media only screen and (max-width: 768px) {#article-26 
			.container .skeleton .box {
				margin: 10px;
				padding: 40px 0;
			}
			}
			#article-26 .container .skeleton .box h2 {
				font-size: 50px;
				color: var(--t-c-white-);
			}
			#article-26 .container .skeleton .box span {
				font-size: 16px;
				color: var(--t-c-yellow-);
			}
			@media only screen and (max-width: 768px) {
				#article-26 .container .skeleton .box h2 {
					font-size: 40px;
				}
			}
			/* End Article 26.0 | End New Year Countdown */
		</style>

		<article id="article-26">
			<!-- Start Article 26.0 | Start New Year Countdown -->
			<div class="container">
				<div class="skeleton">
					<h1 class="title">New Year Countdown 26</h1>
					<div class="box">
						<h2 id="days">##</h2>
						<span>Days</span>
					</div>
					<div class="box">
						<h2 id="hours">##</h2>
						<span>Hours</span>
					</div>
					<div class="box">
						<h2 id="minutes">##</h2>
						<span>Minutes</span>
					</div>
					<div class="box">
						<h2 id="seconds">##</h2>
						<span>Seconds</span>
					</div>
				</div>
			</div>
			<!-- End Article 26.0 | End New Year Countdown -->
		</article>

		<script>
			/* Start Article 26.0 | Start New Year Countdown */
			var date = new Date();
			var v_minute = date.getMinutes();
			var v_hour = date.getHours();
			var v_date = date.getDate() + 2;
			var v_month = date.getMonth() + 2;
			var v_year = date.getFullYear();
			var newYear__ = v_month+ " " +v_date + " " + " " + v_year + " " + v_hour +  ":" + v_minute + ":47";
			console.log(newYear__);
			var newYear = newYear__;
			/* var newYear = "2 17 2022 22:38:47 "; */
			var countdown = function (e) {
				var diff = new Date(e).valueOf() - new Date().valueOf();
				var total = Math.floor(diff / 1000);
				var days = Math.floor(total / 3600 / 24);
				var hours = Math.floor((total / 3600) % 24);
				var minutes = Math.floor(total / 60) % 60;
				var seconds = Math.floor(total) % 60;
				ui(days, hours, minutes, seconds);
			};
			var ui = function (d, h, m, s) {
				var days = document.querySelector('#days');
				var hours = document.querySelector('#hours');
				var minutes = document.querySelector('#minutes');
				var seconds = document.querySelector('#seconds');
				days.innerText = zero(d);
				hours.innerText = zero(h);
				minutes.innerText = zero(m);
				seconds.innerText = zero(s);
			};
			var zero = function (e) { return (e < 10 ? ("0" + e).toString() : e.toString()); };
			/* > </ > >  */
			countdown(newYear);
			setInterval(function () { return countdown(newYear); }, 1000);
			/* End Article 26.0 | End New Year Countdown */
		</script>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 26.0 | End New Year Countdown 	 =========================== -->
<!-- ======================================================================================================= -->

















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 27.0  |  Start Logo Modal    ******************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 27.0  |  Start Logo Modal */
			#article-27{
				width: 100%;
				background: rgba( 255, 255, 255, 0.25 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
			}
			#article-27 .title h1{
				color: var(--t-c-yellow-);
				font-size: 35px;
			}
			#article-27 .content{
				position: relative;
			}
			#article-27 .content button{
				margin: 9px 9px;
				height: 170px;
				width: 150px;
				height: auto;
				background: transparent;
				backdrop-filter: blur(4px);
			}
			#article-27 .content button img{
				border: 1px solid var(--t-c-transparent-);
			}
			#article-27 .content button p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27 .content button:hover{
				border: 1px solid var(--t-c-yellow-);
			}
			#article-27 .content .modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-27-x .modal-content {
				background: var(--theme-glass-1-);
				backdrop-filter: blur(4px);
				margin: 5% auto;
				padding: 20px;
				border: 1px solid var(--t-c-black-);
				width: 100%;
				height: 100%;
				position: relative;
				margin-top: 65px;
				border-top: 1px solid currentColor;
			}
			#article-27-x .modal-content img{
				width: 60%;
				height: auto;
				margin: 0 auto;
			}
			#article-27-x .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27-x .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-27-x .close-x:hover, #article-27-x .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-27-x .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
			/* End Article 27.0 |  End Logo Modal */
		</style>
		<article id="article-27">
			<!-- Start Article 27.0  |  Start Logo Modal -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1>Service 27</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="smooth" direction="left">
					<div class="content-wrapper">
						<div class="content">
							<button id="myBtn-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 1</p></button>
							<button id="myBtn-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 2</p></button>
							<button id="myBtn-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 3</p></button>
							<button id="myBtn-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 4</p></button>
							<button id="myBtn-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 5</p></button>
							<button id="myBtn-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 6</p></button>
							<button id="myBtn-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 7</p></button>
							<button id="myBtn-8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"><p>Text - 8</p></button>
						</div>
					</div>	
				</marquee>
			</div>
			<!-- End Article 27.0 |  End Logo Modal -->
		</article>
	</div>
	<div id="article-27-x">
		<!-- Start Modal Body -->
		<div id="myModal-1" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-1 close-x">&times;</span>
			<p>Some text in the Modal..1</p>
			</div>
		</div>
		<div id="myModal-2" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-2 close-x">&times;</span>
			<p>Some text in the Modal..2</p>
			</div>
		</div>
		<div id="myModal-3" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-3 close-x">&times;</span>
			<p>Some text in the Modal..3</p>
			</div>
		</div>
		<div id="myModal-4" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-4 close-x">&times;</span>
			<p>Some text in the Modal..4</p>
			</div>
		</div>
		<div id="myModal-5" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-5 close-x">&times;</span>
			<p>Some text in the Modal..5</p>
			</div>
		</div>
		<div id="myModal-6" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-6 close-x">&times;</span>
			<p>Some text in the Modal..6</p>
			</div>
		</div>
		<div id="myModal-7" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-7 close-x">&times;</span>
			<p>Some text in the Modal.. 7</p>
			</div>
		</div>
		<div id="myModal-8" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-8 close-x">&times;</span>
			<p>Some text in the Modal.. 8</p>
			</div>
		</div>
		<!-- End Modal Body -->
	</div>
	<script>
		/* 1 */
		var modal1 = document.getElementById("myModal-1");
		var btn1 = document.getElementById("myBtn-1");
		var span1 = document.getElementsByClassName("close-1")[0];
		btn1.onclick = function() {
			modal1.style.display = "block";
		}
		span1.onclick = function() {
			modal1.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal1) {
				modal1.style.display = "none";
			}
		}

		/* 2 */
		var modal2 = document.getElementById("myModal-2");
		var btn2 = document.getElementById("myBtn-2");
		var span2 = document.getElementsByClassName("close-2")[0];
		btn2.onclick = function() {
			modal2.style.display = "block";
		}
		span2.onclick = function() {
			modal2.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}

		/* 3 */
		var modal3 = document.getElementById("myModal-3");
		var btn3 = document.getElementById("myBtn-3");
		var span3 = document.getElementsByClassName("close-3")[0];
		btn3.onclick = function() {
			modal3.style.display = "block";
		}
		span3.onclick = function() {
			modal3.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal3) {
				modal3.style.display = "none";
			}
		}

		/* 4 */
		var modal4 = document.getElementById("myModal-4");
		var btn4 = document.getElementById("myBtn-4");
		var span4 = document.getElementsByClassName("close-4")[0];
		btn4.onclick = function() {
			modal4.style.display = "block";
		}
		span4.onclick = function() {
			modal4.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal4) {
				modal4.style.display = "none";
			}
		}

		/* 5 */
		var modal5 = document.getElementById("myModal-5");
		var btn5 = document.getElementById("myBtn-5");
		var span5 = document.getElementsByClassName("close-5")[0];
		btn5.onclick = function() {
			modal5.style.display = "block";
		}
		span5.onclick = function() {
			modal5.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal5) {
				modal5.style.display = "none";
			}
		}

		/* 6 */
		var modal6 = document.getElementById("myModal-6");
		var btn6 = document.getElementById("myBtn-6");
		var span6 = document.getElementsByClassName("close-6")[0];
		btn6.onclick = function() {
			modal6.style.display = "block";
		}
		span6.onclick = function() {
			modal6.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal6) {
				modal6.style.display = "none";
			}
		}

		/* 7 */
		var modal7 = document.getElementById("myModal-7");
		var btn7 = document.getElementById("myBtn-7");
		var span7 = document.getElementsByClassName("close-7")[0];
		btn7.onclick = function() {
			modal7.style.display = "block";
		}
		span7.onclick = function() {
			modal7.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal7) {
				modal7.style.display = "none";
			}
		}

		/* 8 */
		var modal8 = document.getElementById("myModal-8");
		var btn8 = document.getElementById("myBtn-8");
		var span8 = document.getElementsByClassName("close-8")[0];
		btn8.onclick = function() {
			modal8.style.display = "block";
		}
		span8.onclick = function() {
			modal8.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal8) {
				modal8.style.display = "none";
			}
		}
	</script>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 27.0 |  End Logo Modal    ********************* -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 27.0  |  Start Logo Modal 	 =============================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_27_0',
		);
		$p_t_a_27_0 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_27_0->have_posts() ): $p_t_a_27_0->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 27.0  |  Start Logo Modal */
			#article-27{
				width: 100%;
				background: rgba( 255, 255, 255, 0.25 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
			}
			#article-27 .title h1{
				color: var(--t-c-yellow-);
				font-size: 35px;
			}
			#article-27 .content{
				position: relative;
			}
			#article-27 .content button{
				margin: 9px 9px;
				height: 170px;
				width: 150px;
				height: auto;
				background: transparent;
				backdrop-filter: blur(4px);
			}
			#article-27 .content button img{
				border: 1px solid var(--t-c-transparent-);
			}
			#article-27 .content button p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27 .content button:hover{
				border: 1px solid var(--t-c-yellow-);
			}
			#article-27 .content .modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-27-x .modal-content {
				background: var(--theme-glass-1-);
				backdrop-filter: blur(4px);
				margin: 5% auto;
				padding: 20px;
				border: 1px solid var(--t-c-black-);
				width: 100%;
				height: 100%;
				position: relative;
				margin-top: 65px;
				border-top: 1px solid currentColor;
			}
			#article-27-x .modal-content img{
				width: 60%;
				height: auto;
				margin: 0 auto;
			}
			#article-27-x .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27-x .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-27-x .close-x:hover, #article-27-x .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-27-x .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
			/* End Article 27.0 |  End Logo Modal */
		</style>
		<article id="article-27">
			<!-- Start Article 27.0  |  Start Logo Modal -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1><?php the_title(); ?></h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="smooth" direction="left">
					<div class="content-wrapper">
						<div class="content">
							<button id="myBtn-1"><img src="<?php the_field('p_t_a_c_f_27_0_1'); ?>" alt="Logo"><p>Text - 1</p></button>
							<button id="myBtn-2"><img src="<?php the_field('p_t_a_c_f_27_0_2'); ?>" alt="Logo"><p>Text - 2</p></button>
							<button id="myBtn-3"><img src="<?php the_field('p_t_a_c_f_27_0_3'); ?>" alt="Logo"><p>Text - 3</p></button>
							<button id="myBtn-4"><img src="<?php the_field('p_t_a_c_f_27_0_4'); ?>" alt="Logo"><p>Text - 4</p></button>
							<button id="myBtn-5"><img src="<?php the_field('p_t_a_c_f_27_0_5'); ?>" alt="Logo"><p>Text - 5</p></button>
							<button id="myBtn-6"><img src="<?php the_field('p_t_a_c_f_27_0_6'); ?>" alt="Logo"><p>Text - 6</p></button>
							<button id="myBtn-7"><img src="<?php the_field('p_t_a_c_f_27_0_7'); ?>" alt="Logo"><p>Text - 7</p></button>
							<button id="myBtn-8"><img src="<?php the_field('p_t_a_c_f_27_0_8'); ?>" alt="Logo"><p>Text - 8</p></button>
						</div>
					</div>	
				</marquee>
			</div>
			<!-- End Article 27.0 |  End Logo Modal -->
		</article>
	</div>
	<div id="article-27-x">
		<!-- Start Modal Body -->
		<div id="myModal-1" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_1'); ?>" alt="Logo">
			<span class="close-1 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_9'); ?></p>
			</div>
		</div>
		<div id="myModal-2" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_2'); ?>" alt="Logo">
			<span class="close-2 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_10'); ?></p>
			</div>
		</div>
		<div id="myModal-3" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_3'); ?>" alt="Logo">
			<span class="close-3 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_11'); ?></p>
			</div>
		</div>
		<div id="myModal-4" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_4'); ?>" alt="Logo">
			<span class="close-4 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_12'); ?></p>
			</div>
		</div>
		<div id="myModal-5" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_5'); ?>" alt="Logo">
			<span class="close-5 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_13'); ?></p>
			</div>
		</div>
		<div id="myModal-6" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_6'); ?>" alt="Logo">
			<span class="close-6 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_14'); ?></p>
			</div>
		</div>
		<div id="myModal-7" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_7'); ?>" alt="Logo">
			<span class="close-7 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_15'); ?></p>
			</div>
		</div>
		<div id="myModal-8" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_27_0_8'); ?>" alt="Logo">
			<span class="close-8 close-x">&times;</span>
			<p><?php the_field('p_t_a_c_f_27_0_16'); ?></p>
			</div>
		</div>
		<!-- End Modal Body -->
	</div>
	<script>
		/* 1 */
		var modal1 = document.getElementById("myModal-1");
		var btn1 = document.getElementById("myBtn-1");
		var span1 = document.getElementsByClassName("close-1")[0];
		btn1.onclick = function() {
			modal1.style.display = "block";
		}
		span1.onclick = function() {
			modal1.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal1) {
				modal1.style.display = "none";
			}
		}

		/* 2 */
		var modal2 = document.getElementById("myModal-2");
		var btn2 = document.getElementById("myBtn-2");
		var span2 = document.getElementsByClassName("close-2")[0];
		btn2.onclick = function() {
			modal2.style.display = "block";
		}
		span2.onclick = function() {
			modal2.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}

		/* 3 */
		var modal3 = document.getElementById("myModal-3");
		var btn3 = document.getElementById("myBtn-3");
		var span3 = document.getElementsByClassName("close-3")[0];
		btn3.onclick = function() {
			modal3.style.display = "block";
		}
		span3.onclick = function() {
			modal3.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal3) {
				modal3.style.display = "none";
			}
		}

		/* 4 */
		var modal4 = document.getElementById("myModal-4");
		var btn4 = document.getElementById("myBtn-4");
		var span4 = document.getElementsByClassName("close-4")[0];
		btn4.onclick = function() {
			modal4.style.display = "block";
		}
		span4.onclick = function() {
			modal4.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal4) {
				modal4.style.display = "none";
			}
		}

		/* 5 */
		var modal5 = document.getElementById("myModal-5");
		var btn5 = document.getElementById("myBtn-5");
		var span5 = document.getElementsByClassName("close-5")[0];
		btn5.onclick = function() {
			modal5.style.display = "block";
		}
		span5.onclick = function() {
			modal5.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal5) {
				modal5.style.display = "none";
			}
		}

		/* 6 */
		var modal6 = document.getElementById("myModal-6");
		var btn6 = document.getElementById("myBtn-6");
		var span6 = document.getElementsByClassName("close-6")[0];
		btn6.onclick = function() {
			modal6.style.display = "block";
		}
		span6.onclick = function() {
			modal6.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal6) {
				modal6.style.display = "none";
			}
		}

		/* 7 */
		var modal7 = document.getElementById("myModal-7");
		var btn7 = document.getElementById("myBtn-7");
		var span7 = document.getElementsByClassName("close-7")[0];
		btn7.onclick = function() {
			modal7.style.display = "block";
		}
		span7.onclick = function() {
			modal7.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal7) {
				modal7.style.display = "none";
			}
		}

		/* 8 */
		var modal8 = document.getElementById("myModal-8");
		var btn8 = document.getElementById("myBtn-8");
		var span8 = document.getElementsByClassName("close-8")[0];
		btn8.onclick = function() {
			modal8.style.display = "block";
		}
		span8.onclick = function() {
			modal8.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal8) {
				modal8.style.display = "none";
			}
		}
	</script>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_27_0',
    	the_field => p_t_a_c_f_27_0_1	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_2	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_3	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_4	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_5	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_6	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_7	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_8	=>	 Image-url
    	the_field => p_t_a_c_f_27_0_9	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_10	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_11	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_12	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_13	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_14	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_15	=>	 Text Title
    	the_field => p_t_a_c_f_27_0_16	=>	 Text Title
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_27_0     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_27_0
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
			'rewrite'            => array( 'slug' => 'p_t_a_27_0' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_27_0', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_27_0     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 27.0 |  End Logo Modal 	 =================================== -->
<!-- ======================================================================================================= -->


















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 28.0 |  Start Logo Modal-2    ******************* -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 28.0 |  Start Logo Modal-2 */
			#article-28{
				position: relative;
				margin: 9px 0px;
			}
			#article-28 h1{
				font-size: 35px;
				color: var(--t-c-crimson-);
			}
			#article-28 .item{
				width: 100%;
				padding: 20px;
			}
			
			#article-28 .item{
				position: relative;
			}
			#article-28 .item button{
				height: 170px;
				width: 100%;
				height: auto;
			}
			#article-28 .item button img{
				border: 1px solid var(--t-c-transparent-);;
			}
			#article-28 .item p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-28 .item button img:hover{
				border: 1px solid var(--t-c-yellow-);
			}
			#article-28 .item .modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-28 .line-dell{
				height: 1px;
				width: 100%;
				background: var(--t-c-white-);
				display: block;
				padding: 0;
			}
			#article-28 .owl-nav{
				display: none;
			}
			#article-28 .owl-dots{
				margin: 6px auto;
			}
			#article-28-x .modal-content {
				background: var(--theme-glass-1-);
				backdrop-filter: blur(4px);
				margin: 5% auto;
				padding: 20px;
				border: 1px solid var(--t-c-black-);
				width: 100%;
				height: 100%;
				position: relative;
				margin-top: 65px;
				border-top: 1px solid currentColor;
			}
			#article-28-x .modal-content img{
				width: 60%;
				height: auto;
				margin: 0 auto;
			}
			#article-28-x .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-28-x .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-28-x .close-x:hover, #article-28-x .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-28-x .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
			/* End Article 28.0  |  End Logo Modal-2 */
		</style>
		<article id="article-28">
			<!-- Start Article 28.0 |  Start Logo Modal-2 -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1>Service 28</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel-28 owl-carousel owl-theme">
							<div class="item">
								<button id="myBtn-28-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 1</p>
							</div>
							<div class="item">
								<button id="myBtn-28-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 2</p>
							</div>
							<div class="item">
								<button id="myBtn-28-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 3</p>
							</div>
							<div class="item">
								<button id="myBtn-28-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 4</p>
							</div>
							<div class="item">
								<button id="myBtn-28-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 5</p>
							</div>
							<div class="item">
								<button id="myBtn-28-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 6</p>
							</div>
							<div class="item">
								<button id="myBtn-28-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 7</p>
							</div>
							<div class="item">
								<button id="myBtn-28-8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo"></button>
								<p>Text - 8</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 28.0  |  End Logo Modal-2 -->
		</article>
	</div>
	<div id="article-28-x">
		<!-- Start Article 28.0 |  Start Logo Modal-2 -->
		<div id="myModal-28-1" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-1 close-x">&times;</span>
			<p>Some text in the Modal..1</p>
			</div>
		</div>
		<div id="myModal-28-2" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-2 close-x">&times;</span>
			<p>Some text in the Modal..2</p>
			</div>
		</div>
		<div id="myModal-28-3" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-3 close-x">&times;</span>
			<p>Some text in the Modal..3</p>
			</div>
		</div>
		<div id="myModal-28-4" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-4 close-x">&times;</span>
			<p>Some text in the Modal..4</p>
			</div>
		</div>
		<div id="myModal-28-5" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-5 close-x">&times;</span>
			<p>Some text in the Modal..5</p>
			</div>
		</div>
		<div id="myModal-28-6" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-6 close-x">&times;</span>
			<p>Some text in the Modal..6</p>
			</div>
		</div>
		<div id="myModal-28-7" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-7 close-x">&times;</span>
			<p>Some text in the Modal.. 7</p>
			</div>
		</div>
		<div id="myModal-28-8" class="modal">
			<div class="modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg" alt="Logo">
			<span class="close-28-8 close-x">&times;</span>
			<p>Some text in the Modal.. 8</p>
			</div>
		</div>
		<!-- End Article 28.0  |  End Logo Modal-2 -->
	</div>
	<script>
		/* 1 */
		var modal28281 = document.getElementById("myModal-28-1");
		var btn28281 = document.getElementById("myBtn-28-1");
		var span28281 = document.getElementsByClassName("close-28-1")[0];
		btn28281.onclick = function() {
			modal28281.style.display = "block";
		}
		span28281.onclick = function() {
			modal28281.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal28281) {
				modal28281.style.display = "none";
			}
		}

		/* 2 */
		var modal282 = document.getElementById("myModal-28-2");
		var btn282 = document.getElementById("myBtn-28-2");
		var span282 = document.getElementsByClassName("close-28-2")[0];
		btn282.onclick = function() {
			modal282.style.display = "block";
		}
		span282.onclick = function() {
			modal282.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal282) {
				modal282.style.display = "none";
			}
		}

		/* 3 */
		var modal283 = document.getElementById("myModal-28-3");
		var btn283 = document.getElementById("myBtn-28-3");
		var span283 = document.getElementsByClassName("close-28-3")[0];
		btn283.onclick = function() {
			modal283.style.display = "block";
		}
		span283.onclick = function() {
			modal283.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal283) {
				modal283.style.display = "none";
			}
		}

		/* 4 */
		var modal284 = document.getElementById("myModal-28-4");
		var btn284 = document.getElementById("myBtn-28-4");
		var span284 = document.getElementsByClassName("close-28-4")[0];
		btn284.onclick = function() {
			modal284.style.display = "block";
		}
		span284.onclick = function() {
			modal284.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal284) {
				modal284.style.display = "none";
			}
		}

		/* 5 */
		var modal285 = document.getElementById("myModal-28-5");
		var btn285 = document.getElementById("myBtn-28-5");
		var span285 = document.getElementsByClassName("close-28-5")[0];
		btn285.onclick = function() {
			modal285.style.display = "block";
		}
		span285.onclick = function() {
			modal285.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal285) {
				modal285.style.display = "none";
			}
		}

		/* 6 */
		var modal286 = document.getElementById("myModal-28-6");
		var btn286 = document.getElementById("myBtn-28-6");
		var span286 = document.getElementsByClassName("close-28-6")[0];
		btn286.onclick = function() {
			modal286.style.display = "block";
		}
		span286.onclick = function() {
			modal286.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal286) {
				modal286.style.display = "none";
			}
		}

		/* 7 */
		var modal287 = document.getElementById("myModal-28-7");
		var btn287 = document.getElementById("myBtn-28-7");
		var span287 = document.getElementsByClassName("close-28-7")[0];
		btn287.onclick = function() {
			modal287.style.display = "block";
		}
		span287.onclick = function() {
			modal287.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal287) {
				modal287.style.display = "none";
			}
		}

		/* 8 */
		var modal288 = document.getElementById("myModal-28-8");
		var btn288 = document.getElementById("myBtn-28-8");
		var span288 = document.getElementsByClassName("close-28-8")[0];
		btn288.onclick = function() {
			modal288.style.display = "block";
		}
		span288.onclick = function() {
			modal288.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal288) {
				modal288.style.display = "none";
			}
		}
	</script>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 28.0  |  End Logo Modal-2    ********************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 28.0 |  Start Logo Modal-2 	 =============================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_28_0',
		);
		$p_t_a_28_0 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_28_0->have_posts() ): $p_t_a_28_0->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 28.0 |  Start Logo Modal-2 */
			#article-28{
				position: relative;
				margin: 9px 0px;
			}
			#article-28 h1{
				font-size: 35px;
				color: var(--t-c-crimson-);
			}
			#article-28 .item{
				width: 100%;
				padding: 20px;
			}
			
			#article-28 .item{
				position: relative;
			}
			#article-28 .item button{
				height: 170px;
				width: 100%;
				height: auto;
			}
			#article-28 .item button img{
				border: 1px solid var(--t-c-transparent-);;
			}
			#article-28 .item p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-28 .item button img:hover{
				border: 1px solid var(--t-c-yellow-);
			}
			#article-28 .item .modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-28 .line-dell{
				height: 1px;
				width: 100%;
				background: var(--t-c-white-);
				display: block;
				padding: 0;
			}
			#article-28 .owl-nav{
				display: none;
			}
			#article-28 .owl-dots{
				margin: 6px auto;
			}
			#article-28-x .modal-content {
				background: var(--theme-glass-1-);
				backdrop-filter: blur(4px);
				margin: 5% auto;
				padding: 20px;
				border: 1px solid var(--t-c-black-);
				width: 100%;
				height: 100%;
				position: relative;
				margin-top: 65px;
				border-top: 1px solid currentColor;
			}
			#article-28-x .modal-content img{
				width: 60%;
				height: auto;
				margin: 0 auto;
			}
			#article-28-x .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-28-x .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-28-x .close-x:hover, #article-28-x .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-28-x .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
			/* End Article 28.0  |  End Logo Modal-2 */
		</style>
		<article id="article-28">
			<!-- Start Article 28.0 |  Start Logo Modal-2 -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1><?php the_title(); ?></h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel-28 owl-carousel owl-theme">
							<div class="item">
								<button id="myBtn-28-1"><img src="<?php the_field('p_t_a_c_f_28_0_1'); ?>" alt="Logo"></button>
								<p>Text - 1</p>
							</div>
							<div class="item">
								<button id="myBtn-28-2"><img src="<?php the_field('p_t_a_c_f_28_0_2'); ?>" alt="Logo"></button>
								<p>Text - 2</p>
							</div>
							<div class="item">
								<button id="myBtn-28-3"><img src="<?php the_field('p_t_a_c_f_28_0_3'); ?>" alt="Logo"></button>
								<p>Text - 3</p>
							</div>
							<div class="item">
								<button id="myBtn-28-4"><img src="<?php the_field('p_t_a_c_f_28_0_4'); ?>" alt="Logo"></button>
								<p>Text - 4</p>
							</div>
							<div class="item">
								<button id="myBtn-28-5"><img src="<?php the_field('p_t_a_c_f_28_0_5'); ?>" alt="Logo"></button>
								<p>Text - 5</p>
							</div>
							<div class="item">
								<button id="myBtn-28-6"><img src="<?php the_field('p_t_a_c_f_28_0_6'); ?>" alt="Logo"></button>
								<p>Text - 6</p>
							</div>
							<div class="item">
								<button id="myBtn-28-7"><img src="<?php the_field('p_t_a_c_f_28_0_7'); ?>" alt="Logo"></button>
								<p>Text - 7</p>
							</div>
							<div class="item">
								<button id="myBtn-28-8"><img src="<?php the_field('p_t_a_c_f_28_0_8'); ?>" alt="Logo"></button>
								<p>Text - 8</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 28.0  |  End Logo Modal-2 -->
		</article>
	</div>
	<div id="article-28-x">
		<!-- Start Article 28.0 |  Start Logo Modal-2 -->
		<div id="myModal-28-1" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_1'); ?>" alt="Logo">
			<span class="close-28-1 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_9</p>
			</div>
		</div>
		<div id="myModal-28-2" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_2'); ?>" alt="Logo">
			<span class="close-28-2 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_10</p>
			</div>
		</div>
		<div id="myModal-28-3" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_3'); ?>" alt="Logo">
			<span class="close-28-3 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_11</p>
			</div>
		</div>
		<div id="myModal-28-4" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_4'); ?>" alt="Logo">
			<span class="close-28-4 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_12</p>
			</div>
		</div>
		<div id="myModal-28-5" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_5'); ?>" alt="Logo">
			<span class="close-28-5 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_13</p>
			</div>
		</div>
		<div id="myModal-28-6" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_6'); ?>" alt="Logo">
			<span class="close-28-6 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_14</p>
			</div>
		</div>
		<div id="myModal-28-7" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_7'); ?>" alt="Logo">
			<span class="close-28-7 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_15</p>
			</div>
		</div>
		<div id="myModal-28-8" class="modal">
			<div class="modal-content">
				<img src="<?php the_field('p_t_a_c_f_28_0_8'); ?>" alt="Logo">
			<span class="close-28-8 close-x">&times;</span>
			<p>p_t_a_c_f_28_0_16</p>
			</div>
		</div>
		<!-- End Article 28.0  |  End Logo Modal-2 -->
	</div>
	<script>
		/* 1 */
		var modal28281 = document.getElementById("myModal-28-1");
		var btn28281 = document.getElementById("myBtn-28-1");
		var span28281 = document.getElementsByClassName("close-28-1")[0];
		btn28281.onclick = function() {
			modal28281.style.display = "block";
		}
		span28281.onclick = function() {
			modal28281.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal28281) {
				modal28281.style.display = "none";
			}
		}

		/* 2 */
		var modal282 = document.getElementById("myModal-28-2");
		var btn282 = document.getElementById("myBtn-28-2");
		var span282 = document.getElementsByClassName("close-28-2")[0];
		btn282.onclick = function() {
			modal282.style.display = "block";
		}
		span282.onclick = function() {
			modal282.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal282) {
				modal282.style.display = "none";
			}
		}

		/* 3 */
		var modal283 = document.getElementById("myModal-28-3");
		var btn283 = document.getElementById("myBtn-28-3");
		var span283 = document.getElementsByClassName("close-28-3")[0];
		btn283.onclick = function() {
			modal283.style.display = "block";
		}
		span283.onclick = function() {
			modal283.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal283) {
				modal283.style.display = "none";
			}
		}

		/* 4 */
		var modal284 = document.getElementById("myModal-28-4");
		var btn284 = document.getElementById("myBtn-28-4");
		var span284 = document.getElementsByClassName("close-28-4")[0];
		btn284.onclick = function() {
			modal284.style.display = "block";
		}
		span284.onclick = function() {
			modal284.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal284) {
				modal284.style.display = "none";
			}
		}

		/* 5 */
		var modal285 = document.getElementById("myModal-28-5");
		var btn285 = document.getElementById("myBtn-28-5");
		var span285 = document.getElementsByClassName("close-28-5")[0];
		btn285.onclick = function() {
			modal285.style.display = "block";
		}
		span285.onclick = function() {
			modal285.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal285) {
				modal285.style.display = "none";
			}
		}

		/* 6 */
		var modal286 = document.getElementById("myModal-28-6");
		var btn286 = document.getElementById("myBtn-28-6");
		var span286 = document.getElementsByClassName("close-28-6")[0];
		btn286.onclick = function() {
			modal286.style.display = "block";
		}
		span286.onclick = function() {
			modal286.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal286) {
				modal286.style.display = "none";
			}
		}

		/* 7 */
		var modal287 = document.getElementById("myModal-28-7");
		var btn287 = document.getElementById("myBtn-28-7");
		var span287 = document.getElementsByClassName("close-28-7")[0];
		btn287.onclick = function() {
			modal287.style.display = "block";
		}
		span287.onclick = function() {
			modal287.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal287) {
				modal287.style.display = "none";
			}
		}

		/* 8 */
		var modal288 = document.getElementById("myModal-28-8");
		var btn288 = document.getElementById("myBtn-28-8");
		var span288 = document.getElementsByClassName("close-28-8")[0];
		btn288.onclick = function() {
			modal288.style.display = "block";
		}
		span288.onclick = function() {
			modal288.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal288) {
				modal288.style.display = "none";
			}
		}
	</script>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_28_0',
    	the_field => p_t_a_c_f_28_0_1	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_2	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_3	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_4	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_5	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_6	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_7	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_8	=>	 Image-url
    	the_field => p_t_a_c_f_28_0_9	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_10	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_11	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_12	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_13	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_14	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_15	=>	 simple Text
    	the_field => p_t_a_c_f_28_0_16	=>	 simple Text
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_28_0     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_28_0
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
			'rewrite'            => array( 'slug' => 'p_t_a_28_0' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_28_0', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_28_0     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 28.0  |  End Logo Modal-2 	 =============================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 29.0  |  Start Mega Footer   ******************** -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 29.0  |  Start Mega Footer */
			#article-29 .nb-footer {
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
				border-top: 4px solid var(--t-c-yellow-);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				background: var(--t-c-yellow-);;
			}
			#article-29 .nb-footer .about {
				margin: 0 auto;
				margin-top: 40px;
				max-width: 1170px;
				text-align: center;
			}
			#article-29 .nb-footer .about p {
				font-size: 22px;
				line-height: 25px;
				color: var(--t-c-white-);
				margin-top: 30px;
			}
			#article-29 .nb-footer .about .social-media .list-inline li {
				display: inline;
			}
			#article-29 .nb-footer .about .social-media {
				margin-top: 15px;
			}
			#article-29 .nb-footer .about .social-media ul li a {
				display: inline-block;
				width: 45px;
				height: 45px;
				line-height: 45px;
				border-radius: 50%;
				font-size: 16px;
				color: var(--t-c-white-);
				border: 1px solid rgba(255, 255, 255, 0.3);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				color: var(--t-c-black-);
				border-color: var(--t-c-white-);
			}
			#article-29 .nb-footer .footer-info-single {
				margin-top: 30px;
			}
			#article-29 .nb-footer .footer-info-single .title {
				color: var(--t-c-white-);
				text-transform: uppercase;
				font-size: 22px;
				border-left: 4px solid var(--t-c-yellow-);;
				padding-left: 5px;
			}
			#article-29 .nb-footer .footer-info-single ul li a {
				display: block;
				color: var(--t-c-white-);
				padding: 2px 0;
				font-size:18px;
			}
			#article-29 .nb-footer .footer-info-single ul li a:hover {
				color: var(--t-c-yellow-);
			}
			#article-29 .nb-footer .footer-info-single p {
				font-size: 18px;
				line-height: 20px;
				color: var(--t-c-white-);
			}
			/* End Article 29.0  |  End  Mega Footer */
		</style>
		<article id="article-29">
			<!-- Start Article 29.0  |  Start Mega Footer -->
			<footer class="nb-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="about">
								<p>Bootstrap Footer example snippets with CSS, Javascript and HTML. Code example of bootstrap-3 footer using HTML, Javascript, jQuery, and CSS. 5 Beautiful and Responsive Footer Templates. Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. 29</p>

								<div class="social-media">
									<ul class="list-inline">
										<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<h3 class="title">Help Center</h3>
								<ul class="list-unstyled">
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<h3 class="title">Customer information</h3>
								<ul class="list-unstyled">
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<h3 class="title">Security & privacy</h3>
								<ul class="list-unstyled">
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
									<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<h3 class="title">Payment</h3>
								<p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>
								
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Article 29.0  |  End  Mega Footer -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 29.0  |  End  Mega Footer   *********************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 29.0  |  Start Mega Footer 	 =============================== -->
<!-- ======================================================================================================= -->
	<?php
		$args = array(
			'post_type'  =>  'p_t_a_29_0',
		);
		$p_t_a_29_0 = new WP_Query( $args );
		if ( have_posts() ):
			while ( $p_t_a_29_0->have_posts() ): $p_t_a_29_0->the_post();
	?>
	<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 29.0  |  Start Mega Footer */
			#article-29 .nb-footer {
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
				border-top: 4px solid var(--t-c-yellow-);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				background: var(--t-c-yellow-);;
			}
			#article-29 .nb-footer .about {
				margin: 0 auto;
				margin-top: 40px;
				max-width: 1170px;
				text-align: center;
			}
			#article-29 .nb-footer .about p {
				font-size: 22px;
				line-height: 25px;
				color: var(--t-c-white-);
				margin-top: 30px;
			}
			#article-29 .nb-footer .about .social-media .list-inline li {
				display: inline;
			}
			#article-29 .nb-footer .about .social-media {
				margin-top: 15px;
			}
			#article-29 .nb-footer .about .social-media ul li a {
				display: inline-block;
				width: 45px;
				height: 45px;
				line-height: 45px;
				border-radius: 50%;
				font-size: 16px;
				color: var(--t-c-white-);
				border: 1px solid rgba(255, 255, 255, 0.3);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				color: var(--t-c-black-);
				border-color: var(--t-c-white-);
			}
			#article-29 .nb-footer .footer-info-single {
				margin-top: 30px;
			}
			#article-29 .nb-footer .footer-info-single .title {
				color: var(--t-c-white-);
				text-transform: uppercase;
				font-size: 22px;
				border-left: 4px solid var(--t-c-yellow-);;
				padding-left: 5px;
			}
			#article-29 .nb-footer .footer-info-single ul li a {
				display: block;
				color: var(--t-c-white-);
				padding: 2px 0;
				font-size:18px;
			}
			#article-29 .nb-footer .footer-info-single ul li a:hover {
				color: var(--t-c-yellow-);
			}
			#article-29 .nb-footer .footer-info-single p {
				font-size: 18px;
				line-height: 20px;
				color: var(--t-c-white-);
			}
			/* End Article 29.0  |  End  Mega Footer */
		</style>
		<article id="article-29">
			<!-- Start Article 29.0  |  Start Mega Footer -->
			<footer class="nb-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="about">
								<p><?php echo the_content(); ?></p>

								<div class="social-media">
									<?php the_field('p_t_a_c_f_29_0_1'); ?>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<?php the_field('p_t_a_c_f_29_0_2'); ?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<?php the_field('p_t_a_c_f_29_0_3'); ?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<?php the_field('p_t_a_c_f_29_0_4'); ?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-info-single">
								<?php the_field('p_t_a_c_f_29_0_5'); ?>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Article 29.0  |  End  Mega Footer -->
		</article>
	</div>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<?php endwhile; endif; ?>
	<!-- ======================================================================================================= -->
	<!-- ======================================================================================================= -->
	<!-- -----------------------------------------------------------------------------------------------------------
	'post_type'  =>  'p_t_a_29_0',
    	the_field => p_t_a_c_f_29_0_1	=>	 Text area (social-media)
    	the_field => p_t_a_c_f_29_0_2	=>	 Text area (Header & Navigation)
    	the_field => p_t_a_c_f_29_0_3	=>	 Text area (Header & Navigation)
    	the_field => p_t_a_c_f_29_0_4	=>	 Text area (Header & Navigation)
    	the_field => p_t_a_c_f_29_0_5	=>	 Text area (Header & Text)
	----------------------------------------------------------------------------------------------------------------
	/*=====================================================================================================================================================*/
	/****************************************************        Start Post_type => p_t_a_29_0     **********************************************************/
	/*=======================================================================================================================================================
		Post_type => p_t_a_29_0
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
			'rewrite'            => array( 'slug' => 'p_t_a_29_0' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'p_t_a_29_0', $args );

	/*=====================================================================================================================================================*/
	/****************************************************        End Post_type => p_t_a_29_0     ************************************************************/
	/*=====================================================================================================================================================*/
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 29.0  |  End  Mega Footer 	 =============================== -->
<!-- ======================================================================================================= -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 30.0  |  Start Footer   ************************* -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 30.0  |  Start Footer */
			#article-30{
				padding: 9px 0px;
				background: var(--theme-glass-1-);
			}
			#article-30 p{
				font-size: 18px;
				text-align: center;
				color: var(--t-c-white-);
			}
			@media only screen and (max-width: 470px) {
				#article-30 p{
					text-align: start;
					padding-left: 9px;
				}
			}
			/* End Article 30.0  |  End Footer */
		</style>
		<article id="article-30">
			<!-- Start Article 30.0  |  Start Footer -->
			<div class="footer-text">
				<p>Copyright &copy; Toufiquer Rahman</p>
			</div>
			<!-- End Article 30.0  |  End Footer -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 30.0  |  End Footer   ***************************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 30.0  |  Start Footer 	 =================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 30.0  |  Start Footer */
			#article-30{
				padding: 9px 0px;
				background: var(--theme-glass-1-);
			}
			#article-30 p{
				font-size: 18px;
				text-align: center;
				color: var(--t-c-white-);
			}
			@media only screen and (max-width: 470px) {
				#article-30 p{
					text-align: start;
					padding-left: 9px;
				}
			}
			/* End Article 30.0  |  End Footer */
		</style>
		<article id="article-30">
			<!-- Start Article 30.0  |  Start Footer -->
			<div class="footer-text">
				<p><?php dynamic_sidebar('article_30'); ?></p>
			</div>
			<!-- End Article 30.0  |  End Footer -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 30.0  |  End Footer 	 ======================================= -->
<!-- ======================================================================================================= -->
