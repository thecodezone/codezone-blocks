<?php
/**
 * Plugin Name:     CodeZone Blocks
 * Plugin URI:      https://github.com/thecodezone/codezone-blocks
 * Description:     CodeZone block editor suite.
 * Author:          CodeZone
 * Author URI:      https://codezone.io
 * Text Domain:     codezone-blocks
 * Domain Path:     /languages
 * Version:         1.8.6
 * GitHub Plugin URI: thecodezone/codezone-blocks
 *
 * @package         Codezone_Blocks
 */

define('CZ_BLOCKS_PLUGIN', __FILE__);
define('CZ_BLOCKS_URI', plugin_dir_url(CZ_BLOCKS_PLUGIN));
define('CZ_BLOCKS_VERSION', get_file_data(CZ_BLOCKS_PLUGIN, ['Version' => 'Version'], false));


require_once __DIR__ . '/helpers.php';

function cz_render_acf_block($block_name, $template) {
	return function ($block, $content = '', $is_preview = false, $post_id = 0) use ($block_name, $template) {
		$html = '';

		if (has_filter('cz_render_block_' . $block_name)) {
			$html = apply_filters( 'cz_render_block_' . $block_name, $block, $content, $is_preview, $post_id);
		}


		if (!$html && has_filter('cz_render_block')) {
			$html = apply_filters( 'cz_render_block', $block, $content, $is_preview, $post_id);
		}

		if (!$html) {
			ob_start();
			require $template;
			$html = ob_get_contents();
			ob_end_clean();
		}

		//Encode stimulus.js actions
		$html = preg_replace('/data-action=(.*?)->/', "data-action=$1-&#62;", $html);
		echo $html;
	};
};

add_action('acf/init', 'cz_init_block_types');

function cz_init_block_types() {
    $block_registration_files = apply_filters('CZ_block_registration_files', [
        'cz_accordion' => __DIR__ . '/blocks/accordion/register.php',
        'cz_card' => __DIR__ . '/blocks/card/register.php',
        'cz-carousel' => __DIR__ . '/blocks/carousel/register.php',
        'cz-container' => __DIR__ . '/blocks/container/register.php',
        'cz-hero' => __DIR__ . '/blocks/hero/register.php',
        'cz-image-carousel' =>  __DIR__ . '/blocks/image-carousel/register.php',
        'cz-parallax' => __DIR__ . '/blocks/parallax/register.php',
        'cz-plyr' => __DIR__ . '/blocks/plyr/register.php',
        'cz-rule' => __DIR__ . '/blocks/rule/register.php',
        'cz-reveal' => __DIR__ . '/blocks/reveal/register.php',
        'cz_section' => __DIR__ . '/blocks/section/register.php',
    ]);

	if( function_exists('acf_register_block_type') ) {
	    foreach($block_registration_files as $file) {
            require $file;
        }
	}

	if( function_exists('acf_add_local_field_group') ) {
        require __DIR__ . '/fields/accordion.php';
        require __DIR__ . '/fields/carousel.php';
		require __DIR__ . '/fields/typography.php';
		require __DIR__ . '/fields/borders.php';
		require __DIR__ . '/fields/full-width.php';
		require __DIR__ . '/fields/height.php';
		require __DIR__ . '/fields/horizontal-gradient.php';
        require __DIR__ . '/fields/images.php';
		require __DIR__ . '/fields/padding.php';
        require __DIR__ . '/fields/parallax.php';
        require __DIR__ . '/fields/screen-height.php';
		require __DIR__ . '/fields/background.php';
		require __DIR__ . '/fields/video.php';
		require __DIR__ . '/fields/video-embed.php';
		require __DIR__ . '/fields/section.php';
		require __DIR__ . '/fields/width.php';
		require __DIR__ . '/fields/justification.php';
		require __DIR__ . '/fields/reveal.php';
        require __DIR__ . '/fields/rounded-corners.php';
        require __DIR__ . '/fields/transition.php';
	}
}

add_filter( 'block_categories', 'cz_add_block_category', 10, 2);
function cz_add_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'cz',
                'title' => 'CodeZone',
            ),
        )
    );
}
