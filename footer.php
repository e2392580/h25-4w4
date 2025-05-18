<?php 
$footer_couleur = get_theme_mod('footer_couleur', '#orange');
$footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2');
$footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)');
$footer_mission = get_theme_mod('footer_mission', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nostrum sint deserunt architecto dolorem nisi delectus pariatur odit eius! Maiores dolore provident soluta culpa minus nesciunt doloremque vero incidunt accusamus!');
$footer_image_destination = get_theme_mod('footer_image_destination');
genere_vague($footer_couleur);
?>
<footer>
<footer style="background-color:  <?= $footer_couleur ?>;"></footer>
  <div class="piedpage">
    <section class="piedpage__s1">
      <div class="piedpage__s1__externe">
      <h2>Liens sur les voyages</h2>
        <?php wp_nav_menu(array(
          "menu" => "externe",
          "container" => "nav",
        )); ?>
      </div>
      <div class="piedpage__s1__adresse">
        <h2> Nos coordinations</h2>
        <div class="piedpage__s1_adresse__coord">
        <p class="footer_adresse"><?php echo $footer_adresse ?></p>
        <p class="footer_telephone"><?php echo $footer_telephone ?></p>
        </div>
        <div class="piedpage__s1_adresse__recherche">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="piedpage__s1__description">
        <h3>Club de voyage</h3>
        <div class="piedpage__s1__mission__background" style="background-image: url(<?php echo esc_url($footer_image_destination); ?>);"></div>
      <p class="footer_mission"><?php echo $footer_mission ?></p>
      </div>
    </section>
    <section class="piedpage__s2">
      <div class="piedpage__s2__icone">
      </div>
    </section>
    <section class="piedpage__s3">
    <?php wp_nav_menu(array(
                        "menu" => "principal",
                        'container' =>'nav',
                        'container_class' =>'entete__menu'
                    )); ?>
    </section>
  </div>
</footer>
 
<?php wp_footer() ?>