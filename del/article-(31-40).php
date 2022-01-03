














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 31.0  |  Start Appointment  ********************* -->
<!-- ******************************************************************************** -->
	<div class="d-none">
		<style>
			/* Start Article 31.0  |  Start Appointment */
			#article-31-0{
				position: relative;
				max-width: 678px;
				margin: 0 auto;
				padding: 9px;
				backdrop-filter: blur(4px);
				background: var(--theme-glass-4-);
			}
			#article-31-0 h1 {
				font-size: 35px;
				color: var(--t-c-yellow-);
				border-bottom: 1px solid currentColor;
			}
			#article-31-0 label {
				font-size: 22px;
				color: darkkhaki;
			}
			#article-31-0 input#fieldname2_1 {
				font-size: 22px;
				color: white;
				background: no-repeat;
				padding: 2px;
			}
			#article-31-0 input#email_1 {
				font-size: 22px;
				color: white;
				background: no-repeat;
				padding: 2px;
			}
			#article-31-0 select.ahbfield_service {
				background: var(--theme-glass-4-);
				font-size: 18px;
				padding: 4px;
				width: 300px;
				color: var(--t-c-black-);
				text-shadow: 0px 0px 0px currentColor;
			}
			#article-31-0 #fbuilder .slots div a:hover{
				Color: var(--t-c-black-);
			}
			#article-31-0 .slots {
				max-width: 100%;
				color: var(--t-c-yellow-);
			}
			#article-31-0 .ahb_list {
				border: 1px solid currentColor;
				padding: 5px;
				margin-top: 7px;
				color: var(--t-c-white-);
			}
			#article-31-0 a.cancel {
				color: red;
			}
			#article-31-0 .captcha {
				border: 1px solid currentColor;
				color: var(--t-c-white-);
				padding: 9px 7px 0px 9px;
			}
			#article-31-0 img#captchaimg_1 {
				width: 70%;
				margin: 0 auto;
			}
			#article-31-0 input#hdcaptcha_cp_appbooking_post_1 {
				background: no-repeat;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-31-0 button.pbSubmit {
				color: var(--t-c-crimson-) !important;
				font-weight: bold;
			}
			#article-31-0 .ahbfield_quantity{
				display: none;
			}
			#article-31-0 .ahbfield_quantity_label {
				display: none !important;
			}
			#article-31-0 span.uh {
				color: var(--t-c-yellow-);
			}
			#article-31-0  #fbuilder .medium {
				color: var(--t-c-yellow-);
				width: 100% !important;
				background: none;
				padding: 0px 0px 0px 8px;
			}
			#article-31-0 input#hdcaptcha_cp_appbooking_post_2 {
				width: 100%;
				background: no-repeat;
				color: var(--t-c-yellow-);
				padding: 0px 0px 0px 9px;
			}
			#article-31-0 div#hdcaptcha_error_2 {
				color: crimson;
			}
			#article-31-0 .cpefb_error.message {
				color: crimson;
			}
			/* End Article 31.0  |  End Appointment */
		</style>
		<section id="article-31-0">
			<!-- Start Article 31.0  |  Start Appointment -->
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
			<!-- End Article 31.0  |  End Appointment  -->
		</section>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 31.0  |  End Appointment   ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 31.0  |  Start Appointment  	============================ -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 31.0  |  Start Appointment */
			#article-31-0{
				position: relative;
				max-width: 678px;
				margin: 0 auto;
				padding: 9px;
				backdrop-filter: blur(4px);
				background: var(--theme-glass-4-);
			}
			#article-31-0 h1 {
				font-size: 35px;
				color: var(--t-c-yellow-);
				border-bottom: 1px solid currentColor;
			}
			#article-31-0 label {
				font-size: 22px;
				color: darkkhaki;
			}
			#article-31-0 input#fieldname2_1 {
				font-size: 22px;
				color: white;
				background: no-repeat;
				padding: 2px;
			}
			#article-31-0 input#email_1 {
				font-size: 22px;
				color: white;
				background: no-repeat;
				padding: 2px;
			}
			#article-31-0 select.ahbfield_service {
				background: var(--theme-glass-4-);
				font-size: 18px;
				padding: 4px;
				width: 300px;
				color: var(--t-c-black-);
				text-shadow: 0px 0px 0px currentColor;
			}
			#article-31-0 #fbuilder .slots div a:hover{
				Color: var(--t-c-black-);
			}
			#article-31-0 .slots {
				max-width: 100%;
				color: var(--t-c-yellow-);
			}
			#article-31-0 .ahb_list {
				border: 1px solid currentColor;
				padding: 5px;
				margin-top: 7px;
				color: var(--t-c-white-);
			}
			#article-31-0 a.cancel {
				color: red;
			}
			#article-31-0 .captcha {
				border: 1px solid currentColor;
				color: var(--t-c-white-);
				padding: 9px 7px 0px 9px;
			}
			#article-31-0 img#captchaimg_1 {
				width: 70%;
				margin: 0 auto;
			}
			#article-31-0 input#hdcaptcha_cp_appbooking_post_1 {
				background: no-repeat;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-31-0 button.pbSubmit {
				color: var(--t-c-crimson-) !important;
				font-weight: bold;
			}
			#article-31-0 .ahbfield_quantity{
				display: none;
			}
			#article-31-0 .ahbfield_quantity_label {
				display: none !important;
			}
			#article-31-0 span.uh {
				color: var(--t-c-yellow-);
			}
			#article-31-0  #fbuilder .medium {
				color: var(--t-c-yellow-);
				width: 100% !important;
				background: none;
				padding: 0px 0px 0px 8px;
			}
			#article-31-0 input#hdcaptcha_cp_appbooking_post_2 {
				width: 100%;
				background: no-repeat;
				color: var(--t-c-yellow-);
				padding: 0px 0px 0px 9px;
			}
			#article-31-0 div#hdcaptcha_error_2 {
				color: crimson;
			}
			#article-31-0 .cpefb_error.message {
				color: crimson;
			}
			/* End Article 31.0  |  End Appointment */
		</style>
		<article id="article-31-0">
			<!-- Start Article 31.0  |  Start Appointment  -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="appointment-wrapper">
							<div class=""> <?php echo the_content();  ?><hr></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 31.0  |  End Appointment -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 31.0  |  End Appointment	==================================== -->
