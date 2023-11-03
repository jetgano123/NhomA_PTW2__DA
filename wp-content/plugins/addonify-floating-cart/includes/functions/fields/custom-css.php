<?php
/**
 * Define settings fields for custom CSS.
 *
 * @link       https://addonify.com/
 * @since      1.0.0
 *
 * @package    Addonify_Floating_Cart
 * @subpackage Addonify_Floating_Cart/includes/functions/fields
 */

/**
 * Define settings for cart modal toggle button.
 *
 * @since 1.0.0
 * @return array
 */
function addonify_floating_cart_custom_css_settings_fields() {

	return array(
		'custom_css' 		 => array(
			'label'          => __( 'Custom CSS', 'addonify-floating-cart' ),
			'description'    => __( 'If required, add your custom CSS code here.', 'addonify-floating-cart' ),
			'type'           => 'textarea',
			'className'      => 'fullwidth custom-css-box',
			'placeholder'    => '#cart { color: blue; }',
			'dependent'      => array( 'load_styles_from_plugin' ),
			'value'          => addonify_floating_cart_get_option( 'custom_css' ),
		),
	);
}

/**
 * Define settings for cart modal toggle button.
 *
 * @since 1.0.0
 * @param mixed $setting_fields Setting fields.
 * @return array
 */
function addonify_floating_cart_custom_css_add_to_settings_fields( $setting_fields ) {

	return array_merge( $setting_fields, addonify_floating_cart_custom_css_settings_fields() );
}

add_filter( 'addonify_floating_cart_settings_fields', 'addonify_floating_cart_custom_css_add_to_settings_fields' );
