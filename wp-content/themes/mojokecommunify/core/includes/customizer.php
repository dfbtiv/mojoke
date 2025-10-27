<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'restaurant_food_delivery_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'restaurant-food-delivery' ),
		'section'     => 'title_tagline',
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'restaurant-food-delivery' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'restaurant-food-delivery' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'restaurant_food_delivery_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'restaurant-food-delivery' ),
	) );

	Kirki::add_section( 'restaurant_food_delivery_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'restaurant-food-delivery' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_all_headings_typography',
		'section'     => 'restaurant_food_delivery_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'restaurant_food_delivery_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'restaurant-food-delivery' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_body_content_typography',
		'section'     => 'restaurant_food_delivery_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'restaurant_food_delivery_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'restaurant-food-delivery' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'restaurant_food_delivery_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'restaurant-food-delivery' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'restaurant_food_delivery_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'restaurant-food-delivery' ),
	    'priority'       => 2,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_animation_enabled',
		'label'       => esc_html__( 'Turn To Show Animation', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	// PANEL
	Kirki::add_panel( 'restaurant_food_delivery_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'restaurant-food-delivery' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'restaurant_food_delivery_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'restaurant-food-delivery' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'restaurant_food_delivery_dark_colors',
	    'section'     => 'restaurant_food_delivery_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'restaurant-food-delivery' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );


	// PANEL
	Kirki::add_panel( 'restaurant_food_delivery_panel_id_3', array(
	    'priority'    => 10,
	    'title'       => esc_html__( '404 Settings / No Result', 'restaurant-food-delivery' ),
	) );

	// 404 SECTION
	Kirki::add_section( 'restaurant_food_delivery_section_404', array(
		'panel'          => 'restaurant_food_delivery_panel_id_3',
	    'title'          => esc_html__( '404 Settings', 'restaurant-food-delivery' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_404',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'restaurant_food_delivery_404_heading',
	    'section'     => 'restaurant_food_delivery_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Heading', 'restaurant-food-delivery' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'restaurant_food_delivery_404_page_title',
		'section'  => 'restaurant_food_delivery_section_404',
		'default'  => esc_html__('404 Not Found', 'restaurant-food-delivery'),
		'priority' => 10,
	] );

		Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'restaurant_food_delivery_404_text',
	    'section'     => 'restaurant_food_delivery_section_404',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Content', 'restaurant-food-delivery' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'restaurant_food_delivery_404_page_content',
		'section'  => 'restaurant_food_delivery_section_404',
		'default'  => esc_html__('Sorry, no posts matched your criteria.', 'restaurant-food-delivery'),
		'priority' => 10,
	] );

	// NO Result
	Kirki::add_section( 'restaurant_food_delivery_no_result', array(
		'panel'          => 'restaurant_food_delivery_panel_id_3',
	    'title'          => esc_html__( 'No Result Page Settings', 'restaurant-food-delivery' ),
	    'priority'       => 3,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_no_result',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
		'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'restaurant_food_delivery_not_found_heading',
	    'section'     => 'restaurant_food_delivery_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Heading', 'restaurant-food-delivery' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'restaurant_food_delivery_no_results_page_title',
		'section'  => 'restaurant_food_delivery_no_result',
		'default'  => esc_html__('404 Not Found', 'restaurant-food-delivery'),
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'restaurant_food_delivery_not_found_text',
	    'section'     => 'restaurant_food_delivery_no_result',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Search Result Content', 'restaurant-food-delivery' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'restaurant_food_delivery_no_results_page_content',
		'section'  => 'restaurant_food_delivery_no_result',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'restaurant-food-delivery'),
		'priority' => 10,
	] );

	// PANEL

	Kirki::add_panel( 'restaurant_food_delivery_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'restaurant-food-delivery' ),
	) );

	//COLOR SECTION

	Kirki::add_section( 'restaurant_food_delivery_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_global_colors',
		'section'     => 'restaurant_food_delivery_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'restaurant_food_delivery_first_color',
		'label'       => __( 'choose your First Color', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_color',
		'default'     => '#d31b27',
	] );

	// Additional Settings

	Kirki::add_section( 'restaurant_food_delivery_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'restaurant_food_delivery_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'restaurant-food-delivery' ),
			'Center' => esc_html__( 'Center', 'restaurant-food-delivery' ),
			'Right'  => esc_html__( 'Right', 'restaurant-food-delivery' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_restaurant_food_delivery',
		'label'       => esc_html__( 'Menus Text Transform', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'restaurant-food-delivery' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'restaurant-food-delivery' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'restaurant-food-delivery' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'None' => __('None','restaurant-food-delivery'),
            'Zoominn' => __('Zoom Inn','restaurant-food-delivery'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'restaurant_food_delivery_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','restaurant-food-delivery'),
            'cube-loader' => __('Type 2','restaurant-food-delivery'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery'),
            'One Column' => __('One Column','restaurant-food-delivery')
		],
	] );


	if ( class_exists("Kirki")){
	// Woocommerce Settings

	Kirki::add_section( 'restaurant_food_delivery_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'restaurant-food-delivery' ),
			'panel'          => 'restaurant_food_delivery_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'restaurant_food_delivery_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'restaurant-food-delivery' ),
		'section'  => 'restaurant_food_delivery_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'restaurant_food_delivery_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'restaurant-food-delivery' ),
		'section'  => 'restaurant_food_delivery_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'restaurant-food-delivery' ),
		'section'  => 'restaurant_food_delivery_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'restaurant-food-delivery' ),
		'section'  => 'restaurant_food_delivery_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);


	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'restaurant_food_delivery_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'restaurant-food-delivery' ),
			'Center' => esc_html__( 'Center', 'restaurant-food-delivery' ),
			'Right'  => esc_html__( 'Right', 'restaurant-food-delivery' ),
		],
	]
	);

}
	
	// POST SECTION

	Kirki::add_section( 'restaurant_food_delivery_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_post_heading',
		'section'     => 'restaurant_food_delivery_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'restaurant_food_delivery_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_post',
		'default'     => 10,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'restaurant_food_delivery_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'restaurant_food_delivery_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'restaurant-food-delivery' ),
		'description'    => esc_html__( 'This setting is not favorable with post format.', 'restaurant-food-delivery' ),
		'section'  => 'restaurant_food_delivery_section_post',
		'default'  => [ 'option1', 'option2', 'option3', 'option4', 'option5' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Image', 'restaurant-food-delivery' ),
			'option2' => esc_html__( 'Post Meta', 'restaurant-food-delivery' ),
			'option3' => esc_html__( 'Post Title', 'restaurant-food-delivery' ),
			'option4' => esc_html__( 'Post Content', 'restaurant-food-delivery' ),
			'option5' => esc_html__( 'Post Button', 'restaurant-food-delivery' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery'),
            'Three Column' => __('Three Column','restaurant-food-delivery'),
            'Four Column' => __('Four Column','restaurant-food-delivery'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','restaurant-food-delivery'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','restaurant-food-delivery'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','restaurant-food-delivery')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','restaurant-food-delivery'),
            'Right Sidebar' => __('Right Sidebar','restaurant-food-delivery'),
            'Three Column' => __('Three Column','restaurant-food-delivery'),
            'Four Column' => __('Four Column','restaurant-food-delivery'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','restaurant-food-delivery'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','restaurant-food-delivery'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','restaurant-food-delivery')
		],
	] );

	// Breadcrumb
	Kirki::add_section( 'restaurant_food_delivery_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_breadcrumb_heading',
		'section'     => 'restaurant_food_delivery_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'restaurant_food_delivery_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'restaurant-food-delivery' ),
        'section'  => 'restaurant_food_delivery_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'restaurant_food_delivery_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_button',
		'section'     => 'restaurant_food_delivery_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sign Up Button', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Sign Up Text', 'restaurant-food-delivery' ),
		'settings' => 'restaurant_food_delivery_free_delivery_text',
		'section'  => 'restaurant_food_delivery_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Sign Up URL', 'restaurant-food-delivery' ),
		'settings' => 'restaurant_food_delivery_free_delivery_link',
		'section'  => 'restaurant_food_delivery_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_search',
		'section'     => 'restaurant_food_delivery_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_search_box_enable',
		'section'     => 'restaurant_food_delivery_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'restaurant_food_delivery_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'restaurant-food-delivery' ),
        'panel'          => 'restaurant_food_delivery_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_heading',
		'section'     => 'restaurant_food_delivery_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_slider_heading',
		'section'     => 'restaurant_food_delivery_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Slider Extra heading', 'restaurant-food-delivery' ),
		'settings' => 'restaurant_food_delivery_slider_text_extra',
		'section'  => 'restaurant_food_delivery_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'restaurant_food_delivery_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'restaurant_food_delivery_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'restaurant-food-delivery' ),
		'priority'    => 10,
		'choices'     => restaurant_food_delivery_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'restaurant_food_delivery_enable_heading_22',
	'section'     => 'restaurant_food_delivery_blog_slide_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'restaurant-food-delivery' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'restaurant-food-delivery' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'restaurant-food-delivery' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'restaurant-food-delivery' ),

		],
	] );


		new \Kirki\Field\Select([
		'settings'    => 'restaurant_food_delivery_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'0' => esc_html__( '0', 'restaurant-food-delivery' ),
			'0.1' => esc_html__( '0.1', 'restaurant-food-delivery' ),
			'0.2' => esc_html__( '0.2', 'restaurant-food-delivery' ),
			'0.3' => esc_html__( '0.3', 'restaurant-food-delivery' ),
			'0.4' => esc_html__( '0.4', 'restaurant-food-delivery' ),
			'0.5' => esc_html__( '0.5', 'restaurant-food-delivery' ),
			'0.6' => esc_html__( '0.6', 'restaurant-food-delivery' ),
			'0.7' => esc_html__( '0.7', 'restaurant-food-delivery' ),
			'0.8' => esc_html__( '0.8', 'restaurant-food-delivery' ),
			'0.9' => esc_html__( '0.9', 'restaurant-food-delivery' ),
			'unset' => esc_html__( 'unset', 'restaurant-food-delivery' ),
			

		],
	] );

	//SPECIAL MEAL SECTION

	Kirki::add_section( 'restaurant_food_delivery_special_meal_section', array(
	    'title'          => esc_html__( 'Special Meal Settings', 'restaurant-food-delivery' ),
	    'panel'          => 'restaurant_food_delivery_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_special_meal_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	    'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_heading',
		'section'     => 'restaurant_food_delivery_special_meal_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Special Meal',  'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_special_meal_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_special_meal_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable',  'restaurant-food-delivery' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'restaurant_food_delivery_special_meal_heading' ,
        'label'    => esc_html__( 'Heading',  'restaurant-food-delivery' ),
        'section'  => 'restaurant_food_delivery_special_meal_section',
    ] );

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'restaurant_food_delivery_special_meal_tab_number',
		'label'       => esc_html__( 'Number of post to show ',  'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_special_meal_section',
		'default'     => 4,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'restaurant_food_delivery_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'restaurant-food-delivery' ),
        'panel'          => 'restaurant_food_delivery_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'restaurant-food-delivery' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'restaurant-food-delivery' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'restaurant_food_delivery_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'restaurant-food-delivery' ) . '</div>',
	] );

     Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_footer_enable_heading',
		'section'     => 'restaurant_food_delivery_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'restaurant_food_delivery_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'restaurant-food-delivery' ),
			'off' => esc_html__( 'Disable', 'restaurant-food-delivery' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_footer_text_heading',
		'section'     => 'restaurant_food_delivery_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'restaurant_food_delivery_footer_text',
		'section'  => 'restaurant_food_delivery_footer_section',
		'default'  => '',
		'priority' => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'restaurant_food_delivery_footer_text_heading_2',
	'section'     => 'restaurant_food_delivery_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'restaurant-food-delivery' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'restaurant_food_delivery_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright Text Alignment', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'restaurant-food-delivery' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'restaurant-food-delivery' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'restaurant-food-delivery' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'restaurant-food-delivery' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'restaurant_food_delivery_footer_text_heading_1',
	'section'     => 'restaurant_food_delivery_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'restaurant-food-delivery' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'restaurant_food_delivery_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'restaurant-food-delivery' ),
		'section'     => 'restaurant_food_delivery_footer_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'restaurant_food_delivery_enable_footer_socail_link',
		'section'     => 'restaurant_food_delivery_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'restaurant-food-delivery' ) . '</h3>',
		'priority'    => 11,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'restaurant_food_delivery_footer_section',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icon', 'restaurant-food-delivery' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'restaurant-food-delivery' ),
		'settings'     => 'restaurant_food_delivery_footer_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'restaurant-food-delivery' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'restaurant-food-delivery' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'restaurant-food-delivery' ),
				'description' => esc_html__( 'Add the social icon url here.', 'restaurant-food-delivery' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );
}

