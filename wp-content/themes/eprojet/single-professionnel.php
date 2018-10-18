<?php
get_header();   // inclusion de header.php



?>


<div class="col-lg-9">
<?php
    if(have_posts()) :    
        while (have_posts()) : the_post();
        ?>
            <h2><?php the_title(); ?></h2>
            
            <p><?php the_content(); ?></p>
            <div class="info"><span>Code Postal : </span><?php the_field('code_postal'); ?></div>
            <div class="info"><span>Ville : </span><?php the_field('ville'); ?></div>
            <div class="info"><span>Téléphone : </span><?php the_field('telephone'); ?></div>
  
            
        <?php        
        endwhile;
    else :
        echo '<p>Aucun professionnels ne correspond à votre demande...</p>';
    endif;
    
?>
    <p class="mt-4 text-right"><a href="<?php bloginfo('url'); ?>/professionnel" class="btn alert-warning"><-- Retour vers la liste des professionnels</a></p>

<?php // on peut fair aussi :
// $professionnel_link = get_post_type_archive_link('professionnel');
?>   
 <!-- <p class="mt-4 text-right"><a href="<?php echo $professionnel_link; ?>" class="btn alert-warning"><-- Retour vers la liste des professionnels</a></p> -->

</div>
<div class="col-lg-3">
    <?php get_sidebar('droite');  // inclusion de la barre du fichier sidebar-droite.php ?>
</div>



<?php
get_footer();   // inclusion de footer.php