<?php
$width = get_field('cz_pixel_width');

$classes = cz_classes(
    'block',
    'block--cz-container',
    'container'
);
?>

<div
    class="<?= $classes ?>"
    style="
    <?php if ($width && $width != '0') : ?> --cz-container-width: <?= esc_attr($width) . 'px'?>; <?php endif; ?>
        "
>
    <InnerBlocks/>
</div>
