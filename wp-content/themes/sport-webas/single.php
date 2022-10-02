<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package codytext-webas
 */

get_header('post');
    global $post;
	$current_user = wp_get_current_user();
	$current_user_role_arr = $current_user->roles;
//    $categories = get_the_category( $post->ID );
//    $currentCat = json_decode(json_encode($categories), true);
//    foreach ($categories as $cat ){
        if($post->post_type =='events'){
			if ($current_user_role_arr[0] == 'sportsman'){
				$all_users = get_field('user_list', $post->ID);
                $all_users .= (string) $post->ID . ',';
				update_field('user_list', $all_users);
            }
			echo 'test';
			get_template_part('template-parts/event_template.php');
		}


//        if($cat->slug =='news'){ get_template_part( 'template-parts/new'); }
//    }
get_footer();
