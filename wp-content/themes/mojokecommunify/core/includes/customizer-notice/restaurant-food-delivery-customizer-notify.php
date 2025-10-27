<?php

class Restaurant_Food_Delivery_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $restaurant_food_delivery_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $restaurant_food_delivery_recommended_actions_title;
	
	private $restaurant_food_delivery_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $restaurant_food_delivery_install_button_label;
	
	private $restaurant_food_delivery_activate_button_label;
	
	private $restaurant_food_delivery_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Restaurant_Food_Delivery_Customizer_Notify ) ) {
			self::$instance = new Restaurant_Food_Delivery_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $restaurant_food_delivery_customizer_notify_recommended_plugins;
		global $restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions;

		global $restaurant_food_delivery_install_button_label;
		global $restaurant_food_delivery_activate_button_label;
		global $restaurant_food_delivery_deactivate_button_label;

		$this->restaurant_food_delivery_recommended_actions = isset( $this->config['restaurant_food_delivery_recommended_actions'] ) ? $this->config['restaurant_food_delivery_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->restaurant_food_delivery_recommended_actions_title = isset( $this->config['restaurant_food_delivery_recommended_actions_title'] ) ? $this->config['restaurant_food_delivery_recommended_actions_title'] : '';
		$this->restaurant_food_delivery_recommended_plugins_title = isset( $this->config['restaurant_food_delivery_recommended_plugins_title'] ) ? $this->config['restaurant_food_delivery_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$restaurant_food_delivery_customizer_notify_recommended_plugins = array();
		$restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$restaurant_food_delivery_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->restaurant_food_delivery_recommended_actions ) ) {
			$restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions = $this->restaurant_food_delivery_recommended_actions;
		}

		$restaurant_food_delivery_install_button_label    = isset( $this->config['restaurant_food_delivery_install_button_label'] ) ? $this->config['restaurant_food_delivery_install_button_label'] : '';
		$restaurant_food_delivery_activate_button_label   = isset( $this->config['restaurant_food_delivery_activate_button_label'] ) ? $this->config['restaurant_food_delivery_activate_button_label'] : '';
		$restaurant_food_delivery_deactivate_button_label = isset( $this->config['restaurant_food_delivery_deactivate_button_label'] ) ? $this->config['restaurant_food_delivery_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'restaurant_food_delivery_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'restaurant_food_delivery_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'restaurant_food_delivery_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'restaurant_food_delivery_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function restaurant_food_delivery_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'restaurant-food-delivery-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/restaurant-food-delivery-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'restaurant-food-delivery-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/restaurant-food-delivery-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'restaurant-food-delivery-customizer-notify-js', 'restaurantfooddeliveryCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'restaurant-food-delivery' ),
			)
		);

	}

	
	public function restaurant_food_delivery_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/restaurant-food-delivery-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Restaurant_Food_Delivery_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Restaurant_Food_Delivery_Customizer_Notify_Section(
				$wp_customize,
				'restaurant-food-delivery-customizer-notify-section',
				array(
					'title'          => $this->restaurant_food_delivery_recommended_actions_title,
					'plugin_text'    => $this->restaurant_food_delivery_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function restaurant_food_delivery_customizer_notify_dismiss_recommended_action_callback() {

		global $restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'restaurant_food_delivery_customizer_notify_show' ) ) {

				$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions = get_option( 'restaurant_food_delivery_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'restaurant_food_delivery_customizer_notify_show', $restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions );

				
			} else {
				$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions = array();
				if ( ! empty( $restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions ) ) {
					foreach ( $restaurant_food_delivery_customizer_notify_restaurant_food_delivery_recommended_actions as $restaurant_food_delivery_lite_customizer_notify_recommended_action ) {
						if ( $restaurant_food_delivery_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions[ $restaurant_food_delivery_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions[ $restaurant_food_delivery_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'restaurant_food_delivery_customizer_notify_show', $restaurant_food_delivery_customizer_notify_show_restaurant_food_delivery_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function restaurant_food_delivery_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$restaurant_food_delivery_lite_customizer_notify_show_recommended_plugins = get_option( 'restaurant_food_delivery_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$restaurant_food_delivery_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$restaurant_food_delivery_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'restaurant_food_delivery_customizer_notify_show_recommended_plugins', $restaurant_food_delivery_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
