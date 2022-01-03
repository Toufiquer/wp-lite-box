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
<!-- ==================		PHP | Start Article 1.1  |  Start Comments	==================================== -->
<!-- ======================================================================================================= -->
    <style>
		/* Start Article 1.1  |  Start Comments */
		#article-34-0 .commentlist img{
			width: 80px;
			height: 80px;
			margin-right: 12px;
		}
		#article-34-0 #comments{
			display: none;
		}
		#article-34-0 .commentlist{
			list-style: none;
		}
		#article-34-0 .comments {
			margin: 10px 0
		}
		#article-34-0 .comments h3 {
			margin: 50px 0 30px;
			font-size: 24px
		}
		#article-34-0 ol.commentlist {
			list-style: none;
			margin: 0 0 1em;
			padding: 0;
			text-indent: 0
		}
		#article-34-0 ol.commentlist li.comment {
			border-top: 1px solid var(--t-c-white-);
			padding: 1em;
			margin-bottom: 10px;
            background: rgba(0, 0, 0, 0.17);
		}
		#article-34-0 ol.commentlist li div.vcard {
			font-size: 20px
		}
		#article-34-0 ol.commentlist li div.vcard cite.fn {
			font-style: normal
		}
		#article-34-0 ol.commentlist li div.vcard img.avatar {
			float: left;
		}
		#article-34-0 ol.commentlist li div.comment-meta {
			font-size: 9px;
			margin-bottom: 10px
		}
		#article-34-0 ol.commentlist li div.comment-meta a {
			color: var(--t-c-yellow-);
            font-size: 12px;
		}
		#article-34-0 ol.commentlist li p {
			margin: 0
		}
		#article-34-0 ol.commentlist li ul {
			list-style: square;
			margin: 0 0 1em 2em
		}
		#article-34-0 ol.commentlist li div.reply {
			font-size: 11px
		}
		#article-34-0 ol.commentlist li div.reply a {
			font-weight: 700;
			color: var(--t-c-yellow-);
		}
		#article-34-0 ol.commentlist li ul.children {
			list-style: none;
			margin: 1em 0 0;
			text-indent: 0
		}
		#article-34-0 ol.commentlist li ul.children li.depth-2,
		#article-34-0 ol.commentlist li ul.children li.depth-3,
		#article-34-0 ol.commentlist li ul.children li.depth-4 {
			margin: 0 0 .25em .25em
		}
		#article-34-0 ol.commentlist li.pingback {
			margin: 0 0 10px;
			padding: 1em;
			border: 1px dashed var(--t-c-white-);
		}
		#article-34-0 #respond {
			position: relative;
			margin-top: 13px;
		}
		#article-34-0 #respond input[type=text], #respond textarea {
			border: 1px solid var(--t-c-white-);
			padding: 10px;
            Background: none;
		}
		#article-34-0 #respond input[type=text] {
			padding: 7px;
			width: 300px
		}
		#article-34-0 #respond input{
			background: var(--theme-glass-1-);
			color: var(--t-c-yellow-);
		}
		#article-34-0 #respond .comment-form-author,
		#article-34-0 #respond .comment-form-comment,
		#article-34-0 #respond .comment-form-email,
		#article-34-0 #respond .comment-form-url {
			position: relative
		}
		#article-34-0 #respond input[type=text]:focus,
		#article-34-0 #respond textarea:focus {
			text-indent: 0;
			z-index: 1
		}
		#article-34-0 #respond textarea {
			resize: vertical;
			width: 100%;
			color: var(--t-c-white-);
            font-size: 15px;
		}
		#article-34-0 #respond .comment-form-author .required, #respond .comment-form-email .required {
			color: var(--t-c-crimson-);
			font-size: 22px;
			font-weight: 700;
			position: absolute;
			z-index: 1;
		}
		#article-34-0 #respond .comment-notes,
		#article-34-0 #respond .logged-in-as {
			font-size: 13px
		}
		#article-34-0 #respond p {
			margin: 10px 0
		}
		#article-34-0 #respond .form-submit {
			float: right;
			margin: -20px 0 10px;
            float: right;
            position: absolute;
            right: 0px;
            bottom: 0px;
            margin: -25px 3px -30px 0px;
		}
		#article-34-0 #respond input#submit {
			/* background: var(--theme-glass-1-); */
			border: none;
			-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
			-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
			box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
			color: var(--t-c-crimson-);
			cursor: pointer;
			padding: 5px 15px 5px 15px;
			border: 1px solid;
            font-weight: bold
		}
		#article-34-0 #respond input#submit:active {
			background: var(--theme-glass-3-);
			color: var(--t-c-crimson-);
		}
		#article-34-0 #respond #cancel-comment-reply-link {
			color: var(--t-c-black-);
			margin-left: 10px;
			text-decoration: none
		}
		#article-34-0 #respond #cancel-comment-reply-link:hover,
		#article-34-0 #respond .logged-in-as a:hover {
			text-decoration: underline
		}
        #article-34-0  p.logged-in-as a {
            color: var(--t-c-yellow-);
            font-size: 14px;
            font-weight: bold;
            text-decoration: underline;
        }
		#article-34-0 .commentlist #respond {
			margin: 1.625em 0 0;
			width: auto
		}
		#article-34-0 #reply-title {
		    color: var(--t-c-crimson-);
            font-size: 24px;
            font-weight: bold;
            text-shadow: 0px 0px 0px currentColor;
		}
		#article-34-0 #cancel-comment-reply-link {
			color: var(--t-c-black-);
			display: block;
			position: absolute;
			right: 1.625em;
			text-decoration: none;
			text-transform: uppercase;
			top: 1.1em
		}
		#article-34-0 #cancel-comment-reply-link:active,
		#article-34-0 #cancel-comment-reply-link:focus,
		#article-34-0 #cancel-comment-reply-link:hover {
			color: var(--t-c-crimson-);
		#article-34-0 }
		#article-34-0 #respond p {
			font-size: 12px
		}
		#article-34-0 p.comment-form-comment {
			margin: 0
		}
		#article-34-0 .form-allowed-tags {
			display: none
		}
		#article-34-0 .trackback {
			margin: 0 0 10px;
			padding: 1em;
			border: 1px dashed var(--t-c-white-);
		}
		#article-34-0 #commentform label{
			float:left;
			width: 52px;
            font-size: 18px;
            margin-bottom: 3px;
		}
		#article-34-0 #respond .comment-form-comment{
			margin-bottom:26px;
		}
		#article-34-0 #comments h2{
			font-size: 35px;
			margin:1em 0;
		}
		#article-34-0 #comments{
			padding-top:13px;
			border-top:1px solid var(--t-c-white-);;
			color: #067092;
			font-size: 150%;
		}
		#article-34-0 .comment-respond .comment-form-cookies-consent label{
			width: 100% !important;
		}
		/* End Article 1.1 |  End Comments */
	</style>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 1.1 |  End Comments  	======================================== -->
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



