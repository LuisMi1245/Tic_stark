<?php
register_nav_menus(array(
    'menu' => 'Menu superior',
));

register_sidebar(array(
'name'=> 'Sidebar',
'before_widget'=> '<section class="widget">',
'after_widget'=> '</section>',
'before_title'=> '<h1 class="widget-title">',
'after_title'=> '</h1>'
));

add_theme_support('post-thumbnails');
add_image_size('card-level-3', 288, 175, true);
add_image_size('card-level-2', 288, 269, true);
add_image_size('card-level-1', 288, 386, true);
add_image_size('background', 688, 475, true);


$nivel_tarjeta = nivel_tarjeta();
function nivel_tarjeta() {
    if ( $keys = get_post_custom_keys() ) {
       foreach ( (array) $keys as $key ) {
            $keyt = trim( $key );
            if ( is_protected_meta($keyt, 'post') ) {
                continue;
            }
            $values = array_map('trim', get_post_custom_values($key));
            $value = implode( $values, ', ');
            $html = sprintf($value);
            /**
             * Filters the HTML output of the li element in the post custom fields list.
             *
             * @since 2.2.0
             *
             * @param string $html  The HTML output for the li element.
             * @param string $key   Meta key.
             * @param string $value Meta value.
             */
            echo apply_filters('the_meta_key', $html, $key, $value);
        }
    }
}

?>