add_action( 'customize_register', 'restaurant_food_delivery_customizer_settings' );
function restaurant_food_delivery_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('restaurant_food_delivery_special_meal_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('restaurant_food_delivery_special_meal_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','restaurant-food-delivery'),
		'section' => 'restaurant_food_delivery_special_meal_section',
	));

	$restaurant_food_delivery_meal_post = get_theme_mod('restaurant_food_delivery_special_meal_tab_number','');
    for ( $restaurant_food_delivery_j = 1; $restaurant_food_delivery_j <= $restaurant_food_delivery_meal_post; $restaurant_food_delivery_j++ ) {

		$wp_customize->add_setting('restaurant_food_delivery_special_meal_tabs_text'.$restaurant_food_delivery_j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('restaurant_food_delivery_special_meal_tabs_text'.$restaurant_food_delivery_j,array(
			'type' => 'text',
			'label' => __('Tab Text ','restaurant-food-delivery').$restaurant_food_delivery_j,
			'section' => 'restaurant_food_delivery_special_meal_section',
		));

		$restaurant_food_delivery_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($restaurant_food_delivery_args);
		$restaurant_food_delivery_cat_posts = array();
		$restaurant_food_delivery_m = 0;
		$restaurant_food_delivery_cat_posts[]='Select';
		foreach($categories as $category){
			if($restaurant_food_delivery_m==0){
				$default = $category->slug;
				$restaurant_food_delivery_m++;
			}
			$restaurant_food_delivery_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('restaurant_food_delivery_special_meal_category'.$restaurant_food_delivery_j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'restaurant_food_delivery_sanitize_select',
		));

		$wp_customize->add_control('restaurant_food_delivery_special_meal_category'.$restaurant_food_delivery_j,array(
			'type'    => 'select',
			'choices' => $restaurant_food_delivery_cat_posts,
			'label' => __('Select category to display products ','restaurant-food-delivery').$restaurant_food_delivery_j,
			'section' => 'restaurant_food_delivery_special_meal_section',
		));
	}
}

/*
 *  Customizer Notifications
 */

$restaurant_food_delivery_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'restaurant-food-delivery' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'restaurant-food-delivery' ) . '</strong>'
            ),
        ),
    ),
    'restaurant_food_delivery_recommended_actions'       => array(),
    'restaurant_food_delivery_recommended_actions_title' => esc_html__( 'Recommended Actions', 'restaurant-food-delivery' ),
    'restaurant_food_delivery_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'restaurant-food-delivery' ),
    'restaurant_food_delivery_install_button_label'      => esc_html__( 'Install and Activate', 'restaurant-food-delivery' ),
    'restaurant_food_delivery_activate_button_label'     => esc_html__( 'Activate', 'restaurant-food-delivery' ),
    'restaurant_food_delivery_deactivate_button_label'   => esc_html__( 'Deactivate', 'restaurant-food-delivery' ),
);

Restaurant_Food_Delivery_Customizer_Notify::init( apply_filters( 'restaurant_food_delivery_customizer_notify_array', $restaurant_food_delivery_config_customizer ) );