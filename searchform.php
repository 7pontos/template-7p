<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field hidden" placeholder="<?php echo esc_attr_x( 'O que procura?', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'O que procura?:', 'label' ) ?>" />
	</label>
    <button type="button" class=""><i class="fa fa-search"></i></button>
</form>