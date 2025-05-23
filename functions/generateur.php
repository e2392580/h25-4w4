 
<?php  
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    $parent_category = get_category_by_slug($parent_slug);
 
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
    }
 
    $sous_categories = get_categories(array(
        'parent' => $parent_id, // Filtrer par le parent "destination"
        'hide_empty' => true, // Ne pas afficher les catégories vides
    ));
 
    if (!empty($sous_categories)) {
        echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category-id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
    }

}
 
function genere_vague($footer_couleur){?>
 
    <svg class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
      <path fill="rgb(236, 136, 13) "  fill-opacity="1">  
        <animate attributeName="d" dur="4s" repeatCount="indefinite"
          values="
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,197.3C672,181,768,107,864,112C960,117,1056,203,1152,234.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,192L48,213.3C96,235,192,277,288,282.7C384,288,480,256,576,234.7C672,213,768,203,864,197.3C960,192,1056,192,1152,181.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;"
             />
      </path>
    </svg>
    <?php 
    }
    
function creer_vague($couleur_haut, $couleur_bas){?>
<svg class="vague_API"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffd700" fill-opacity="1">
        <animate attributeName="d" dur="4s" repeatCount="indefinite"
          values="
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,197.3C672,181,768,107,864,112C960,117,1056,203,1152,234.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,192L48,213.3C96,235,192,277,288,282.7C384,288,480,256,576,234.7C672,213,768,203,864,197.3C960,192,1056,192,1152,181.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;"
             />
      </path>
    </svg>
    <?php
}
    function afficher_icones_sociales() {
        $nb_icones = get_theme_mod('nombre_icones_sociales', 3);
    
        if ($nb_icones <= 0) return;
    
        echo '<ul class="icones-sociales">';
        for ($i = 0; $i < $nb_icones; $i++) {
            $url = esc_url(get_theme_mod("social_url_$i"));
            $icon = esc_url(get_theme_mod("social_icon_$i"));
    
            if ($url && $icon) {
                echo '<li>';
                echo '<a href="' . $url . '" target="_blank" rel="noopener noreferrer">';
                echo '<img src="' . $icon . '" alt="Icône sociale ' . ($i + 1) . '">';
                echo '</a>';
                echo '</li>';
            }
        }
        echo '</ul>';
    }
    function categorie_par_destination($cat_a_retirer = '') {
        $categories = get_the_category();
        $cat_slug_retirer = is_object($cat_a_retirer) ? $cat_a_retirer->slug : $cat_a_retirer;
    
        if (!empty($categories)) {
            echo '<ul class="post-categories">';
            foreach ($categories as $cat) {
                if ($cat->slug !== $cat_slug_retirer) {
                    echo '<li><a href="' . get_category_link($cat->term_id) . '">' . esc_html($cat->name) . '</a></li>';
                }
            }
            echo '</ul>';
        }
    }
    


