<?php require get_template_directory() . '/core/includes/importer/tgm/class-tgm-plugin-activation.php';

function restaurant_food_delivery_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'restaurant-food-delivery' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woocommerce', 'restaurant-food-delivery' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Google Language Translator', 'restaurant-food-delivery' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Mosaic Gallery Advanced Gallery', 'restaurant-food-delivery' ),
			'slug'             => 'mosaic-gallery-advanced-gallery',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'restaurant_food_delivery_register_recommended_plugins' );