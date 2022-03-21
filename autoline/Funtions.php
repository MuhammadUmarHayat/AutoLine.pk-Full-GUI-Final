<?php
add_filter('salesking_sales_agent_redirect', function($redirect_to){
    return get_home_url();
}, 10, 1);

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_safe_redirect( home_url() );
  exit;
}







// Creating the widget 
class x1_widget extends WP_Widget
{

	function __construct()
	{
		parent::__construct(

			// Base ID of your widget
			'x1_widget',

			// Widget name will appear in UI
			__('x1 Table Widget', 'x1_widget_domain'),

			// Widget description
			array('description' => __('Sample widget based on x1 Table Tutorial', 'x1_widget_domain'),)
		);
	}

	// Creating widget front-end

	public function widget($args, $instance)
	{
		//$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		// echo $args['before_widget'];
		// if ( ! empty( $title ) )
		// echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
?>

		<table style="width:100%">
			<tr>
				<th>Product</th>
				<th>Selling Price</th>
				<th>Buyback Price <br> (with receipt)</th>
				<th>Buyback Price <br> (without receipt) </th>
			</tr>



			<?php

			//echo $args['after_widget'];

			$args = array(
				'post_type'      => 'product',


			);

			$loop = new WP_Query($args);

			while ($loop->have_posts()) : $loop->the_post();
				global $product;
				$x1_regular_price = $product->get_regular_price();
				$buy_back_with_receipt_meta = get_post_custom_values('_number_field_buyback_with_receipt');
				$buyback_price_with_receipt = ((float) $x1_regular_price) / 100 * ((float) $buy_back_with_receipt_meta[0]);
				$buy_back_without_receipt_meta = get_post_custom_values('_number_field_buyback_without_receipt');
				$buyback_price_without_receipt = ((float) $x1_regular_price) / 100 * ((float) $buy_back_without_receipt_meta[0]);
			?>
				<tr>
					<td><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></td>
					<td><a href="<?php echo get_permalink(); ?>"><?php echo wc_price($x1_regular_price); ?></a></td>
					<td><a href="https://meirossebullion.com.my/sell-to-us-with-receipt/?pname=<?php the_title(); ?>&xprice=<?php echo $buyback_price_with_receipt;  ?>" class="buyback_with_receipt"><?php
																							echo wc_price(number_format((float)$buyback_price_with_receipt, 2, '.', '') );

																							?></a></td>
					<td><a href="https://meirossebullion.com.my/sell-to-us-without-receipt/?pname=<?php the_title(); ?>&&xprice=<?php echo $buyback_price_without_receipt;?>" class="buyback_without_receipt"><?php	echo  wc_price(number_format((float)$buyback_price_without_receipt, 2, '.', ''));

																								?></a></td>


				</tr>
			<?php

			endwhile; ?>
		</table>
	<?php
		wp_reset_query();
	}

	// Widget Backend 
	public function form($instance)
	{

		// Widget admin form
	?>

	<?php



	}

	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance)
	{
	}

	// Class x1_widget ends here
}


// Register and load the widget
function wpb_load_widget()
{
	register_widget('x1_widget');
}
add_action('widgets_init', 'wpb_load_widget');






function display_product_price_customs(){
		global $product;
		$x1_regular_price = $product->get_regular_price();
		$buy_back_with_receipt_meta = get_post_custom_values('_number_field_buyback_with_receipt');
		$buyback_price_with_receipt = ((float) $x1_regular_price) / 100 * ((float) $buy_back_with_receipt_meta[0]);
		$buy_back_without_receipt_meta = get_post_custom_values('_number_field_buyback_without_receipt');
		$buyback_price_without_receipt = ((float) $x1_regular_price) / 100 * ((float) $buy_back_without_receipt_meta[0]);
	?>

	<p > BuyBack Price: <a href="https://meirossebullion.com.my/sell-to-us-with-receipt/?pname=<?php the_title(); ?>&xprice=<?php echo $buyback_price_with_receipt;  ?>" class="buyback_with_receipt"><?php
																					echo wc_price(number_format((float)$buyback_price_with_receipt, 2, '.', '')) ;

																					?></a></p>


			


<?php
wp_reset_query();
}


add_action('woocommerce_after_shop_loop_item','display_product_price_customs');
add_action('woocommerce_single_product_summary','display_product_price_customs',20);






// Add a Custom product Admin Field
add_action( 'woocommerce_product_options_general_product_data', 'add_custom_product_general_field' );
function add_custom_product_general_field() {
    echo '<div class="options_group">';

    woocommerce_wp_text_input( array(
        'id'            => '_number_field_buyback_with_receipt', // required, will be used as meta_key
        'label'         =>__('BuyBack Price With Receipt', 'woocommerce'), // Text in the label in the editor.
        'desc_tip'      => 'true',
        'description'   => __('Enter the Buyback with receipt percentage of the product', 'woocommerce')
    ) );
	
	    woocommerce_wp_text_input( array(
        'id'            => '_number_field_buyback_without_receipt', // required, will be used as meta_key
        'label'         =>__('BuyBack Price Without Receipt', 'woocommerce'), // Text in the label in the editor.
        'desc_tip'      => 'true',
        'description'   => __('Enter the Buyback without receipt percentage of the product', 'woocommerce')
    ) );

    echo '</div>';
}

// Save the field value
add_action( 'woocommerce_admin_process_product_object', 'save_custom_product_general_field' );
function save_custom_product_general_field( $product ){
    if( isset($_POST['_number_field_buyback_with_receipt']) )
        $product->update_meta_data( '_number_field_buyback_with_receipt', sanitize_text_field( $_POST['_number_field_buyback_with_receipt'] ) );
	
	if( isset($_POST['_number_field_buyback_without_receipt']) )
        $product->update_meta_data( '_number_field_buyback_without_receipt', sanitize_text_field( $_POST['_number_field_buyback_without_receipt'] ) );
}

// Display the custom field value below product description tab
// add_action( 'woocommerce_single_product_summary', 'display_product_serial_number' );
// function display_product_serial_number( $content ) {

//     // Only for single product pages
//     if ( is_product() ) {
//         global $product;

//         if( $value = $product->get_meta( '_number_field_buyback_with_receipt' ) ) {
//             $content .= '<p><strong>' . __("BuyBack with Receipt:", "woocommerce") . '<strong> ' . $value . '<p>'; 
//         }
		
// 		if( $value = $product->get_meta( '_number_field_buyback_without_receipt' ) ) {
//             $content .= '<p><strong>' . __("BuyBack with Receipt:", "woocommerce") . '<strong> ' . $value . '<p>'; 
//         }
//     }
//     echo $content;
// }