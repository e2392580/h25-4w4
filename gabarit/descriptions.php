<?php 
 $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
 ?>
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
            <p class="hero__auteur">Auteur: <?php  echo $hero_auteur ?></p>
            <button class = "hero__bouton" type = "submit">S'INSCRIRE</button>