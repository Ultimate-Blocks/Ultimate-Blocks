<?php

function ub_render_divider_block($attributes){
    extract($attributes);
    return '<div class="ub_divider '.esc_attr($className).'" id="ub_divider_'.$blockID.'"></div>';
}

function ub_register_divider_block(){
    if ( function_exists( 'register_block_type' ) ) {
        register_block_type( 'ub/divider', array(
            'attributes' => $GLOBALS['defaultValues']['ub/divider']['attributes'],
            'render_callback' => 'ub_render_divider_block'));
    }
}

add_action('init', 'ub_register_divider_block');