<?php
	/*Template Name: Lite-box-old Template.  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min-1.10.2.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cd-headline.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">

	<title>Lite-Box</title>
</head>
<body>












<div id="article-btn"></div>
<!-- ******************************************************************************** -->
<!-- ***************  Start Article 1  |  Start Root Css  *************************** -->
<!-- ******************************************************************************** -->
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
	a:hover{
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
	.d-none{
		display: none;
	}
	/* End Article 1 |  End Root Css */
</style>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 1|  End Root Css  ********************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 1.1  |  Start Comments  ************************* -->
<!-- ******************************************************************************** -->
<style>
	/* Start Article 1.1  |  Start Comments */
	.commentlist img{
		width: 80px;
		height: 80px;
		margin-right: 12px;
	}
	#comments{
		display: none;
	}
	.commentlist{
		list-style: none;
	}
	.comments {
		margin: 10px 0
	}
	.comments h3 {
		margin: 50px 0 30px;
		font-size: 24px
	}
	ol.commentlist {
		list-style: none;
		margin: 0 0 1em;
		padding: 0;
		text-indent: 0
	}
	ol.commentlist li.comment {
		border-top: 1px solid var(--t-c-white-);
		padding: 1em;
		margin-bottom: 10px
	}
	ol.commentlist li div.vcard {
		font-size: 20px
	}
	ol.commentlist li div.vcard cite.fn {
		font-style: normal
	}
	ol.commentlist li div.vcard img.avatar {
		float: left;
	}
	ol.commentlist li div.comment-meta {
		font-size: 9px;
		margin-bottom: 10px
	}
	ol.commentlist li div.comment-meta a {
		color: var(--t-c-yellow-);
	}
	ol.commentlist li p {
		margin: 0
	}
	ol.commentlist li ul {
		list-style: square;
		margin: 0 0 1em 2em
	}
	ol.commentlist li div.reply {
		font-size: 11px
	}
	ol.commentlist li div.reply a {
		font-weight: 700;
		color: var(--t-c-yellow-);
	}
	ol.commentlist li ul.children {
		list-style: none;
		margin: 1em 0 0;
		text-indent: 0
	}
	ol.commentlist li ul.children li.depth-2,
	ol.commentlist li ul.children li.depth-3,
	ol.commentlist li ul.children li.depth-4 {
		margin: 0 0 .25em .25em
	}
	ol.commentlist li.even {
		background: var(--theme-glass-1-);
	}
	ol.commentlist li.odd {
		background: var(--theme-glass-1-);
	}
	ol.commentlist li.pingback {
		margin: 0 0 10px;
		padding: 1em;
		border: 1px dashed var(--t-c-white-);
	}
	#respond {
		position: relative;
		margin-top: 13px;
	}
	#respond input[type=text], #respond textarea {
		border: 1px solid var(--t-c-white-);
		padding: 10px
	}
	#respond input[type=text] {
		padding: 7px;
		width: 300px
	}
	#respond input{
		background: var(--theme-glass-1-);
		color: var(--t-c-yellow-);
	}
	#respond .comment-form-author,
	#respond .comment-form-comment,
	#respond .comment-form-email,
	#respond .comment-form-url {
		position: relative
	}
	#respond input[type=text]:focus,
	#respond textarea:focus {
		text-indent: 0;
		z-index: 1
	}
	#respond textarea {
		resize: vertical;
		width: 100%;
		background: var(--theme-glass-1-);
		color: var(--t-c-white-);
	}
	#respond .comment-form-author .required, #respond .comment-form-email .required {
		color: var(--t-c-crimson-);
		font-size: 22px;
		font-weight: 700;
		position: absolute;
		z-index: 1;
	}
	#respond .comment-notes,
	#respond .logged-in-as {
		font-size: 13px
	}
	#respond p {
		margin: 10px 0
	}
	#respond .form-submit {
		float: right;
		margin: -20px 0 10px
	}
	#respond input#submit {
		background: var(--theme-glass-1-);
		border: none;
		-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
		-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
		box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
		color: var(--t-c-crimson-);
		cursor: pointer;
		padding: 5px 42px 5px 22px;
		border: 1px solid;
	}
	#respond input#submit:active {
		background: var(--theme-glass-3-);
		color: var(--t-c-crimson-);
	}
	#respond #cancel-comment-reply-link {
		color: var(--t-c-black-);
		margin-left: 10px;
		text-decoration: none
	}
	#respond #cancel-comment-reply-link:hover,
	#respond .logged-in-as a:hover {
		text-decoration: underline
	}
	.commentlist #respond {
		margin: 1.625em 0 0;
		width: auto
	}
	#reply-title {
		color: var(--t-c-crimson-);
		font-size: 20px
	}
	#cancel-comment-reply-link {
		color: var(--t-c-black-);
		display: block;
		position: absolute;
		right: 1.625em;
		text-decoration: none;
		text-transform: uppercase;
		top: 1.1em
	}
	#cancel-comment-reply-link:active,
	#cancel-comment-reply-link:focus,
	#cancel-comment-reply-link:hover {
		color: var(--t-c-crimson-);
	}
	#respond p {
		font-size: 12px
	}
	p.comment-form-comment {
		margin: 0
	}
	.form-allowed-tags {
		display: none
	}
	.trackback {
		margin: 0 0 10px;
		padding: 1em;
		border: 1px dashed var(--t-c-white-);
	}
	#commentform label{
		float:left;
		width: 52px;
	}
	#respond .comment-form-comment{
		margin-bottom:26px;
	}
	#comments h2{
		font-size: 35px;
		margin:1em 0;
	}
	#comments{
		padding-top:13px;
		border-top:1px solid var(--t-c-white-);;
		color: #067092;
		font-size: 150%;
	}
	.comment-respond .comment-form-cookies-consent label{
		width: 100% !important;
	}
	/* End Article 1.1 |  End Comments */
</style>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 1.1  |  End Comments    ************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ************************   Start Article 1.2  |  Start LogIn   ***************** -->
<!-- ******************************************************************************** -->
<style>
	/* Start LogIn */
	.um .um-form input{
		background: var(--theme-glass-3-)!important;
		color: var(--t-c-yellow-);
	}
	.um .um-button.um-alt{
		background: var(--theme-glass-3-)!important;
		color: var(--t-c-yellow-);
	}
	/* End LogIn */

	/* Start Appointment */
	.dfield input{
		width: 100% !important;
		background: var(--theme-glass-1-);
		margin-bottom: 10px;
		color: var(--t-c-yellow-);
	}
	#fbuilder .slots div a {
		background: var(--theme-glass-1-) !important;
	} 
	.pbSubmit{
		background: var(--theme-glass-1-)!important;
		color: var(--t-c-yellow-)!important;
		border: 1px solid!important;
		float: right!important;
	}
	/* End Appointment */
</style>
<!-- ******************************************************************************** -->
<!-- ***********************  End Article 1.2  |  End LogIn  ************************ -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 2  |  Start Preloader   ************************* -->
<!-- ******************************************************************************** -->
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
	<article id="article-2">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader.svg" alt="X" />
                </div>
            </div>
        </div>
		<!-- End Article 2  |  End Preloader  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 2 |  End Preloader   ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 3  |  Start Background  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 3  |  Start Background */
		.background-bg{
			background: url("assets/del/img/bg.jpg");
		}
		.background-color{
			background: var(--theme-glass-3-);
		}
		.background-color-black{
			background: var(--t-c-black-);
		}
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

		/* Start background Image Change */
        #article-3 #my-image{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: -1;
			background-image: url(assets/del/img/bg/bg2.png);
			background-size: cover;
			background-position: center;
			background-repeat : no-repeat;
			transition: 5s;
			
			animation-name: animate-image;
			animation-direction:alternate-reverse;
			animation-duration:30s;
			animation-fill-mode:forwards;
			animation-iteration-count: infinite;
			animation-play-state:running;
			animation-timing-function: ease-in-out;
		}
		@keyframes animate-image{
			0%{
				background-image:url(assets/del/img/bg/bg1.png);
			}
			20%{
				background-image:url(assets/del/img/bg/bg2.png);
			}
			40%{
				background-image:url(assets/del/img/bg/bg3.png);
			}
			60%{
				background-image:url(assets/del/img/bg/bg4.png);
			}
			80%{
				background-image:url(assets/del/img/bg/bg5.png);
			}
			100%{
				background-image:url(assets/del/img/bg/bg6.png);
			}
		}
		/*  End background Image Change */

		/* Start Background Color Change */
        #article-3 #background-color-change{
            width: 100%;
            height: 100vh;
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: -1;
            background: #24D0F4;
        }
        #article-3 #background-color-change #background-color-1{
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            animation-name: color-change;
			animation-direction:alternate-reverse;
			animation-duration: 17s;
			animation-fill-mode:forwards;
			animation-iteration-count: infinite;
			animation-play-state:running;
			animation-timing-function: ease-in-out;
        }
        @keyframes color-change {
        0%{
            background: #4F69DC;
        }
        20%{
            background: #8598eb;
        }
        40%{
            background: #4dfd73;
        }
        60%{
            background: #49a300;
        }
        80%{
            background: #9fb0ff;
        }
        100%{
            background: #752bfd;
        }
      }
		/* End Background Color Change */

		/* Start Background SVG Change */
			#article-3 #image-svg-wrapper{
				position: fixed;
				right: 0;
				bottom: 0;
				min-width: 100%;
				min-height: 100%;
				z-index: -1;
			}
			#article-3 #image-svg{
				position: relative;
				display: flex;
				align-items: center;
				height: 100vh;
				width: 100%;
				overflow: hidden;
				background: #5ECAE6;
			}
			#article-3 #image-svg #svg-circle-1{
				animation: fadeInUp;
				animation-delay: 1s;
			}
			#article-3 #image-svg #svg-circle-2{
				position: absolute;
				top: 70%;
				left: 70%;
				animation: fadeInUp;
				animation-delay: 1.8s;
			}
			#article-3 #image-svg #svg-circle-3{
				position: absolute;
				top: 10%;
				left: 10%;
				animation: fadeInUp;
				animation-delay: 2.8s;
			}
			#article-3 #image-svg #svg-circle-4{
				position: absolute;
				top: 70%;
				left: 10%;
				animation: fadeInUp;
				animation-delay: 3.5s;
			}
			#article-3 #image-svg #svg-circle-1 svg circle{
				fill: #F31FFE;
			}
			#article-3 #image-svg #svg-circle-2 svg circle{
				fill: #F31FFE;
			}
			#article-3 #image-svg #svg-circle-3 svg circle{
				fill: #F31FFE;
			}
			#article-3 #image-svg #svg-circle-4 svg circle{
				fill: #F31FFE;
			}
			#article-3 #image-svg #svg-circle-1, #article-3 #image-svg #svg-circle-2, #article-3 #image-svg #svg-circle-3, #article-3 #image-svg #svg-circle-4{
				opacity: .7;
				margin: 0 auto;
				transition: 5s;
				animation-duration: 10s;
				animation-fill-mode:forwards;
				animation-iteration-count: infinite;
				animation-play-state: running;
				animation-timing-function: ease-in-out;
			}
			@keyframes fadeInUp {
			from {
			opacity: .5;
			width: 6px;
			height: 6px;
			}

			to {
			opacity: 0;
			margin-top: -50%;
			width: 50%;
			height: 50%;
			}
		}
		/* End Background SVG Change */

		/* Start Background Video */
		#article-3 #myVideo{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: -1;
		}
		/* End Background Video */
		/* End Article 3 |  End Background */
	</style>
	<article id="article-3">
		<!-- Start Article 3  |  StartBackground -->

		<!-- Start background Image change -->
			<div id="my-image"></div>
		<!-- End background Image change -->

		<!-- Start background color change -->
		<!-- <div id="background-color-change">
			<div id="background-color-1"></div>
		</div> -->
		<!-- End background color change -->

		<!-- Start background SVG change -->
		<!-- <div id="image-svg-wrapper">
			<div id="image-svg">
				<div id="svg-circle-1">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188 188">
						<circle id="Ellipse_1" data-name="Ellipse 1" cx="94" cy="94" r="94"/>
					</svg>
				</div>
				<div id="svg-circle-2">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188 188">
						<circle id="Ellipse_1" data-name="Ellipse 1" cx="94" cy="94" r="94"/>
					</svg>
				</div>
				<div id="svg-circle-3">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188 188">
						<circle id="Ellipse_1" data-name="Ellipse 1" cx="94" cy="94" r="94"/>
					</svg>
				</div>
				<div id="svg-circle-4">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188 188">
						<circle id="Ellipse_1" data-name="Ellipse 1" cx="94" cy="94" r="94"/>
					</svg>
				</div>
			</div>
		</div> -->
		<!-- End background SVG change -->

		<!-- Start background VIdeo change -->
		<video autoplay muted loop id="myVideo">
			<source src="<?php echo get_template_directory_uri(); ?>/assets/video/video.mp4" type="video/mp4">
		</video>
		<!-- End background Video change -->

		<!-- End Article 3  |  End Background -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 3 |  End Background  ****************************** -->
