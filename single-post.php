<?php get_header(); ?>
<section class="populaire">
    <div class="global single-post">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="destination__card">

            <!-- Image mise en avant OU image par défaut -->
            <div class="destination__image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="Image par défaut">
                <?php endif; ?>
            </div>

            <div class="destination__content">
                <!-- Métadonnées -->
                <div class="destination__meta">
                    <p>Auteur : <?php the_author(); ?></p>
                    <p>Publié le : <?php the_time('j F Y'); ?></p>
                    <p>Catégories : <?php the_category(', '); ?></p>
                </div>

                <!-- Titre et contenu -->
                <h2 class="destination__titre"><?php the_title(); ?></h2>

                <div class="destination__description">
                    <?php the_content(); ?>
                </div>

                <!-- Infos météo (optionnelles) -->
                <div class="temperature">
                    <h3>Météo</h3>
                    <p>Température maximale : <?php the_field("temperature_maximum"); ?> °C</p>
                    <p>Température minimale : <?php the_field("temperature_minimum"); ?> °C</p>
                    <p>Température moyenne : <?php the_field("temperature_moyenne"); ?> °C</p>
                </div>
            </div>

        </article>
    <?php endwhile; endif; ?>

    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
