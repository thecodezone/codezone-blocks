<?php
$orientation = get_field('cz_accordion_orientation');
$size = get_field('cz_accordion_closed_panel_size');
$mobile_size = get_field('cz_accordion_closed_panel_size_mobile');
$hover = get_field('cz_carousel_hover');
$speed = get_field('cz_transition_speed');
$effect = get_field('cz_transition_effect');

$classes = cz_classes(
    'cz-block',
    'cz-block--accordion',
    'cz-accordion--' . $orientation,
    'cz-accordion--loading',
    $hover ? 'cz-accordion--hover' : false
);
?>

<?php if ($is_preview): ?>
    <div class="accordion__preview">
        <InnerBlocks  allowedBlocks="<?php echo esc_attr(wp_json_encode( [ 'acf/cz-accordion-panel'] ) ) ?>"/>
    </div>
<?php else: ?>
    <div class="<?= $classes ?>" style="
            --cz-accordion-closed-panel-size: <?= esc_attr($size) ?>;
            --cz-accordion-closed-panel-size-mobile: <?= esc_attr($mobile_size) ?>;
            --cz-accordion-transition: max-width <?= esc_attr($speed) ?>ms <?= esc_attr($effect) ?>, max-height <?= esc_attr($speed) ?>ms <?= esc_attr($effect) ?>;
            ">
        <InnerBlocks  allowedBlocks="<?php echo esc_attr(wp_json_encode( [ 'acf/cz-accordion-panel'] ) ) ?>"/>
    </div>
<?php endif; ?>

