<?php

if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки Контактов' )
    ->add_tab('Соц сети и номера', [
        Field::make( 'text', 'phone', 'Телефон' ),
        Field::make( 'text', 'wa', 'whatsapp' ),
        Field::make( 'text', 'telega', 'telegram' ),
        Field::make( 'text', 'instagram', 'instagram' ),
//        Field::make( 'text', 'email', 'email' ),
        Field::make( 'text', 'footer__social_fc', 'facebook' ),
        Field::make( 'text', 'address', 'адрес' ),
    ] );