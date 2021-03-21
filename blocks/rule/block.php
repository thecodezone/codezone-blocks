<?php
$height = get_field('cz_height');
$left_color = get_field('cz_left_color');
$right_color = get_field('cz_right_color');

$classes = cz_classes(
	'block',
	'block--cz-rule'
);
?>

<div class="block--cz-rule__wrapper">
    <div
            class="<?= $classes ?>"
            style="
            <?php if ($height) : ?> --cz-rule-height: <?= esc_attr($height) . 'px'?>; <?php endif; ?>
            <?php if ($left_color) : ?> --cz-rule_left_color: <?= esc_attr($left_color) ?>; <?php endif; ?>
            <?php if ($right_color) : ?> --cz-rule_right_color: <?= esc_attr($right_color) ?>; <?php endif; ?>
                    "
    >
    </div>
</div>
