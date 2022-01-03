<?php
	/*Template Name: 404 Template.  */
?>
<?php get_header();?>
<!-- ******************************************************************************** -->















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
			padding: 0px !important;
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















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 32  |  Start 404 Err    ************************* -->
<!-- ******************************************************************************** -->
	<div class="d-none">
		<style>
			/* Start Article 32  |  Start 404 Err */
			#article-32 .wrapper-404{
				background: var(--theme-glass-4-);
				height: 100vh;
				backdrop-filter: blur(4px);
				padding: 20px;
				text-align: center;
			}
			#article-32 .wrapper-404 .display-1{
				font-size: 155px;
				padding-top: 5%;
			}
			#article-32 .wrapper-404 p{
				text-shadow: 0px 0px 13px white;
			}
			#article-32 .wrapper-404 label.wp-block-search__label {
				display: none;
			}
			#article-32 .wrapper-404 input#wp-block-search__input-1 {
				background: var(--theme-glass-3-);
				min-width: 265px;
				padding: 0px 9px;
				color: var(--t-c-yellow-);
			}
			#article-32 .wrapper-404 button.wp-block-search__button {
				background: var(--theme-glass-4-);
				color: wheat;
				font-weight: bolder;
				padding: 0px 9px;
				border: 2px solid currentColor;
			}
			#article-32 .wrapper-404 a.btn{
				font-size: 20px;
				border: 1px solid currentColor;
				color: var(--t-c-yellow-);
				margin-top: 25px;
				padding: 0px 20px 0px 20px;
				border-radius: 0px;
				font-weight: bold;
				background: var(--theme-glass-3-);
			}
			#article-32 .wrapper-404 a.btn:hover{
				background: var(--theme-glass-4-);
			}
			#article-32 .wrapper-404 .wp-block-search__inside-wrapper {
				width: 350px;
				margin: 0 auto;
			}
			@media screen and (max-width: 769px) {
				#article-32 .wrapper-404 .display-1 {
					font-size: 90px;
				}
			}
			/* End Article 32 |  End 404 Err */
		</style>
		<article id="article-32">
			<!-- Start Article 32  |  Start 404 Err -->
			<div class="container">
				<div class="wrapper-404">
					<div class="wrap">
						<div class="display-1">
							Oops!
						</div>
						<h2>404 - PAGE NOT FOUND</h2>
						<p>The Page you are looking for might have been removed</p>
						<p>had it's name changed or it temporarily unavailable.</p><br>
						
						<div class="search-bar"><?php dynamic_sidebar('search_form'); ?></div>
						<a class="btn" href="<?php echo esc_url( home_url() ); ?>" type="button" class="cta"><i class="bi bi-house-door"></i> Go Home</a>
						<br>
					</div>
				</div>
			</div>
			<!-- End Article  |  End 404 Err -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 32 |  End 404 Err    ************************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 32  |  Start 404 Err	==================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 32  |  Start 404 Err */
			#article-32 .wrapper-404{
				background: var(--theme-glass-4-);
				height: 100vh;
				backdrop-filter: blur(4px);
				padding: 20px;
				text-align: center;
			}
			#article-32 .wrapper-404 .display-1{
				font-size: 155px;
				padding-top: 5%;
			}
			#article-32 .wrapper-404 p{
				text-shadow: 0px 0px 13px white;
			}
			#article-32 .wrapper-404 label.wp-block-search__label {
				display: none;
			}
			#article-32 .wrapper-404 input#wp-block-search__input-1 {
				background: var(--theme-glass-3-);
				min-width: 265px;
				padding: 0px 9px;
				color: var(--t-c-yellow-);
			}
			#article-32 .wrapper-404 button.wp-block-search__button {
				background: var(--theme-glass-4-);
				color: wheat;
				font-weight: bolder;
				padding: 0px 9px;
				border: 2px solid currentColor;
			}
			#article-32 .wrapper-404 a.btn{
				font-size: 20px;
				border: 1px solid currentColor;
				color: var(--t-c-yellow-);
				margin-top: 25px;
				padding: 0px 20px 0px 20px;
				border-radius: 0px;
				font-weight: bold;
				background: var(--theme-glass-3-);
			}
			#article-32 .wrapper-404 a.btn:hover{
				background: var(--theme-glass-4-);
			}
			#article-32 .wrapper-404 .wp-block-search__inside-wrapper {
				width: 350px;
				margin: 0 auto;
			}
			#article-32 .wrapper-404 .wp-block-search .wp-block-search__input {
				background: var(--theme-glass-3-);
				color: var(--t-c-yellow-);
				padding: 0px 0px 0px 9px;
			}
			@media screen and (max-width: 769px) {
				#article-32 .wrapper-404 .display-1 {
					font-size: 90px;
				}
			}
			/* End Article 32 |  End 404 Err */
		</style>
		<article id="article-32">
			<!-- Start Article 32  |  Start 404 Err -->
			<div class="container">
				<div class="wrapper-404">
					<div class="wrap">
						<div class="display-1">
							Oops!
						</div>
						<h2>404 - PAGE NOT FOUND</h2>
						<p>The Page you are looking for might have been removed</p>
						<p>had it's name changed or it temporarily unavailable.</p><br>
						
						<div class="search-bar"><?php dynamic_sidebar('search_form'); ?></div>
						<a class="btn" href="<?php echo esc_url( home_url() ); ?>" type="button" class="cta"><i class="bi bi-house-door"></i> Go Home</a>
						<br>
					</div>
				</div>
			</div>
			<!-- End Article  |  End 404 Err -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 32 |  End 404 Err 	======================================== -->
<!-- ======================================================================================================= -->















<?php get_footer();?>
<!-- ******************************************************************************** -->