<!-- ======================================================================================================= -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 32.0  |  Start 404 Err    *********************** -->
<!-- ******************************************************************************** -->
	<div class="d-none">
		<style>
			/* Start Article 32.0  |  Start 404 Err */
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
			/* End Article 32.0 |  End 404 Err */
		</style>
		<article id="article-32">
			<!-- Start Article 32.0  |  Start 404 Err -->
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
<!-- ***************      End Article 32.0 |  End 404 Err    ************************ -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP | Start Article 32.0  |  Start 404 Err	==================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
			/* Start Article 32.0  |  Start 404 Err */
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
			/* End Article 32.0 |  End 404 Err */
		</style>
		<article id="article-32">
			<!-- Start Article 32.0  |  Start 404 Err -->
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
<!-- ==================		PHP | End Article 32.0 |  End 404 Err 	======================================== -->
<!-- ======================================================================================================= -->














<!-- ******************************************************************************** -->
<!-- ***************  Start Article 33.0  |  Start Index  *************************** -->
<!-- ******************************************************************************** -->
    <div>
		<style>
            /* Start Article 33.0  |  Start Index */
			#article-33-0{
				padding-top: 9px;
			}
			#article-33-0 .wrap {
				background: var(--theme-glass-4-);
				backdrop-filter: blur(5px);
				margin-bottom: 9px;
			}
			#article-33-0 .text-wrapper {
				padding: 9px;
			}
			#article-33-0  img{
				height: 140px;
			}
			#article-33-0 a h2{
				font-size: 30px;
				color: var(--t-c-yellow-);
				font-weight: bold;
			} 
			#article-33-0 hr {
				padding: 0px;
				margin: 0px;
			}
			#article-33-0 p {
				color: var(--t-c-white-);
				font-size: 18px;
			}
			#article-33-0 a.btn-read {
				color: var(--t-c-yellow-);
				font-weight: bold;
			}
			#article-33-0 .pagination {
				background: var(--theme-glass-2-);
				padding: 9px;
				border: 1px solid currentColor;
				backdrop-filter: blur(4px);
			}
			#article-33-0 .pagination span {
				margin-right: auto;
			}
			#article-33-0 .pagination .inactive {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
			#article-33-0 .pagination span.current {
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
            /* End Article 33.0  |  End Index */
		</style>
		<article id="article-33-0">
            <!-- Start Article 33.0  |  Start Index -->
			<div class="container">
				<div class="wrap">
					<div class="row">
						<div class="col-12 col-md-4">
							<img src="<?php echo get_template_directory_uri(); ?>/del/assets/img/bg.jpg" alt="">
						</div>
						<div class="col-12 col-md-8">
							<div class="text-wrapper">
								<div class="title">Text Title</div>
								<hr>
								<div class="lead">
									<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- End Article 33.0  |  End Index -->
		</article>
	</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 33.0  |  End Index  ******************************* -->
