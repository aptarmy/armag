<?php

	// Enqueue Script
	add_action( 'wp_enqueue_scripts', 'armag_scripts' );
	function armag_scripts() {
		wp_enqueue_style( 'armag-fontawesome', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.css');
		wp_enqueue_style( 'armag-bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style( 'armag-style', get_stylesheet_uri() );
		wp_enqueue_script('armag-bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.js', array('jquery'), 1, true);
		wp_enqueue_script('armag-modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), 1, true);
		wp_enqueue_script('armag-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), 1, true);
	}
	// Filter
	add_filter('show_admin_bar', '__return_false');
	// add theme support
	add_action( 'after_setup_theme', 'armag_setup' );
	function armag_setup() {
		// Textdomain
		load_theme_textdomain( 'armag', get_template_directory() . '/languages' );
		add_theme_support( 'custom-header', array(
			'default-image'          => get_template_directory_uri() . '/img/APT-news-logo.jpg',
			'width'                  => 370,
			'height'                 => 220,
		) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );
		/*register_nav_menus( array(
			'primary' => esc_html__( 'Top Menu', 'armag' ),
			'right-menu' => esc_html__( 'Right Menu', 'armag' ),
		) );*/

	}

	/**
	 * Register widget area.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
	 */
	/*function armag_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer left column', 'armag' ),
			'id'            => 'footer-left',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer middle column', 'armag' ),
			'id'            => 'footer-middle',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer right column', 'armag' ),
			'id'            => 'footer-right',
		) );
	}
	add_action( 'widgets_init', 'armag_widgets_init' );*/

	/* Uilities Function */
	require get_template_directory() . '/inc/utilities.php';

	/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';

	/* Load kirki for theme customizer. */
	require get_template_directory() . '/inc/kirki/kirki.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';
	
	/* Load Jetpack compatibility file. */
	require get_template_directory() . '/inc/jetpack.php';