<!-- ******************************************************************************** -->
<!-- ***************  Start Article 34.0  |  Start Single  ************************** -->
<!-- ******************************************************************************** -->
    <div>
		<style>
            /* Start Article 34.0  |  Start Single */
			#article-34-0{
				padding-top: 9px;
			}
			#article-34-0 h2 {
                font-size: 32px;
                color: var(--t-c-yellow-);
                font-weight: bold;
                border-bottom: 1px solid currentColor;
                text-shadow: 0px 0px 0px currentColor;
            }
			#article-34-0 button#myBtn-34-0-1-x {
				overflow: hidden;
				height: 250px;
				width: 100%;
			}
            #article-34-0 .post_meta {
                backdrop-filter: blur(4px);
                border: 1px solid currentColor;
                padding: 0px 12px;
                margin-top: 3px;
            }
            #article-34-0 .content-wrapper {
                border: 1px solid currentColor;
                backdrop-filter: blur(4px);
                padding: 9px;
                position: relative;
            }
            #article-34-0 p {
                color: var(--t-c-white-);
                text-shadow: 0px 0px 0px black;
                text-align: justify;
            }
			#article-34-0 .modal {
				z-index: 999999!important;
			}
			#article-34-0 .content .modal {
				display: none;
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-34-0 .modal-content {
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
				top: -33px;
			}
			#article-34-0 .modal-content img{
				width: auto;
				height: 80%;
				margin: 0 auto;
				object-fit: fill;
			}
			#article-34-0 .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-34-0 .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-34-0 .close-x:hover, #article-34-0 .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-34-0 .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
            /* End Article 34.0  |  End Single */
		</style>
		<article id="article-34-0">
 		<!-- Start Article 34.0  |  Start Single -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>First Article</h2>
						<button id="myBtn-34-0-1-x">
						<img width="2160" height="3840" src="g" class=" wp-post-image" alt="" loading="lazy" /></button>
					</div>
					<div class="col-12">
						<div class="post_meta">
							Posted By: <a href="" title="Posts by admin" rel="author">admin</a>	| Posted On: 03 Dec, 21	| Posted In: <a href="" rel="category tag">Uncategorized</a>	|	<a href="" class="">No Comments</a>
						</div>
					</div>
					<div class="col-12">
						<div class="content-wrapper">
							<div class="text-wrapper">
								<p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of</p>
							</div> <hr>
						</div>
					</div>
				</div>
			</div>
			<div id="myModal-34-0-1-x" class="modal">
				<div class="modal-content">
					<img width="2160" height="3840" src="" class="img-fluid wp-post-image" alt="" loading="lazy" />
					<span class="close-34-0-1-x close-x">&times;</span>
					<p>First Article</p>
				</div>
			</div>

			<script>
				/* 1 */
				var modal1 = document.getElementById("myModal-34-0-1-x");
				var btn1 = document.getElementById("myBtn-34-0-1-x");
				var span1 = document.getElementsByClassName("close-34-0-1-x")[0];
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
			</script>
	        <!-- End Article 34.0  |  End Single -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 34.0  |  End Single  ****************************** -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP 34.0 | Start Article 34.0  |  Start Single    ============================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
            /* Start Article 34.0  |  Start Single */
			#article-34-0{
				padding-top: 9px;
			}
			#article-34-0 h2 {
                font-size: 32px;
                color: var(--t-c-yellow-);
                font-weight: bold;
                border-bottom: 1px solid currentColor;
                text-shadow: 0px 0px 0px currentColor;
            }
			#article-34-0 button#myBtn-34-0-1 {
				overflow: hidden;
				height: 250px;
				width: 100%;
			}
            #article-34-0 .post_meta {
                backdrop-filter: blur(4px);
                border: 1px solid currentColor;
                padding: 0px 12px;
                margin-top: 3px;
            }
            #article-34-0 .content-wrapper {
                border: 1px solid currentColor;
                backdrop-filter: blur(4px);
                padding: 9px;
                position: relative;
            }
            #article-34-0 p {
                color: var(--t-c-white-);
                text-shadow: 0px 0px 0px black;
                text-align: justify;
            }
			#article-34-0 .modal {
				z-index: 999999!important;
			}
			#article-34-0 .content .modal {
				display: none;
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-34-0 .modal-content {
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
				top: -33px;
			}
			#article-34-0 .modal-content img{
				width: auto;
				height: 80%;
				margin: 0 auto;
				object-fit: fill;
			}
			#article-34-0 .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-34-0 .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-34-0 .close-x:hover, #article-34-0 .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-34-0 .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
            /* End Article 34.0  |  End Single */
		</style>
		<article id="article-34-0">
            <!-- Start Article 34.0  |  Start Single -->
            <?php if(have_posts()) : the_post(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2><?php the_title(); ?></h2>
							<button id="myBtn-34-0-1">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('post-thumbnail', ['class' => '']);
									}else{ ?>
										<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="<?php the_title(); ?>" />
									<?php } 
								?>
							</button>
                        </div>
                        <div class="col-12">
                            <div class="post_meta">
                                Posted By: <?php the_author_posts_link(); ?>
                                | Posted On: <?php the_time('d M, y'); ?>
                                | Posted In: <?php the_category(', '); ?>
                                | <?php comments_popup_link("No Comments", "1 Comment", "% Comments", "Comments_class", "Comment off");?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-wrapper">
                                <div class="text-wrapper">
                                    <?php echo the_content(); ?>
                                </div> <hr>
                                <div class="comments">
                                    <?php comments_template(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div id="myModal-34-0-1" class="modal">
					<div class="modal-content">
					
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
							}else{ ?>
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="<?php the_title(); ?>" />
							<?php } 
						?>
					<span class="close-34-0-1 close-x">&times;</span>
					<p><?php the_title(); ?></p>
					</div>
				</div>
				<script>
					/* 1 */
					var modal1 = document.getElementById("myModal-34-0-1");
					var btn1 = document.getElementById("myBtn-34-0-1");
					var span1 = document.getElementsByClassName("close-34-0-1")[0];
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
				</script>
			<?php endif; ?>
            <!-- End Article 34.0  |  End Single -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP 34.0 | End Article 34.0  |  End Single 	==================================== -->
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