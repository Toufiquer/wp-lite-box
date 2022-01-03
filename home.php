<?php get_header();?>
	<div class="d-none" id="up-btn-link"></div>
<!-- ******************************************************************************** -->

<!-- --------------------------------------------------------------------------------- -->
<!-- 									Top Button Link			   					   -->
<!-- --------------------------------------------------------------------------------- -->
	<div>
		<style>
			.up-btn::before{
				background: var(--t-c-black-);
				border-radius: 10px;
			}
			.up-btn{
				position: fixed;
				opacity: 0;
				transition: .4s;
				z-index: 999;
				bottom: 15px;
				right: 15px;
				color: var(--t-c-yellow-);
				font-size:35px;
			}
			.up-btn:hover{
				color: var(--t-c-crimson-);
			}
			.up-btn.active{
				opacity: 1;
			}
		</style>
			<a class="black-bg" href="#article-btn"><i class="up-btn bi bi-arrow-up-square"></i></a>
		<script>
			const toTop = document.querySelector(".up-btn");
			window.addEventListener("scroll", () => {
			if (window.pageYOffset > 200) {
				toTop.classList.add("active");
			} else {
				toTop.classList.remove("active");
			}
			});
		</script>
	</div>
<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 1  |  Start Root Css	==================================== -->
<!-- ======================================================================================================= -->
	<style>
		/* Start Article 1  |  Start Root Css */
		:root{
			--t-c-crimson-: crimson;
			--t-c-white-: white;
			--t-c-yellow-: yellow;
			--t-c-black-: rgba(0,0,0);
			--t-c-transparent-: rgba(0,0,0,0);
			--t-c-black-transparent-: rgba(0,0,0,0.6);
			--theme-glass-1-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.98) );
			--theme-glass-2-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6) );
			--theme-glass-3-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) );
			--theme-glass-4-: rgba( 255, 255, 255, 0.25 );
			--font-family-: "Times New Roman" ;
		}
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		html,body{
			overflow-x: hidden;
			scroll-behavior: smooth;
			font-family: 'Times New Roman', Times, serif;
		}
		a{
			text-decoration: none;
		}
		a:hover, a:focus{
			text-decoration: none;
			color: var(--t-c-yellow-);
		}
		hr{
			background: var(--t-c-yellow-);
		}
		img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}
		p{
			color: var(--t-c-black-);
			font-size:18px;
			margin-top: 5px;
			line-height: 18px;
			font-weight: 300;
		}
		.line-one {
			height: 1px;
			width: 200px;
			background: var(--t-c-white-);
			display: block;
			margin: 0 auto;
			padding: 0;
		}
		.active {
			color: var(--t-c-yellow-);
		}
		.inactive {
			color: var(--t-c-white-);
		}
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 999;
		}
		.card, .card-img-overlay, .card-header, .card-footer{
			border-radius: 0px !important;
			border: 0px !important;
		}
		.card-img, .card-img-top {
			border-top-left-radius: calc(0rem - 0px);
			border-top-right-radius: calc(0rem - 0px);
		}
		.p-top{
			padding-top: 65px;
		}
		.d-none{
			display: none;
		}
		.no-pad{
			padding: 0 !important;
		}
		/* End Article 1  |  End Root Css */
	</style>
	<!-- -----------------------------------------------------------------------------------------------------------
	.d-none => display: none;
	.p-top => padding-top: 65px;
	no-pad => padding 0px !important;
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 1  |  End Root Css  	======================================== -->
<!-- ======================================================================================================= -->















