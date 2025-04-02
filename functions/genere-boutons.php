
<?php 
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug) {
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);

    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;

        // Récupérer les sous-catégories de la catégorie parente
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent
            'hide_empty' => true, // Ne pas afficher les catégories vides
        ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            // Générer la liste HTML des sous-catégories
            echo '<ul class="categorie__ul">';
            foreach ($sous_categories as $categorie) {
                // Afficher le nom de chaque sous-catégorie
                echo '<li data-category-id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        } else {
            // Si aucune sous-catégorie n'est trouvée
            echo 'Aucune sous-catégorie trouvée pour "' . esc_html($parent_slug) . '".';
        }
    } else {
        // Si la catégorie parente n'existe pas
        echo 'La catégorie "' . esc_html($parent_slug) . '" n\'existe pas.';
    }
}

 ?>
