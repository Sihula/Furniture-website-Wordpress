<?php

add_action('wp_enqueue_scripts', 'furniture_styles');// подключение стидей // add styles
add_action('wp_enqueue_scripts', 'furniture_scripts');// подключение скриптов // add script

// подключение стидей // add styles
function furniture_styles() {
  wp_enqueue_style( 'furniture-style', get_stylesheet_directory_uri() . '/style.css'); // путь стилей // add styles
};

// подключение скриптов // add script
function furniture_scripts(){
  wp_enqueue_script('furniture-script',
   get_stylesheet_directory_uri() . '/assets/js/main.min.js',
    array('jquery'), null, true); // подключение скрипта // add script
    
};
add_theme_support( 'custom-logo' ); // подключение логотипа
add_theme_support( 'post-thumbnails' ); // подключение
add_theme_support( 'menus' );// подключение меню

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" class="aside__search" action="' . home_url( '/' ) . '" >
		<input class="aside__search-input" type="text" placeholder="Search">
		<input  class="aside__search-btn" type="submit" placeholder="Send"/>
   
	</form>';

	return $form;
}

// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3); //фильтр меню


// function filter_nav_menu_link_attributes($atts, $item, $args){
//   if ($args->menu === 'Main') {
//     $atts['class'] = 'header__nav-item';

//     if ($item->current){
//       $atts['class'] .= ' header__nav-item-active';
//     };
//   };
//   return $atts;
// };

//подключение меню

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


?>
