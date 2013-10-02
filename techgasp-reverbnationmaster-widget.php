<?php
//Load Shortcode Framework

//Hook Widget
add_action( 'widgets_init', 'techgasp_reverbnationmaster_widget' );
//Register Widget
function techgasp_reverbnationmaster_widget() {
register_widget( 'techgasp_reverbnationmaster_widget' );
}

class techgasp_reverbnationmaster_widget extends WP_Widget {
	function techgasp_reverbnationmaster_widget() {
	$widget_ops = array( 'classname' => 'Reverbnation Master', 'description' => __('Reverbnation Master plugs-in perfectly into wordpress and allows you to display all the reverbnation juice inside any widget template position. ', 'Reverbnation Master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'techgasp_reverbnationmaster_widget' );
	$this->WP_Widget( 'techgasp_reverbnationmaster_widget', __('Reverbnation Master', 'reverbnation master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "Reverbnation Master";
		$title = isset( $instance['title'] ) ? $instance['title'] :false;
		$reverbnationspacer ="'";
		$show_reverbbutton = isset( $instance['show_reverbbutton'] ) ? $instance['show_reverbbutton'] :false;
		$reverbpage = $instance['reverbpage'];
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $name . $after_title;
	//Display Reverbnation Profile Button
	if ( $show_reverbbutton )
			echo '<a href="'.$reverbpage.'" target="_blank"><img src="../wp-content/plugins/reverbnation-master/reverbnation_button.png"></a>';
	echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_reverbbutton'] = $new_instance['show_reverbbutton'];
		$instance['reverbpage'] = $new_instance['reverbpage'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'name' => __('Reverbnation Master', 'reverbnation master'), 'title' => true, 'show_reverbbutton' => false, 'reverbpage' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<b>Check the buttons to be displayed:</b>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'reverbnation master'); ?></b></label></br>
	</p>
	<hr>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['show_reverbbutton'], true ); ?> id="<?php echo $this->get_field_id( 'show_reverbbutton' ); ?>" name="<?php echo $this->get_field_name( 'show_reverbbutton' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_reverbbutton' ); ?>"><b><?php _e('Reverbnation Profile Button', 'reverbnation master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'reverbpage' ); ?>"><?php _e('insert Reverbnation Profile link:', 'reverbnation master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'reverbpage' ); ?>" name="<?php echo $this->get_field_name( 'reverbpage' ); ?>" value="<?php echo $instance['reverbpage']; ?>" style="width:auto;" />
	</p>
	<hr>
	<p><b>Reverbnation Master Advanced Version:</b> contains the extra Reverbnation Widget Player Reverbnation Widget Player (full nine yards api Player. Displays all Reverbnation Widgets, Html5 Player, Html5 Fan Collector, Html5 Show Schedule, Tune Widget, Shop, etc.</p>
	<p><a class="button-primary" href="http://wordpress.techgasp.com/reverbnation-master/" target="_blank" title="Reverbnation Master Advanced Version">Reverbnation Master Advanced Version</a></p>
	<?php
	}
 }
?>