<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 2  |  Start Preloader	==================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 2  |  Start Preloader */
			#article-2 .preloader {
				-webkit-font-smoothing: antialiased;
				text-rendering: optimizeLegibility;
				font-family: "proxima-nova-soft", sans-serif;
				height: 100vh;
				width: 100%;
				position: fixed;
				z-index: 99999;
				overflow: hidden;
			}
			#article-2 .preloader .vertical-centered-box img.custom-logo {
				/* overflow: hidden; */
				border-radius: 50%;
			}
			#article-2 .preloader .vertical-centered-box {
				position: absolute;
				width: 100%;
				height: 100%;
				text-align: center;
			}
			#article-2 .preloader .vertical-centered-box:after {
				content: '';
				display: inline-block;
				height: 100%;
				vertical-align: middle;
				margin-right: -0.25em;
			}
			#article-2 .preloader .vertical-centered-box .content {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				display: inline-block;
				vertical-align: middle;
				text-align: left;
				font-size: 0;
			}
			#article-2 .preloader * {
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s;
			}
			#article-2 .preloader {
				background: #2c2d44;
			}
			#article-2 .preloader .loader-circle {
				position: absolute;
				left: 50%;
				top: 50%;
				width: 120px;
				height: 120px;
				border-radius: 50%;
				box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
				margin-left: -60px;
				margin-top: -60px;
			}
			#article-2 .preloader .loader-line-mask {
				position: absolute;
				left: 50%;
				top: 50%;
				width: 60px;
				height: 120px;
				margin-left: -60px;
				margin-top: -60px;
				overflow: hidden;
				-webkit-transform-origin: 60px 60px;
				-moz-transform-origin: 60px 60px;
				-ms-transform-origin: 60px 60px;
				-o-transform-origin: 60px 60px;
				transform-origin: 60px 60px;
				-webkit-animation: rotate 1.2s infinite linear;
				-moz-animation: rotate 1.2s infinite linear;
				-o-animation: rotate 1.2s infinite linear;
				animation: rotate 1.2s infinite linear;
			}
			#article-2 .preloader .loader-line-mask .loader-line {
				width: 120px;
				height: 120px;
				border-radius: 50%;
				box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
			}
			#article-2 .preloader #particles-background,
			#particles-foreground {
				left: -51%;
				top: -51%;
				width: 202%;
				height: 202%;
				-webkit-transform: scale3d(0.5, 0.5, 1);
				-moz-transform: scale3d(0.5, 0.5, 1);
				-ms-transform: scale3d(0.5, 0.5, 1);
				-o-transform: scale3d(0.5, 0.5, 1);
				transform: scale3d(0.5, 0.5, 1);
			}
			#article-2 .preloader #particles-background {
				background: #2c2d44;
				background-image: -moz-linear-gradient(45deg, #3f3251 2%, #002025 100%);
				background-image: -webkit-linear-gradient(45deg, #3f3251 2%, #002025 100%);
				background-image: linear-gradient(45deg, #3f3251 2%, #002025 100%);
			}
			#article-2 .preloader img{
				height:118px;
				width: 118px;
			}
			lesshat-selector {
				-lh-property: 0; } 
			@-webkit-keyframes rotate{ 0% { -webkit-transform: rotate(0deg);} 100% { -webkit-transform: rotate(360deg);}}
			@-moz-keyframes rotate{ 0% { -moz-transform: rotate(0deg);} 100% { -moz-transform: rotate(360deg);}}
			@-o-keyframes rotate{ 0% { -o-transform: rotate(0deg);} 100% { -o-transform: rotate(360deg);}}
			@keyframes rotate{ 0% {-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg);transform: rotate(0deg);} 100% {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-ms-transform: rotate(360deg);transform: rotate(360deg);}}
			[not-existing] {
				zoom: 1;
			}
			lesshat-selector {
				-lh-property: 0; } 
			@-webkit-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
			@-moz-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
			@-o-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
			@keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
			[not-existing] {
				zoom: 1;
			}
			lesshat-selector {
				-lh-property: 0; } 
			@-webkit-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
			@-moz-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
			@-o-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
			@keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
			[not-existing] {
				zoom: 1;
			}
			/* End Article 2 |  End Preloader  */
		</style>
		<article id="article-2" >
			<!-- Start Article 2  |  Start Preloader -->
			<div class="preloader">
				<div id="particles-background" class="vertical-centered-box"></div>
				<div id="particles-foreground" class="vertical-centered-box"></div>
				<div class="vertical-centered-box">
					<div class="content">
						<div class="loader-circle"></div>
						<div class="loader-line-mask">
							<div class="loader-line"></div>
						</div>
						<?php 
							if ( has_custom_logo() ){
								the_custom_logo();
							}else{
								?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader.svg" alt="X" />
								<?php
							}
						?>
					</div>
				</div>
			</div>
			<!-- EArticle 2 |  End Preloader  -->
		</article>
	</div>
	<!-- -----------------------------------------------------------------------------------------------------------
	has_custom_logo => true,
	the_custom_logo => Print.
	----------------------------------------------------------------------------------------------------------------
	=> functions.php
	----------------------------------------------------------------------------------------------------------------
	/* Add theme support for Custom Logo.  */
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 2 |  End Preloader	======================================== -->
<!-- ======================================================================================================= -->















