<?php

if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Поля для заполнения' )
    ->show_on_category('rent')
    ->add_tab('Доп. поля для аренды', [
        Field::make( 'text', 'dop_info_cr', 'Доп.инфо' ) ->set_width(33)->set_default_value( 'не указана' ),
        Field::make( 'text', 'rent_price_cr', 'цена' ) ->set_width(33)->set_default_value( 'не указана' ),
    ] );
Container::make( 'post_meta', 'Поля для заполнения' )
    ->show_on_category('tours')
    ->add_tab('Доп. поля для туров', [
        Field::make( 'image', 'tout_img_1_cr', 'картинка слайда -1' ) ->set_width(25),
        Field::make( 'image', 'tout_img_2_cr', 'картинка слайда -2' ) ->set_width(25),
        Field::make( 'image', 'tout_img_3_cr', 'картинка слайда -3' ) ->set_width(25),
        Field::make( 'image', 'tout_img_4_cr', 'картинка слайда -4' ) ->set_width(25),
        Field::make( 'text', 'tour_price_cr', 'цена' ) ->set_width(33),
        Field::make( 'text', 'tour_date_cr', 'дата' ) ->set_width(33),
        Field::make( 'text', 'tour_duration_cr', 'длительность' ) ->set_width(33),
    ] );
Container::make( 'post_meta', 'Поля для заполнения' )
    ->show_on_category('buy')
    ->add_tab('Доп. поля для продажи', [
        Field::make( 'text', 'buy_price_cr', 'цена' ) ->set_width(33),
    ] );