<!-- ******************************************************************************** -->















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4  |  Start Top Address  ************************ -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4  |  Start Top Address */
		#article-4{
			height: 30px;
			padding:0;
			color: var(--t-c-white-);
			font-size: 18px;
			overflow: hidden;
		}
		#article-4 .address{
			float: left;
		}
		#article-4 .icon{
			float: right;
		}
		#article-4 .icon a i{
			color: var(--t-c-yellow-);
			padding: 0px 5px;
		}
		@media only screen and (max-width: 1200px) {
			#article-4 .address{
				width: 780px;
			}
		}
		@media only screen and (max-width: 991px) {
			#article-4 .address{
				width: 460px;
			}
		}
		@media only screen and (max-width: 767px) {
			#article-4 .address{
				width: 170px;
			}
		}
		@media only screen and (max-width: 575px) {
			#article-4 .address{
				width: 170px;
			}
		}
		/* End Article 4 |  End Top Address */
	</style>
	<article id="article-4" class="background-color">
		<!-- Start Article 4  |  Start Top Address-->
		<div class="container">
			<!-- <div class="address"><i class="bi bi-telephone-fill"></i> (+880) 1991075127 | <i class="bi bi-geo-alt"></i> 98/1 Bijayshoroni, Tejgaon, Dhaka | <i class="bi bi-envelope"></i> toufiquerabc@gmail.com </div><div class="icon"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-chat-dots"></i></a></div> -->
			<div class="address">
				<i class="bi bi-telephone-fill"></i> (+880) 1991075127 | 
				<i class="bi bi-geo-alt"></i> 98/1 Bijayshoroni, Tejgaon, Dhaka | 
				<i class="bi bi-envelope"></i> toufiquerabc@gmail.com 
			</div>
			<div class="icon">
				<a href="#"><i class="bi bi-facebook"></i></a>
				<a href="#"><i class="bi bi-twitter"></i></a>
				<a href="#"><i class="bi bi-linkedin"></i></a>
				<a href="#"><i class="bi bi-instagram"></i></a>
				<a href="#"><i class="bi bi-chat-dots"></i></a>
			</div>
		</div>
		<!-- End Article 4  |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4 |  End Top Address ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4.1 |  Start Top Address  *********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4.1 |  Start Top Address */
        #article-4-1 .main-wrapper{
            height: 65px;
            width: 100%;
        }
        #article-4-1 .main-wrapper .left-box{
			align-items: center;
		}
        #article-4-1 .main-wrapper .left-box .brand h1 a{
			color: var(--t-c-yellow-);
			font-size: 35px;
			text-transform: uppercase;
		}
        #article-4-1 .main-wrapper .left-box .brand img{
			height: auto;
			width: 200px;
		}
        #article-4-1 .main-wrapper .right-box{
			align-items: center;
		}
        #article-4-1 .main-wrapper .right-box a{
			font-size: 28px;
			width: 100%;
			border: 1px solid var(--t-c-yellow-);
			text-align: center;
			padding: 9px;
			background: var(--theme-glass-2-);
		}
		@media only screen and (max-width: 767px) {
			#article-4-1 .main-wrapper .left-box{
				display: none !important;
			}
		}
		/* End Article 4.1|  End Top Address */
	</style>
	<article id="article-4-1" class="background-color">
		<!-- Start Article 4.1 |  Start Top Address-->
        <div class="container">
            <div class="main-wrapper d-flex">
                <div class="left-box d-flex w-100">
					<div class="brand">
						<h1><a href="#">Top-Address 4.1</a></h1>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="logo"> -->
					</div>
                </div>
                <div class="right-box d-flex w-100">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-chat-dots"></i></a>
                </div>
            </div>
        </div>
		<!-- End Article 4.1 |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4.1|  End Top Address ***************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4.2 |  Start Top Address  *********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4.2 |  Start Top Address */
        #article-4-2 .main-wrapper{
            height: 65px;
            width: 100%;
        }
        #article-4-2 .main-wrapper .left-box{
			align-items: center;
		}
        #article-4-2 .main-wrapper .left-box .brand h1 a{
			color: var(--t-c-yellow-);
			font-size: 35px;
			text-transform: uppercase;
		}
        #article-4-2 .main-wrapper .left-box .brand img{
			height: auto;
			width: 200px;
		}
        #article-4-2 .main-wrapper .right-box{
			align-items: center;
		}
        #article-4-2 .main-wrapper .right-box a{
			font-size: 28px;
			width: 100%;
			text-align: center;
			padding: 9px;
			background: var(--theme-glass-4-);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		@media only screen and (max-width: 767px) {
			#article-4-2 .main-wrapper .left-box{
				display: none !important;
			}
		}
		/* End Article 4.2|  End Top Address */
	</style>
	<article id="article-4-2" class="background-color">
		<!-- Start Article 4.2 |  Start Top Address-->
        <div class="container">
            <div class="main-wrapper d-flex">
                <div class="left-box d-flex w-100">
					<div class="brand">
						<h1><a href="#">Top-Address 4.2</a></h1>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="logo"> -->
					</div>
                </div>
                <div class="right-box d-flex w-100">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-chat-dots"></i></a>
                </div>
            </div>
        </div>
		<!-- End Article 4.2 |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4.2|  End Top Address ***************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4.3 |  Start Top Address  *********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4.3 |  Start Top Address */
        #article-4-3 .main-wrapper{
            height: 65px;
            width: 100%;
        }
        #article-4-3 .main-wrapper .left-box{
			align-items: center;
		}
        #article-4-3 .main-wrapper .right-box{
			align-items: center;
		}
        #article-4-3 .main-wrapper .left-box a{
			font-size: 28px;
			width: 100%;
			text-align: center;
			padding: 9px;
			background: var(--theme-glass-4-);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		#article-4-3 .main-wrapper .log-in{
			float: right;
			width: 100%;
			text-align: end;
		}
		#article-4-3 .main-wrapper .log-in a{
			color: var(--t-c-white-);
			font-size: 18px;
		}
		#article-4-3 .main-wrapper .log-in a:hover{
			color: var(--t-c-yellow-);
		}
		@media only screen and (max-width: 370px) {
			#article-4-3 .main-wrapper .left-box a{
				font-size: 24px;
			}
			#article-4-3 .main-wrapper .log-in{
				text-align: start;
			}
			#article-4-3 .main-wrapper .log-in a{
				color: var(--t-c-white-);
				font-size: 14px;
			}
		}
		/* End Article 4.3|  End Top Address */
	</style>
	<article id="article-4-3" class="background-color">
		<!-- Start Article 4.3 |  Start Top Address-->
        <div class="container">
            <div class="main-wrapper d-flex">
                <div class="left-box d-flex w-100">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-chat-dots"></i></a>
                </div>
                <div class="right-box d-flex w-100">
					<div class="log-in">
						<a class="btn" href="#">LogIn</a> |
						<a class="btn" href="#">Registration</a>
					</div>
                </div>
            </div>
        </div>
		<!-- End Article 4.3 |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4.3|  End Top Address ***************************** -->
<!-- ******************************************************************************** -->















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4.4  |  Start Top Address  ********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4.4  |  Start Top Address */
			#article-4-4{
				background: var(--theme-glass-2-);
			}
			#article-4-4 p{
				color: var(--t-c-yellow-);
				font-size: 18px;
				text-shadow: 0px 0px 9px var(--t-c-black-);
			}
		/* End Article 4.4 |  End Top Address */
	</style>
	<article id="article-4-4" class="background-color">
		<!-- Start Article 4.4  |  Start Top Address-->
		<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="smooth" direction="left">
			<p> 4.4 Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. 4.4 Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. 4.4 Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. Lorem ipsum, dolor sit amet. 4.4</p>
		</marquee>
		<!-- End Article 4.4  |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4.4 |  End Top Address **************************** -->
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
		<!-- Start Article 5  |  Start Navbar | Menu-->
		<div class="header">
			<div class="container">
				<div class="nav-bar">
					<div class="brand">
						<h1><a href="">Toufiquer</a></h1>
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="logo"> -->
					</div>
					<div class="nav-list">
						<div class="hamburger"><div class="bar"></div></div>
						<div class="wrapper">
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
		<!-- End Article 5  |  End Navbar | Menu -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 5 |  End Navbar | Menu  *************************** -->
<!-- ******************************************************************************** -->















<!-- ----------------------------------------- -->
<style>
	.section-nav{
		height: 100vh;
		width: 100%;
		background: var(--theme-glass-3-);
	}
</style>
<!-- ----------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-1"><div class="section-nav"></div><hr></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-2" class="p-top"><div class="section-nav"></div><hr></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-3" class="p-top"><div class="section-nav"></div><hr></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-4" class="p-top"><div class="section-nav"></div><hr></section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-5" class="p-top"><div class="section-nav"></div><hr></section>
<!-- ---------------------------------------------------------------------------------- -->















