<?php get_header(); ?>
<?php
 $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
 $hero_background = get_theme_mod('hero_background', ''); 
?>
    <section class="hero" style="background-image: url(<?php echo $hero_background ?>)">
        <div class="hero__contenu global">
            <h1 class="hero__titre"><?php bloginfo("name") ?></h1>
            <p class="hero__description">
             <?php bloginfo("description") ?>
            </p>
            <p class="hero__courriel">
            <?php bloginfo("admin_email") ?>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero__telephone">
                514-123-1234
            </p>
            <p class="hero_auteur">Auteur : <?php echo $hero_auteur ?></p>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=reddit&color=000000" width="20" height="20">
            </div>
            <button class = "hero__bouton" type = "submit">S'INSCRIRE</button>
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