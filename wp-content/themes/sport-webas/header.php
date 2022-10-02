<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codytext-webas
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
	<?php wp_head();?>
</head>
<body>
<header>
    <div class="burger bg-menu">
        <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
        <i class="fa fa-times fa-3x" aria-hidden="true"></i>
    </div>
    <nav class="navbar">
        <?php wp_nav_menu( [
            'theme_location'  => 'top-menu',
            'menu'            => '',
            'container'       => null,
            'menu_class'      => 'nav-links',
            'menu_id'         => '',
        ] ); ?>
    </nav>
    <div class="title-block">
        <img class="logo" src="<?=get_template_directory_uri()?>/assets/img/logo.png" alt="">
        <h1 class="text-uppercase text-center">Незабываемый отдых с</h1>
    </div>
    <img class="main-top-title desc" src="<?=get_template_directory_uri()?>/assets/img/trekking_union.png" alt="">
    <img class="main-top-title mob" src="<?=get_template_directory_uri()?>/assets/img/trekking_union_mob.png" alt="">
    <img class="main-top-bg" src="<?=get_template_directory_uri()?>/assets/img/main-bg-2.png" alt="">
</header>