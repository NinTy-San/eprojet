<?php
    get_header(); // Inclusion du fichier header.php

if (have_posts()) :
while(have_posts()) : the_post();
?>
    <h1 class="col-lg-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <div class="col-lg-12">
        <?php the_content(); ?>
    </div>

<?php   
endwhile;
else :
    echo '<p> Désolé, aucun contenu ne correspond à votre demande... </p>';
endif;
?>    






    <div class="col-lg-6">
        <h2>Notre dernière annonce</h2>
<?php
query_posts(array(
'post_type'         => 'annonce', 
'posts_per_page'    => 1           


));

if (have_posts()) : 
while(have_posts()) : the_post();
?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('photo'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            </a>

            <h3> <?php the_title(); ?></h3>

            <div>Au prix de<?php the_field('prix'); ?> €</div>

        </div>
<?php
endwhile;
else : 
    echo '<p>pas encore d\'annonces...</p>';
endif;

?>
    </div>







    <div class="col-lg-6 alert-warning text-center">
        <h2>Derniers professionnel inscrit</h2>
        
        <div class="row ">
<?php
query_posts(array(
'post_type'         => 'professionnel', 
'posts_per_page'    => 3         
));

if (have_posts()) : 
while(have_posts()) : the_post();
?>
            <div class="col-lg-4 mt-5">
                <div>
                    <a href="<?php the_permalink(); ?>" class="text-dark">
                        <h5 > <?php the_title(); ?></h5  >
                        </a>
                        <div class="info"><span>Code Postal : </span><?php the_field('code_postal'); ?></div>
                        <div class="info"><span> Ville : </span><?php the_field('ville'); ?></div>
                    </div>
                </div>
            

<?php
endwhile;
else : 
    echo '<p>pas encore d\'annonces...</p>';
endif;
?>
    
        </div>
    </div>
<?php  wp_reset_query();
get_footer(); // Inclusion du footer.php