<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 2.0
*/
?>
<?php
	$role_object = get_role( 'editor' );
	$role_object->add_cap( 'edit_theme_options' );
?>