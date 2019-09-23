<?php
/*
Plugin Name: BC4WP > Turn on product review forms for all shoppers
Description: Force the product review form to be available for all shoppers (normally it only shows if a customer is logged in)
Author: Nate Stewart
Version: 1.0
*/

add_filter( 'bigcommerce/product/reviews/show_form', function( $show ) {
	return true;
}, 10, 1);