<!-- --------------------------------------------------------------------------------- -->
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
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 6  |  Start Hero  ******************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 6  |  Start Hero */
		#article-6{
			min-height: 100vh;
			width: 100%;
		}
		#article-6 .title-wrapper {
			height: 100vh;
			color: var(--t-c-white-);
			text-shadow: 0 0 55px black;
			font-size: 45px;
			padding-top: 25px;
			text-align: center;
			position: relative;
		}
		#article-6 .title-wrapper .text-wrapper {
			bottom: 20%;
			position: absolute;
			width: 100%;
		}
		#article-6 h1 {
			font-size: 45px;
		}
		#article-6 h1.cd-headline.letters.rotate-2 {
			color: var(--t-c-white-);
			font-size: 55px;
		}
		#article-6 em {
			font-size: 25px;
			color: var(--t-c-yellow-);
		}
		#article-6 a.btn.btn-hero.btn-l-m {
			color: var(--t-c-white-);
			border: 1px solid currentColor;
			font-size: 18px;
			margin-left: 7px;
			margin-top: -35px;
		}
		#article-6 a.btn.btn-hero.btn-l-m :hover {
			transition: all .7s;
			color: var(--t-c-yellow-);
		}
		#article-6 a.btn.btn-hero {
			color: var(--t-c-white-);
			border: 1px solid currentColor;
			margin-top: -35px;
			font-size: 18px;
			margin-left: -10px;
			background: var(--theme-glass-2-);
		}
		#article-6 a.btn.btn-hero:hover {
			transition: all .7s;
			color: var(--t-c-yellow-);
		}
		#article-6 .right-box{
			position: relative;
			height: 100vh;
			width: 100%;
		}
		#article-6 .first, #article-6 .second {
			color: var(--t-c-white-);
			padding: 9px 25px 9px 25px;
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			position: absolute;
			bottom: 25%;
			max-width: 78%;
			text-align: center;
		}
		#article-6 .first .timer-sub {
			font-size: 18px;
			color: var(--t-c-yellow-);
		}
		#article-6 .first .h2{
			font-size: 35px;
		}
		#article-6 .first p {
			display: inline-block;
			color: var(--t-c-white-);
			font-size: 18px;
			text-shadow: 0 0 var(--t-c-black-);
			line-height: 18px;
		}
		#article-6 .first .contact {
			text-align: center;
		}
		#article-6 .first .icon {
			font-size: 25px;
		}
		#article-6 .first a {
			color: var(--t-c-yellow-);
			margin: 0px 3px;
		}
		#article-6 .timer {
			font-size: 25px;
		}
		#article-6 div#days-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 div#hours-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 div#minutes-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 div#seconds-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 .second p {
			color: var(--t-c-white-);
			font-size: 25px;
			display: inline-block;
			line-height: 25px;
		}
		#article-6 span.span-2.days-2 {
			display: inline;font-size: 22px;color: var(--t-c-yellow-);
		}
		#article-6 span.span-2.hours-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 span.span-2.minute-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 span.span-2.second-2 {
			display: inline;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-6 .btn.btn-appointment{
			font-size: 17px;
			color: var(--t-c-yellow-);
			border: 1px solid currentColor;
			background: var(--theme-glass-2-);
		}
		#article-6 .btn.btn-appointment:hover{
			color: var(--t-c-white-);
			background: var(--theme-glass-2-);
		}
		@media only screen and (min-width:1200px){
			#article-6 .title-wrapper {
				height: 100vh;
			}
			#article-6 .title-wrapper {
				text-align: start;
			}
			#article-6 .title-wrapper .text-wrapper {
				bottom: 15%;
				left: 5%;
		}
		}
		@media only screen and (max-width:425px){
			#article-6 .right-box{
				position: relative;
				height: 50vh;
				width: 100%;
			}
		}
		@media only screen and (max-width:767px){
			#article-6 .first, #article-6 .second{
				max-width: 100%;
			}
			#article-6 .title-wrapper .cd-headline-wrapper {
				display: flex;
				width: 100%;
				height: fit-content;
				align-items: center;
			}
			#article-6 .title-wrapper .cd-headline-wrap {
				margin: 0 auto;
			}
		}
		@media only screen and (min-width:2000px){
			
			#article-6 .title-wrapper {
				font-size: 105px;
			}
			#article-6 h1 {
				font-size: 105px;
			}
			#article-6 h1.cd-headline.letters.rotate-2 {
				font-size: 105px;
			}
			#article-6 em {
				font-size: 75px;
			}
			#article-6 a.btn.btn-hero.btn-l-m {
				font-size: 43px;
			}
			
			#article-6 a.btn.btn-hero {
				font-size: 43px;
			}
				
			#article-6 .first .timer-sub {
				font-size: 55px;
			}
			#article-6 .first .h2{
				font-size: 85px;
			}
			#article-6 .first p {
				font-size: 55px;
				line-height: 55px;
			}
			#article-6 .first .icon {
				font-size: 75px;
			}
			#article-6 .timer {
				font-size: 75px;
			}
			#article-6 div#days-2 {
				display: inline;
				font-size: 82px;
			}
			#article-6 div#hours-2 {
				display: inline;
				font-size: 72px;
			}
			#article-6 div#minutes-2 {
				font-size: 72px;
			}
			#article-6 div#seconds-2 {
				display: inline;
				font-size: 72px;
			}
			#article-6 .second p {
				font-size: 55px;
				line-height: 55px;
			}
			#article-6 span.span-2.days-2 {
				font-size: 72px;
			}
			#article-6 span.span-2.hours-2 {
				font-size: 72px;
			}
			#article-6 span.span-2.minute-2 {
				font-size: 72px;
			}
			#article-6 span.span-2.second-2 {
				font-size: 72px;
			}
			#article-6 .btn.btn-appointment{
				font-size: 45px;
			}
		}
		/* End Article 6 |  End Hero */
	</style>
	<article id="article-6">
		<!-- Start Article  6 |  Start Hero -->
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="title-wrapper">
					<div class="text-wrapper">
						<h1>Hello, I'm</h1>
						<h1>Toufiquer Rahman -6</h1>
						<div class="cd-headline-wrapper">
							<div class="cd-headline-wrap">
								<h1 class="cd-headline letters rotate-2">
									<p class="cd-heading">
										<span class="cd-words-wrapper">
											<b class="is-visible">Web Designer</b>
											<b>Web Developer</b>
											<b>WordPress Developer</b>
											<b>WordPress Customize</b>
											<b>UX, UI Designer</b>
										</span>
									</p>
								</h1>
							</div>
						</div>
						<a href="#" class="btn btn-hero btn-l-m">Portfolio</a>
						<a href="#" class="btn btn-hero">Resume</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="right-box">
					<div class="row">

						<!-- <div class="first">
							<div class="col-12">
								<div class="h2">Now, I Am Available </div>
								<div class="timer-sub">Contact Me for the Better experience</div>
								<p>What Do You Think About I Will Contact You In One Hour?</p>
								<hr>
								<div class="contact">
									<div class="icon">
										<a href="#"><i class="bi bi-facebook"></i></a>
										<a href="#"><i class="bi bi-envelope"></i></a>
										<a href="#"><i class="bi bi-linkedin"></i></a>
										<a href="#"><i class="bi bi-telephone-x"></i></a>
									</div>
								</div>
							</div>
						</div> -->
						<div class="second">
							<div class="timer">Now, I Am Not Available, </br> I Will Be Available In,</div>
							<div class="timer-count">
								<div id="days-2"></div><span class="span-2 days-2">D, </span>
								<div id="hours-2"></div><span class="span-2 hours-2">H, </span>
								<div id="minutes-2"></div><span class="span-2 minute-2">M, </span>
								<div id="seconds-2"></div><span class="span-2 second-2">S </span>
							</div>
							<p>Fix An Appointment For The Better Experience.</p>
							<div class="col-12">
								<a href="#" class="btn btn-appointment">Appointment </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 6  |  End Hero -->
	</article>
	
	<script>
		var date = new Date();
		var v_minute = date.getMinutes();
		var v_hour = date.getHours();
		var v_date = date.getDate() + 2;
		var v_month = date.getMonth() + 2;
		var v_year = date.getFullYear();
		var newYear____ = v_month+ " " +v_date + " " + " " + v_year + " " + v_hour +  ":" + v_minute + ":47";
		console.log(newYear____);
		var newYear__ = newYear____;
		/* var newYear__ = "2 17 2022 22:38:47 "; */
		var countdown__ = function (e__) {
			var diff = new Date(e__).valueOf() - new Date().valueOf();
			var total = Math.floor(diff / 1000);
			var days__ = Math.floor(total / 3600 / 24);
			var hours__ = Math.floor((total / 3600) % 24);
			var minutes__ = Math.floor(total / 60) % 60;
			var seconds = Math.floor(total) % 60;
			ui__(days__, hours__, minutes__, seconds);
		};
		var ui__ = function (d__, h__, m__, s__) {
			var days__ = document.querySelector('#days-2');
			var hours__ = document.querySelector('#hours-2');
			var minutes__ = document.querySelector('#minutes-2');
			var seconds = document.querySelector('#seconds-2');
			days__.innerText = zero(d__);
			hours__.innerText = zero(h__);
			minutes__.innerText = zero(m__);
			seconds.innerText = zero(s__);
		};
		var zero = function (e__) { return (e__ < 10 ? ("0" + e__).toString() : e__.toString()); };
		/* ></> */
		countdown__(newYear__);
		setInterval(function () { return countdown__(newYear__); }, 1000);
	</script>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 6 |  End Hero  ************************************ -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 6.1  |  Start Hero  ***************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 6.1  |  Start Hero */
		#article-6-1 .tex-wrapper {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		#article-6-1 .tex-wrapper h2 {
			font-size: 40px;
			color: var(--t-c-yellow-);
			text-shadow: 0px 0px 9px var(--t-c-black-);
			text-align: center;
		}
		#article-6-1 .tex-wrapper h3 {
			font-size: 28px;
			color: var(--t-c-white-);
			text-shadow: 0px 0px 9px var(--t-c-black-);
			text-align: center;
		}
		#article-6-1 .tex-wrapper a {
			font-size: 18px;
			border: 1px solid var(--t-c-yellow-);
			color: var(--t-c-yellow-);
			text-shadow: 0px 0px 9px var(--t-c-black-);
			text-align: center;
			background: var(--theme-glass-2-);
		}
		#article-6-1 .tex-wrapper a:hover{
			border: 1px solid var(--t-c-crimson-);
			color: var(--t-c-crimson-);
		}
		#article-6-1 .tex-wrapper #headerPopup{
			width:75%;
			margin:0 auto;
		}

		#article-6-1 .tex-wrapper #headerPopup iframe{
			width:100%;
			margin:0 auto;
		}
		@media only screen and (min-width: 1200px){
			#article-6-1 h2 {
				text-align: start;
			}
			#article-6-1 h3 {
				text-align: start;
			}
		}
		@media only screen and (max-width: 767px){
			#article-6-1 .img-hero{
				display: none;
			}
		}
		/* End Article 6.1 |  End Hero */
	</style>
	<article id="article-6-1">
		<!-- Start Article  6.1 |  Start Hero -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="tex-wrapper">
						<div class="text-wrap">
							<h2>Lorem ipsum dolor sit. 6.1</h2>
							<h3>Lorem ipsum dolor sit amet.</h3>
							<h3>Lorem ipsum dolor sit amet.</h3>
							<div class="container">
								<div class="row">
								<div class="col-sm-12">
									<p class="text-center">
									<a href="#headerPopup" id="headerVideoLink" target="_blank" class="btn popup-modal">Want to See more...</a>
									</p>
									<div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
									<!-- <iframe class="embed-responsive-item" width="100%" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<img class="img-hero" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="Title">
				</div>
			</div>
		</div>
		<!-- End Article 6.1  |  End Hero -->
	</article>
	<script>
		$(document).ready(function() {
			$('#headerVideoLink').magnificPopup({
				type:'inline',
				midClick: true
			});         
		});
	  </script>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 6.1 |  End Hero  ********************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 6.2  |  Start Hero  ***************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 6.2  |  Start Hero */
		#article-6-2{
			min-height: 100vh;
			width: 100%;
		}
		#article-6-2 .title-wrapper {
			height: 100vh;
			color: var(--t-c-white-);
			text-shadow: 0 0 55px black;
			font-size: 45px;
			padding-top: 25px;
			text-align: center;
			position: relative;
		}
		#article-6-2 .title-wrapper .text-wrapper {
			bottom: 20%;
			position: absolute;
			width: 100%;
		}
		#article-6-2 h1 {
			font-size: 45px;
		}
		#article-6-2 h1.cd-headline.letters.rotate-2 {
			color: var(--t-c-white-);
			font-size: 55px;
		}
		#article-6-2 em {
			font-size: 25px;
			color: var(--t-c-yellow-);
		}
		#article-6-2 a.btn.btn-hero.btn-l-m {
			color: var(--t-c-white-);
			border: 1px solid currentColor;
			font-size: 18px;
			margin-left: 7px;
			margin-top: -35px;
		}
		#article-6-2 a.btn.btn-hero.btn-l-m :hover {
			transition: all .7s;
			color: var(--t-c-yellow-);
		}
		#article-6-2 a.btn.btn-hero {
			color: var(--t-c-white-);
			border: 1px solid currentColor;
			margin-top: -35px;
			font-size: 18px;
			margin-left: -10px;
			background: var(--theme-glass-2-);
		}
		#article-6-2 a.btn.btn-hero:hover {
			transition: all .7s;
			color: var(--t-c-yellow-);
		}
		#article-6-2 .right-box{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		#article-6-2 .right-box .img-hero{
			padding: 9px;
			max-width: 78%;
		}
		@media only screen and (min-width:1200px){
			#article-6-2 .title-wrapper {
				height: 100vh;
			}
			#article-6-2 .title-wrapper {
				text-align: start;
			}
			#article-6-2 .title-wrapper .text-wrapper {
				bottom: 15%;
				left: 5%;
			}
		}
		@media only screen and (min-width:2000px){
			
			#article-6-2 .title-wrapper {
				font-size: 105px;
			}
			#article-6-2 h1 {
				font-size: 105px;
			}
			#article-6-2 h1.cd-headline.letters.rotate-2 {
				font-size: 105px;
			}
			#article-6-2 em {
				font-size: 75px;
			}
			#article-6-2 a.btn.btn-hero.btn-l-m {
				font-size: 43px;
			}
			
			#article-6-2 a.btn.btn-hero {
				font-size: 43px;
			}
		}
		@media only screen and (max-width: 767px){
			
			#article-6-2 .right-box{
				height: auto;
			}
			#article-6-2 .right-box .img-hero{
				width: 95%;
				margin: 0 auto;
			}
			#article-6-2 .title-wrapper .cd-headline-wrapper {
				display: flex;
				width: 100%;
				height: fit-content;
				align-items: center;
			}
			#article-6-2 .title-wrapper .cd-headline-wrap {
				margin: 0 auto;
			}
		}
		/* End Article 6.2 |  End Hero */
	</style>
	<article id="article-6-2">
		<!-- Start Article  6.2 |  Start Hero -->
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="title-wrapper">
					<div class="text-wrapper">
						<h1>Hello, I'm</h1>
						<h1>Toufiquer Rahman -6.2</h1>
						<div class="cd-headline-wrapper">
							<div class="cd-headline-wrap">
								<h1 class="cd-headline letters rotate-2">
									<p class="cd-heading">
										<span class="cd-words-wrapper">
											<b class="is-visible">Web Designer</b>
											<b>Web Developer</b>
											<b>WordPress Developer</b>
											<b>WordPress Customize</b>
											<b>UX, UI Designer</b>
										</span>
									</p>
								</h1>
							</div>
						</div>
						<a href="#" class="btn btn-hero btn-l-m">Portfolio</a>
						<a href="#" class="btn btn-hero">Resume</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="right-box">
					<div class="row">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/logo.png" alt="Logo" class="img-hero">
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 6.2  |  End Hero -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 6.2 |  End Hero  ********************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 7  |  Start Safety    *************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 7  |  Start Safety */
		#article-7 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-7 .article{
			text-align: justify;
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			padding: 9px;
		}
		#article-7 .article h2{
			font-size: 40px;
			color: var(--t-c-yellow-);
			text-shadow: 0 0 7px var(--theme-glass-2-);
		}
		#article-7 .article p{
			color: var(--t-c-white-);
			font-size: 20px;
			text-shadow: 0 0 7px var(--theme-glass-2-);
		}
		@media only screen and (max-width: 767px){
			#article-7 .article h2{
				font-size: 35px;
			}
		}
		/* End Article 7 |  End Safety */
	</style>
	<article id="article-7">
		<!-- Start Article 7  |  Start Safety -->
		<div class="container">
			<article>
				<div class="row py-5">
					<div class="col-12 col-lg-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Toufiquer Rahman" />
						</div>
					</div>
					<div class="col-12 col-lg-6">
							<div class="article">
								<h2>Toufiquer Rahman -7</h2>
								<div class="line-dell"></div>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							</div>
					</div>
				</div>
			</article>
		</div>
		<!-- End Article 7  |  End Safety -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 7 |  End Safety   ********************************* -->
