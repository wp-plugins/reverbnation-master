<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class reverbnation_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
	$path = ABSPATH . 'wp-content/plugins/reverbnation-master-addons/';
	if ( is_plugin_active( 'reverbnation-master-addons/reverbnation-master-addons.php' ) && file_exists($path) ) {
		$reverbnation_master_addon = "yes";
		$reverbnation_master_addon_get = '<b>All add-ons Installed</b>';
	}
	else{
		$reverbnation_master_addon = "no";
		$reverbnation_master_addon_get = '<a class="button-primary" href="http://wordpress.techgasp.com/reverbnation-master/" target="_blank" title="Get Add-ons" style="float:left;">Get Add-ons</a>';
	}
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'reverbnation_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'reverbnation_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'reverbnation_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><?php echo $reverbnation_master_addon_get; ?></th>
			<th class="manage-column column-columnname" scope="col"></th>
			<th class="manage-column column-columnname" scope="col"></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-widget-buttons.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Buttons Widget</h3><p>Reverbnation Master Buttons Widget is perfect to connect your wordpress visitors and users to your Reverbnation Profile. Watch those profile visits explode!.</p><p>Looks great when published under the advanced widget, remember you can always hide the widget title to get the button closer to your video.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-yes.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-widget-advanced.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Advanced Responsive Widget</h3><p>"Top of the Line" Advanced Reverbnation Widget plugs-in perfectly into wordpress and allows you to display all the reverbnation juice inside any widget template position. <b>NO USE</b> of nasty Javascipt or Ajax.</p><p>Encapsulates any Reverbnation script in <b>html5</b> for fast page load times and perfect Google SEO. This advanced widget allows you to show all Reverbnation Share scripts, <b>Html5 Player</b>, <b>Html5 Fan Collector</b>, <b>Html5 Show Schedule</b>, <b>Tune Widget</b>, <b>Shop</b>. Fully Mobile Responsive.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-widget-banner.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Responsive User Banner Widget</h3><p>Makes it easy to add a cool reverbnation user banner to your wordpress.</p><p>Encapsulates any Reverbnation script in <b>html5</b> for fast page load times and perfect Google SEO. <b>Fully Mobile Responsive</b>.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-widget-dashboard.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Reverbnation Administrator Dashboard Widget</h3><p>The wordpress administrator dashboard widget allows you to have any native reverbnation widget inside your wordpress dashboard page.</p><p>Very useful to listen to music or have your reverbnation schedule close by while you work on your wordpress.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-shortcode-in.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Reverbnation Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized reverbnation buttons in each page or post. Easy to use it can be found when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[reverbnation-master]</b> anywhere inside that text.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-shortcode-un.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Universal Shortcode</h3><p>reverbnation Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same reverbnation buttons across different pages or posts. Easy to use it can be found right here under the Shortcodes menu. Once you have created your shortcode, Just insert the shortcode <b>[reverbnation-master-un]</b> anywhere inside the text of your pages or posts.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-updater.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-reverbnationmaster-admin-addons-support.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides 24/7 award winning professional wordpress support for all advanced version costumers and replies to support tickets usually within minutes of being received. Support Us and we will Support You.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$reverbnation_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('reverbnation_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}