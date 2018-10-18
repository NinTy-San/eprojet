<?php
get_header(); // Inclusion du fichier header.php

        query_posts(array(
        'post_type'         => 'professionnel',
    ));

    if (have_posts()) :
        while(have_posts()) : the_post();
?>
        <h1 class="col-lg-12">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        
        <div class="col-lg-12">
            <?php the_content(); ?>
            <div class="info"><span>Code Postal : </span><?php the_field('code_postal'); ?></div>
            <div class="info"><span> Ville : </span><?php the_field('ville'); ?></div>
            
        
        </div>

<?php   
        endwhile;
    else :
        echo '<p> Désolé, aucun contenu ne correspond à votre demande... </p>';
    endif;

get_footer(); // Inclusion du footer.php