<!-- ******************************************************************************** -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 7.1  |  Start Safety    ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 7.1  |  Start Safety */
		#article-7-1 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-7-1 .article{
			text-align: justify;
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			padding: 9px;
		}
		#article-7-1 .article h2{
			font-size: 40px;
			color: var(--t-c-yellow-);
			text-shadow: 0 0 7px var(--theme-glass-2-);
		}
		#article-7-1 .article p{
			color: var(--t-c-white-);
			font-size: 20px;
			text-shadow: 0 0 7px var(--theme-glass-2-);
		}
		@media only screen and (max-width: 767px){
			#article-7-1 .article h2{
				font-size: 35px;
			}
		}
		/* End Article 7.1 |  End Safety */
	</style>
	<article id="article-7-1">
		<!-- Start Article 7.1  |  Start Safety -->
		<div class="container">
			<article>
				<div class="row py-5">
					<div class="col-12 col-lg-6">
							<div class="article">
								<h2>Toufiquer Rahman -7.1</h2>
								<div class="line-dell"></div>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
								<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Toufiquer Rahman" />
						</div>
					</div>
				</div>
				
			</article>
		</div>
		<!-- End Article 7.1  |  End Safety -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 7.1 |  End Safety   ******************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 8  |  Start How We Work ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 8  |  Start How We Work */
		#article-8{
			overflow: hidden;
			height: auto;
		}
		#article-8 h1{
			font-size: 35px;
			color: var(--t-c-crimson-);
		}
		#article-8 h2{
			font-size: 35px;
			color: var(--t-c-yellow-);
		}
		#article-8 p{
			color: var(--t-c-white-);
			text-align: justify;
		}
		#article-8 .image-0{
			padding:0;
		}
		#article-8 .line-dell{
			height: 1px;
			width: 100%;
			background: var(--t-c-white-);
			display: block;
			padding: 0;
		}
		#article-8 .article-item{
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			color: var(--t-c-white-);
			margin-bottom: 20px;
		}
		/* End Article 8 |  End How We Work*/
	</style>
	<article id="article-8">
		<!-- Start Article 8  |  Start How We Work -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1>How We Work -8</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			
			<div class="container">
				<div class="row article-item">
					<div class="col-12 col-lg-6 image-0">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="How We Work" />
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="article">
							<h2>How We Work</h2>
							<div class="line-dell"></div>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row article-item">
					<div class="col-12 col-lg-6">
						<div class="article">
							<h2>How We Work</h2>
							<div class="line-dell"></div>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
						</div>
					</div>
					<div class="col-12 col-lg-6 image-0">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="How We Work" />
						</div>
					</div>
				</div>
			</div>
			
			<div class="container"  data-aos="fade-up" data-aos-duration="1000">
				<div class="row article-item">
					<div class="col-12 col-lg-6 image-0">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="How We Work" />
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="article">
							<h2>How We Work</h2>
							<div class="line-dell"></div>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
						</div>
					</div>
				</div>
			</div>
		<!-- End Article 8  |  End How We Work-->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 8 |  End  How We Work  **************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 9  |  Start Services  *************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 9  |  Start Services */
		#article-9{
			color: var(--t-c-crimson-);
			background: var(--theme-glass-2-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
		}
		#article-9 h1{
			font-size: 35px;
		}
		#article-9 h4{
			font-size: 25px;
		}
		#article-9 .item{
			margin: 0 12px;
		}
		#article-9 .text-box{
			background: var(--t-c-black-transparent-);
		}
		#article-9 .text-box p{
			color: var(--t-c-white-);
		}
		#article-9 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-9 .owl-nav{
			display: none;
		}
		#article-9 .owl-dots{
			margin: 6px auto;
		}
		/* End Article 9 |  End Services */
	</style>
	<article id="article-9">
		<!-- Start Article 9  |  Start Services -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -9</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-1 owl-carousel owl-theme">
						
						<div class="item">
							<div class="card">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-img-overlay text-box">
									<h4>Services Title</h4>
									<div class="line-dell"></div>
									
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<p><small>Sub title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="card">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-img-overlay text-box">
									<h4>Services Title</h4>
									<div class="line-dell"></div>
									
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<p><small>Sub title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="card">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-img-overlay text-box">
									<h4>Services Title</h4>
									<div class="line-dell"></div>
									
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<p><small>Sub title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="card">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-img-overlay text-box">
									<h4>Services Title</h4>
									<div class="line-dell"></div>
									
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<p><small>Sub title</small></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 9  |  End Services -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 9 |  End Services  ******************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 9.1 |  Start Services  ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 9.1 |  Start Services */
		#article-9-1{
			color: var(--t-c-crimson-);
			background: var(--theme-glass-2-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
			margin: 9px 0px;
		}
		#article-9-1 h1{
			font-size: 35px;
		}
		#article-9-1 h2{
			font-size: 25px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
			border-bottom: 1px solid var(--t-c-yellow-);
			margin-bottom: 0px;
		}
		#article-9-1 .item{
			margin: 0 12px;
			background: var(--theme-glass-4-);
			backdrop-filter: blur(4px);
			padding: 9px;
		}
		#article-9-1 .item p{
			color: var(--t-c-white-);
			text-align: justify;
		}
		#article-9-1 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-9-1 .owl-nav{
			display: none;
		}
		#article-9-1 .owl-dots{
			margin: 6px auto;
		}
		#article-9-1 .content-wrapper{
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress {
            height: auto;
            max-width: 200px;
            padding: 1em;
            transform: rotate(-90deg);
            width: 100%;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress circle.incomplete {
			opacity: 0.25;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress circle.complete{
			stroke-dasharray: 219.91148575129;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
		}
		#article-9-1 .item .content-wrapper svg.radial-progress circle {
			stroke: #a2ed56;
		}
		#article-9-1 .item .content-wrapper .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			margin: 0 auto;
		}
		#article-9-1 .item .content-wrapper .main-circle .circle-bg{
			position: absolute;
		}
		#article-9-1 .item .content-wrapper .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
		}
		#article-9-1 .item h3{
			font-size: 20px;
			border-bottom: 1px solid var(--t-c-yellow-);
		}
		#article-9-1 .item a{
			font-size: 18px;
			color: var(--t-c-yellow-);
			border: 1px solid var(--t-c-yellow-);
			margin-bottom: 9px;
		}
		#article-9-1 .item a:hover{
			border: 1px solid var(--t-c-white-);
			color: var(--t-c-white-);
			background: var(--theme-glass-2-);
		}
		/* End Article 9.1|  End Services */
	</style>
	<article id="article-9-1">
		<!-- Start Article 9.1 |  Start Services -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -9.1</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-9-1 owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-4">
									<h2>Services Title</h2>
									<div class="content-wrapper">
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
									</div>
									<div class="line-dell"></div>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<h3>Sub Title</h3>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<a href="#" class="btn">read-more...</a>
                                </div>
                                <div class="col-12 col-md-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 9.1 |  End Services -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 9.1|  End Services  ******************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 9.2 |  Start Services  ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 9.2 |  Start Services */
		#article-9-2{
			color: var(--t-c-crimson-);
			background: var(--theme-glass-2-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
			margin: 9px 0px;
		}
		#article-9-2 h1{
			font-size: 35px;
		}
		#article-9-2 h2{
			font-size: 25px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
			border-bottom: 1px solid var(--t-c-yellow-);
			margin-bottom: 0px;
		}
		#article-9-2 .item{
			margin: 0 12px;
			background: var(--theme-glass-4-);
			backdrop-filter: blur(4px);
			padding: 9px;
		}
		#article-9-2 .item p{
			color: var(--t-c-white-);
			text-align: justify;
		}
		#article-9-2 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-9-2 .owl-nav{
			display: none;
		}
		#article-9-2 .owl-dots{
			margin: 6px auto;
		}
		#article-9-2 .content-wrapper{
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress {
            height: auto;
            max-width: 200px;
            padding: 1em;
            transform: rotate(-90deg);
            width: 100%;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress circle.incomplete {
			opacity: 0.25;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress circle.complete{
			stroke-dasharray: 219.91148575129;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
		}
		#article-9-2 .item .content-wrapper svg.radial-progress circle {
			stroke: #a2ed56;
		}
		/* Other Css */
		#article-9-2 .item .content-wrapper .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			margin: 0 auto;
		}
		#article-9-2 .item .content-wrapper .main-circle .circle-bg{
			position: absolute;
		}
		#article-9-2 .item .content-wrapper .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
		}
		#article-9-2 .item h3{
			font-size: 20px;
			border-bottom: 1px solid var(--t-c-yellow-);
		}
		#article-9-2 .item a{
			font-size: 18px;
			color: var(--t-c-yellow-);
			border: 1px solid var(--t-c-yellow-);
			margin-bottom: 9px;
		}
		#article-9-2 .item a:hover{
			border: 1px solid var(--t-c-white-);
			color: var(--t-c-white-);
			background: var(--theme-glass-2-);
		}
		/* End Article 9.2|  End Services */
	</style>
	<article id="article-9-2">
		<!-- Start Article 9.2 |  Start Services -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -9.2</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-9-1 owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
                                </div>
                                <div class="col-12 col-md-4">
									<h2>Services Title</h2>
									<div class="content-wrapper">
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
									</div>
									<div class="line-dell"></div>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<h3>Sub Title</h3>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
							        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
									<a href="#" class="btn">read-more...</a>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 9.2 |  End Services -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 9.2|  End Services  ******************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 9.3 |  Start Services  ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 9.3 |  Start Services */
		#article-9-3{
			color: var(--t-c-crimson-);
			background: var(--theme-glass-2-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
			margin: 9px 0px;
		}
		#article-9-3 h1{
			font-size: 35px;
		}
		#article-9-3 h2{
			font-size: 25px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
			border-bottom: 1px solid var(--t-c-yellow-);
			margin-bottom: 0px;
		}
		#article-9-3 .item{
			margin: 0 12px;
			background: var(--theme-glass-4-);
			backdrop-filter: blur(4px);
			padding: 9px;
		}
		#article-9-3 .item marquee{
			height: 200px;
		}
		#article-9-3 .item p{
			color: var(--t-c-white-);
			text-align: justify;
		}
		#article-9-3 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-9-3 .owl-nav{
			display: none;
		}
		#article-9-3 .owl-dots{
			margin: 6px auto;
		}
		#article-9-3 .content-wrapper{
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress {
            height: auto;
            max-width: 200px;
            padding: 1em;
            transform: rotate(-90deg);
            width: 100%;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress circle.incomplete {
			opacity: 0.25;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress circle.complete{
			stroke-dasharray: 219.91148575129;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
		}
		#article-9-3 .item .content-wrapper svg.radial-progress circle {
			stroke: #a2ed56;
		}
		#article-9-3 .item .content-wrapper .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			margin: 0 auto;
		}
		#article-9-3 .item .content-wrapper .main-circle .circle-bg{
			position: absolute;
		}
		#article-9-3 .item .content-wrapper .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
		}
		#article-9-3 .item h3{
			font-size: 20px;
			border-bottom: 1px solid var(--t-c-yellow-);
		}
		#article-9-3 .item a{
			font-size: 18px;
			color: var(--t-c-yellow-);
			display: inline-block;
			margin-bottom: 9px;
		}
		#article-9-3 .item a:hover{
			color: var(--t-c-crimson-);
		}
		/* End Article 9.3|  End Services */
	</style>
	<article id="article-9-3">
		<!-- Start Article 9.3 |  Start Services -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -9.3</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-9-1 owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-4">
									<h2>Services Title</h2>
									<div class="content-wrapper">
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
									</div>
									<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="smooth" direction="up">
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                    </marquee>
                                </div>
                                <div class="col-12 col-md-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 9.3 |  End Services -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 9.3|  End Services  ******************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 9.4 |  Start Services  ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 9.4 |  Start Services */
		#article-9-4{
			color: var(--t-c-crimson-);
			background: var(--theme-glass-2-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
			margin: 9px 0px;
		}
		#article-9-4 h1{
			font-size: 35px;
		}
		#article-9-4 h2{
			font-size: 25px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
			border-bottom: 1px solid var(--t-c-yellow-);
			margin-bottom: 0px;
		}
		#article-9-4 .item{
			margin: 0 12px;
			background: var(--theme-glass-4-);
			backdrop-filter: blur(4px);
			padding: 9px;
		}
		#article-9-4 .item marquee{
			height: 200px;
		}
		#article-9-4 .item p{
			color: var(--t-c-white-);
			text-align: justify;
		}
		#article-9-4 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-9-4 .owl-nav{
			display: none;
		}
		#article-9-4 .owl-dots{
			margin: 6px auto;
		}
		#article-9-4 .content-wrapper{
			background: var(--theme-glass-2-);
			backdrop-filter: blur( 4px );
			padding: 9px;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress {
            height: auto;
            max-width: 200px;
            padding: 1em;
            transform: rotate(-90deg);
            width: 100%;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress circle {
			fill: rgba(0,0,0,0);
			stroke: #fff;
			stroke-dashoffset: 219.91148575129;
			stroke-width: 10;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress circle.incomplete {
			opacity: 0.25;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress circle.complete{
			stroke-dasharray: 219.91148575129;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress text {
			fill: #fff;
			font: 400 1em/1 'Oswald', sans-serif;
			text-anchor: middle;
		}
		#article-9-4 .item .content-wrapper svg.radial-progress circle {
			stroke: #a2ed56;
		}
		#article-9-4 .item .content-wrapper .main-circle{
			position: relative;
			height: 200px;
			width: 200px;
			margin: 0 auto;
		}
		#article-9-4 .item .content-wrapper .main-circle .circle-bg{
			position: absolute;
		}
		#article-9-4 .item .content-wrapper .main-circle .circle-center{
			position: absolute;
			position: absolute;
			top: 33%;
			left: 33%;
			font-size: 42px;
		}
		#article-9-4 .item h3{
			font-size: 20px;
			border-bottom: 1px solid var(--t-c-yellow-);
		}
		#article-9-4 .item a{
			font-size: 18px;
			color: var(--t-c-yellow-);
			display: inline-block;
			margin-bottom: 9px;
		}
		#article-9-4 .item a:hover{
			color: var(--t-c-crimson-);
		}
		/* End Article 9.4|  End Services */
	</style>
	<article id="article-9-4">
		<!-- Start Article 9.4 |  Start Services -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -9.4</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-9-1 owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
                                </div>
                                <div class="col-12 col-md-4">
									<h2>Services Title</h2>
									<div class="content-wrapper">
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
									</div>
									<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="smooth" direction="up">
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                        <div class="content-wraps">
                                            <h3>Sub Title</h3>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <h4>Sub Title</h4>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. <a href="#">read-more...</a> </p>
                                            
                                        </div>
                                    </marquee>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 9.4 |  End Services -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 9.4|  End Services  ******************************* -->
