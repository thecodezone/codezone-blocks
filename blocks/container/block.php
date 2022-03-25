<?php
$width = get_field('cz_pixel_width');
$justifcation = get_field('cz_justification');
if ($justifcation === 'left') {
    $margin = '0 auto 0 0';
}

if ($justifcation === 'right') {
    $margin = '0 0 0 auto';
}

if ($justifcation === 'center') {
    $margin = '0 auto';
}

$classes = cz_classes(
    'cz-block',
    'cz-block--container',
    'container',
    $block['className'] ?? null
);
?>

<div
    class="<?= $classes ?>"
    style="
    <?php if ($width && $width != '0') : ?> --cz-container-width: <?= esc_attr($width) . 'px'?>; --cz-container-margin: <?= $margin ?>; <?php endif; ?>"
>
    <InnerBlocks/>
</div>
