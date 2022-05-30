<?php
$auto_height = get_field('cz_carousel_auto_height') !== null ? get_field('cz_carousel_auto_height') : false;
$auto_play = get_field('cz_carousel_auto_play') !== null ? get_field('cz_carousel_auto_play') : false;
$slides_per_view = get_field('cz_carousel_slides_per_view') ? (int) get_field('cz_carousel_slides_per_view') : 1;
$slides_per_group = get_field('cz_carousel_slides_per_group') ? (int) get_field('cz_carousel_slides_per_group') : $slides_per_view;
$space_between = get_field('cz_carousel_space_between') !== null  ? (int) get_field('cz_carousel_space_between') : 30;
$loop = get_field('cz_carousel_loop') !== null ? get_field('cz_carousel_loop') : false;
$images = get_field('cz_images') ? get_field('cz_images') : [];

$classes = cz_classes(
    'cz-block',
    'cz-block--image-carousel',
    $block['className'] ?? null
);

$options = [
    'observer' => true,
    'observeParents' => true,
    'observeChildren' => true,
    'slidesPerView' => 1,
    'slidesPerGroup' => 1,
    'centeredSlides' => false,
    'simulateTouch' => false,
    'spaceBetween' => $space_between,
    'autoHeight' => $auto_height,
    'autoplay' => $auto_play ? ['delay' => 5000] : false,
    'loop' => $loop,
    'breakpoints' =>  [
        '1076' => [
            'slidesPerView' => $slides_per_view,
            'slidesPer' => $slides_per_group,
        ],
        '577' => [
            'slidesPerView' => $slides_per_view >= 2 ? 2 : 1,
            'slidesPerGroup' => $slides_per_group >= 2 ? 2 : 1,
        ]
    ]
];

?>

<?php if (is_admin() && !count($images)): ?>
    <p>
        No images.
    </p>
<?php elseif(count($images)): ?>
    <div
            class="<?= $classes ?>"
            data-swiper-options="<?= esc_attr(wp_json_encode($options)) ?>"
            style="--slide-basis: <?php echo 100 / $slides_per_view ?>%; --slide-space: <?php $space_between ?>px;"
    >
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($images as $image): ?>
                    <div class="swiper-slide">
                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            width="<?php echo esc_attr($image['width']) ?>"
                            height="<?php echo esc_attr($image['height']) ?>"
                            class="nolazyload"/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
<?php endif; ?>
