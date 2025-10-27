<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mojoke' ); ?></a>

<?php if(get_theme_mod('restaurant_food_delivery_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'restaurant_food_delivery_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'mojoke' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'restaurant_food_delivery_preloader_type') == 'cube-loader') {?>
		<div class="cssloader">
    		<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<header id="site-navigationn" class="header text-center text-md-start py-2 wow fadeInDown">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('restaurant_food_delivery_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('restaurant_food_delivery_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-5 col-md-7 col-sm-7 align-self-center">
				<div class="top-menu-wrapper">
				    <div class="navigation_header">
				        <div class="toggle-nav mobile-menu">
				            <button onclick="restaurant_food_delivery_openNav()">
				                <span class="dashicons dashicons-menu"></span>
				            </button>
				        </div>
				        <div id="mySidenav" class="nav sidenav">
				            <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'mojoke' ); ?>">
				                <?php {
				                    wp_nav_menu(
				                        array(
				                            'theme_location' => 'main-menu',
				                            'container_class' => 'navi clearfix navbar-nav',
				                            'menu_class'     => 'menu clearfix',
				                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				                            'fallback_cb'    => 'wp_page_menu',
				                        )
				                    );
				                } ?>
				            </nav>
				            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="restaurant_food_delivery_closeNav()">
				                <span class="dashicons dashicons-no"></span>
				            </a>
				        </div>
				    </div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6 align-self-center">
				<div class="header-search text-center text-md-end py-3 py-md-0">
		        	<?php if ( get_theme_mod('restaurant_food_delivery_search_box_enable', true) == true ) : ?>
						<?php if(class_exists('woocommerce')){ ?>
				          	<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
					            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'mojoke'); ?></label>
					            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Here','mojoke'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
					            <input type="hidden" name="post_type" value="product"/>
				          	</form>
				        <?php }?>
		        	<?php endif; ?>
		        </div>
	       	</div>
	       	<div class="col-lg-1 col-md-3 col-sm-3 col-6 align-self-center text-center text-md-end">
				<?php if ( get_theme_mod('restaurant_food_delivery_cart_box_enable', true) == true ) : ?>
					<?php if ( class_exists( 'woocommerce' ) ) {?>
						<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','mojoke' ); ?>"><i class="fas fa-shopping-cart"></i><span class="cart-item-box"><?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span></a>
					<?php }?>
				<?php endif; ?>
			</div>
			<div class="col-lg-1 col-md-3 col-sm-3 col-6 align-self-center text-center text-md-end mb-3 mb-md-0">
				<?php if ( get_theme_mod('restaurant_food_delivery_free_delivery_link') || get_theme_mod('restaurant_food_delivery_free_delivery_text') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('restaurant_food_delivery_free_delivery_link' ) ); ?>" class="myacunt-url"><?php echo esc_html( get_theme_mod('restaurant_food_delivery_free_delivery_text' ) ); ?></a>
				<?php endif; ?>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 align-self-center search-cart">
				<div class="offcanvas-div text-lg-end">
					<button type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
						<i class="fas fa-bars"></i>
					</button>
					<div class="offcanvas offcanvas-end" id="demo">
						<div class="offcanvas-header"> 
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
						</div>
						<div class="offcanvas-body">
							<?php dynamic_sidebar('mojoke-menu-sidebar'); ?>
						</div>
					</div>
				</div>
			</div>
	   	</div>
	</div>
</header>
