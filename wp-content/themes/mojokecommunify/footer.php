<footer>
  <div class="container">
      <?php
        if (is_active_sidebar('mojoke-footer-sidebar')) {
          echo '<div class="row sidebar-area footer-area wow fadeInUp" data-wow-duration="2s">';
            dynamic_sidebar('mojoke-footer-sidebar');
          echo '</div>';
        } else { ?>
          <div id="footer-widgets" role="contentinfo">
            <div class="container">
              <div class="row sidebar-area footer-area">
                <div id="categories-2" class="col-lg-3 col-md-6 widget_categories wow fadeInUp" data-wow-duration="2s">
                    <h4 class="title"><?php esc_html_e('Categories', 'mojoke'); ?></h4>
                    <ul>
                        <?php
                        wp_list_categories(array(
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </div>
                <div id="pages-2" class="col-lg-3 col-md-6 widget_pages wow fadeInUp" data-wow-duration="2s">
                    <h4 class="title"><?php esc_html_e('Pages', 'mojoke'); ?></h4>
                    <ul>
                        <?php
                        wp_list_pages(array(
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </div>
                <div id="archives-2" class="col-lg-3 col-md-6 widget_archive wow fadeInUp" data-wow-duration="2s">
                    <h4 class="title"><?php esc_html_e('Archives', 'mojoke'); ?></h4>
                    <ul>
                        <?php
                        wp_get_archives(array(
                            'type' => 'postbypost',
                            'format' => 'html',
                            'before' => '<li>',
                            'after' => '</li>',
                        ));
                        ?>
                    </ul>
                </div>
                <div id="calendar" class="col-lg-3 col-md-6 widget_calendar wow fadeInUp" data-wow-duration="2s">
                  <h4 class="title"><?php esc_html_e('Calendar', 'mojoke'); ?></h4>
                  <?php get_calendar(); ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
    </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="copy-text">
          <p class="mb-0 py-3">
          <?php
            if (!get_theme_mod('restaurant_food_delivery_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/products/free-restaurant-wordpress-theme', 'mojoke' )); ?>" target="_blank"><?php esc_html_e('Restaurant WordPress Theme ','mojoke'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('restaurant_food_delivery_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('restaurant_food_delivery_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( 'by %s', 'mojoke' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'mojoke' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'mojoke' ), 'WordPress' ); ?></a>
          <?php endif; ?>
          <?php $restaurant_food_delivery_footer_settings = get_theme_mod( 'restaurant_food_delivery_footer_social_links_settings' ); ?>
          <?php if ( is_array($restaurant_food_delivery_footer_settings) || is_object($restaurant_food_delivery_footer_settings) ){ ?>
                  <?php foreach( $restaurant_food_delivery_footer_settings as $restaurant_food_delivery_footer_setting ) { ?>
                  <a class="social-links" href="<?php echo esc_url( $restaurant_food_delivery_footer_setting['link_url'] ); ?>">
                      <i class="<?php echo esc_attr( $restaurant_food_delivery_footer_setting['link_text'] ); ?> me-3"></i>
                  </a>
              <?php } ?>
          <?php } ?>
        </p>
        </div>
      </div>
    </div>
    </div>
  </div>
    <?php if ( get_theme_mod('restaurant_food_delivery_scroll_enable_setting', true) == true ) : ?>
      <div class="scroll-up">
        <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
      </div>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
