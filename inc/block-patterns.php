<?php
/**
 * Block patterns
 *
 * @package valinor
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'elements',
		array( 'label' => esc_html__( 'Design elements', 'valinor' ) )
	);

  register_block_pattern_category(
    'valinor',
    array( 'label' => esc_html__( 'Valinor patterns', 'valinor' ) )
  );
}

/**
 * Register Block Patterns.
 */

if ( function_exists( 'register_block_pattern' ) ) {

	function valinor_register_block_patterns() {

		register_block_pattern(
			'valinor/media-overlap',
			array(
				'title'      => esc_html__( 'Overlapping Media and Text', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
				<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media">
				<img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '"	alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
				<p class="has-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"backgroundColor":"black","textColor":"white","className":"is-style-valinor-media-overlap"} -->
				<div class="wp-block-group is-style-valinor-media-overlap has-white-color has-black-background-color has-text-color has-background">
				<!-- wp:heading {"textColor":"white"} --><h2 class="has-white-color has-text-color">Heading</h2><!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:media-text -->
			',
			)
		);

		register_block_pattern(
			'valinor/media-overlap-two',
			array(
				'title'      => esc_html__( 'Overlapping Media and Text with vertical heading', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":80} -->
				<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:group {"className":"is-style-valinor-media-overlap"} -->
				<div class="wp-block-group is-style-valinor-media-overlap"><!-- wp:paragraph {"className":"is-style-default","fontSize":"large"} -->
				<p class="is-style-default has-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</strong> </p>
				<!-- /wp:paragraph -->
				<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"></div></div>
				<!-- /wp:media-text --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:media-text --></div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"33.33%"} -->
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"className":"is-style-valinor-vertical-text","fontSize":"x-large"} -->
				<h2 class="is-style-valinor-vertical-text has-x-large-font-size">' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
				<!-- /wp:heading --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
			)
		);

		register_block_pattern(
			'valinor/media-skewed',
			array(
				'title'      => esc_html__( 'Skewed Media and Text', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
				<!-- wp:media-text {"className":"is-style-valinor-skewed"} -->
				<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-valinor-skewed"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
				<p class="has-large-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph --></div></div>
				<!-- /wp:media-text -->
				',
			)
		);

		register_block_pattern(
			'valinor/column-with-circles',
			array(
				'title'      => esc_html__( 'Columns with circular images', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
			)
		);

		register_block_pattern(
			'valinor/service-columns',
			array(
				'title'      => esc_html__( 'Service sections with circular images and buttons', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
				<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'valinor' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
				<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'valinor' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
				<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'valinor' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-small-font-size"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'valinor' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
			)
		);

		register_block_pattern(
			'valinor/alternating',
			array(
				'title'      => esc_html__( 'Alternating rows with images and headings', 'valinor' ),
				'categories' => array( 'elements' ),
				'content'    => '
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading -->
					<h2>' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
					<div class="wp-block-column" style="flex-basis:10%"></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading -->
					<h2>' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading -->
					<h2>' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
					<div class="wp-block-column" style="flex-basis:10%"></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading -->
					<h2>' . esc_html_x( 'Heading', 'sample content', 'valinor' ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'valinor' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
				',
			)
		);

		register_block_pattern(
      'valinor/wp-credits',
      array(
        'title'      => esc_html__( 'WordPress Credit', 'valinor' ),
				'categories' => array( 'valinor' ),
        'content'    => 
            '<!-- wp:paragraph --> <p>' . 
            sprintf( esc_html__( 'Powered by %s', 'valinor' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'valinor' ) ) . '" rel="nofollow">WordPress</a>. ' ) .  
            sprintf( esc_html__( 'Theme: %s', 'valinor' ), '<a href="' . esc_url( __( 'https://publishing-project.rivendellweb.net', 'valinor' ) ) . '" rel="nofollow">Valinor</a>' ) . '</p> <!-- /wp:paragraph -->' ,
        'inserter'   => true
      )
    );
	}
	add_action( 'init', 'valinor_register_block_patterns', 9 );
}
