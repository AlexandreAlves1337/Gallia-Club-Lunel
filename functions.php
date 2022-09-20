<?php 

/////////////////////////
///FONCTION PAGE LOGIN///
/////////////////////////

// Fonction qui insere le lien vers le css qui surchargera celui d'origine
function custom_login_css()  {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/design/style-login.css" />';
}
add_action('login_head', 'custom_login_css'); 

// Filtre qui permet de changer l'url du logo
function custom_url_login()  {
    return get_bloginfo( 'siteurl' ); // On retourne l'index du site
}
add_filter('login_headerurl', 'custom_url_login');

// Filtre qui permet de changer l'attribut title du logo
function custom_title_login($message) {
    return get_bloginfo('description'); // On retourne la description du site
}
add_filter('login_headertitle', 'custom_title_login');

// Fonction qui permet d'ajouter du contenu juste au dessus de la balise 
function add_footer_login()  {
    echo '<div class="avert"><p>L\'accès à l\'administration du site est reservé aux personnes habilitées.</p></div>'; 
} 
add_action('login_footer','add_footer_login');

// Taille image perso

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'une', 1024, 512, true );
	add_image_size( 'photoind', 0, 100, false );
}

add_filter('image_size_names_choose', 'add_custom_thumb');
function add_custom_thumb($sizes) {
 $addsizes = array(
        "photoind" => __( "Photo individuelle")
    );
 $newsizes = array_merge($sizes, $addsizes);
 return $newsizes;
}