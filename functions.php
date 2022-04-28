<?php

if ( ! function_exists( 'valinor_support' ) ) :
	function valinor_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );
		add_editor_style(
			array(
				'./assets/css/blocks.css',
				'./assets/css/style-shared.css',
        './assets/css/valinor-custom-styles.css',
        './style.css',
			)
		);
		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'valinor_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function valinor_scripts() {
  // Enqueue font-related CSS
  wp_enqueue_style(
    'valinor-fonts',
    get_template_directory_uri() . '/assets/css/recursive-styles.css',
    false,
    wp_get_theme()->get( 'Version' )
  );

	// Enqueue theme stylesheet.
	wp_enqueue_style(
    'valinor-style',
    get_template_directory_uri() . '/style.css',
    array(),
    wp_get_theme()->get( 'Version' )
  );
	
  // Enqueue alignments stylesheet.
	wp_enqueue_style(
    'valinor-alignments-style',
    get_template_directory_uri() . '/assets/css/alignments-front.css',
    array(),
    wp_get_theme()->get( 'Version' )
  );

  wp_enqueue_style(
    'valinor-custom-styles',
    get_template_directory_uri() . '/assets/css/valinor-custom-styles.css',
    array(),
    wp_get_theme()->get( 'Version' )
  );

  wp_enqueue_style(
    'valinor-font-styles',
    get_template_directory_uri() . '/assets/css/font-styles.css',
    array(),
    wp_get_theme()->get( 'Version' )
  );
}
add_action( 'wp_enqueue_scripts', 'valinor_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since 1.0.0
 *
 * @return void
 */
function valinor_blocks_block_editor_script() {

	wp_enqueue_script(
    'valinor-blocks-unregister-block-style', 
    get_theme_file_uri( '/assets/js/unregister-block-style.js' ),
    array( 'wp-blocks', 'wp-dom' ), 
    wp_get_theme()->get( 'Version' ),
    true );
}
add_action( 'enqueue_block_editor_assets', 'valinor_blocks_block_editor_script' );

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';
