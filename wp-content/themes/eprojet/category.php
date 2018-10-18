<?php
get_header();
    
    $current_cat = '';  // Contient la catégorie sélectionné par l'internaute
    
    $current_cat = get_query_var('category_name');// get_query_var('category_name') va chercher le nom de la categorie utilisé par la requête principale de WP, et qui correspond à la categories sur laquelle a cliqué l'internaute.

    // var_dump($current_cat); // On voit que l'on récupère le nom de la catégorie choisie sous forme de string.

    $query = query_posts(array(
        'post_type'     => 'annonce',   // le slug de notre custom post type "annonce
        'category_name' => $current_cat

    )); // Sélectionne en BDD les posts de type "annonce" ET de categorie celle qui est utilisée par la requçete principale, autrement dit celle qui est choisie par l'internaute. Attention :cette fonction de requête remplace complètement la requête principal : il faut donc pas oublier de restaurer cette dernière avec wp_reset_query() à la fin de notre script !

    ?>
    <div class="col-lg-12">
        <h1>Nos <?php echo $current_cat; ?></h1>
    </div>
    <div class="col-lg-9">
        <?php
            if (have_posts()) :
                while(have_posts()) : the_post();
                ?>
                    <div class="row cat-info">
                        <div class="col-lg-3">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('photo'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <h4>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <div><span>Marque : <?php the_field('marque'); ?></span></div>
                            <div><span>Modèle : <?php the_field('model'); ?></span></div>
                            <div><span>Prix : <?php the_field('prix'); ?> €</span></div>
                        </div>
                    </div>


                <?php
                endwhile;
            else :
                echo '<p>Acune annonce ne correspond à vos critères...</p>';
            endif;

            wp_reset_query(); // restaure la requête principale après un query_posts(). 
        ?>
    </div>
    <div class="col-lg-3">
       <?php get_sidebar('droite'); ?>
    </div>












    <?php
get_footer();