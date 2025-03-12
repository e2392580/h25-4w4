<?php get_header(); ?>
<?php
 $hero_background = get_theme_mod('hero_background', ''); 
 $hero_couleur = get_theme_mod('hero_couleur', ''); 
?>
    <section class="hero" style="background-image: url(<?php echo $hero_background ?>); color: <?php echo $hero_couleur ?>">
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
    <section class="galerie">

            <h1>Nos destinations favoris</h1>
            <!-- <div class="galerie global">
            <figure class="galerie__figure">
                <img src="images/photo1.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo2.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo3.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo4.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo5.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo6.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo7.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo8.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo9.jpg" alt="" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/photo10.jpg" alt="" class="galerie__img">
            </figure>
        </div> -->
    </section>
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
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>