<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 3  |  Start Background  (Required) 	======================== -->
<!-- ======================================================================================================= -->
    <div>
		<style>
			/* Start Article 3  |  Start Background  (Required) */
			.background{
				width: 100%;
				align-items: center;
				justify-content: center;
				background-size: cover;
				background-attachment: fixed;
				background-position: top center;
				position: relative;
				z-index: 1;
			}
			.background::after{
				content: '';
				position: absolute;
				left: 0;
				top: 0;
				height: 100%;
				width: 100%;
				background: var(--theme-glass-1-);
				opacity: .8;
				z-index: -1;
			}
			/* End Article 3 |  End Background (Required) */
		</style>
	</div>
	<!-- -----------------------------------------------------------------------------------------------------------
	.background => background 100%; && Transparent lear;
	----------------------------------------------------------------------------------------------------------------
	=> functions.php 
	----------------------------------------------------------------------------------------------------------------

	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 3 |  End Background (Required)	============================ -->
<!-- ======================================================================================================= -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 3.1  |  Start Background (Img-fixed) ************ -->
<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 3.1  |  Start Background (Img-fixed) */
			#article-3-1 #id-bg-img-fixed{
				background: url("<?php echo get_template_directory_uri(); ?>/del/assets/img/bg.jpg");
				position: fixed;
				right: 0;
				bottom: 0;
				min-width: 100%;
				min-height: 100%;
				z-index: -1;
				background-size: cover;
				background-position: center;
				background-repeat : no-repeat;
			}
            /* For Other Div */
			.c-bg-img-fixed{
				background: url("<?php echo get_template_directory_uri(); ?>/del/assets/img/bg.jpg");
				position: fixed;
				right: 0;
				bottom: 0;
				min-width: 100%;
				min-height: 100%;
				z-index: -1;
				background-size: cover;
				background-position: center;
				background-repeat : no-repeat;
			}
			/* End Article 3.1 |  End Background (Img-fixed) */
		</style>
		<article id="article-3-1">
			<!-- Start Article 3.1  |  Start Background (Img-fixed) -->
				<div id="id-bg-img-fixed"></div>
			<!-- End Article 3.1 |  End Background (Img-fixed) -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 3.1 |  End Background (Img-fixed) ***************** -->
