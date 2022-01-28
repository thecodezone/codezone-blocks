<?php
$auto_height = get_field('cz_carousel_auto_height') !== null ? get_field('cz_carousel_auto_height') : false;
$auto_play = get_field('cz_carousel_auto_play') !== null ? get_field('cz_carousel_auto_play') : false;
$slides_per_view = get_field('cz_carousel_slides_per_view') ? (int) get_field('cz_carousel_slides_per_view') : 1;
$slides_per_group = get_field('cz_carousel_slides_per_group') ? (int) get_field('cz_carousel_slides_per_group') : $slides_per_view;
$space_between = get_field('cz_carousel_space_between') ? (int) get_field('cz_carousel_space_between') :30;
$loop = get_field('cz_carousel_auto_height') !== null ? get_field('cz_carousel_auto_height') : false;
$pagination = get_field('cz_carousel_pagination') !== null ? get_field('cz_carousel_pagination') : false;

$classes = cz_classes(
    'cz-block',
    'cz-block--carousel'
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
    'simulateTouch' => true,
    'pagination'  => $pagination ? [ 'el' => ".swiper-pagination" ] : false,
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

<div
        class="<?= $classes ?>"
        data-swiper-options="<?= esc_attr(wp_json_encode($options)) ?>"
        style="--slide-basis: <?php echo 100 / $slides_per_view ?>%; --slide-space: <?php $space_between ?>px;"
>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <InnerBlocks  allowedBlocks="<?php echo esc_attr(wp_json_encode( [ 'acf/cz-carousel-slide'] ) ) ?>"/>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

