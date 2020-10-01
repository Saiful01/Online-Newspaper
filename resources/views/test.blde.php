<?php


add_action( 'woocommerce_thankyou', 'express_shipping_update_order_status', 10, 1 );
function express_shipping_update_order_status( $order_id ) {
    if ( ! $order_id ) return;



    // Get an instance of the WC_Order object
    $order = wc_get_order( $order_id );

    // Get the WC_Order_Item_Shipping object data
    foreach($order->get_shipping_methods() as $shipping_item ){
        // When "express delivery" method is used, we change the order to "on-hold" status
        $search = 'free_shipping';
        if( strpos( $shipping_item->get_method_id(), $search ) !== false ){
            $order->update_status('wc-reserved');
            break;
        }

        $search = 'flat_rate';
        if( strpos( $shipping_item->get_method_id(), $search ) !== false ){
            $order->update_status('wc-pick-up');
            break;
        }

        $search = 'wbs';
        if( strpos( $shipping_item->get_method_id(), $search ) !== false ){
            $order->update_status('wc-own-awb');
            break;
        }
    }
}

?>