<!-- ******************************************************************************** -->















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 10  |  Start Review   *************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 10  |  Start Review */
		#article-10{
			color: var(--t-c-crimson-);
			position: relative;
			border-top: 1px solid var(--t-c-white-);
		}
		#article-10 h1{
			font-size: 35px;
		}
		#article-10 h4{
			font-size: 25px;
		}
		#article-10 .item{
			margin: 0 12px;
		}
		#article-10 .text-box{
			background: var(--t-c-black-transparent-);
		}
		#article-10 .text-box p{
			color: var(--t-c-white-);
		}
		#article-10 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-10 .owl-nav{
			display: none;
		}
		#article-10 .owl-dots{
			margin: 6px auto;
		}
		/* End Article 10 |  End Review */
	</style>
	<article id="article-10">
		<!-- Start Article 10  |  Start Review -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Service -10</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-2 owl-carousel owl-theme">
						
						<div class="item card">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-body text-box">
									<h4>Review Title</h4>
									<div class="line-dell"></div>
									<p>Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet ?</p>
									<p><small>Sub Title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item card">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-body text-box">
									<h4>Review Title</h4>
									<div class="line-dell"></div>
									<p>Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet ?</p>
									<p><small>Sub Title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item card">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-body text-box">
									<h4>Review Title</h4>
									<div class="line-dell"></div>
									<p>Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet ?</p>
									<p><small>Sub Title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item card">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-body text-box">
									<h4>Review Title</h4>
									<div class="line-dell"></div>
								<p>Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet ?</p>
									<p><small>Sub Title</small></p>
								</div>
							</div>
						</div>
						
						<div class="item card">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Services Title" />
								<div class="card-body text-box">
									<h4>Review Title</h4>
									<div class="line-dell"></div>
									<p>Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet Lorem ipsum dolor sit, amet ?</p>
									<p><small>Sub Title</small></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 10  |  End Review -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 10 |  End Review  ********************************* -->
<!-- ******************************************************************************** -->















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 11  |  Start Product Item  ********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 11  |  Start Product Item */
		#article-11 .title h1{
			font-size: 35px;
			color: var(--t-c-crimson-);
		}
		#article-11 .item h3{
			font-size: 25px;
		}
		#article-11 .item{
			margin: 0 12px;
		}
		#article-11 .item .card-body{
			padding: 0px;
		}
		#article-11 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-11 .card-buy{
			font-size: 18px;
			background: var(--theme-glass-2-);
			position: relative;
		}
		#article-11 .card-buy a{
			color: var(--t-c-white-);
		}
		#article-11 .card-buy a:hover{
			color: var(--t-c-crimson-);
		}
		#article-11 .card-buy span{
			position: absolute;
			border-left: 1px solid var(--t-c-white-);
			height: 52px;
			width: 1px;
			left: 47%;
			top: 0px;
			transform: rotateZ(35deg);
		}
		#article-11 .owl-nav{
			display: none;
		}
		#article-11 .owl-dots{
			margin: 6px auto;
		}
		/* End Article 11 |  End Product Item */
	</style>
	<article id="article-11">
		<!-- Start Article 11  |  Start Product Item -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>Product Iteam 11</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel-3 owl-carousel owl-theme card-columns">

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 1</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 2</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 3</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 4</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 5</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 6</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

						<div class="item card text-center">
							<div class="card-header bg-primary">
								<h3>My Card 7</h3>
							</div>
							<div class="card-body">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Product Title" />
							</div>
							<div class="card-footer card-buy">
								<div class="row">
									<div class="col-6">
										200$
									</div>
									<span></span>
									<div class="col-6">
										<a target="blanck" href="#">Buy</a>
									</div>
								</div>
							</div> 
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- End Article 11  |  End Product Item -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 11 |  End Product Item  *************************** -->
<!-- ******************************************************************************** -->













<!-- ******************************************************************************** -->
<!-- ***************  Start Article 12  |  Start My Team  *************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 12  |  Start My Team */
		#article-12{
			position: relative;
			border-top: 1px solid var(--t-c-white-);
			padding-bottom: 20px;
		}
		#article-12 .title h1{
			font-size: 35px;
			color: var(--t-c-yellow-);
		}
		#article-12 .item{
			margin: 0 12px;
		}
		#article-12 .item-wraper{
			background: var(--t-c-black-transparent-);
			width: 60%;
			padding: 25px 0px;
			padding-bottom: 10px;
		}
		#article-12 .item img{
			width: 168px;
			height: 168px;
			border-radius: 50%;
			margin: 0 auto;
		}
		#article-12 .text-box h4{
			font-size: 35px;
			text-align: center;
			padding-top: 5px;
		}
		#article-12 .text-box p{
			color: var(--t-c-white-);
			text-align: center;
		}
		#article-12 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-12 .icon{
			text-align: center;
		}
		#article-12 .icon a{
			color: var(--t-c-yellow-);
		}
		#article-12 .icon a:hover{
			color: var(--t-c-white-);
		}
		#article-12 .icon a i {
			padding: 2px 5px;
			font-size: 22px;
		} 
		#article-12 .owl-nav{
			display: none;
		}
		@media only screen and (max-width: 281px){
			
			#article-12 .item-wraper{
				width: 100%!important;
			}
			#article-12 .item{
				margin: 0 15px;
				width: 250px!important;
			}
			#article-12 .item img{
				width: 140px;
				height: 140px;
			}
		}
		/* End Article 12 |  End My Team */
	</style>
	<article id="article-12">
		<!-- Start Article 12  |  Start My Team -->
		<div class="title">
			<div class="container py-5">
				<div class="text-center">
					<h1>My Team 12</h1> 
				</div>
				<div class="line-one"></div>
			</div>
		</div>
		<div class="container item-wraper">
					<div class="owl-carousel-4 owl-carousel owl-theme">

						<div class="item">
							<div class="">
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/png.jpg" alt="Heading Title " />
								<div class=" text-box">
									<h4>Card title 1</h4>
									<div class="line-dell"></div>
									<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p><small>Last updated 3 mins ago</small></p>
									<div class="icon"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-chat-dots"></i></a></div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="">
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/png.jpg" alt="Heading Title " />
								<div class=" text-box">
									<h4>Card title 2</h4>
									<div class="line-dell"></div>
									<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p><small>Last updated 3 mins ago</small></p>
									<div class="icon"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-chat-dots"></i></a></div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="">
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/png.jpg" alt="Heading Title " />
								<div class=" text-box">
									<h4>Card title 3</h4>
									<div class="line-dell"></div>
									<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p><small>Last updated 3 mins ago</small></p>
									<div class="icon"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-chat-dots"></i></a></div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="">
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/png.jpg" alt="Heading Title " />
								<div class=" text-box">
									<h4>Card title 4</h4>
									<div class="line-dell"></div>
									<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p><small>Last updated 3 mins ago</small></p>
									<div class="icon"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-chat-dots"></i></a></div>
								</div>
							</div>
						</div>


					</div>
		</div>
		<!-- End Article 12  |  End My Team -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 12 |  End My team  ******************************** -->
