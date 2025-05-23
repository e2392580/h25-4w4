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
  <p>Date de l'événement : <?php the_field('date_evenement'); ?></p>
  <p>Lieu : <?php the_field('lieu_evenement'); ?></p>
  <div class="description">
    <?php the_field('description_evenement'); ?>
  </div>
</div>
<div class="galerie">
    <?php the_content() ?>
</div>
<?php
 creer_vague($couleur_haut, $couleur_bas); ?>
<section class="destination-section">
  <div id="menu-pays" class="menu-pays"></div>
<div class="destination__list"></div>
</section>

</section>

<?php get_footer(); // Inclut le pied de page ?>
