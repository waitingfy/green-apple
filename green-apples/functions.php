<?php

if ( function_exists('register_sidebar') )    register_sidebar(array('name'=>'sidebar',        'before_widget' => '<li>',    'after_widget' => '</li>', 'before_title' => '',        'after_title' => '',    ));if ( function_exists('register_sidebar') )    register_sidebar(array('name'=>'sidebar2',        'before_widget' => '<li>',    'after_widget' => '</li>', 'before_title' => '',        'after_title' => '',    ));
  
if ( function_exists('register_nav_menus'))  
    register_nav_menus();
  
function set_newuser_cookie($value = 1) {
    $cookieName = 'waitingfyAdIndex';
	if (!isset($_COOKIE[$cookieName])) {
		setcookie($cookieName, $value, time()+36000 ,COOKIEPATH, COOKIE_DOMAIN,false);
	}
}
add_action( 'init', 'set_newuser_cookie');

?>