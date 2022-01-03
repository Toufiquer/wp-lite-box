<?php
    /*Template Name: Lite-box Template.  */
?>
<?php get_header();?>
<!-- ******************************************************************************** -->















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































<!-- ******************************************************************************** -->
<?php get_footer();?>