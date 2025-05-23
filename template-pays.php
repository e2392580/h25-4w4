<?php
/*
Template Name: Template Pays
*/
get_header(); // Inclut l'en-tête

$couleur_haut = '#ffffff';
$couleur_bas = '#ffd700';
?>
 <section class="template_global">
<div class="evenement">
  <h1><?php the_title(); ?></h1>
  <div class="description">
    <?php the_field('description_evenement'); ?>
  </div>
</div>
<div class="galerie">
    <?php the_content() ?>
</div>
<div class="vague-container">
  <?php creer_vague($couleur_haut, $couleur_bas); ?>
</div>
<section class="destination-section">
  <div id="menu-pays" class="menu-pays"></div>
<div class="destination__list"></div>
</section>

</section>

<?php get_footer(); // Inclut le pied de page ?>
