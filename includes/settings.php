
<?php
add_action( 'admin_menu', 'coinwebcc_add_admin_menu' );
add_action( 'admin_init', 'coinwebcc_settings_init' );


function coinwebcc_add_admin_menu(  ) { 

	add_options_page( 'CoinWeb Crypto-Currency', 'CoinWeb Crypto-Currency', 'manage_options', 'coinweb_crypto-currency', 'coinwebcc_options_page' );

}


function coinwebcc_settings_init(  ) { 

	register_setting( 'pluginPage', 'coinwebcc_settings' );

	add_settings_section(
		'coinwebcc_pluginPage_section', 
		__( 'Your section description', 'coinwebcc' ), 
		'coinwebcc_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'coinwebcc_text_field_0', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_text_field_0_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_text_field_1', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_text_field_1_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_text_field_2', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_text_field_2_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_checkbox_field_3', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_checkbox_field_3_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_radio_field_4', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_radio_field_4_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_textarea_field_5', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_textarea_field_5_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);

	add_settings_field( 
		'coinwebcc_select_field_6', 
		__( 'Settings field description', 'coinwebcc' ), 
		'coinwebcc_select_field_6_render', 
		'pluginPage', 
		'coinwebcc_pluginPage_section' 
	);


}


function coinwebcc_text_field_0_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<input type='text' name='coinwebcc_settings[coinwebcc_text_field_0]' value='<?php echo $options['coinwebcc_text_field_0']; ?>'>
	<?php

}


function coinwebcc_text_field_1_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<input type='text' name='coinwebcc_settings[coinwebcc_text_field_1]' value='<?php echo $options['coinwebcc_text_field_1']; ?>'>
	<?php

}


function coinwebcc_text_field_2_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<input type='text' name='coinwebcc_settings[coinwebcc_text_field_2]' value='<?php echo $options['coinwebcc_text_field_2']; ?>'>
	<?php

}


function coinwebcc_checkbox_field_3_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<input type='checkbox' name='coinwebcc_settings[coinwebcc_checkbox_field_3]' <?php checked( $options['coinwebcc_checkbox_field_3'], 1 ); ?> value='1'>
	<?php

}


function coinwebcc_radio_field_4_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<input type='radio' name='coinwebcc_settings[coinwebcc_radio_field_4]' <?php checked( $options['coinwebcc_radio_field_4'], 1 ); ?> value='1'>
	<?php

}


function coinwebcc_textarea_field_5_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<textarea cols='40' rows='5' name='coinwebcc_settings[coinwebcc_textarea_field_5]'> 
		<?php echo $options['coinwebcc_textarea_field_5']; ?>
 	</textarea>
	<?php

}


function coinwebcc_select_field_6_render(  ) { 

	$options = get_option( 'coinwebcc_settings' );
	?>
	<select name='coinwebcc_settings[coinwebcc_select_field_6]'>
		<option value='1' <?php selected( $options['coinwebcc_select_field_6'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['coinwebcc_select_field_6'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function coinwebcc_settings_section_callback(  ) { 

	echo __( 'This section description', 'coinwebcc' );

}


function coinwebcc_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>CoinWeb Crypto-Currency</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>