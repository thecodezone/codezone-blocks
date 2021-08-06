<?php
$width = get_field('cz_pixel_width');
if ($block['align'] === 'right') {
    $margin = '0 auto 0 0';
}

if ($block['align'] === 'right') {
    $margin = '0 0 0 auto';
}

if ($block['align'] === 'center') {
    $margin = '0 auto';
}

$classes = cz_classes(
    'cz-block',
    'cz-block--container',
    'container'
);
?>

<div
    class="<?= $classes ?>"
    style="
    <?php if ($width && $width != '0') : ?> --cz-container-width: <?= esc_attr($width) . 'px'?>; --cz-container-margin: <?= $margin ?>; <?php endif; ?>"
>
    <InnerBlocks/>
</div>
