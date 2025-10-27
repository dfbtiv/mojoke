<?php

$restaurant_food_delivery_custom_css = '';


$restaurant_food_delivery_is_dark_mode_enabled = get_theme_mod( 'restaurant_food_delivery_is_dark_mode_enabled', false );

if ( $restaurant_food_delivery_is_dark_mode_enabled ) {

    $restaurant_food_delivery_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2),.header,#special-meal,.blog_inner_box {';
    $restaurant_food_delivery_custom_css .= 'background: #000;';
    $restaurant_food_delivery_custom_css .= '}';

    $restaurant_food_delivery_custom_css .= '.some {';
    $restaurant_food_delivery_custom_css .= 'background: #000 !important;';
    $restaurant_food_delivery_custom_css .= '}';

	$restaurant_food_delivery_custom_css .= '.sticky .post-content,.offcanvas .sidebar-area li a,.offcanvas .sidebar-area li,.offcanvas .sidebar-area p{';
    $restaurant_food_delivery_custom_css .= 'color: #000';
    $restaurant_food_delivery_custom_css .= '}';

	$restaurant_food_delivery_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a{';
    $restaurant_food_delivery_custom_css .= 'color: #000 !important';
    $restaurant_food_delivery_custom_css .= '}';

    $restaurant_food_delivery_custom_css .= '.some{';
    $restaurant_food_delivery_custom_css .= 'background: #fff;';
    $restaurant_food_delivery_custom_css .= '}';

    $restaurant_food_delivery_custom_css .= '.some {';
    $restaurant_food_delivery_custom_css .= 'background: #fff !important;';
    $restaurant_food_delivery_custom_css .= '}';
	

    $restaurant_food_delivery_custom_css .= 'body,h1,h2,h3,h4,h5,p,.main-navigation ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span,#special-meal h2,li.menu-item-has-children:after{';
    $restaurant_food_delivery_custom_css .= 'color: #fff;';
    $restaurant_food_delivery_custom_css .= '}';

    $restaurant_food_delivery_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular,.logo span,.logo a,.offcanvas-div i{';
    $restaurant_food_delivery_custom_css .= 'color: #fff !important;';
    $restaurant_food_delivery_custom_css .= '}';

	$restaurant_food_delivery_custom_css .= '.post-box{';
    $restaurant_food_delivery_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $restaurant_food_delivery_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$restaurant_food_delivery_text_transform = get_theme_mod( 'menu_text_transform_restaurant_food_delivery','CAPITALISE');
	
    if($restaurant_food_delivery_text_transform == 'CAPITALISE'){

		$restaurant_food_delivery_custom_css .='.main-navigation ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'UPPERCASE'){

		$restaurant_food_delivery_custom_css .='.main-navigation ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'LOWERCASE'){

		$restaurant_food_delivery_custom_css .='.main-navigation ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';
	}

			/*---------------------------menu-zoom-------------------*/

			$restaurant_food_delivery_menu_zoom = get_theme_mod( 'restaurant_food_delivery_menu_zoom','None');

		if($restaurant_food_delivery_menu_zoom == 'None'){

			$restaurant_food_delivery_custom_css .='.main-navigation ul li a{';

				$restaurant_food_delivery_custom_css .='';

			$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_menu_zoom == 'Zoominn'){

			$restaurant_food_delivery_custom_css .='.main-navigation ul li a:hover{';

				$restaurant_food_delivery_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: var(--first-color);';

			$restaurant_food_delivery_custom_css .='}';
		}


	/*---------------------------Container Width-------------------*/

$restaurant_food_delivery_container_width = get_theme_mod('restaurant_food_delivery_container_width');

		$restaurant_food_delivery_custom_css .='body{';

			$restaurant_food_delivery_custom_css .='width: '.esc_attr($restaurant_food_delivery_container_width).'%; margin: auto;';

		$restaurant_food_delivery_custom_css .='}';



	/*---------------------------Slider-content-alignment-------------------*/

$restaurant_food_delivery_slider_content_alignment = get_theme_mod( 'restaurant_food_delivery_slider_content_alignment','LEFT-ALIGN');

 if($restaurant_food_delivery_slider_content_alignment == 'LEFT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:left;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'CENTER-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:center; right: 30%; left: 30%;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'RIGHT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:right; right: 20%; left: 50%;';

		$restaurant_food_delivery_custom_css .='}';

	}


	/*---------------------------Copyright Text alignment-------------------*/

$restaurant_food_delivery_copyright_text_alignment = get_theme_mod( 'restaurant_food_delivery_copyright_text_alignment','LEFT-ALIGN');

 if($restaurant_food_delivery_copyright_text_alignment == 'LEFT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:left;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_copyright_text_alignment == 'CENTER-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:center;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_copyright_text_alignment == 'RIGHT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:right;';

		$restaurant_food_delivery_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$restaurant_food_delivery_related_product_setting = get_theme_mod('restaurant_food_delivery_related_product_setting',true);

	if($restaurant_food_delivery_related_product_setting == false){

		$restaurant_food_delivery_custom_css .='.related.products, .related h2{';

			$restaurant_food_delivery_custom_css .='display: none;';

		$restaurant_food_delivery_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$restaurant_food_delivery_scroll_top_position = get_theme_mod( 'restaurant_food_delivery_scroll_top_position','Right');

	if($restaurant_food_delivery_scroll_top_position == 'Right'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='right: 20px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_scroll_top_position == 'Left'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='left: 20px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_scroll_top_position == 'Center'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='right: 50%;left: 50%;';

		$restaurant_food_delivery_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$restaurant_food_delivery_pagination_setting = get_theme_mod('restaurant_food_delivery_pagination_setting',true);

	if($restaurant_food_delivery_pagination_setting == false){

		$restaurant_food_delivery_custom_css .='.nav-links{';

			$restaurant_food_delivery_custom_css .='display: none;';

		$restaurant_food_delivery_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$restaurant_food_delivery_slider_opacity_color = get_theme_mod( 'restaurant_food_delivery_slider_opacity_color','0.6');

	if($restaurant_food_delivery_slider_opacity_color == '0'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.1'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.1';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.2'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.2';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.3'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.3';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.4'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.4';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.5'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.5';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.6'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.6';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.7'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.7';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.8'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.8';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.9'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.9';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == 'unset'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:unset';

		$restaurant_food_delivery_custom_css .='}';

		}

	/*---------------------------Woocommerce Pagination Alignment Settings-------------------*/

	$restaurant_food_delivery_woocommerce_pagination_position = get_theme_mod( 'restaurant_food_delivery_woocommerce_pagination_position','Center');

	if($restaurant_food_delivery_woocommerce_pagination_position == 'Left'){

		$restaurant_food_delivery_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$restaurant_food_delivery_custom_css .='text-align: left;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_woocommerce_pagination_position == 'Center'){

		$restaurant_food_delivery_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$restaurant_food_delivery_custom_css .='text-align: center;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_woocommerce_pagination_position == 'Right'){

		$restaurant_food_delivery_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$restaurant_food_delivery_custom_css .='text-align: right;';

		$restaurant_food_delivery_custom_css .='}';
	}

/*---------------------------Global Color-------------------*/


$restaurant_food_delivery_first_color = get_theme_mod('restaurant_food_delivery_first_color');


/*--- First Global Color ---*/

if ($restaurant_food_delivery_first_color) {
  $restaurant_food_delivery_custom_css .= ':root {';
  $restaurant_food_delivery_custom_css .= '--first-color: ' . esc_attr($restaurant_food_delivery_first_color) . ' !important;';
  $restaurant_food_delivery_custom_css .= '} ';
}