<?php get_header(); ?>
<?php
$section_erreur = get_theme_mod('section_erreur', '');
$section_couleur = get_theme_mod('section_couleur', '');
?>
<section class="erreur" style="background-image: url('<?php echo esc_url($section_erreur); ?>'); color: <?php echo $section_couleur ?>; background-size: cover;">
    <h1>Oops, vous avez échoué sur l'île 404 !</h1>
    <p>Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !</p>
    <p><a href="<?php echo get_home_url(); ?>" class="button__erreur">Retourner à l'accueil</a></p>

   <div class="icones">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
    <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
    <img src="https://s2.svgbox.net/social.svg?ic=reddit&color=000000" width="20" height="20">
   </div>
</section>

<?php get_footer(); ?>
