<?php

register_nav_menu('main_nav','Navigation principale');
register_nav_menu('mobile_main_nav','Navigation principale mobile');
register_nav_menu('social_nav','Menu des liens sociaux');


    /*** Déclaration des zones de widgets ***/
    register_sidebar(array(
        'id'            =>  'header_bar',
        'name'          =>  'Search',
        'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
        'after_widget'  =>  '</div>'
    ));
    
     register_sidebar(array(
        'id'            =>  'zone_footer_1',
        'name'          =>  'Logo du footer'

    ));
    
     register_sidebar(array(
        'id'            =>  'zone_footer_2',
        'name'          =>  'Colonne droite du footer',
        'before_widget' =>  '<div id="%1$s" class="widget %2$s">',
        'after_widget'  =>  '</div>'
    ));

add_theme_support( 'custom-logo' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}



?>