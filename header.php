<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('name'); } else { bloginfo('description'); } ?>
	</title>
	
	<script> jQuery(document).ready(function($) {  $('.counter').counterUp({ delay: 15, time: 1000  }); }); </script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
