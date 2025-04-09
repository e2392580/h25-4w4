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
    for($k = 0; $k<3; $k++){
        /////////////////Début du champ background
        //////////////// ajout de la donnée image en background
        $wp_customize->add_setting('hero_background_' . $k, array(
          'default' => '',
          'sanitize_callback' => 'esc_url_raw',
        ));
        ///////////////// ajout du contrôle de la donnée
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_'. $k, array(
          'label' => __('Image en arrière plan' . ($k+1), 'theme_4w4'),
          'section' => 'hero_section',
        )));
      }
    //////////////////// FOOTER ///////////////////
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section footer', 'theme_tp'),
        'priority' => 30,
    ));
    //////////////////////  ajout de l'ad
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
    ///////////////////// Ajout de la couleur ///////////////////
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ///////////////////// Ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Sélection de couleur', 'theme_tp'),
        'section' => 'hero_section',
    )));

        // Ajout de la section pour la page 404
        $wp_customize->add_section('erreur_section', array(
            'title' => __('Page Erreur 404', 'theme_tp'),
            'priority' => 35,
        ));
    
        // Ajout du réglage pour l'image de fond de la page 404
        $wp_customize->add_setting('erreur_background', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        // Ajout du contrôle pour l'image de fond de la page 404
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
            'label' => __('Image en arrière-plan pour la page 404', 'theme_tp'),
            'section' => 'erreur_section',
        )));
        
        // Ajout de la section pour la page 404
        $wp_customize->add_section('section_404', array(
            'title' => __('Page Erreur 404 (Examen intra)', 'theme_tp'),
            'priority' => 35,
        ));
            
        // Ajout du réglage pour l'image de fond de la page 404
        $wp_customize->add_setting('section_erreur', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
            
        // Ajout du contrôle pour l'image de fond de la page 404
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_erreur', array(
            'label' => __('Image en arrière-plan pour la page 404', 'theme_tp'),
            'section' => 'section_404',
        )));
            ///////////////////// Ajout de la couleur ///////////////////
        $wp_customize->add_setting('erreur_couleur', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        ///////////////////// Ajout du contrôle de la donnée
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur', array(
            'label' => __('Sélection de couleur', 'theme_tp'),
            'section' => 'section_404',
         )));
            //////////////////////  ajout de la donnée
    $wp_customize->add_setting('erreur_titre', array(
        'default' => __('Oops, vous avez échoué sur l île 404 !', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ///////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('erreur_titre', array(
            'label' => __('Titre', 'theme_tp'),
            'section' => 'section_404',
            'type' => 'text',
    ));  
        //////////////////////  ajout de la donnée
        $wp_customize->add_setting('erreur_message', array(
            'default' => __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur Accueil pour découvrir à nouveau nos voyages d’exception !', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        ///////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('erreur_message', array(
            'label' => __('Message', 'theme_tp'),
            'section' => 'section_404',
            'type' => 'text',
        )); 
    }
    


add_action('customize_register', 'theme_tp_customize_register');
?>