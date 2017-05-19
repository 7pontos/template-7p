<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<div class="footer">
	<div class="container">
		<?php 
			$page = get_page_by_title( 'rodape' );
			$content = apply_filters('the_content', $page->post_content); 
			echo do_shortcode($content);
		?>
	</div>
</div>