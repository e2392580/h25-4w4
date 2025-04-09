<?php get_header()?>
<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_couleur = get_theme_mod('hero_couleur', '');
 
 
for($k=0; $k<3; $k++){
    $hero_background[$k]= get_theme_mod('hero_background_' . $k, '');
}
 
?>
 
    <section class = "hero">
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0]?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1]?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2]?>)"></div>
 
        <div class="hero__contenu global">
          <?php get_template_part('gabarit/descriptions'); ?>
            <div class="hero__icone">
            <?php get_template_part('gabarit/icones'); ?>
            </div>

        </div>

    </section>
    <div class="form-container">
        <div class="form-box">
            <form>
                <input type="text" placeholder="Écrivez votre nom" required>
                <input type="text" placeholder="Écrivez votre prénom" required>
                <input type="email" placeholder="Écrivez votre courriel" required>
                <input type="tel" placeholder="Écrivez votre téléphone" required>
                <button type="submit">S'INSCRIRE</button>
            </form>
        </div>
    </div>
    <section class="populaire">
        <div class="global">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        if(in_category("galerie"))  {
            the_content() ;
        } else {   ?>
              <?php get_template_part('gabarit/carte'); ?>
            <?php } ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!-- /////////////////////// section  rest-api -->
    <section class="destination">
        <?php categories_liste("destination") ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>