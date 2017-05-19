<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->