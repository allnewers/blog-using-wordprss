<?php

add_theme_support('post-thumbnails');

register_nav_menus(
        array(
            'header_menu' => 'Header',
            'main_menu' => 'Main Menu',
            'footer_menu' => 'footer Menu'
));

function only_20($content) {
    return substr($content, 0, 20);
}
