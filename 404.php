<?php get_header(); ?>
<section class="erreur">
    <h1>404</h1>
    <h2>Oups ! Page introuvable</h2>
    <p>Il semble que la page que vous recherchez n'existe pas ou a été déplacée.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="Erreur 404">
    <p><a href="<?php echo get_home_url(); ?>" class="button__erreur">Retourner à l'accueil</a></p>
</section>
<?php get_footer(); ?>