<!-- ******************************************************************************** -->



















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 13  |  Start Hour of Work  ********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 13  |  Start Hour of Work */
		#article-13 .background-wrapper{
			background: var(--theme-glass-2-);
		}
		#article-13 h1{
			color: var(--t-c-white-);
			border-bottom: 1px solid var(--t-c-white-);
			font-size: 35px;
		}
		#article-13 p{
			color: var(--t-c-yellow-);
			font-size: 35px;
			padding-top: 5px;
			float: left;
		}
		#article-13 .sign{
			color: var(--t-c-yellow-);
			font-size: 35px;
			margin-top: -8px;
			margin-left: 4px;
			float: left;
		}
		#article-13 .art-title{
			font-size: 45px;
			text-align: center;
			color: var(--t-c-yellow-);
		}
		/* End Article 13 |  End Hour of Work */
	</style>
	<article id="article-13" class="my-5">
		<!-- Start Article 13  |  Start Hour of Work -->
		<div class="background-wrapper py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 art-title">Article Title 13 <div class="line-one"></div> </div>
					<div class="col-12 col-md-4 col-lg-3">
						<h1>Line of code</h1>
						<p class="counter">5000</p><span class="sign">+</span>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<h1>Line of code</h1>
						<p class="counter">5000</p><span class="sign">+</span>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<h1>Line of code</h1>
						<p class="counter">5000</p><span class="sign">+</span>
					</div>
					<div class="col-12 col-md-4 col-lg-3">
						<h1>Line of code</h1>
						<p class="counter">5000</p><span class="sign">+</span>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 13  |  End Hour of Work -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 13 |  End Hour of Work  *************************** -->
<!-- ******************************************************************************** -->













