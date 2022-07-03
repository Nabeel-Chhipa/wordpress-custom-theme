<?php
    register_nav_menus(
        array(
            'primary-menu' => 'Top Menu'
        )
    );

    // function my_wp_nav_menu_args( $args = '' ) {
    //     if( $args['theme_location'] == 'your-specific-location' )
    //         $args = array_merge( array(
    //             'li_class' => 'nav-item',
    //             'a_class' => 'nav-link'
    //         ), $args );
    //     return $args;
    // }
    // add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
?>