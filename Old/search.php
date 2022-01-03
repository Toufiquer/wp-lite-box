<?php
	/*Template Name: index Template.  */
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
<body></body>
<!-- ******************************************************************************** -->










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
<!-- ***************  Start Article 33  |  Start Search   *************************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 33  |  Start Search */
        #article-33 .wrapper-index{
            background: var(--theme-glass-4-);
            min-height: 100vh;
            backdrop-filter: blur(4px);
            padding: 20px;
			text-align: center;
			position: relative;
        }
        #article-33 .wrapper-index .btn{
			position: absolute;
			top: 2%;
			right: 2%;
		}
        #article-33 .wrapper-index a.btn{
            font-size: 20px;
            border: 1px solid currentColor;
            color: var(--t-c-yellow-);
            margin-top: 25px;
            padding: 0px 20px 0px 20px;
            border-radius: 0px;
            font-weight: bold;
            background: var(--theme-glass-3-);
        }
        #article-33 .wrapper-index a.btn:hover{
            background: var(--theme-glass-4-);
        }
        #article-33 .wrapper-index h2{
			font-size: 45px;
		}
        #article-33 .wrapper-index .search-bar{
			padding-top: 15%;
		}
        #article-33 .wrapper-index label.wp-block-search__label {
            display: none;
        }
        #article-33 .wrapper-index input#wp-block-search__input-1 {
            background: var(--theme-glass-3-);
            min-width: 265px;
            padding: 0px 9px;
            color: var(--t-c-yellow-);
        }
        #article-33 .wrapper-index button.wp-block-search__button {
            background: var(--theme-glass-4-);
            color: wheat;
            font-weight: bolder;
            padding: 0px 9px;
            border: 2px solid currentColor;
        }
		#article-33 .wrapper-index li {
			list-style: none;
			text-align: left;
			padding-left: 25px;
		}
        #article-33 .wrapper-index li .img-wrapper{
			overflow: hidden;
			height: 100px;
		}
        #article-33 .wrapper-index li a{
			font-size: 25px;
			color: var(--t-c-white-);
		}
        #article-33 .wrapper-index li a:hover{
			font-size: 25px;
			color: var(--t-c-yellow-);
		}
		#article-33 .wrapper-index li a.btn-read {
			font-size: 16px !important;
			color: var(--t-c-yellow-) !important;
			text-decoration: underline;
		}
		#article-33 .wrapper-index li p {
			text-align: justify;
			text-shadow: 0px 0px 0px currentColor;
		}
		@media screen and (max-width: 768px){
			#article-33 .wrapper-index h2{
				font-size: 35px;
			}
			#article-33 .wrapper-index li a{
				font-size: 18px;
			}
			#article-33 .wrapper-index li a:hover{
				font-size: 18px;
			}
			#article-33 .wrapper-index .search-bar{
				padding-top: 30%;
			}
		}
		/* End Article 33 |  End Search */
	</style>
	<article id="article-33">
		<!-- Start Article 33  |  Start Search -->
		<div class="container">
			<div class="wrapper-index">
			<a class="btn" href="<?php echo esc_url( home_url() ); ?>" type="button" class="cta"><i class="bi bi-house-door"></i> Go Home</a>
			<div class="search-bar"><?php dynamic_sidebar('search_form'); ?></div>




<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        /*_e("<h2>Search Results for: ".get_query_var('s')." </h2>"); */
        _e("<h2>Your results are displayed below</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="col-12 col-md-3 img-wrapper">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
										}else{ ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="<?php the_title(); ?>" />
										<?php }
									?>
								</div>
								<div class="col-12 col-md-9">
									<?php the_title(); ?>
									<p><?php echo excerpt('33'); ?></p>
								</div>
							</div>
						</a>
                    </li> <hr>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>


			</div>
		</div>
		<!-- End Article 33 |  End Search -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************      End Article 33 |  End Search   **************************** -->
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