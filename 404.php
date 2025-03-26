<?php get_header(); ?>
<?php
$erreur_background = get_theme_mod('erreur_background', '');
?>
<section class="erreur" style="background-image: url('<?php echo esc_url($erreur_background); ?>'); background-size: contain; background-position: right top; background-repeat: no-repeat; height: 50vh; ">
    <h1>404</h1>
    <h2>Oups ! Page introuvable</h2>
    <p>Il semble que la page que vous recherchez n'existe pas ou a été déplacée.</p>
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
