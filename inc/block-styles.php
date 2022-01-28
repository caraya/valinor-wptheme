<?php
/**
 * Block styles.
 *
 * @package valinor
 * @since 1.0.0
 */

/**
 * Register block styles
 */
function valinor_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'valinor-rounded-corners',
			'label'        => __( 'Rounded corners (Requires background color)', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-rounded-corners {
				border-radius: 6px;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'valinor-rounded-corners',
			'label' => __( 'Rounded corners (Requires background color)', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'         => 'valinor-circular-cover',
			'label'        => __( 'Circular image', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-circular-cover.wp-block-cover,
			.is-style-valinor-circular-cover .wp-block-cover__image-background,
			.is-style-valinor-circular-cover.wp-block-cover-image,
			.is-style-valinor-circular-cover.wp-block-cover-image:before,
			.is-style-valinor-circular-cover.wp-block-cover.has-background-dim:not(.has-background-gradient):before {
				border-radius: 50% !important;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'valinor-box-shadow',
			'label'        => __( 'Box shadow', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-box-shadow {
				padding: 1.25em 2.375em;
				border-radius: 2px;
				box-shadow: 0 2px 5px rgb(0 0 0 / 2%), 0 4px 10px rgb(0 0 0 / 4%);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'         => 'valinor-box-shadow-no-padding',
			'label'        => __( 'Box shadow', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-box-shadow-no-padding {
				border-radius: 2px;
				box-shadow: 0 2px 5px rgb(0 0 0 / 2%), 0 4px 10px rgb(0 0 0 / 4%);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'valinor-box-shadow',
			'label' => __( 'Box shadow', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'valinor-box-shadow',
			'label' => __( 'Box shadow', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'valinor-box-shadow',
			'label' => __( 'Box shadow', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'valinor-border',
			'label'        => __( 'Border', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-border {
				border: 2px solid currentColor;
				padding: 0.5rem;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'valinor-border',
			'label' => __( 'Border', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'valinor-top-bottom-border',
			'label'        => __( 'Top and bottom border', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-top-bottom-border {
				border-top: 2px solid currentColor;
				border-bottom: 2px solid currentColor;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'valinor-top-bottom-border',
			'label' => __( 'Top and bottom border', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'valinor-top-bottom-border',
			'label' => __( 'Top and bottom border', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'         => 'valinor-vertical-text',
			'label'        => __( 'Vertical', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-vertical-text {
				writing-mode: vertical-lr;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'valinor-vertical-text',
			'label' => __( 'Vertical', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'valinor-vertical-text',
			'label' => __( 'Vertical', 'valinor' ),

		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'valinor-vertical-text',
			'label' => __( 'Vertical', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'         => 'valinor-column-border',
			'label'        => __( 'Inner borders', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-column-border {
				border: 1px solid currentColor;
				padding: 1.25em 2.375em;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'         => 'valinor-columns-border',
			'label'        => __( 'Border', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-columns-border {
				border: 1px solid currentColor;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'         => 'valinor-column-r-l-borders',
			'label'        => __( 'Right and left borders', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-column-r-l-borders {
				border-left: 1px solid currentColor;
				border-right: 1px solid currentColor;
				padding: 1.25em 2.375em;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/media-text',
		array(
			'name'         => 'valinor-skewed',
			'label'        => __( 'Skewed', 'valinor' ),
			'inline_style' => '
			.is-style-valinor-skewed {
				transform: rotate(-0.8deg);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'valinor-skewed',
			'label' => __( 'Skewed', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'valinor-skewed',
			'label' => __( 'Skewed', 'valinor' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'valinor-sticky-header',
			'label' => __( 'Sticky header', 'valinor' ),
		)
	);
}
add_action( 'init', 'valinor_register_block_styles' );
