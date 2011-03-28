<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'depth' => '1',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => false
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');
//
//
//

//function childtheme_menu_args($args) {
//	$args = array(
//		'show_home' => 'Startsida',
//		'sort_column' => 'menu_order',
//		'menu_class' => 'menu',
//		'depth' => 1,
//		'echo' => false
//	);
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args',20);


// Filter away the default scripts loaded with Thematic
//function childtheme_head_scripts() {
//    // Abscence makes the heart grow fonder
//    return "";
//}
//add_filter('thematic_head_scripts','childtheme_head_scripts');


// Unleash the power of Thematic's dynamic classes
// 
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
// define('THEMATIC_COMPATIBLE_FEEDLINKS', true);

//Change search box text
function collabook_search_value() {
return "";
}
add_filter('search_field_value', 'collabook_search_value');



//replace the standard doctype declaration and html tag opening...
function html5_create_doctype($content) {
 $content = "<!DOCTYPE html>";
 $content .= "\n";
 $content .= "<html";
 return $content;
}
add_filter('thematic_create_doctype', 'html5_create_doctype');
 
//replace the <head> tag opening to remove the now defunct profile attribute and add the <meta charset="utf-8"> tag...
function html5_head($content) {
 $content = "<head>";
 $content .= "\n";
 $content .= "<meta charset=\"utf-8\">";
 $content .= "\n";
 return $content;
}
add_filter('thematic_head_profile', 'html5_head');
 
//remove the now defunct <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> tag...
function html5_create_charset($content) {
 $content = "";
 return $content;
}
add_filter('thematic_create_contenttype', 'html5_create_charset');

?>
