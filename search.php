<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>
	<div id="primary" class="content-area search-page">
    	<div class="row">
            <main id="main" class="col-lg-8 col-md-8 col-sm-12 col-xs-12" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
				<?php if ( have_posts() ) : ?>
                    <h1 class="page-title"><?php printf( __( 'Resultados da pesquisa: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    <?php while ( have_posts() ) : the_post(); ?>
                    	<?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php setepontos_numeric_posts_nav(); ?>
                <?php else : ?>
                    <div id="post-0" class="post search-post no-results not-found">
                        <h2 class="entry-title"><?php _e( 'Nenhum registro encontrado' ); ?></h2>
                        <div class="entry-content">
                            <p><?php _e( 'Desculpe mas não encontramos as palavras pesquisadas. Por favor tente novamente com novas palavras-chave.' ); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-0 -->
                <?php endif; ?>
            </main><!-- .site-main -->
            <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
                <?php get_sidebar('sidebar-blog'); ?>
            </div>
    	</div><!-- .row -->
	</div><!-- .content-area -->
<?php get_footer(); ?>