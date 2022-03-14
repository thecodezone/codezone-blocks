<?php
$anchor = get_field('cz_anchor');
$background_color = get_field('cz_background_color');
$text_color = get_field('cz_text_color');
$has_padding = get_field('cz_has_padding');
$padding_top = get_field('cz_top_padding');
$padding_right = get_field('cz_right_padding');
$padding_bottom = get_field('cz_bottom_padding');
$padding_left = get_field('cz_left_padding');
$padding_top_mobile = get_field('cz_top_padding_mobile');
$padding_right_mobile = get_field('cz_right_padding_mobile');
$padding_bottom_mobile = get_field('cz_bottom_padding_mobile');
$padding_left_mobile = get_field('cz_left_padding_mobile');
$background_image = get_field('cz_background_image');
$background_image_mobile = get_field('cz_background_image_mobile');
$background_video = get_field('cz_video');
$background_video_mobile = get_field('cz_background_video_mobile');
$background_overlay_opacity = get_field('cz_background_overlay_opacity');
$background_position_left = get_field('cz_background_position_left');
$background_position_top = get_field('cz_background_position_top');
$border_color = get_field('cz_border_color');
$border_top = get_field('cz_top_border');
$border_right = get_field('cz_right_border');
$border_bottom = get_field('cz_bottom_border');
$border_left = get_field('cz_left_border');
$height = get_field('cz_screen_height');
$height_mobile = get_field('cz_screen_height_mobile');
$full_width = get_field('cz_full_width');

$classes = cz_classes(
	'cz-block',
	'cz-block--hero',
	$block['className'] ?? null,
	$block['align'] ?? $block['align'],
	$background_color ? 'cz-block--has-background' : null,
	$background_image ? 'cz-block--has-background-image' : null,
	$background_image_mobile ? 'cz-block--has-background-image-mobile' : null,
	$background_video ? 'cz-block--has-background-image' : null,
	$background_video_mobile ? 'cz-block--has-background-image-mobile' : null,
	$text_color ? 'cz-block--has-text-color' : null,
    $full_width ?  'cz-block--has-full-width' : null
);
?>

<div class="cz-block--hero__wrapper">
	<div
		class="<?= $classes ?>"
		style="
		<?php if ($background_color) : ?> --cz-hero-background-color: <?= esc_attr($background_color) ?>; <?php endif; ?>
		<?php if ($text_color) : ?> --cz-hero-text-color: <?= esc_attr($text_color) ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_top !== null) : ?> --cz-hero-padding-top: <?= esc_attr($padding_top) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_right !== null) : ?> --cz-hero-padding-right: <?= esc_attr($padding_right) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_bottom !== null) : ?> --cz-hero-padding-bottom: <?= esc_attr($padding_bottom) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_left !== null) : ?> --cz-hero-padding-left: <?= esc_attr($padding_left) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_top_mobile !== null) : ?> --cz-hero-padding-top-mobile: <?= esc_attr($padding_top_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_right_mobile !== null) : ?> --cz-hero-padding-right-mobile: <?= esc_attr($padding_right_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_bottom_mobile !== null) : ?> --cz-hero-padding-bottom-mobile: <?= esc_attr($padding_bottom_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_left_mobile !== null) : ?> --cz-hero-padding-left-mobile: <?= esc_attr($padding_left_mobile) . 'px' ?>; <?php endif; ?>
		<?php if (!$background_video && $background_image) : ?> --cz-hero-background-image: <?= "url('" . esc_attr($background_image['url']) . "')" ?>; <?php endif; ?>
        <?php if ($background_image) : ?> --cz-hero-background-position: <?= $background_position_left ? esc_attr($background_position_left) : 50 ?>% <?= $background_position_top ? esc_attr($background_position_top) : 50 ?>%; <?php endif; ?>
        <?php if (!$background_video && $background_image_mobile) : ?> --cz-hero-background-image-mobile: <?= "url('" . esc_attr($background_image_mobile['url']) . "')" ?>; <?php endif; ?>
        <?php if ($background_overlay_opacity) : ?> --cz-hero-background-overlay-color: <?= "rgba(0,0,0," . $background_overlay_opacity/10 . ")" ?>; <?php endif; ?>
		<?php if ($border_color) : ?> --cz-hero-border-color: <?= esc_attr($border_color) ?>; <?php endif; ?>
		<?php if ($border_top !== null) : ?> --cz-hero-border-top: <?= esc_attr($border_top) . 'px' ?>; <?php endif; ?>
		<?php if ($border_right !== null) : ?> --cz-hero-border-right: <?= esc_attr($border_right) . 'px' ?>; <?php endif; ?>
		<?php if ($border_bottom !== null) : ?> --cz-hero-border-bottom: <?= esc_attr($border_bottom) . 'px' ?>; <?php endif; ?>
		<?php if ($border_left !== null) : ?> --cz-hero-border-left: <?= esc_attr($border_left) . 'px' ?>; <?php endif; ?>
		<?php if ($height) : ?> --cz-height: <?= esc_attr($height) . 'vh' ?>; <?php endif; ?>
        <?php if ($height_mobile) : ?> --cz-height-mobile: <?= esc_attr($height_mobile) . 'vh' ?>; <?php endif; ?>
			"
		<?php if ($anchor): ?>id="<?= $anchor ?>"<?php endif; ?>
	>
		<?php if ($background_video): ?>
			<div class="video-wrapper">
				<video autoplay
					   loop
					   muted
                       playsinline
					   width="1280"
					   height="720">
					<?php if ($background_video_mobile): ?>
						<source src="<?php echo $background_video_mobile['url'] ?>"
								type="video/mp4"
								media="(max-width: 599px)"/>
					<?php endif; ?>
					<source src="<?php echo $background_video['url'] ?>"
							type="video/mp4"
							<?php if ($background_video_mobile): ?>media="(min-width: 600px)"<?php endif; ?>/>
					<?php if ($background_image): ?>
						<img <?php if ($background_image_mobile): ?>srcset="<?php echo $background_image_mobile['url']; ?> 600w, <?php echo $background_image['url']; ?> 1200w"<?php endif; ?>
							 src="<?php echo $background_image['url']; ?>"
							 alt="<?php echo $background_image['alt']; ?>"
						>
					<?php endif; ?>
				</video>
			</div>
		<?php endif; ?>
		<div class="background-overlay"></div>

		<div class="cz-block--hero__inner">
			<InnerBlocks/>
		</div>
	</div>
</div>