<!-- ******************************************************************************** -->
<!-- ***************  Start Article 14  |  Start Google Map & Contact  ************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 14  |  Start Google Map & Contact */
		#article-14{
			border-bottom:1px solid var(--t-c-white-);
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		#article-14 .title h1{
			font-size: 35px;
			color: var(--t-c-yellow-);
			margin-bottom: 9px;
		}
		#article-14 .address{
			margin-top: 9px;
			font-size: 18px;
			color: var(--t-c-white-);
		}
		#article-14 .address h4{
			font-size: 22px;
		}
		/* End Article 14 |  End Google Map & Contact */
	</style>
	<article id="article-14">
		<!-- Start Article 14  |  Start Google Map & Contact -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="google-map">
						<div class="mapouter"><div class="gmap-canvas"><iframe width="100%" height="300" id="gmap-canvas" src="https://maps.google.com/maps?q=Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style><style>.gmap-canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div></div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="title">
						<div class="container pt-5">
							<div class="text-center">
								<h1>Address 14</h1> 
							</div>
							<div class="line-one"></div>
						</div>
					</div>
					<div class="address">
						<h4>98/1 Bijoyshoroni, Tejgaon, Dhaka-1215, Bangladesh.</h4>
						<h4>Mobile: (+880)1991075127</h4>
						<h4>Email: toufiquerabc@gmail.com</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 14  |  End Google Map & Contact -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 14 |  End Google Map & Contact  ******************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***********  Start Article 15  |  Start Contact address & Contact Form  ******** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 15  |  Start Contact address & Contact Form */
		#article-15{
			border-top: 1px solid var(--t-c-white-);
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		#article-15 .title h1{
			font-size: 35px;
			color: var(--t-c-yellow-);
		}
		#article-15 .address h4{
			font-size: 22px;
		}
		#article-15 .address{
			color: var(--t-c-white-);
		}
		#article-15 form label{
			font-size: 20px;
			color: var(--t-c-yellow-);
		}
		#article-15 form input{
			font-size: 18px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur(4px);
			color: var(--t-c-white-);
		}
		#article-15 form small{
			font-size: 17px;
			color: var(--t-c-crimson-);
		}
		#article-15 form textarea{
			min-height: 135px;
			font-size: 17px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur(4px);
			color: var(--t-c-white-);
		}
		#article-15 form .submit{
			float: right;
			font-size: 17px;
			color: var(--t-c-white-);
			border: 1px solid currentColor;
			margin-top: 10px;
			background: var(--theme-glass-2-);
			backdrop-filter: blur(4px);
		}
		#article-15 form .submit:hover{
			color: var(--t-c-crimson-);
			border: 1px solid currentColor;
		}
		/* End Article 15 |  End Contact address & Contact Form */
	</style>
	<article id="article-15">
		<!-- Start Article 15  |  Start Contact address & Contact Form -->
		<div class="container py-5">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="title">
						<div class="pt-5">
							<div class="text-center">
								<h1>Address 15</h1> 
							</div>
							<div class="line-one"></div>
						</div>
					</div>
					<div class="address py-5">
						<h4>98/1 Bijoyshoroni, Tejgaon, Dhaka-1215, Bangladesh.</h4>
						<h4>Mobile: (+880)1991075127</h4>
						<h4>Email: toufiquerabc@gmail.com</h4>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<form>
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="form-control form-control-sm" type="text" id="name" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input class="form-control form-control-sm"type="email" id="email" placeholder="Enter email">
							<small class="from-text text-muted">Your email will not be shared with anyone</small>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<textarea  class="form-control"id="message" rows="3"></textarea>
						</div>
						<button class="btn float-right btn-out-line-primary submit"type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<!-- End Article 15  |  End Contact address & Contact Form -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ************  End Article 15 |  End  Contact address & Contact Form  *********** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 16  |  Start About      ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 16  |  Start About */
		#article-16 .line-dell{
            height: 1px;
            width: 100%;
            background: var(--t-c-white-);
            display: block;
            padding: 0;
		}
		#article-16 .article h2{
			color: var(--t-c-crimson-);
			font-size: 35px;
		}
		#article-16 .article, #article-16 .article{
			padding: 9px;
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		#article-16 .article, #article-16 .article p{
			text-align: justify;
			color: var(--t-c-white-);
		}
		/* End Article 16 |  End About */
	</style>
	<article id="article-16">
		<!-- Start Article 16  |  Start About -->
		<div class="container">
			<article>
				<div class="row py-5">
					<div class="col-12 col-lg-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Heading Title " />
						</div>
					</div>
					<div class="col-12 col-lg-6">
							<div class="article">
								<h2>About My self, 16</h2>
								<div class="line-dell"></div>
								<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
								<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
								<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
								<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
							</div>
					</div>
				</div>
			</article>
		</div>
		<!-- End Article 16  |  End About  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 16 |  End About      ************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 17  |  Start Marquee    ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 17  |  Start Marquee */
		#article-17{
			margin: 10px 0px;
		}
		#article-17 .content-wrapper {
			padding: 9px;
		}
		#article-17 marquee{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			height: 550px;
		}
		#article-17 h2 {
			color: var(--t-c-yellow-);
			font-size: 35px;
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			border-bottom: 1px solid currentColor;
			text-align: center;
			margin: 0;
		}
		#article-17 .content-wrapper h3 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			border-bottom: 1px solid currentColor;
		}
		#article-17 .content-wrapper p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		/* End Article 17 |  End Marquee */
	</style>
	<article id="article-17">
		<!-- Start Article 17  |  Start Marquee -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Image">
				</div>
				<div class="col-12 col-md-4">
					<h2>Lorem ipsum dolor sit. 17</h2>
					<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up">
						<div class="content-wrapper">
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
						</div>
					</marquee>
				</div>
			</div>
		</div>
		<!-- End Article 17 |  End Marquee -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 17 |  End Marquee    ************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 17.1  |  Start Marquee  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 17.1  |  Start Marquee */
		#article-17-1{
			margin: 10px 0px;
		}
		#article-17-1 .content-wrapper {
			padding: 9px;
		}
		#article-17-1 marquee{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			height: 550px;
		}
		#article-17-1 h2 {
			color: var(--t-c-yellow-);
			font-size: 35px;
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			border-bottom: 1px solid currentColor;
			text-align: center;
			margin: 0;
		}
		#article-17-1 .content-wrapper h3 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			border-bottom: 1px solid currentColor;
		}
		#article-17-1 .content-wrapper p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		/* End Article 17.1 |  End Marquee */
	</style>
	<article id="article-17-1">
		<!-- Start Article 17.1  |  Start Marquee -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<h2>Lorem ipsum dolor sit. 17.1</h2>
					<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up">
						<div class="content-wrapper">
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
						</div>
					</marquee>
				</div>
				<div class="col-12 col-md-8">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Image">
				</div>
			</div>
		</div>
		<!-- End Article 17.1 |  End Marquee -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 17.1 |  End Marquee  ************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 17.2  |  Start Marquee  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 17.2  |  Start Marquee */
		#article-17-2{
			margin: 10px 0px;
		}
		#article-17-2 .content-wrapper {
			padding: 9px;
		}
		#article-17-2 marquee{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			height: 550px;
		}
		#article-17-2 h2 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			border-bottom: 1px solid currentColor;
			text-align: center;
			margin: 0;
		}
		#article-17-2 .content-wrapper h3 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			border-bottom: 1px solid currentColor;
		}
		#article-17-2 .content-wrapper p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		#article-17-2 .content-wrapper-2{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			padding: 9px;
		}
		#article-17-2 .content-wrapper-2 h3 {
			color: var(--t-c-yellow-);
			font-size: 25px;
			border-bottom: 1px solid currentColor;
		}
		#article-17-2 .content-wrapper-2 p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		/* End Article 17.2 |  End Marquee */
	</style>
	<article id="article-17-2">
		<!-- Start Article 17.2  |  Start Marquee -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3">
					<h2>Lorem ipsum dolor sit. 17.2</h2>
					<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up">
						<div class="content-wrapper">
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
						</div>
					</marquee>
				</div>
				<div class="col-12 col-lg-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Image">
				</div>
				<div class="col-12 col-lg-3">
					<h2>Lorem ipsum dolor sit.</h2>
                    <div class="content-wrapper-2">
                        <div class="content">
                            <h3>Lorem ipsum dolor sit.</h3>
                            <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        </div>
                        <div class="content">
                            <h3>Lorem ipsum dolor sit.</h3>
                            <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- End Article 17.2 |  End Marquee -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 17.2 |  End Marquee  ************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 17.3  |  Start Marquee  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 17.3  |  Start Marquee */
		#article-17-3{
			margin: 10px 0px;
		}
		#article-17-3 .content-wrapper {
			padding: 9px;
		}
		#article-17-3 marquee{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			height: 550px;
		}
		#article-17-3 h2 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			border-bottom: 1px solid currentColor;
			text-align: center;
			margin: 0;
		}
		#article-17-3 .content-wrapper h3 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			border-bottom: 1px solid currentColor;
		}
		#article-17-3 .content-wrapper p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		#article-17-3 .content-wrapper-2{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			padding: 9px;
		}
		#article-17-3 .content-wrapper-2 h3 {
			color: var(--t-c-yellow-);
			font-size: 25px;
			border-bottom: 1px solid currentColor;
		}
		#article-17-3 .content-wrapper-2 p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		/* End Article 17.3 |  End Marquee */
	</style>
	<article id="article-17-3">
		<!-- Start Article 17.3  |  Start Marquee -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3">
					<h2>Lorem ipsum dolor sit. 17.3</h2>
                    <div class="content-wrapper-2">
                        <div class="content">
                            <h3>Lorem ipsum dolor sit.</h3>
                            <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        </div>
                        <div class="content">
                            <h3>Lorem ipsum dolor sit.</h3>
                            <p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
				</div>
				<div class="col-12 col-lg-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Image">
				</div>
				<div class="col-12 col-lg-3">
					<h2>Lorem ipsum dolor sit.</h2>
					<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up">
						<div class="content-wrapper">
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
						</div>
					</marquee>
				</div>
			</div>
		</div>
		<!-- End Article 17.3 |  End Marquee -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 17.3 |  End Marquee  ************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 18  |  Start Mixer-mine  ************************ -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 18  |  Start Mixer-mine */
		#article-18{
			margin: 10px 0px;
		}
		#article-18 .content-wrapper {
			padding: 9px;
		}
		#article-18 marquee{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			height: 550px;
		}
		#article-18 h2 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			border-bottom: 1px solid currentColor;
			text-align: center;
			margin: 0;
		}
		#article-18 .content-wrapper h3 {
			color: var(--t-c-yellow-);
			font-size: 30px;
			border-bottom: 1px solid currentColor;
		}
		#article-18 .content-wrapper p {
			text-align: justify;
			color: var(--t-c-white-);
			margin: 5px 5px 20px 9px;
		}
		#article-18 .content-wrapper-2{
			background: rgba( 255, 255, 255, 0.25 );
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
			padding: 9px;
		}

		#article-18 .content-wrapper-2 svg.radial-progress {
            height: auto;
            max-width: 200px;
            padding: 1em;
            transform: rotate(-90deg);
            width: 100%;
		}
		#article-18 .content-wrapper-2 svg.radial-progress circle {
            fill: rgba(0,0,0,0);
            stroke: #fff;
            stroke-dashoffset: 219.91148575129;
            stroke-width: 10;
		}
		#article-18 .content-wrapper-2 svg.radial-progress circle.incomplete { opacity: 0.25; }
		#article-18 .content-wrapper-2 svg.radial-progress circle.complete {
            stroke-dasharray: 219.91148575129;
        }
		#article-18 .content-wrapper-2 svg.radial-progress text {
            fill: #fff;
            font: 400 1em/1 'Oswald', sans-serif;
            text-anchor: middle;
		}
		#article-18 .content-wrapper-2 svg.radial-progress circle{
            stroke: #a2ed56;
        }
		/* Other Css */
		#article-18 .content-wrapper-2 .main-circle{
            position: relative;
            height: 200px;
            width: 200px;
            margin: 0 auto;
		}
		#article-18 .content-wrapper-2 .main-circle .circle-bg{
		    position: absolute;
		}
		#article-18 .content-wrapper-2 .main-circle .circle-center{
            position: absolute;
            position: absolute;
            top: 33%;
            left: 33%;
            font-size: 42px;
		}
		/* End Article 18 |  End Mixer-mine */
	</style>
	<article id="article-18">
		<!-- Start Article 18  |  Start Mixer-mine -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<h2>Lorem ipsum dolor sit. 18</h2>
                    <div class="content-wrapper-2">
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
                    </div>
					<hr>
					<h2>Lorem ipsum dolor sit.</h2>
                    <div class="content-wrapper-2">
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
                    </div>
				</div>
				<div class="col-12 col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Image">
				</div>
				<div class="col-12 col-md-3">
					<h2>Lorem ipsum dolor sit.</h2>
					<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll" direction="up">
						<div class="content-wrapper">
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
							<div class="content">
								<h3>Lorem ipsum dolor sit.</h3>
								<p>Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit. Lorem ipsum dolor sit.</p>
							</div>
						</div>
					</marquee>
				</div>
			</div>
		</div>
		<!-- End Article 18 |  End Mixer-mine -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 18 |  End Mixer-mine  ************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 19  |  Start Skill bar  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 19  |  Start Skill bar */
		#article-19{
			border-top: 1px solid var(--t-c-white-);
		}
		#article-19 .skill-text{
			padding: 9px;
			background: var(--theme-glass-4-);
			box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
			backdrop-filter: blur( 4px );
			-webkit-backdrop-filter: blur( 4px );
			border: 1px solid rgba( 255, 255, 255, 0.18 );
		}
		#article-19 .title h2{
			font-size: 35px;
			color: var(--t-c-yellow-);
		}
		#article-19 .skill-bars{
			padding-right: 5px;
		}
		#article-19 .skill-bars .bar{
			margin: 20px 0;
		}
		#article-19 .skill-bars .bar:first-child{
			margin-top: 0px;
		}
		#article-19 .skill-bars .bar .info{
			margin-bottom: 5px;
		}
		#article-19 .skill-bars .bar .info span{
			color: var(--t-c-white-);
			font-weight: 500;
			font-size: 17px;
			opacity: 0;
			animation: showText 0.5s 1s linear forwards;
		}
		@keyframes showText {
		100%{
			opacity: 1;
		}
		}
		#article-19 .skill-bars .bar .progress-line{
			height: 10px;
			width: 100%;
			background: #f0f0f0;
			position: relative;
			transform: scaleX(0);
			transform-origin: left;
			animation: animate 1s cubic-bezier(1,0,0.5,1) forwards;
		}
		@keyframes animate {
		100%{
			transform: scaleX(1);
		}
		}
		#article-19 .bar .progress-line span{
			height: 100%;
			position: absolute;
			transform: scaleX(0);
			transform-origin: left;
			background: #6665ee;
			animation: animate 1s 1s cubic-bezier(1,0,0.5,1) forwards;
		}
		#article-19 .progress-line span::before{
			position: absolute;
			content: "";
			top: -10px;
			right: 0;
			height: 0;
			width: 0;
			border: 7px solid transparent;
			border-bottom-width: 0px;
			border-right-width: 0px;
			border-top-color: #000;
			opacity: 0;
			animation: showText2 0.5s 1.5s linear forwards;
		}
		#article-19 .progress-line span::after{
			position: absolute;
			top: -28px;
			right: 0;
			font-weight: 500;
			background: #000;
			color: #fff;
			padding: 1px 8px;
			font-size: 12px;
			opacity: 0;
			animation: showText2 0.5s 1.5s linear forwards;
		}
		@keyframes showText2 {
		100%{
			opacity: 1;
		}
		}
		#article-19 .image-0{
			padding: 0px;
		}
		/* End Article 19 |  End Skill bar */
	</style>
		<style>
		#article-19 .bar .progress-line.html span{
		  width: 90%;
		}
		#article-19 .bar .progress-line.css span{
		  width: 60%;
		}
		#article-19 .bar .progress-line.jquery span{
		  width: 85%;
		}
		#article-19 .bar .progress-line.python span{
		  width: 50%;
		}
		#article-19 .bar .progress-line.mysql span{
		  width: 75%;
		}
		#article-19 .progress-line.html span::after{
		  content: "90%";
		}
		#article-19 .progress-line.css span::after{
		  content: "60%";
		}
		#article-19 .progress-line.jquery span::after{
		  content: "85%";
		}
		#article-19 .progress-line.python span::after{
		  content: "50%";
		}
		#article-19 .progress-line.mysql span::after{
		  content: "75%";
		}
		</style>
	<article id="article-19">
		<!-- Start Article 19  |  Start Skill bar -->
		<div class="container">
			<div class="row py-4">
				<div class="col-12 col-md-6 image-0">
					<div class="image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
					</div>
				</div>
				<div class="col-12 col-md-6 skill-text">
					<div class="title">
						<h2>My Skill 19</h2>
						<hr>
					</div>
					<div class="skill-bars">
						<div class="bar">
							<div class="info">
								<span>HTML</span>
							</div>
							<div class="progress-line html">
								<span></span>
							</div>
						</div>
						<div class="bar">
							<div class="info">
								<span>CSS</span>
							</div>
							<div class="progress-line css">
								<span></span>
							</div>
						</div>
						<div class="bar">
							<div class="info">
								<span>jQuery</span>
							</div>
							<div class="progress-line jquery">
								<span></span>
							</div>
						</div>
						<div class="bar">
							<div class="info">
								<span>Python</span>
							</div>
							<div class="progress-line python">
								<span></span>
							</div>
						</div>
						<div class="bar">
							<div class="info">
								<span>MySQL</span>
							</div>
							<div class="progress-line mysql">
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 19  |  End Skill bar -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 19 |  End Skill bar  ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 20  |  Start Portfolio  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 20  |  Start Portfolio */
		.mfp-auto-cursor .mfp-content{
			background: var(--theme-glass-2-);
			max-width: 1000px;
		}
		.mfp-auto-cursor .mfp-content img{
			width:100%;
		}
		.mfp-auto-cursor .mfp-content .por-text h2{
			border-bottom: 1px solid var(--t-c-yellow-);
			color: var(--t-c-yellow-);
		}
		.mfp-auto-cursor .mfp-content .por-text{
			padding: 9px;
		}
		.mfp-auto-cursor .mfp-content .por-text, .mfp-auto-cursor .mfp-content .por-text p{
			color: var(--t-c-white-);
		}
		.mfp-close-btn-in .mfp-close{
			color: var(--t-c-yellow-);
		}
		#article-20 .my-work{
			text-align: center;
			font-size: 50px;
			color: var(--t-c-yellow-);
		}
		#article-20 .por-text p{
			font-size: 15px;
			text-align: justify;
			line-height: 20px;
		}
		#article-20 .por-text p a{
			color: var(--t-c-yellow-);
			font-weight: bold;
			font-size: 16px;
			text-decoration: underline;
		}
		#article-20 .por-text-details .col-xs-4 p {
			font-weight: bold;
			text-transform: uppercase;
			color: var(--t-c-yellow-);
		}

		#article-20 .mfp-zoom-out .mfp-with-anim {
			opacity: 0;
			-webkit-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			-webkit-transform: scale(1.3);
			-ms-transform: scale(1.3);
			transform: scale(1.3);
		}
		#article-20 .mfp-zoom-out.mfp-bg {
			opacity: 0;
			-webkit-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
		#article-20 .mfp-zoom-out.mfp-ready .mfp-with-anim {
			opacity: 1;
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			transform: scale(1);
		}
		#article-20 .mfp-zoom-out.mfp-ready.mfp-bg {
			opacity: 0.8;
		}
		#article-20 .mfp-zoom-out.mfp-removing .mfp-with-anim {
			-webkit-transform: scale(1.3);
			-ms-transform: scale(1.3);
			transform: scale(1.3);
			opacity: 0;
		}
		#article-20 .mfp-zoom-out.mfp-removing.mfp-bg {
			opacity: 0;
		}
		#article-20 .por-text h2 {
			text-transform: uppercase;
			margin: 0;
			font-size: 22px;
			margin-bottom: 15px;
			border-bottom: 3px solid var(--t-c-yellow-);
			padding-bottom: 10px;
		}
		#article-20 .white-popup {
			position: relative;
			background: #FFF;
			padding: 30px;
			width: auto;
			max-width: 60%;
			margin: 0 auto;
		}
		#article-20 .por-text-details .col-xs-4 p {
			font-weight: bold;
			text-transform: uppercase;
		}
		#article-20 .hovereffect {
			width: 100%;
			height: 100%;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: pointer;
			background: var(--theme-glass-1-);
		}
		#article-20 .hovereffect .overlay {
			width: 100%;
			height: 100%;
			position: absolute;
			overflow: hidden;
			top: 0;
			left: 0;
			padding: 3em;
			text-align: left;
		}
		#article-20 .hovereffect img {
			display: block;
			position: relative;
			max-width: none;
			width: calc(100% + 60px);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
			transition: opacity 0.35s, -webkit-transform 0.45s;
			-o-transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s, -webkit-transform 0.45s;
			-webkit-transform: translate3d(-40px,0,0);
			transform: translate3d(-40px,0,0);
		}
		#article-20 .hovereffect h2 {
			text-transform: uppercase;
			color: var(--t-c-yellow-);
			position: relative;
			font-size: 17px;
			background-color: transparent;
			padding: 5% 0 10px 0;
			text-align: left;
			opacity: 0;
		}
		#article-20 .hovereffect:hover h2 {
			color: var(--t-c-yellow-);
			opacity: 1;
		}
		#article-20 .hovereffect .overlay:before {
			position: absolute;
			top: 20px;
			right: 20px;
			bottom: 20px;
			left: 20px;
			border: 1px solid #fff;
			content: '';
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
			transition: opacity 0.35s, -webkit-transform 0.45s;
			-o-transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s, -webkit-transform 0.45s;
			-webkit-transform: translate3d(-20px,0,0);
			transform: translate3d(-20px,0,0);
		}
		#article-20 .hovereffect a, .hovereffect p {
			color: var(--t-c-white-);
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
			transition: opacity 0.35s, -webkit-transform 0.45s;
			-o-transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s;
			transition: opacity 0.35s, transform 0.45s, -webkit-transform 0.45s;
			-webkit-transform: translate3d(-10px,0,0);
			transform: translate3d(-10px,0,0);
		}
		#article-20 .hovereffect:hover img {
			opacity: 0.2;
			filter: alpha(opacity=20);
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
		}
		#article-20 .hovereffect:hover .overlay:before,
		#article-20 .hovereffect:hover a, .hovereffect:hover p {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
		}
		#article-20 .no-pad {
			padding: 0;
		}
		/* End Article 20 |  End Portfolio */
	</style>
	<article id="article-20">
		<!-- Start Article 20  |  Start Portfolio -->
		<div class="portfolio-area div-padding py-4" id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="div-header">
							<h2 class="my-work">My Works 20</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups">
							<a data-effect="mfp-zoom-out" href="#test-popup-1">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-1">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg"> 
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups">
							<a data-effect="mfp-zoom-out" href="#test-popup-2">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-2">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups">
							<a data-effect="mfp-zoom-out" href="#test-popup-3">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-3">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
										<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups">
							<a data-effect="mfp-zoom-out" href="#test-popup-4">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-4">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
										<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups">
							<a data-effect="mfp-zoom-out" href="#test-popup-5">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-5">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
										<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 no-pad">
						<div class="port-box" id="inline-popups-6">
							<a data-effect="mfp-zoom-out" href="#test-popup-6">
							<div class="hovereffect">
							<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
								<div class="overlay">
									<h2>Project One</h2>
									<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
								</div>
							</div></a>
						</div>
						<div class="white-popup mfp-with-anim mfp-hide" id="test-popup-6">
							<div class="row">
								<div class="col-md-7 col-xs-12">
									<div class="por-img">
										<img alt="portfolio image" class="img-responsive  " src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
									</div>
								</div>
								<div class="col-md-5 col-xs-12">
									<div class="por-text">
										<h2>My Project Title</h2>
										<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </p>
										<div class="por-text-details">
											<div class="row">
												<div class="col-4">
													<p>Client:</p>
													<p>Completed:</p>
													<p>Type:</p>
													<p>link:</p>
												</div>
												<div class="col-8">
													<p>Reebok</p>
													<p>15/03/2018</p>
													<p>WordPress Site</p>
													<p><a href="#">Go Live</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 20  |  End Portfolio -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 20 |  End Portfolio  ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 21  |  Start Gallery   ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 21  |  Start Gallery  */
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
		/* End Article 21 |  End Gallery  */
	</style>
	<article id="article-21">
		<!-- Start Article 21  |  Start Gallery  -->
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
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
				<a class="popup-item col-12 col-md-6 col-lg-4 image-0" href="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Gallery Title" />
				</a>
			</div>
		</div>
		<!-- End Article 21  |  End Gallery  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 21 |  End Gallery   ******************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 22  |  Start Counter   ************************** -->
