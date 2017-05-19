<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php

function register_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );

?>