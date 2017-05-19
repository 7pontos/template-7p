<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>

	</div><!-- .site-content -->
</div><!-- .site -->
<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	<?php $metafooter = get_post_meta( get_the_ID(), 'meta_box_select_footer' ); ?>
	<?php 
		if($metafooter){
			include 'partials/'.$metafooter[0];
		}else{
			include 'partials/footer.php';
		}
	?>
</footer><!-- .site-footer -->
<div class="col-lg-12 copyright container-footer">
    <div class="text-center">
        <p><strong>Copyright © <?php echo date("Y");?> <?php echo get_bloginfo('name'); ?></strong></p>
        <p><strong><a href="http://7pontos.com.br/criacao-de-sites/">Criação de Sites</a> por <a href="http://7pontos.com.br"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-7pontos.png" title="Links Patrocinados, Marketing Digital Brasília | 7 Pontos" alt="Links Patrocinados, Marketing Digital Brasília | 7 Pontos" style="width:inherit"/></a></strong></p>
    </div>
</div><!-- .copyright -->
 
<?php wp_footer(); ?>

</body>
</html>
