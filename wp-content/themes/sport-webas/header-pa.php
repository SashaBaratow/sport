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
<header class="page">
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
        <h1 class="text-uppercase text-center"><?php single_cat_title(''); ?></h1>
    </div>
</header>