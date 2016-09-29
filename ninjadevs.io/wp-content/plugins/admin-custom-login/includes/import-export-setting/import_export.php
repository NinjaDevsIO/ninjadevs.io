<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
<div class="row">
	<!-- // Export Settings //-->
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Export Custom Login Data ','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td style="width:80%">
						
						<p style="margin-bottom:15px;"><?php _e( 'Export the plugin settings for this site as a .json file. This allows you to easily import the configuration into another site.' ); ?></p>
						<form method="post">
							<p><input type="hidden" name="acl_action" value="export_settings" /></p>
							<p>
								<?php wp_nonce_field( 'acl_export_nonce', 'acl_export_nonce' ); ?>
								<input type="submit" name="submit" id="submit" class="btn btn-info btn-md" value="Export"  />
							</p>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<!-- // Import Settings //-->
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Import Custom Login Data ','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td style="width:80%">
						
						<p style="margin-bottom:15px;"><?php _e( 'Import the plugin settings from a .json file. This file can be obtained by exporting the settings on another site using the form above.' ); ?></p>
						<form method="post" enctype="multipart/form-data">
							<p>
								<input type="file" name="import_file"/>
							</p>
							<p>
								<input type="hidden" name="acl_action" value="import_settings" />
								<?php wp_nonce_field( 'acl_import_nonce', 'acl_import_nonce' ); ?>
								<input type="submit" name="submit" id="submit" class="btn btn-info btn-md" value="Import"  />
								
							</p>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- /row -->
