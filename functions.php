<?php

function theme_tp_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section hero', 'theme_tp'),
        'priority' => 30,
    ));
    //////////////////////  ajout de la donnée
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Eric Vu', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));  
    ///////////////////// Ajout de la donnée  image en background
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ///////////////////// Ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image en arrière plan', 'theme_tp'),
        'section' => 'hero_section',
    )));
    //////////////////// Ajout 
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section footer', 'theme_tp'),
        'priority' => 30,
    ));
    //////////////////////  ajout de la donnée
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('5800 Sherbrooke-est - Montréal (Québec) H1X 2A2', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_tp'),
        'section' => 'footer_section',
        'type' => 'text',
    ));  
    //////////////////////  ajout de la donnée
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('514-123-1234', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_telephone', array(
            'label' => __('Téléphone', 'theme_tp'),
            'section' => 'footer_section',
            'type' => 'text',
    ));  
        //////////////////////  ajout de la donnée
        $wp_customize->add_setting('footer_mission', array(
            'default' => __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nostrum sint deserunt architecto dolorem nisi delectus pariatur odit eius! Maiores dolore provident soluta culpa minus nesciunt doloremque vero incidunt accusamus!', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        ///////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('footer_mission', array(
            'label' => __('Mission', 'theme_tp'),
            'section' => 'footer_section',
            'type' => 'text',
        )); 

}

add_action('customize_register', 'theme_tp_customize_register');

function mon_theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );


function theme_4w4_enqueue_styles() {
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
wp_enqueue_style('mon-style-style', get_stylesheet_uri());
}
/*
 
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');
 
/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );
?>