 
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
    <svg class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill=" <?= $footer_couleur ?> " fill-opacity="1" d="M0,192L15,197.3C30,203,60,213,90,186.7C120,160,150,96,180,96C210,96,240,160,270,160C300,160,330,96,360,64C390,32,420,32,450,64C480,96,510,160,540,192C570,224,600,224,630,213.3C660,203,690,181,720,170.7C750,160,780,160,810,181.3C840,203,870,245,900,234.7C930,224,960,160,990,144C1020,128,1050,160,1080,154.7C1110,149,1140,107,1170,90.7C1200,75,1230,85,1260,80C1290,75,1320,53,1350,85.3C1380,117,1410,203,1425,245.3L1440,288L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z"></path></svg>
<?php }
?>
 