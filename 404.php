<?php get_header(); ?>
<?php
$section_erreur = get_theme_mod('section_erreur', '');
$erreur_couleur = get_theme_mod('erreur_couleur', '');
$erreur_titre = get_theme_mod('erreur_titre', 'Oops, vous avez échoué sur l île 404 !');
$erreur_message = get_theme_mod('erreur_message', 'Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur Accueil pour découvrir à nouveau nos voyages d’exception !');
?>
<section class="erreur_404" style="background-image: url('<?php echo esc_url($section_erreur); ?>'); color: <?php echo $erreur_couleur ?>; background-size: cover; height : 100vh;">
    <h1><?php echo $erreur_titre ?></h1>
    <p><?php echo $erreur_message ?></p>
    <ul><a href="<?php echo get_home_url(); ?>" class="button__erreur">Retourner à l'accueil</a></ul>
    <?php wp_nav_menu(array(
            "menu" => "Menu 404",
            'container' =>'nav',
            )); ?>
</section>

<?php get_footer(); ?>
