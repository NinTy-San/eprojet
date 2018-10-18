<?php
get_header();   // inclusion de header.php
?>


<div class="col-lg-9">
<?php
    if(have_posts()) :    
        while (have_posts()) : the_post();
        ?>
            <h1><?php the_title(); ?></h1>
            
            <div class="contenu"><?php the_content(); ?></div>
            
            <div class="mb-3"><img src="<?php the_field('photo'); ?>" alt="" class="img-fluid"></div>
            <div class="info"><span>Marque : </span><?php the_field('marque'); ?></div>
            <div class="info"><span>Modèle : </span><?php the_field('modele'); ?></div>
            <div class="info"><span>Km : </span><?php the_field('km'); ?> Km</div>
            <div class="info"><span>Carburant  :</span><?php the_field('carburant'); ?></div>
            <div class="info"><span>Prix  :</span><?php the_field('prix'); ?> €</div>

        <?php        
        endwhile;
    else :
        echo '<p>Aucune annonce ne correspond à vos critères...</p>';
    endif;


?>
</div>
<div class="col-lg-3">
    <?php get_sidebar('droite');  // inclusion de la barre du fichier sidebar-droite.php ?>
</div>



<?php
get_footer();   // inclusion de footer.php