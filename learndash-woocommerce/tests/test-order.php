<?php

use function cli\err;

class OrderTest extends WP_UnitTestCase
{
    public function create_product( $args = [] )
    {
        $args = wp_parse_args( $args, [
            'name' => 'Product',
            'price' => 10,
            'regular_price' => 20,
        ] );

        $product = new WC_Product_Simple();
        $product->set_name( $args['name'] );
        $product->set_status( 'publish' ); 
        $product->set_catalog_visibility( 'visible' );
        $product->set_price( $args['price'] );
        $product->set_regular_price( $args['regular_price'] );
        $product->set_sold_individually( true );
        $product->save();

        return $product;
    }

    /**
     * @test
     */
    public function it_removes_access_to_associated_object_for_partial_refund()
    {
        // Create user. 
        $user_id = $this->factory()->user->create();
        
        // Create 2 courses.
        $course_ids = $this->factory()->post->create_many( 2, [
            'post_type' => 'sfwd-courses',
            'post_status' => 'publish',
        ] );

        // Create 2 product and associate each course to either one of them.
        $products = [];
        for ( $i = 1; $i <= 2; $i++ ) { 
            $products[] = $this->create_product([
                'name' => 'Product ' . $i,
            ]);
        }
        
        update_post_meta( $products[0]->get_id(), '_related_course', [ $course_ids[0] ] );
        update_post_meta( $products[1]->get_id(), '_related_course', [ $course_ids[1] ] );

        // Create order.
        $order = wc_create_order([
            'status' => 'pending',
            'customer_id' => $user_id,
        ]);

        $products = wc_get_products([
            'status' => 'publish',
            'limit' => 10,
        ]);
        foreach ( $products as $product ) {
            $order->add_product( $product );
        }
        
        $order->set_total( 20 );
        $order->save();

        // Complete the order.
        $order->update_status( 'completed' );

        // Assert user course access of the order.
        foreach ( $course_ids as $course_id ) {
            $has_access = sfwd_lms_has_access( $course_id, $user_id );
            $this->assertTrue( $has_access );
        }

        // Refund the order partially for 1 product.
        $items = $order->get_items();
        $items = array_values( $items );

        $refunded_product_item_id = $items[0]->get_id();
        $refunded_line_items = [];
        $refunded_line_items[ $refunded_product_item_id ] = [
            'qty' => 1,
            'refund_total' => 10,
        ];

        $refund = wc_create_refund([
            'amount' => 10,
            'order_id' => $order->get_id(),
            'refund_payment' => false,
            'line_items' => $refunded_line_items,
        ]);

        // Assert user course access of the order.
        foreach ( $course_ids as $index => $course_id ) {
            switch ( $index ) {
                // Product with index zero was refunded so it should remove course access. 
                case 0:
                    $has_access = sfwd_lms_has_access( $course_ids[0], $user_id );
                    $this->assertFalse( $has_access );
                    break;
                
                // Product with index one was NOT refunded so the course access should be still intact.
                case 1:
                    $has_access = sfwd_lms_has_access( $course_ids[1], $user_id );
                    $this->assertTrue( $has_access );
                    break;
            }
        }
    }
}
