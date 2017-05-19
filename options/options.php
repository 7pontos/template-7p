<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php
/* Add Painel Menu 7 Pontos */
add_action( 'admin_menu', 'painel_sete_pontos' );
function painel_sete_pontos() {
	/* Page title, Top-level menu title, capabilities permition, capabilities name, name_function */
	add_menu_page('Painel 7 Pontos', 'Painel 7 Pontos', 'edit_pages', 'painel-sete-pontos', 'include_painel_sete_pontos');
	add_action( 'admin_init', 'update_painel_sete_pontos_info' );
}
if( !function_exists("update_painel_sete_pontos_info") ) {
	function update_painel_sete_pontos_info() {
	  register_setting( 'painel-sete-pontos-group', 'painel-sete-pontos-google-font-01' );
	  register_setting( 'painel-sete-pontos-group', 'painel-sete-pontos-inside-head' );
	  register_setting( 'painel-sete-pontos-group', 'painel-sete-pontos-before-body' );
	}
}
function include_painel_sete_pontos() {
	if ( !current_user_can( 'edit_pages' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}else{
		include 'painel/index.php';
	}
}
function include_style_painel_sete_pontos() {
    wp_enqueue_style( 'bootstrap-theme.min', get_template_directory_uri() . '/css/bootstrap/bootstrap-theme.min.css' );
	wp_enqueue_style( 'bootstrap.admin.min', get_template_directory_uri() . '/css/bootstrap/bootstrap.admin.min.css' );
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('jquery');
	wp_enqueue_style('thickbox');
}
add_action( 'admin_enqueue_scripts', 'include_style_painel_sete_pontos' );