<!-- ******************************************************************************** -->

<!-- ======================================================================================================= -->
<!-- ==================		PHP 33.0 | Start Article 33.0  |  Start Index    =============================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
            /* Start Article 33.0  |  Start Index */
			#article-33-0{
				padding-top: 9px;
			}
			#article-33-0 .wrap {
				background: var(--theme-glass-4-);
				backdrop-filter: blur(5px);
				margin-bottom: 9px;
			}
			#article-33-0 .text-wrapper {
				padding: 9px;
			}
			#article-33-0  img{
				height: 140px;
			}
			#article-33-0 a h2{
				font-size: 30px;
				color: var(--t-c-yellow-);
				font-weight: bold;
			} 
			#article-33-0 hr {
				padding: 0px;
				margin: 0px;
			}
			#article-33-0 p {
				color: var(--t-c-white-);
				font-size: 18px;
			}
			#article-33-0 a.btn-read {
				color: var(--t-c-yellow-);
				font-weight: bold;
			}
			#article-33-0 .pagination {
				background: var(--theme-glass-2-);
				padding: 9px;
				border: 1px solid currentColor;
				backdrop-filter: blur(4px);
			}
			#article-33-0 .pagination span {
				margin-right: auto;
			}
			#article-33-0 .pagination .inactive {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
			#article-33-0 .pagination span.current {
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
            /* End Article 33.0  |  End Index */
		</style>
		<article id="article-33-0">
            <!-- Start Article 33.0  |  Start Index -->
		    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
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
				<?php endwhile; ?>
			<?php endif; ?> 
			<div class="container">
				<?php if (function_exists("pagination")) {    pagination();} ?>
			</div>
            <!-- End Article 33.0  |  End Index -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP 33.0 | End Article 33.0  |  End Index 	==================================== -->
<!-- ======================================================================================================= -->














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














<!-- ======================================================================================================= -->
<!-- ==================		PHP 35.0 | Start Article 35.0  |  Start Search    ============================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
            /* Start Article 35.0  |  Start Search */
			#article-35-0{
				padding-top: 9px;
			}
            #article-35-0 label.wp-block-search__label {
                display: none;
            }
            #article-35-0 input#wp-block-search__input-1 {
                background: no-repeat;
                backdrop-filter: blur(5px);
                color: var(--t-c-yellow-);
                padding: 0px 0px 0px 9px;
            }
            #article-35-0 button.wp-block-search__button {
                background: var(--theme-glass-4-)!important;
                color: var(--t-c-yellow-)!important;
            }
            #article-35-0 .search-bar {
                padding: 0px 0px 8px 0px;
            }
            #article-35-0 h2.search-h2 {
                text-align: center;
                color: var(--t-c-yellow-);
            }
            #article-35-0 h2.search-h2 span {
                font-weight: bold;
            }
			#article-35-0 .wrap {
				background: var(--theme-glass-4-);
				backdrop-filter: blur(5px);
				margin-bottom: 9px;
			}
			#article-35-0 .text-wrapper {
				padding: 9px;
			}
			#article-35-0  img{
				height: 140px;
			}
			#article-35-0 a h2{
				font-size: 30px;
				color: var(--t-c-yellow-);
				font-weight: bold;
			} 
			#article-35-0 hr {
				padding: 0px;
				margin: 0px;
			}
			#article-35-0 p {
				color: var(--t-c-white-);
				font-size: 18px;
			}
			#article-35-0 a.btn-read {
				color: var(--t-c-yellow-);
				font-weight: bold;
			}
			#article-35-0 .pagination {
				background: var(--theme-glass-2-);
				padding: 9px;
				border: 1px solid currentColor;
				backdrop-filter: blur(4px);
			}
			#article-35-0 .pagination span {
				margin-right: auto;
			}
			#article-35-0 .pagination .inactive {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
			#article-35-0 .pagination span.current {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
            #article-35-0 .container.no-search {
                backdrop-filter: blur(5px);
                border: 1px solid currentColor;
            }
            #article-35-0 .no-search h2 {
                color: var(--t-c-yellow-);
            }
            /* End Article 35.0  |  End Search */
		</style>
		<article id="article-35-0">
            <!-- Start Article 35.0  |  Start Search -->
                <div class="container no-pad">
                    <div class="search-bar"><?php dynamic_sidebar('search_form'); ?></div>
                </div>

        <?php $s=get_search_query(); $args = array( 's' =>$s  ); $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) {  ?>
        <div class="container">
            
            <?php   _e("<h2 class='search-h2'>Search Results for: <span>'".get_query_var('s')."'</span> </h2>"); ?>
        </div>
            <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
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
            <?php  } }else{ ?>
        <div class="container no-search">
            <h2>Sorry Nothing Was Found!</h2>
            <p>Please try again with some different keywords.</p>
        </div>
        <?php } ?>
			<div class="container">
				<?php if (function_exists("pagination")) {    pagination();} ?>
			</div>
            <!-- End Article 35.0  |  End Search -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP 35.0 | End Article 35.0  |  End Search 	==================================== -->
