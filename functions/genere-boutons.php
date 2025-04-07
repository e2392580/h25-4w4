 
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
 
 
?>
 