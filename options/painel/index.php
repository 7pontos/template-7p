<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<div class="container">
	<div class="page-header">
    	<h1>Painel 7 Pontos <small>Dúvidas? suporte@7pontos.com.br</small></h1>
    </div>
    
    <ul class="nav nav-tabs">
    	<li class="active"><a data-toggle="tab" href="#general">Geral</a></li>
        <li><a data-toggle="tab" href="#home">Home</a></li>
	</ul>
    <form method="post" action="options.php">
    	<?php 
			settings_fields( 'painel-sete-pontos-group' ); 
			do_settings_sections( 'painel-sete-pontos-group' );
			$googlefont01 = get_option( 'painel-sete-pontos-google-font-01' );
			$insidehead = get_option( 'painel-sete-pontos-inside-head' );
			$beforebody = get_option( 'painel-sete-pontos-before-body' );
		?>
    	<div class="tab-content">
            <div id="general" class="tab-pane fade in active">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Configurações Gerais (todas as páginas)</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row"><i class="fa fa-google"></i> GoogleFont Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr valign="top">
                                    <td><input type="text" id="painel-sete-pontos-google-font-01" name="painel-sete-pontos-google-font-01" value="<?php echo $googlefont01; ?>" class="form-control"/></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row"><i class="fa fa-code "></i> Code Inside &lt;head&gt; (Tag Manager)</th>
                                    <th scope="row"><i class="fa fa-code "></i> Code Before &lt;/body&gt; (Script de Rodapé)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr valign="top">
                                    <td><textarea id="painel-sete-pontos-inside-head" name="painel-sete-pontos-inside-head" rows="8" cols="50" class="form-control"><?php echo $insidehead; ?></textarea></td>
                                    <td><textarea id="painel-sete-pontos-before-body" name="painel-sete-pontos-before-body" rows="8" cols="50" class="form-control"><?php echo $beforebody; ?></textarea></td>
                                </tr>
                            </tbody>
                        </table> 
                    </div><!-- //.panel-body -->
                </div><!-- //.panel -->
            </div><!-- //.tab-pane -->
            <div id="home" class="tab-pane fade">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Configurações Página Home</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row">Nothing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr valign="top">
                                    <td>Nothing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- //.panel-body -->
                </div><!-- //.panel -->
            </div><!-- //.tab-pane -->
		</div><!-- //.tab-content -->
        <div class="col-lg-12">
			<?php submit_button(); ?>
        </div>
	</form>
</div>