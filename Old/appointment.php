<?php
	/*Template Name: Appointment Template22.  */
?>
<?php get_header();?>

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
<!-- ***************  Start Article 3  |  Start Background  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 3  |  Start Background */
		.background-bg{
			background: url("assets/img/bg.jpg");
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
			background-image: url(assets/img/bg/bg2.png);
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
				background-image:url(assets/img/bg/bg1.png);
			}
			20%{
				background-image:url(assets/img/bg/bg2.png);
			}
			40%{
				background-image:url(assets/img/bg/bg3.png);
			}
			60%{
				background-image:url(assets/img/bg/bg4.png);
			}
			80%{
				background-image:url(assets/img/bg/bg5.png);
			}
			100%{
				background-image:url(assets/img/bg/bg6.png);
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
<!-- ***************  Start Article 31  |  Start Appointment  *********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 31  |  Start Appointment */
		#article-31{
			position: relative;
			max-width: 678px;
			margin: 0 auto;
			padding: 9px;
			backdrop-filter: blur(4px);
			background: var(--theme-glass-4-);
		}
		#article-31 h1 {
			font-size: 35px;
			color: var(--t-c-yellow-);
			border-bottom: 1px solid currentColor;
		}
		#article-31 label {
			font-size: 22px;
			color: darkkhaki;
		}
		#article-31 input#fieldname2_1 {
			font-size: 22px;
			color: white;
			background: no-repeat;
			padding: 2px;
		}
		#article-31 input#email_1 {
			font-size: 22px;
			color: white;
			background: no-repeat;
			padding: 2px;
		}
		#article-31 select.ahbfield_service {
			background: none;
			font-size: 18px;
			padding: 4px;
		}
		#article-31 #fbuilder .slots div a:hover{
			Color: var(--t-c-black-);
		}
		#article-31 .slots {
			max-width: 20%;
			color: var(--t-c-yellow-);
		}
		#article-31 .ahb_list {
			border: 1px solid currentColor;
			padding: 5px;
			margin-top: 7px;
			color: var(--t-c-white-);
		}
		#article-31 a.cancel {
			color: red;
		}
		#article-31 .captcha {
			border: 1px solid currentColor;
			color: var(--t-c-white-);
			padding: 9px 7px 0px 9px;
		}
		#article-31 img#captchaimg_1 {
			width: 70%;
			margin: 0 auto;
		}
		#article-31 input#hdcaptcha_cp_appbooking_post_1 {
			background: no-repeat;
			font-size: 22px;
			color: var(--t-c-yellow-);
		}
		#article-31 button.pbSubmit {
			color: var(--t-c-crimson-) !important;
			font-weight: bold;
		}
		/* End Article 31 |  End Appointment */
	</style>
	<section id="article-31">
		<!-- Start Article 31  |  Start Appointment -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="appointment-wrapper">
						<?php
							if ( have_posts() ):
								while ( have_posts() ): the_post();
						?>
						<div class=""> <?php echo the_content();  ?><hr></div>
						<?php endwhile;endif;?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 31  |  End  Appointment-->
	</section>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 31|  End  Appointment   *************************** -->
<!-- ******************************************************************************** -->



<?php get_footer();?>