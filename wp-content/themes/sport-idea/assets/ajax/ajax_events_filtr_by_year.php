<?php

add_action('wp_ajax_get_events', 'get_events_by_year');
add_action('wp_ajax_nopriv_get_events', 'get_events_by_year');

function get_events_by_year(){
	echo 'test';
	$current_year= empty($_POST['currentYear']) ? false : esc_attr($_POST['currentYear']);
	var_dump($current_year);
	echo $current_year;
}

add_action( 'wp_enqueue_scripts', 'my_ajax_scripts', 99 );
function my_ajax_scripts() {
	wp_localize_script('ajax-js', 'myAjax', array(
		'ajaxUrl'=>admin_url('admin-ajax.php'),
	));
}