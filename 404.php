<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>	
    
    <div id="primary" class="content-area">
    	<div class="row">
            <main id="main" class="site-main col-lg-9 col-md-9 col-sm-12 col-xs-12" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
            <h2 class="page-title">Página não encontrada</h2>
            <div class="page-wrapper">
				<div class="page-content">
					<h1>Desculpe, mas não encontramos a página solicitada.</h1>
					<p>Use nossa ferramenta de busca abaixo para procurar a página que deseja.</p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->
            </main><!-- .site-main -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
    	</div><!-- .row -->
	</div><!-- .content-area -->

<?php get_footer(); ?>