( function( jQuery ){
    jQuery( document ).ready( function(){
      jQuery( '.restaurant-food-delivery-btn-get-started' ).on( 'click', function( e ) {
          e.preventDefault();
          jQuery( this ).html( 'Processing.. Please wait' ).addClass( 'updating-message' );
          jQuery.post( restaurant_food_delivery_ajax_object.ajax_url, { 'action' : 'install_act_plugin' }, function( response ){
              location.href = 'customize.php?restaurant_food_delivery_notice=dismiss-get-started';
          } );
      } );
    } );

    jQuery( document ).on( 'click', '.notice-get-started-class .notice-dismiss', function () {
        // Read the "data-notice" information to track which notice
        // is being dismissed and send it via AJAX
        var type = jQuery( this ).closest( '.notice-get-started-class' ).data( 'notice' );
        // Make an AJAX call
        jQuery.ajax( ajaxurl,
          {
            type: 'POST',
            data: {
              action: 'restaurant_food_delivery_dismissed_notice_handler',
              type: type,
            }
          } );
      } );
}( jQuery ) )
