<?php
// ragister admin menu creation
register_nav_menus( 
    array("primary-menu" => "Header Menu")
 );

//  allow in admin pannel thumbnails image

add_theme_support('post-thumbnails');