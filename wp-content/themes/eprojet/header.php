<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('chartset'); ?>"> <!-- la fonction bloginfo() affiche des informationz concernant le site, ici le chartset du site --> 
    
    <title><?php bloginfo('name'); ?></title><!-- Affiche le nom du site défini dans BO > Réglages > Générale > Titre du site -->
    
    <!-- lien vers CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS du thème  -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"><!-- La fonction affiche le chemin du dossier du thème actif dans lequel on se situe, ici eprojet -->

    <?php wp_head(); ?><!-- Permet d'afficher la barre d'administration en FRONT quand on est connecté. Permet aussi de créer les balise <link> ET <script> des liens inclus à partir du fichier functions.php -->

</head>
<body <?php body_class(); ?> ><!-- Affiche les classes du body propre à wp -->
<header>
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning ">
        <div class="container">
            <div class="row" style="width:100%">
                
                <div class="navbar-brand col-lg-3">
                        <a class="text-dark" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <!-- Affiche l'url principale du site définie dans BO > Reglages > Générale > URL -->
                </div>
                <p class="texte-description col-lg-9 text-dark">
                    <?php bloginfo('description'); ?><!-- Affiche le slogan du site défini dans BO > Réglage > Générale > Slogan -->
                </p>
                <div class="col-lg-12">
                    <!-- menu de navigation à venir -->
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'        => 'primary',   // Correspond à l'id de la zone de menu déclarée dans fonctions.php
                            'menu_class'           => 'navbar-nav' // On ajoute une classe de bootstrap

                        ));
                    ?>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </nav>
</header>
<!-- Entête de la page d'accueil -->
<?php 
if (is_front_page()) : // Si on est sur la page d'accueil
?>
    <div id="entete" class="align-items-center">
        <div class="container">
            <?php dynamic_sidebar('region-entete'); // On appelle la zone de widgets d'id "region-entete" déclarée dans functions.php ?>
        </div>
    </div>

<?php
endif;
?>
<section class="container">
    <div class="row">
        <!-- ici viens le contenu spécifique à la page  -->
