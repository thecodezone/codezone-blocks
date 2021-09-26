<?php
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
$background_overlay_opacity = get_field('cz_background_overlay_opacity');
$border_radius = get_field('cz_border_radius');
$border_color = get_field('cz_border_color');
$border_top = get_field('cz_top_border');
$border_right = get_field('cz_right_border');
$border_bottom = get_field('cz_bottom_border');
$border_left = get_field('cz_left_border');

$classes = cz_classes(
    'cz-block',
    'cz-block--card',
    $block['className'] ?? null,
    $block['align'] ?? null,
    $background_color ? 'cz-block--has-background' : null,
    $background_image ? 'cz-block--has-background-image' : null,
    $background_image_mobile ? 'cz-block--has-background-image-mobile' : null,
    $text_color ? 'cz-block--has-text-color' : null
);

?>

<div
    class="<?= $classes ?>"
    style="
    <?php if ($background_color) : ?> --cz-card-background-color: <?= esc_attr($background_color) ?>; <?php endif; ?>
    <?php if ($text_color) : ?> --cz-card-text-color: <?= esc_attr($text_color) ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_top !== null) : ?> --cz-card-padding-top: <?= esc_attr($padding_top) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_right !== null) : ?> --cz-card-padding-right: <?= esc_attr($padding_right) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_bottom !== null) : ?> --cz-card-padding-bottom: <?= esc_attr($padding_bottom) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_left !== null) : ?> --cz-card-padding-left: <?= esc_attr($padding_left) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_top_mobile !== null) : ?> --cz-card-padding-top-mobile: <?= esc_attr($padding_top_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_right_mobile !== null) : ?> --cz-card-padding-right-mobile: <?= esc_attr($padding_right_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_bottom_mobile !== null) : ?> --cz-card-padding-bottom-mobile: <?= esc_attr($padding_bottom_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_left_mobile !== null) : ?> --cz-card-padding-left-mobile: <?= esc_attr($padding_left_mobile) . 'px' ?>; <?php endif; ?>    <?php if ($background_image) : ?> --cz-card-background-image: <?= "url('" . esc_attr($background_image['url']) . "')" ?>; <?php endif; ?>
    <?php if ($background_overlay_opacity) : ?> --cz-card-background-overlay-color: <?= "rgba(0,0,0," . $background_overlay_opacity/10 . ")" ?>; <?php endif; ?>
    <?php if ($background_image_mobile) : ?> --cz-card-background-image-mobile: <?= "url('" . esc_attr($background_image_mobile['url']) . "')" ?>; <?php endif; ?>
    <?php if ($border_radius) : ?> --cz-card-border-radius: <?= esc_attr($border_radius) . 'px' ?>; <?php endif; ?>
    <?php if ($border_color) : ?> --cz-card-border-color: <?= esc_attr($border_color) ?>; <?php endif; ?>
    <?php if ($border_top !== null) : ?> --cz-card-border-top: <?= esc_attr($border_top) . 'px' ?>; <?php endif; ?>
    <?php if ($border_right !== null) : ?> --cz-card-border-right: <?= esc_attr($border_right) . 'px' ?>; <?php endif; ?>
    <?php if ($border_bottom !== null) : ?> --cz-card-border-bottom: <?= esc_attr($border_bottom) . 'px' ?>; <?php endif; ?>
    <?php if ($border_left !== null) : ?> --cz-card-border-left: <?= esc_attr($border_left) . 'px' ?>; <?php endif; ?>
        "
>
    <div class="background-overlay"></div>

    <InnerBlocks/>
</div>