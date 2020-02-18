<?php
function base_sidebar_main(){
    register_sidebar(array(
        'name' => 'Sidebar Principal',
        'id' => 'sidebar-main',
        'descripcion' => 'Sidebar principal del theme',
        'class' => '',
        'before_widget' => '<div class="sidebar-main mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init','base_sidebar_main');