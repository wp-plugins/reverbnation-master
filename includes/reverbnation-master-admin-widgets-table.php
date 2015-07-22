<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class reverbnation_master_admin_widgets_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'reverbnation_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'reverbnation_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:left;">To Widgets Page</a></p></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:right;">To Widgets Page</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-widget-buttons.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Buttons Widget</h3><p>Reverbnation Master Buttons Widget is perfect to connect your wordpress visitors and users to your Reverbnation Profile. Watch those profile visits explode!.</p><p>Looks great when published under the advanced widget, remember you can always hide the widget title to get the button closer to your video.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-widget-advanced.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Advanced Responsive Widget</h3><p>"Top of the Line" Advanced Reverbnation Widget plugs-in perfectly into wordpress and allows you to display all the reverbnation juice inside any widget template position. <b>NO USE</b> of nasty Javascipt or Ajax.</p><p>Encapsulates any Reverbnation script in <b>html5</b> for fast page load times and perfect Google SEO. This advanced widget allows you to show all Reverbnation Share scripts, <b>Html5 Player</b>, <b>Html5 Fan Collector</b>, <b>Html5 Show Schedule</b>, <b>Tune Widget</b>, <b>Shop</b>. Fully Mobile Responsive.</p><p>Check Add-ons page.</p></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-widget-banner.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Responsive User Banner Widget</h3><p>Makes it easy to add a cool reverbnation user banner to your wordpress.</p><p>Encapsulates any Reverbnation script in <b>html5</b> for fast page load times and perfect Google SEO. <b>Fully Mobile Responsive</b>.</p><p>Check Add-ons page.</p></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-widget-dashboard.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Administrator Dashboard Widget</h3><p>The wordpress administrator dashboard widget allows you to have any native reverbnation widget inside your wordpress dashboard page.</p><p>Very useful to listen to music or have your reverbnation schedule close by while you work on your wordpress.</p><p>Check Add-ons page.</p></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-widget-blank.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Suggest a Widget</h3><p>Would you like to see your widget idea added to this plugin? Just drop us a line and we will make sure it gets included in the next release.</p><p>Get in touch with TechGasp.</p></td>
		</tr>
	</tbody>
</table>
<?php
		}
}