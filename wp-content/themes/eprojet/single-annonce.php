<?php
get_header();   // inclusion de header.php
?>


<div class="col-lg-9">
<?php
    if(have_posts()) :    


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