<?php
// [setepontos_shortcode]
/* echo do_shortcode( '[setepontos_shortcode]' ); */
function setepontos_shortcode() {
	$return = '';
	return $return;
}
add_shortcode( 'setepontos_shortcode', 'setepontos_shortcode' );

add_action( 'vc_before_init', 'setepontos_shortcode_VC' );
function setepontos_shortcode_VC() {
   vc_map( array(
      "name" => __( "Sete Pontos Shortcode", "sete-pontos" ),
      "base" => "setepontos_shortcode",
      "class" => "setepontos",
      "category" => __( "Content", "sete-pontos")
   ) );
}
?>