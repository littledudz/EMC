<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'navbar-menu' => __( 'Navbar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>