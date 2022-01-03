<?php
/*Template Name: Test Template*/

?>
	<?php get_header();?>
<!-- ******************************************************************************** -->

















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 1.1  |  Start Comments  ************************* -->
<!-- ******************************************************************************** -->
<style>
	/* Start Article 1.1  |  Start Comments */
	#comment-wrapper{
		padding: 9px;
		background: var(--theme-glass-4-);
		backdrop-filter: blur(4px);
	}
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
	ol.commentlist li.pingback {
		margin: 0 0 10px;
		padding: 1em;
		/* border: 1px dashed var(--t-c-white-); */
	}
	#respond {
		position: relative;
		margin-top: 13px;
	}
	#respond input[type=text], #respond textarea {
		border: 1px solid var(--t-c-white-);
		background: var(--theme-glass-2-);
		padding: 10px
	}
	#respond input[type=text] {
		padding: 7px;
		width: 300px
	}
	#respond input{
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
		margin: -30px 0 10px
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
		/* border: 1px dashed var(--t-c-white-); */
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
	.d-none{
		display: none;
	}
	/* End Article 1 |  End Root Css */
</style>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 1|  End Root Css  ********************************* -->
<!-- ******************************************************************************** -->
<!-- ==================		PHP are same to HTML	======================================== -->
















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
		<article id="article-2" class="d-none">
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
			<!-- End Article 2  |  End Preloader  -->
		</article>
	</div>
	<!-- -----------------------------------------------------------------------------------------------------------
	has_custom_logo => true,
	the_custom_logo => Print.
	------------------------------------------------------------------------------------------------------------ -->
<!-- ======================================================================================================= -->
<!-- ==================		PHP | End Article 2 |  End Preloader	======================================== -->
<!-- ======================================================================================================= -->












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
		<!-- End Article 5  |  End Navbar | Menu -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 5 |  End Navbar | Menu  *************************** -->
<!-- ******************************************************************************** -->















<!-- ----------------------------------------- -->
<style>
	.section-nav{
		background: var(--theme-glass-3-);
	}
</style>
<!-- ----------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-1"><div class="section-nav"></div>
	

















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
			<div class="title d-none">
				<div class="container py-5">
					<div class="text-center">
						<h1>How We Work -8</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			
<!-- ************************************************************ -->
<!-- ************************************************************ -->
	<?php
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}

		$custom_query_args = array(
			'post_type' => 'book', 
			'posts_per_page' => get_option('posts_per_page'),
			'paged' => $paged,
			'post_status' => 'publish',
			'ignore_sticky_posts' => true,
			'order' => 'DESC', 
			'orderby' => 'date'
		);
		$custom_query = new WP_Query( $custom_query_args );

		if ( $custom_query->have_posts() ) :
			while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

<!-- ************************************************************ -->
<!-- ************************************************************ -->

<div class="container"  data-aos="fade-up" data-aos-duration="1000">
	<div class="row article-item">
		<div class="col-12 col-lg-6 image-0">
			<div class="image">
				
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']);
					}else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/del/img/bg.jpg" alt="<?php the_title(); ?>" />
					<?php } 
				?>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="article">
				<a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<div class="line-dell"></div>
				<p>
					<p class="" ><?php echo excerpt('30'); ?></p>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- ************************************************************ -->
<!-- ************************************************************ -->
<?php endwhile;else:echo"Sorry there are no post found !!!";endif;?>
<!-- ************************************************************ -->
<!-- ************************************************************ -->
			
<!-- ************************************************************ -->
<!-- ************************************************************ -->
<div class="pagination">
	<?php if ($custom_query->max_num_pages > 1) :  ?>
		<?php
		$orig_query = $wp_query;
		$wp_query = $custom_query;
		?>
		<nav class="prev-next-posts">
			<div class="prev-posts-link">
				<?php echo get_next_posts_link( '<i class="bi bi-arrow-right-circle"></i>', $custom_query->max_num_pages ); ?>
			</div>
			<div class="next-posts-link">
				<?php echo get_previous_posts_link( '<i class="bi bi-arrow-left-circle"></i>' ); ?>
			</div>
		</nav>
		<?php
		$wp_query = $orig_query;
		?>
	<?php endif; ?>
</div>
<!-- ************************************************************ -->
<!-- ************************************************************ -->
		<!-- End Article 8  |  End How We Work-->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 8 |  End  How We Work  **************************** -->
<!-- ******************************************************************************** -->

</section>
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















<?php get_footer();?>

<!-- ******************************************************************************** -->

<!-- ******************************************************************************** -->
















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