<!-- ******************************************************************************** -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 5  |  Start Navbar | Menu  ********************** -->
<!-- ******************************************************************************** -->
    <div>
		<style>
			/* Start Article 5  |  Start Navbar | Menu */
			.sticky {
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 999;
			}
			.line-one-navbar{
				width: 100%;
				background: var(--t-c-yellow-);
			}
			#article-5{
				z-index: 9999;
			}
			#article-5 .brand img{
				height: 65px;
				width: 300px;
			}
			#article-5 .brand h1 a{
				font-size: 28px;
				text-transform: uppercase;
				color: var(--t-c-yellow-);
				padding-left: 12px;
			}
			#article-5 .header{
				min-height: 65px;
				transition: .3s ease background-color;
				border-bottom: 1px solid;
				backdrop-filter: blur(2px);
			}
			#article-5 .nav-bar{
				display: flex;
				align-items: center;
				justify-content: space-between;
				width: 100%;
				height: 100%;
				max-width: 1300px;
			}
			#article-5 .nav-list ul{
				list-style: none;
				position: fixed;
				width: 100vw;
				height: 100vh;
				left: 100%;
				top: 0;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				z-index: 2;
				overflow-x: hidden;
				transition: .5s ease left;
				margin-bottom: 0;
			}
			#article-5 .nav-list ul.active {
				background: var(--theme-glass-1-);
				left: 0%;
			}
			#article-5 .nav-list ul a {
				font-size: 25px;
				font-weight: 500;
				text-decoration: none;
				color: var(--t-c-white-);
				text-transform: uppercase;
				padding: 20px;
				display: block;
			}
			#article-5 .nav-list ul li:hover a::after {
				transform: translate(-50%, -50%) scale(1);
				letter-spacing: initial;
			}
			#article-5 .nav-list ul li:hover a {
				color: var(--t-c-yellow-);
			}
			#article-5 .nav-list ul li a.active {
				color: var(--t-c-yellow-); 
			}
			#article-5 .hamburger {
				height: 60px;
				width: 60px;
				display: inline-block;
				border: 3px solid white;
				border-radius: 50%;
				position: relative;
				display: flex;
				align-items: center;
				justify-content: center;
				z-index: 100;
				cursor: pointer;
				transform: scale(.8);
				margin-right: 20px;
				margin-top: 5px;
			}
			#article-5 .hamburger:after {
				position: absolute;
				content: '';
				height: 100%;
				width: 100%;
				border-radius: 50%;
				border: 3px solid var(--t-c-white-);
				animation: hamburger-puls 1s ease infinite;
			}
			#article-5 .hamburger .bar {
				height: 2px;
				width: 30px;
				position: relative;
				background-color: var(--t-c-white-);
				z-index: -1;
			}
			#article-5 .hamburger .bar::after,
			#article-5 .hamburger .bar::before {
				content: '';
				position: absolute;
				height: 100%;
				width: 100%;
				left: 0;
				background-color: var(--t-c-white-);
				transition: .3s ease;
				transition-property: top, bottom;
			}
			#article-5 .hamburger .bar::after {
				top: 8px;
			}
			#article-5 .hamburger .bar::before {
				bottom: 8px;
			}
			#article-5 .hamburger.active .bar::before {
				bottom: 0;
			}
			#article-5 .hamburger.active .bar::after {
				top: 0;
			}
			/* Keyframes */
			@-webkit-keyframes hamburger-puls {
				0% {
					opacity: 1;
					transform: scale(1);
				}
				100% {
					opacity: 0;
					transform: scale(1.4);
				}
			}
			@-moz-keyframes hamburger-puls {
				0% {
					opacity: 1;
					transform: scale(1);
				}
				100% {
					opacity: 0;
					transform: scale(1.4);
				}
			} 
			@-o-keyframes hamburger-puls {
				0% {
					opacity: 1;
					transform: scale(1);
				}
				100% {
					opacity: 0;
					transform: scale(1.4);
				}
			} 
			@keyframes hamburger-puls {
				0% {
					opacity: 1;
					transform: scale(1);
				}
				100% {
					opacity: 0;
					transform: scale(1.4);
				}
			}
			/* Media Query For Extra Large Device */
			@media only screen and (min-width: 1023px) {
				#article-5 .header {
					z-index: 999;
				}
				#article-5 .hamburger {
					display: none;
				}
				#article-5 .nav-list ul {
					position: initial;
					display: block;
					height: auto;
					width: fit-content;
					background-color: transparent;
				}
				#article-5 .nav-list ul.active {
					background: none;
				}
				#article-5 .nav-list ul li {
					display: inline-block;
				}
				#article-5 .nav-list ul li a {
					font-size: 18px;
				}
				#article-5 .nav-list ul a:after {
					display: none;
				}
			}
			@media only screen and (max-width: 320px) {
				#article-5 .brand img{
					width: 250px;
				}
			}
			/* End Article 5 |  End Navbar | Menu */
		</style>
		<div class="line-one line-one-navbar"></div>
		<article id="article-5" class="">
			<!-- Start Article 5  |  Start Navbar | Menu -->
			<div class="header">
				<div class="container">
					<div class="nav-bar">
						<div class="brand">
							<h1><a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="logo"> -->
						</div>
						<div class="nav-list">
							<div class="hamburger"><div class="bar"></div></div>
							<div class="follfo">
								<nav id="navigation">
									<ul>
									<li><a class="" href="#nav-spy-1">Home</a></li>
									<li><a class="" href="#nav-spy-2">Services</a></li>
									<li><a class="" href="#nav-spy-3">Projects</a></li>
									<li><a class="" href="#nav-spy-4">About</a></li>
									<li><a class="" href="#nav-spy-5">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 5 |  End Navbar | Menu -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 5 |  End Navbar | Menu  *************************** -->
<!-- ******************************************************************************** -->













<!-- ---------------------------------------------------------------------------------- -->
<!-- 								section Nav-spy-style	 							-->
<!-- ---------------------------------------------------------------------------------- -->
	<style>
		.section-bg{
			background: var(--theme-glass-3-);
		}
		.sec-h-w{
			height: 100vh;
			width: 100%;
		}
	</style>
<!-- ---------------------------------------------------------------------------------- -->

<!-- ---------------------------------------------------------------------------------- -->
<section class="section-bg sec-h-w" id="nav-spy-1">


