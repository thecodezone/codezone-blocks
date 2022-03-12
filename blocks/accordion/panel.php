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
$background_position_left = get_field('cz_background_position_left');
$background_position_top = get_field('cz_background_position_top');

$classes = cz_classes(
    'cz-block--accordion-panel',
    $block['align'] ?? $block['align']
);
?>

<div
    class="<?= $classes ?>"
    style="
    <?php if ($background_color) : ?> --cz-accordion-panel-background-color: <?= esc_attr($background_color) ?>; <?php endif; ?>
    <?php if ($text_color) : ?> --cz-accordion-panel-text-color: <?= esc_attr($text_color) ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_top !== null) : ?> --cz-accordion-panel-padding-top: <?= esc_attr($padding_top) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_right !== null) : ?> --cz-accordion-panel-padding-right: <?= esc_attr($padding_right) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_bottom !== null) : ?> --cz-accordion-panel-padding-bottom: <?= esc_attr($padding_bottom) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_left !== null) : ?> --cz-accordion-panel-padding-left: <?= esc_attr($padding_left) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_top_mobile !== null) : ?> --cz-accordion-panel-padding-top-mobile: <?= esc_attr($padding_top_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_right_mobile !== null) : ?> --cz-accordion-panel-padding-right-mobile: <?= esc_attr($padding_right_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_bottom_mobile !== null) : ?> --cz-accordion-panel-padding-bottom-mobile: <?= esc_attr($padding_bottom_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($has_padding && $padding_left_mobile !== null) : ?> --cz-accordion-panel-padding-left-mobile: <?= esc_attr($padding_left_mobile) . 'px' ?>; <?php endif; ?>
    <?php if ($background_image) : ?> --cz-accordion-panel-background-position: <?= $background_position_left ? esc_attr($background_position_left) : 50 ?>% <?= $background_position_top ? esc_attr($background_position_top) : 50 ?>%; <?php endif; ?>
    <?php if ($background_image) : ?> --cz-accordion-panel-background-image: <?= "url('" . esc_attr($background_image['url']) . "')" ?>; <?php endif; ?>
    <?php if ($background_image_mobile) : ?> --cz-accordion-panel-background-image-mobile: <?= "url('" . esc_attr($background_image_mobile['url']) . "')" ?>; <?php endif; ?>
    <?php if ($background_overlay_opacity) : ?> --cz-accordion-panel-background-overlay-color: <?= "rgba(0,0,0," . $background_overlay_opacity/10 . ")" ?>; <?php endif; ?>
            "
>

    <div class="cz-accordion-panel__inner">
        <div class="cz-accordion-panel__content">
            <InnerBlocks/>
        </div>
        <?php if ($background_image): ?>
            <img class="cz-accordion-panel__image" <?php if ($background_image_mobile): ?>srcset="<?php echo $background_image_mobile['url']; ?> 600w, <?php echo $background_image['url']; ?> 1200w"<?php endif; ?>
                 src="<?php echo $background_image['url']; ?>"
                 alt="<?php echo $background_image['alt']; ?>"
            >
        <?php endif; ?>
        <div class="background-overlay"></div>
    </div>


    <div class="cz-accordion-panel__trigger"></div>
</div>
