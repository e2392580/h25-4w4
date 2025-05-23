<?php
/*
Template Name: Template Pays
*/
get_header(); // Inclut l'en-tête
?>
 
<div class="evenement">
  <h1><?php the_title(); ?></h1>
  <p>Date de l'événement : <?php the_field('date_evenement'); ?></p>
  <p>Lieu : <?php the_field('lieu_evenement'); ?></p>
  <div class="description">
    <?php the_field('description_evenement'); ?>
  </div>
</div>
 
<?php get_footer(); // Inclut le pied de page ?>