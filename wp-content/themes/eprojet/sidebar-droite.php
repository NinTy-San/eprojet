<div id="region-droite">

    <?php dynamic_sidebar('colonne-droite'); // On appelle la zone de widget d'id "colonne-droite" déclarée dans functions.php ?>

</div>

<hr>

<div>
    <h2>Notre dernière annonce</h2>

    <?php
    // "SELECT * FROM posts WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1"
    // Requête en BDD pour sélectionner le dernier post en date  de type "annonce" :

    query_posts(array(
        'post_type'         => 'annonce',   //slug de notre post type "Annonces"
        'posts_per_page'    => 1            // traduction de LIIT en sql, ici on sélectionne le premier résultat.


    ));

    if (have_posts()) : 
        while(have_posts()) : the_post();
        ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('photo'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            </a>

            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <div>Au prix de<?php the_field('prix'); ?> €</div>

        </div>
        <?php
        endwhile;
    else : 
        echo '<p>pas encore d\'annonces...</p>';
    endif;

    wp_reset_query(); // Pour restaurer le requête principale après un query_post()
    ?>
</div>