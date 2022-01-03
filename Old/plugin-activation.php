<?php
add_action( 'tgmpa_register', 'betterway_register_required_plugins' );

function betterway_register_required_plugins() {
	$plugins = array(
        /*  1.WordPress SEO by Yeast  */
		array(
			'name'        => 'WordPress SEO by Yeast',
			'slug'        => 'wordpress-seo',
			'required'    => true
		),
		/*  2.Advanced Custom Fields  */
		array(
			'name'        => 'Advanced Custom Fields',
			'slug'        => 'advanced-custom-fields',
			'required'    => true
		),
		/*  3.Contact Form 7 */
		array(
			'name'        => 'Contact Form 7',
			'slug'        => 'contact-form-7',
			'required'    => true
		),
		/*  4.Custom Post Type UI */
		array(
			'name'        => 'Custom Post Type UI',
			'slug'        => 'custom-post-type-ui',
			'required'    => true
		),
		/*  5.Really Simple SSL */
		array(
			'name'        => 'Really Simple SSL',
			'slug'        => 'really-simple-ssl',
			'required'    => true
		),
		/*  6.WordPress Importer */
		array(
			'name'        => 'WordPress Importer',
			'slug'        => 'wordpress-importer',
			'required'    => true
		),
		/*  7.WP Mail SMTP by WPForms */
		array(
			'name'        => 'WP Mail SMTP by WPForms',
			'slug'        => 'wp-mail-smtp',
			'required'    => true
		),
		/*  8.WPS Hide Login */
		array(
			'name'        => 'WPS Hide Login',
			'slug'        => 'wps-hide-login',
			'required'    => true
		),
		/*  9.UpdraftPlus WordPress Backup Plugin */
		array(
			'name'        => 'UpdraftPlus WordPress Backup Plugin',
			'slug'        => 'updraftplus',
			'required'    => true
		),
		/*  10.Jetpack */
		array(
			'name'        => 'Jetpack',
			'slug'        => 'jetpack',
			'required'    => true
		),
		/*  11.reSmush.it */
		array(
			'name'        => 'reSmush.it',
			'slug'        => 'resmushit-image-optimizer',
			'required'    => true
		),
		/*  12.Appointment-hour-booking */
		array(
			'name'        => 'Appointment-hour-booking',
			'slug'        => 'appointment-hour-booking',
			'required'    => true
		),
		/*  13.Ultimate-member */
		array(
			'name'        => 'Ultimate-member',
			'slug'        => 'ultimate-member',
			'required'    => true
		),

	);

	$config = array(
		'id'           => 'betterway', 
		'default_path' => '',        
		'menu'         => 'tgmpa-install-plugins',
		'capability'   => 'edit_theme_options',   
		'has_notices'  => true,                  
		'dismissible'  => true,   
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                   
		'message'      => '',                      

	
	);

	tgmpa( $plugins, $config );
}
