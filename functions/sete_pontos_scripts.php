<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php
function sete_pontos_header(){
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
	wp_enqueue_style( 'bootstrap-theme.min', get_template_directory_uri() . '/css/bootstrap/bootstrap-theme.min.css' );
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'googlefont01', get_option( 'painel-sete-pontos-google-font-01' ) );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}
add_action('wp_head','sete_pontos_header');

function sete_pontos_footer(){
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array(), '1.0.0', true );
}
add_action('wp_footer','sete_pontos_footer');

function sete_pontos_scripts() {
	add_action('wp_head', 'setepwpincludehead');
	function setepwpincludehead() {
		echo get_option( 'painel-sete-pontos-inside-head' );
	}
	add_action('wp_footer', 'setepwpincludefooter');
	function setepwpincludefooter() {
		echo get_option( 'painel-sete-pontos-before-body' );
	}
}
add_action( 'wp_enqueue_scripts', 'sete_pontos_scripts' );
?>