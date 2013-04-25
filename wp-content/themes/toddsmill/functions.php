<?php

  function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_footer_menu' );

  /* renders a UL for the footer nav */
  function footer_menu() {
    $menu_name = 'footer-menu';

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      $menu_list = '<ul>';

      $current_page_id = get_the_ID();
      foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $class = ($menu_item->object_id == $current_page_id) ? 'current' : '';

        $menu_list .= '<li><a class="' .$class. '" href="' .$url. '">' .$title. '</a></li>';
      }

      // add login / logout
      $redirect = ( is_home() ) ? false : get_permalink();
      $login_link = '';
      if( is_user_logged_in( ) ) {
        $login_link = '<a href="' . wp_logout_url( $redirect ) . '" title="' .  __( 'Logout' ) .'">' . __( 'Logout' ) . '</a>';
      } else {
        $login_link = '<a href="' . wp_login_url(false) . '" title="' .  __( 'Login' ) .'">' . __( 'Login' ) . '</a>';
      }
      $menu_list .= '<li>' .$login_link. '</li>';

      $menu_list .= '</ul>';
    } else {
      $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }
    echo $menu_list;
  }

?>
