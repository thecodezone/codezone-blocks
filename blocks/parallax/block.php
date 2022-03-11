<?php
$element_start = get_field( 'cz_parallax_element_start' );
$element_end = get_field( 'cz_parallax_element_end' );
$screen_start = get_field( 'cz_parallax_screen_start' );
$screen_end = get_field( 'cz_parallax_screen_end' );
$variable = get_field( 'cz_parallax_variable' );
$from = get_field( 'cz_parallax_from' );
$to = get_field( 'cz_parallax_to' );
$custom = get_field( 'cz_parallax_custom' );
$props = get_field( 'cz_parallax_props' );

$classes = cz_classes(
    'cz-block',
    'cz-block--parallax',
    $custom ? false : 'cz-parallax--default'
);

if ($custom && $props) {
    try {
        $props = json_decode($props);
    } catch (Exception $ex) {
        //Do nothing
    }
}

?>


<div class="<?php echo esc_attr( $classes ); ?>"
    <?php if (!$custom || ($custom && $props)): ?>
     data-basic-scroll-config='<?php echo wp_json_encode( [
         'from' => $element_start . '-' . $screen_start,
         'to'  => $element_end . '-' . $screen_end,
         'props' => $custom ? $props : [
             '--cz-parallax' => [
                     "from" => $from,
                     "to" => $to
             ]
         ],
     ] ) ?>'
     <?php endif; ?>
     >
    <InnerBlocks/>
</div>

