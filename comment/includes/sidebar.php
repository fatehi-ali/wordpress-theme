<?php 
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => 'ساید بار اصلی کناری',
        'id'            => 'sidebar-1',
        'description'   => 'ساید بار کناری',
        'before_widget' => '<div class="sidebox">',
        'after_widget'  => ' </section></div>',
        'before_title'  => '<header><h4>',
        'after_title'   => '</h4></header><section>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );