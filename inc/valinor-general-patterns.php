<?php
/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'valinor',
		array( 'label' => esc_html__( 'Sport', 'valinor' ) )
	);
}

if ( function_exists( 'register_block_pattern' ) ) {
	function valinor_register_general_block_patterns() {
    register_block_pattern(
      'valinor/credits',
      array(
        'title'      => __( 'Credit', 'valinor' ),
        'content'    => '
            <!-- wp:paragraph -->
            <p>' .
            sprintf(
              /* Translators: WordPress link. */
              esc_html__( 'Proudly Powered by %s', 'valinor' ),
              '<a href="' . esc_url( __( 'https://wordpress.org', 'valinor' ) ) . '" rel="nofollow">WordPress</a>'
            ) . '</p>
            <!-- /wp:paragraph -->',
        'inserter'   => false
      )
    );
  }

  add_action( 'init', 'valinor_register_general_block_patterns', 9 );

}

