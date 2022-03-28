<?php

//Chamar a tag title
function traction_title_tag(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','traction_title_tag');

//Prevenir o erro em versoes antigas na tag title
if (!function_exists('_wp_render_title_tag')){
    function traction_render_title(){
        ?>
        <title><?php wp_title('|',true,'right')?></title>
        <?php
    }
    add_action('wp_head','traction_render_title');
}
