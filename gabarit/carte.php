<?php 
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <a href="<?php the_permalink(); ?>" class="carte__link">
    <div class="carte__contenu">
      <?php 
        if (has_post_thumbnail()) {
          the_post_thumbnail('thumbnail');
        }
      ?>
      <h4 class="carte__titre"><?php the_title(); ?></h4>
      <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, "..."); ?></p>
      <?php the_category(); ?>
      <p>Température maximum : <?php the_field("temperature_maximum"); ?> °C</p>
    </div>
  </a>
</article>
