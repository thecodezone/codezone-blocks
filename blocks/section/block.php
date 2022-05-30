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
$background_width = get_field('cz_background_width');
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
$full_width = get_field('cz_full_width');

$classes = cz_classes(
	'cz-block',
	'cz-block--section',
	$block['className'] ?? null,
	$block['align'] ?? null,
	$background_color ? 'cz-block--has-background' : null,
	$background_image ? 'cz-block--has-background-image' : null,
	$background_image_mobile ? 'cz-block--has-background-image-mobile' : null,
	$background_video ? 'cz-block--has-background-image' : null,
	$background_video_mobile ? 'cz-block--has-background-image-mobile' : null,
	$text_color ? 'cz-block--has-text-color' : null
);

$inner_classes = cz_classes(
    'cz-block--section__inner',
    $full_width ? null : 'container mx-auto'
);

?>

<div class="cz-block--section__wrapper">
	<section
        role="region"
		class="<?= $classes ?>"
		style="
		<?php if ($background_color) : ?> --cz-section-background-color: <?= esc_attr($background_color) ?>; <?php endif; ?>
		<?php if ($text_color) : ?> --cz-section-text-color: <?= esc_attr($text_color) ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_top !== null) : ?> --cz-section-padding-top: <?= esc_attr($padding_top) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_right !== null) : ?> --cz-section-padding-right: <?= esc_attr($padding_right) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_bottom !== null) : ?> --cz-section-padding-bottom: <?= esc_attr($padding_bottom) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_left !== null) : ?> --cz-section-padding-left: <?= esc_attr($padding_left) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_top_mobile !== null) : ?> --cz-section-padding-top-mobile: <?= esc_attr($padding_top_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_right_mobile !== null) : ?> --cz-section-padding-right-mobile: <?= esc_attr($padding_right_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_bottom_mobile !== null) : ?> --cz-section-padding-bottom-mobile: <?= esc_attr($padding_bottom_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($has_padding && $padding_left_mobile !== null) : ?> --cz-section-padding-left-mobile: <?= esc_attr($padding_left_mobile) . 'px' ?>; <?php endif; ?>
		<?php if ($background_image) : ?> --cz-section-background-image: <?= "url('" . esc_attr($background_image['url']) . "')" ?>; <?php endif; ?>
        <?php if ($background_image) : ?> --cz-section-background-position: <?= $background_position_left !== null ? esc_attr($background_position_left) : 50 ?>% <?= $background_position_top !== null ? esc_attr($background_position_top) : 50 ?>%; <?php endif; ?>
        <?php if ($background_width && $background_width > 0) : ?> --cz-hero-background-size: <?= esc_attr($background_width) ?>% auto; <?php endif; ?>
        <?php if ($background_overlay_opacity) : ?> --cz-section-background-overlay-color: <?= "rgba(0,0,0," . $background_overlay_opacity/10 . ")" ?>; <?php endif; ?>
		<?php if ($background_image_mobile) : ?> --cz-section-background-image-mobile: <?= "url('" . esc_attr($background_image_mobile['url']) . "')" ?>; <?php endif; ?>
		<?php if ($border_color) : ?> --cz-section-border-color: <?= esc_attr($border_color) ?>; <?php endif; ?>
		<?php if ($border_top !== null) : ?> --cz-section-border-top: <?= esc_attr($border_top) . 'px' ?>; <?php endif; ?>
		<?php if ($border_right !== null) : ?> --cz-section-border-right: <?= esc_attr($border_right) . 'px' ?>; <?php endif; ?>
		<?php if ($border_bottom !== null) : ?> --cz-section-border-bottom: <?= esc_attr($border_bottom) . 'px' ?>; <?php endif; ?>
		<?php if ($border_left !== null) : ?> --cz-section-border-left: <?= esc_attr($border_left) . 'px' ?>; <?php endif; ?>
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

		<div class="<?php echo $inner_classes; ?>">
			<InnerBlocks/>
		</div>
	</section>
</div>