<!-- ======================================================================================================= -->
<!-- ==================		PHP  | Start Article 38.0  |  Start Page-Custom-Post-Type       ================ -->
<!-- ======================================================================================================= -->
<div>
		<style>
            /* Start Article 38.0  |  Start Page-Custom-Post-Type */
			#article-38-0{
				padding-top: 9px;
			}
            #article-38-0 label.wp-block-search__label {
                display: none;
            }
            #article-38-0 input#wp-block-search__input-1 {
                background: no-repeat;
                backdrop-filter: blur(5px);
                color: var(--t-c-yellow-);
                padding: 0px 0px 0px 9px;
            }
            #article-38-0 button.wp-block-search__button {
                background: var(--theme-glass-4-)!important;
                color: var(--t-c-yellow-)!important;
            }
            #article-38-0 .search-bar {
                padding: 0px 0px 8px 0px;
            }
            #article-38-0 h2.search-h2 {
                text-align: center;
                color: var(--t-c-yellow-);
            }
            #article-38-0 h2.search-h2 span {
                font-weight: bold;
            }
			#article-38-0 .wrap {
				background: var(--theme-glass-4-);
				backdrop-filter: blur(5px);
				margin-bottom: 9px;
			}
			#article-38-0 .text-wrapper {
				padding: 9px;
			}
			#article-38-0  img{
				height: 140px;
			}
			#article-38-0 a h2{
				font-size: 30px;
				color: var(--t-c-yellow-);
				font-weight: bold;
			} 
			#article-38-0 hr {
				padding: 0px;
				margin: 0px;
			}
			#article-38-0 p {
				color: var(--t-c-white-);
				font-size: 18px;
			}
			#article-38-0 a.btn-read {
				color: var(--t-c-yellow-);
				font-weight: bold;
			}
            #article-38-0 .container.no-search {
                backdrop-filter: blur(5px);
                border: 1px solid currentColor;
            }
            #article-38-0 .no-search h2 {
                color: var(--t-c-yellow-);
            }
            /* Start Article 38.0  |  Start Page-Custom-Post-Type */
		</style>
		<article id="article-38-0">
            <!-- Start Article 38.0  |  Start Page-Custom-Post-Type -->
				<!-- ======================================================================================================= -->
				<?php
					if ( get_query_var('paged') ) {
						$paged = get_query_var('paged');
					} elseif ( get_query_var('page') ) {
						$paged = get_query_var('page');
					} else {
						$paged = 1;
					}

					$args = array(
						'post_type' => 'lite_box', 
						'posts_per_page' => get_option('posts_per_page'),
						'paged' => $paged,
						'post_status' => 'publish',
						'ignore_sticky_posts' => true,
						'order' => 'DESC', 
						'orderby' => 'date'
					);
					$custom_query = new WP_Query( $args );

					if ( $custom_query->have_posts() ) :
						while( $custom_query->have_posts() ) : $custom_query->the_post();
					?>
				
					<div class="container">
						<div class="wrap">
							<div class="row">
								<div class="col-12 col-md-4">
									<a href="<?php the_permalink(); ?>">
										<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
											}else{ ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="<?php the_title(); ?>" />
											<?php } 
										?>
									</a>
								</div>
								<div class="col-12 col-md-8">
									<div class="text-wrapper">
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
										</a>
										<hr>
										<div>
											<p class="lead" ><?php echo excerpt('40'); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
    <!-- -------------------------------------------------------------------------------------------------------- -->
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
        <?php if ($custom_query->max_num_pages > 1) :  ?>
            <?php
            $orig_query = $wp_query;
            $wp_query = $custom_query;
            ?>
            <nav class="prev-next-posts">
					<div class="next-posts-link">
						<?php echo get_next_posts_link( '<i class="bi bi-arrow-right-circle"></i>', $custom_query->max_num_pages ); ?>
					</div>
						<?php if (function_exists("pagination")){pagination($custom_query->max_num_pages);} ?>
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
				<!-- ======================================================================================================= -->
				
            <!-- Start Article 38.0  |  Start Page-Custom-Post-Type -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 38.0  |  Start Page-Custom-Post-Type 	  ================== -->
<!-- ======================================================================================================= -->
<!-- ---------------------------------------------------------------------------------- -->
</section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section class="section-bg sec-h-w p-top" id="nav-spy-2"></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section class="section-bg sec-h-w p-top" id="nav-spy-3"></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section class="section-bg sec-h-w p-top" id="nav-spy-4"></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section class="section-bg sec-h-w p-top" id="nav-spy-5"></section>
<!-- ---------------------------------------------------------------------------------- -->






























<!-- --------------------------------------------------------------------------------- -->
<!-- 									Mouse Click Disabled	   					   -->
<!-- --------------------------------------------------------------------------------- -->
	<script>
		// document.addEventListener("contextmenu",function(mouseFunction){mouseFunction.preventDefault();});
	</script>
<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->














<?php get_footer();?>
<!-- ******************************************************************************** -->