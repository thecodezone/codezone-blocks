<?php
$distance = get_field( 'cz_reveal_distance' );
$duration = get_field( 'cz_reveal_duration' );
$origin = get_field( 'cz_reveal_origin' );
$rotate = get_field( 'cz_reveal_rotate' );
$scale = get_field( 'cz_reveal_scale' );
$delay = get_field( 'cz_reveal_delay' );

$desktop = get_field( 'cz_reveal_desktop' );
$mobile = get_field( 'cz_reveal_mobile' );
$reset = get_field( 'cz_reveal_reset' );

$classes = cz_classes(
    'cz-block',
    'cz-block--reveal',
    'cz-block--hidden'
);

?>
<div class="<?php echo esc_attr( $classes ); ?>"
     data-reveal-config='<?php echo wp_json_encode( [
         'desktop' => $desktop,
         'mobile'  => $mobile,
         'reset'   => $reset,
     ] ) ?>'
     data-reveal-animation='<?php echo wp_json_encode( [
         'distance' => $distance . 'px',
         'origin'   => $origin,
         'rotate'   => [
             'x' => 0,
             'y' => 0,
             'z' => $rotate,
         ],
         'scale'    => (float)$scale / 10,
         'delay'    => (int)$delay
     ] ) ?>'>
    <InnerBlocks/>
</div>
