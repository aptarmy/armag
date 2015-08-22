<?php
	/* Create Kirki Configuration */
	function aptnews_kirki_configuration() {
		return array( 'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/' );
	}
	add_filter( 'kirki/config', 'aptnews_kirki_configuration' );
	/* Turn off sanitization for input */
	function do_not_filter_anything( $value ) {
		return $value;
	}

	Kirki::add_config( 'my_config', array(
		'option_type' => 'theme_mod',
		'capability'  => 'edit_theme_options',
	) );

// Panel & Section & Field
	Kirki::add_panel( 'frontpage_leftbar_panel', array(
		'priority'    => 10,
		'title'       => __( 'Home - Left Bar', 'aptnews' ),
		'description' => __( 'Customize left bar', 'aptnews' ),
	) );
		Kirki::add_section( 'frontpage_leftbar_tags_section', array(
			'title'          => __( 'Tags', 'aptnews'),
			'panel'          => 'frontpage_leftbar_panel', // Not typically needed.
			'capability'     => 'edit_theme_options',
			'theme_supports' => '', // Rarely needed.
		) );
			Kirki::add_field( 'my_config', array(
				'type'        => 'text',
				'settings'     => 'frontpage_leftbar_tags_field',
				'label'       => __( 'Tags', 'aptnews' ),
				'description' => __( 'show most popular by given', 'aptnews' ),
				'section'     => 'frontpage_leftbar_tags_section',
			) );