<!-- ======================================================================================================= -->














<!-- ======================================================================================================= -->
<!-- ==================		PHP  Start Article 36.0  |  Start Archive     ================================== -->
<!-- ======================================================================================================= -->
	<div>
		<style>
            /* Start Article 36.0  |  Start Archive */
			#article-36-0{
				padding-top: 9px;
			}
            #article-36-0 label.wp-block-search__label {
                display: none;
            }
            #article-36-0 input#wp-block-search__input-1 {
                background: no-repeat;
                backdrop-filter: blur(5px);
                color: var(--t-c-yellow-);
                padding: 0px 0px 0px 9px;
            }
            #article-36-0 button.wp-block-search__button {
                background: var(--theme-glass-4-)!important;
                color: var(--t-c-yellow-)!important;
            }
            #article-36-0 .search-bar {
                padding: 0px 0px 8px 0px;
            }
            #article-36-0 h2.search-h2 {
                text-align: center;
                color: var(--t-c-yellow-);
            }
            #article-36-0 h2.search-h2 span {
                font-weight: bold;
            }
			#article-36-0 .wrap {
				background: var(--theme-glass-4-);
				backdrop-filter: blur(5px);
				margin-bottom: 9px;
			}
			#article-36-0 .text-wrapper {
				padding: 9px;
			}
			#article-36-0  img{
				height: 140px;
			}
			#article-36-0 a h2{
				font-size: 30px;
				color: var(--t-c-yellow-);
				font-weight: bold;
			} 
			#article-36-0 hr {
				padding: 0px;
				margin: 0px;
			}
			#article-36-0 p {
				color: var(--t-c-white-);
				font-size: 18px;
			}
			#article-36-0 a.btn-read {
				color: var(--t-c-yellow-);
				font-weight: bold;
			}
			#article-36-0 .pagination {
				background: var(--theme-glass-2-);
				padding: 9px;
				border: 1px solid currentColor;
				backdrop-filter: blur(4px);
			}
			#article-36-0 .pagination span {
				margin-right: auto;
			}
			#article-36-0 .pagination .inactive {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
			#article-36-0 .pagination span.current {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				padding: 1px 5px;
				font-weight: bold;
				margin-right: 5px;
				background: var(--theme-glass-4-);
				margin-right: 9px;
			}
            #article-36-0 .container.no-search {
                backdrop-filter: blur(5px);
                border: 1px solid currentColor;
            }
            #article-36-0 .no-search h2 {
                color: var(--t-c-yellow-);
            }
            /* End Article 36.0  |  End Archive */
		</style>
		<article id="article-36-0">
            <!-- Start Article 36.0  |  Start Archive -->
                <div class="container no-pad">
                    <div class="search-bar"><?php dynamic_sidebar('search_form'); ?></div>
                </div>

        <?php $s=get_search_query(); $args = array( 's' =>$s  ); $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) {  ?>
        <div class="container">
            
            <?php   _e("<h2 class='search-h2'>Search Results for: <span>'".get_query_var('s')."'</span> </h2>"); ?>
        </div>
            <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
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
            <?php  } }else{ ?>
        <div class="container no-search">
            <h2>Sorry Nothing Was Found!</h2>
            <p>Please try again with some different keywords.</p>
        </div>
        <?php } ?>
			<div class="container">
				<?php if (function_exists("pagination")) {    pagination();} ?>
			</div>
            <!-- End Article 36.0  |  End Archive -->
		</article>
	</div>
<!-- ======================================================================================================= -->
<!-- ==================		PHP  End Article 36.0  |  End Archive 	 ======================================= -->
<!-- ======================================================================================================= -->