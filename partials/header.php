<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<div class="header-height"></div>
<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo ">
                    <h1 itemprop="headline"><a href="<?php echo get_site_url(); ?>"><img src="<?php header_image(); ?>" alt="<?php echo get_bloginfo('description'); ?>" /></a></h1>
                </div><!-- .logo -->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="aux">
					<?php 
						$page = get_page_by_title( 'cabecalho' );
						$content = apply_filters('the_content', $page->post_content); 
						echo $content; 
					?>
                </div>
                <div class="main-menu">
                    <?php ubermenu( 'main' ); ?>
                </div><!-- .main-menu -->
            </div>
        </div>
    </div>
</header>