<!-- ******************************************************************************** -->
<div class="container">
	<div class="py-5 my-5">
		<div class="container display-1 text-center">Counter 22</div>
		<p class="counter text-center text-light display-4">5000</p>
	</div>
</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22  |  End Counter    ************************** -->
<!-- ******************************************************************************** -->
















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
		/* Start Article 22.1  |  End Counter  */
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
		<!-- Start Article 22.1  |  End Counter  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22.1  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->
















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
		/* Start Article 22.2  |  End Counter  */
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
		<!-- Start Article 22.2  |  End Counter  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 22.2  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 23  | Start Circle Bar ************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 23  | Start Circle Bar */
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
		/* End Article 23  | End Circle Bar */
	</style>
	<article id="article-23">
		<!-- Start Article 23  | Start Circle Bar -->
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
		<!-- End Article 23  | End Circle Bar -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 23  | End Circle Bar   ************************** -->
<!-- ******************************************************************************** -->
















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
		/* Start Article 23.1  |  End Circle Bar  */
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
					<div class="col-12 col-sm-4 col-lg-3">
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
					<div class="col-12 col-sm-4 col-lg-3">
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
					<div class="col-12 col-sm-4 col-lg-3">
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
					<div class="col-12 col-sm-4 col-lg-3">
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
		<!-- Start Article 23.1  |  End Circle Bar  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 23.1  |  End Circle Bar    ********************* -->
<!-- ******************************************************************************** -->














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
		/* Start Article 23.2  |  End Counter  */
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
		<!-- Start Article 23.2  |  End Counter  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************     End Article 23.2  |  End Counter    ************************ -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 24  | Start CD Headline  ************************ -->
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
<!-- ***************    End Article 24  | End CD Headline    ************************ -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************    Start Article 25  | Start Card Filter    ******************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 25  | Start Card Filter */
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
		/* End Article 25  | End Card Filter */
	</style>
	<article id="article-25">
		<!-- Start Article 25  | Start Card Filter -->
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						<h4>Mountains</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column nature col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Lights" style="width:100%">
						<h4>Lights</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column nature col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Nature" style="width:100%">
						<h4>Forest</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>

				<div class="column cars col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Car" style="width:100%">
						<h4>Retro</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column cars col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Car" style="width:100%">
						<h4>Fast</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column cars col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Car" style="width:100%">
						<h4>Classic</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>

				<div class="column people col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="People" style="width:100%">
						<h4>Girl</h4>
						<p>Lorem ipsum dolor..</p>
						<a class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column people col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="People" style="width:100%">
						<h4>Man</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
				<div class="column people col-12 col-lg-6">
					<div class="content">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="People" style="width:100%">
						<h4>Woman</h4>
						<p>Lorem ipsum dolor..</p>
						<a target="blanck" class="btn" href="#" id="filter-btn">View</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 25  | End Card Filter -->
	</article>
	
	<script>
		/* Start Article 25  | Start Card Filter */
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
		/* End Article 25  | End Card Filter */
	</script>
</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 25  | End Card Filter    ************************ -->
<!-- ******************************************************************************** -->













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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 full-p col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 mt-des col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 mt-des col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 my-dvl col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 my-dvl col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
						</div>
					</a>
				</div>

				<div class="column-1 my-dvl col-12 col-lg-6">
					<a target="blanck" class="btn" href="#" id="filter_btn">
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Mountains" style="width:100%">
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
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 26 | Start New Year Countdown  ****************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 26 | Start New Year Countdown */
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
		/* End Article 26 | End New Year Countdown */
	</style>

	<article id="article-26">
		<!-- Start Article 26 | Start New Year Countdown -->
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
		<!-- End Article 26 | End New Year Countdown -->
	</article>

	<script>
		/* End Article 26 | End New Year Countdown */
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
		/* > </ > > </ > */
		countdown(newYear);
		setInterval(function () { return countdown(newYear); }, 1000);
		/* End Article 26 | End New Year Countdown */
	</script>
</div>
<!-- ******************************************************************************** -->
<!-- ***************    End Article 26 | End New Year Countdown   ******************* -->
<!-- ******************************************************************************** -->

















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 27  |  Start Logo    **************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 27  |  Start Logo */
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
		/* End Article 27 |  End Logo */
	</style>
	<article id="article-27">
		<!-- Start Article 27  |  Start Logo -->
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
						<button id="myBtn-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 1</p></button>
						<button id="myBtn-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 2</p></button>
						<button id="myBtn-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 3</p></button>
						<button id="myBtn-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 4</p></button>
						<button id="myBtn-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 5</p></button>
						<button id="myBtn-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 6</p></button>
						<button id="myBtn-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 7</p></button>
						<button id="myBtn-8"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"><p>Text - 8</p></button>
					</div>
				</div>	
			</marquee>
		</div>
		<!-- End Article 27 |  End Logo -->
	</article>
</div>
<div id="article-27-x">
	<!-- Start Modal Body -->
	<div id="myModal-1" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-1 close-x">&times;</span>
		<p>Some text in the Modal..1</p>
		</div>
	</div>
	<div id="myModal-2" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-2 close-x">&times;</span>
		<p>Some text in the Modal..2</p>
		</div>
	</div>
	<div id="myModal-3" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-3 close-x">&times;</span>
		<p>Some text in the Modal..3</p>
		</div>
	</div>
	<div id="myModal-4" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-4 close-x">&times;</span>
		<p>Some text in the Modal..4</p>
		</div>
	</div>
	<div id="myModal-5" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-5 close-x">&times;</span>
		<p>Some text in the Modal..5</p>
		</div>
	</div>
	<div id="myModal-6" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-6 close-x">&times;</span>
		<p>Some text in the Modal..6</p>
		</div>
	</div>
	<div id="myModal-7" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-7 close-x">&times;</span>
		<p>Some text in the Modal.. 7</p>
		</div>
	</div>
	<div id="myModal-8" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
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
<!-- ***************      End Article 27 |  End Logo    ***************************** -->
<!-- ******************************************************************************** -->


















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 28 |  Start Logo  ******************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 28 |  Start Logo */
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
		/* End Article 28|  End Logo */
	</style>
	<article id="article-28">
		<!-- Start Article 28 |  Start Logo -->
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
							<button id="myBtn-28-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 1</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 2</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 3</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 4</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 5</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 6</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-7"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 7</p>
						</div>
                        <div class="item">
                            <button id="myBtn-28-8"><img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo"></button>
							<p>Text - 8</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 28 |  End Logo -->
	</article>
</div>
<div id="article-28-x">
	<!-- Start Modal Body -->
	<div id="myModal-28-1" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-1 close-x">&times;</span>
		<p>Some text in the Modal..1</p>
		</div>
	</div>
	<div id="myModal-28-2" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-2 close-x">&times;</span>
		<p>Some text in the Modal..2</p>
		</div>
	</div>
	<div id="myModal-28-3" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-3 close-x">&times;</span>
		<p>Some text in the Modal..3</p>
		</div>
	</div>
	<div id="myModal-28-4" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-4 close-x">&times;</span>
		<p>Some text in the Modal..4</p>
		</div>
	</div>
	<div id="myModal-28-5" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-5 close-x">&times;</span>
		<p>Some text in the Modal..5</p>
		</div>
	</div>
	<div id="myModal-28-6" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-6 close-x">&times;</span>
		<p>Some text in the Modal..6</p>
		</div>
	</div>
	<div id="myModal-28-7" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-7 close-x">&times;</span>
		<p>Some text in the Modal.. 7</p>
		</div>
	</div>
	<div id="myModal-28-8" class="modal">
		<div class="modal-content">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="Logo">
		<span class="close-28-8 close-x">&times;</span>
		<p>Some text in the Modal.. 8</p>
		</div>
	</div>
	<!-- End Modal Body -->
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
<!-- ***************  End Article 28|  End Logo  ************************************ -->
<!-- ******************************************************************************** -->
















<!-- --------------------------------------------------------------------------------- -->
<!-- 									Mouse Click Disabled	   					   -->
<!-- --------------------------------------------------------------------------------- -->
<script>
	// document.addEventListener("contextmenu",function(mouseFunction){mouseFunction.preventDefault();});
</script>
<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 29  |  Start Mega Footer  *********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 29  |  Start Mega Footer */
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
		/* End Article 29 |  End Mega Footer */
	</style>
	<article id="article-29">
		<!-- Start Article  17 |  Start Mega Footer -->
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
		<!-- End Article 29  |  End Mega Footer -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 29 |  End  Mega Footer **************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 30  |  Start Footer  **************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 30  |  Start Footer */
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
		/* End Article 30 |  End Footer */
	</style>
	<article id="article-30">
		<!-- Start Article 30 |  Start Footer -->
		<div class="footer-text">
			<p>Copyright &copy; Toufiquer Rahman</p>
		</div>
		<!-- End Article 30  |  End Footer -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 30 |  End Footer  ********************************* -->
<!-- ******************************************************************************** -->














<!-- ******************************************************************************** -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/del/js/jquery-2.1.1.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollwatch.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/del/js/highlight.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
<!-- ******************************************************************************** -->
</body>
</html>

















<!-- ******************************************************************************** -->
<!-- ***************  Start Article   |  Start     ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article   |  Start  */
		/* End Article  |  End  */
	</style>
	<article id="article-">
		<!-- Start Article   |  Start  -->
		<!-- End Article  |  End  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article  |  End     ************************** -->
<!-- ******************************************************************************** -->