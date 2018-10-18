
        </div><!-- /.row -->
    </section><!-- /.container -->
    <footer class="align-item-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                     <?php dynamic_sidebar('footer-gauche'); ?>
                </div>
                <div class="col-lg-4">
                    <p>&copy; Mes petites Annonces - 2018</p>
                </div>  
                <div class="col-lg-4">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'        => 'menu-footer',   // Correspond à l'id de la zone de menu déclarée dans fonctions.php
                            'menu_class'           => 'navbar-nav' // On ajoute une classe de bootstrap
                        ));
                    ?>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer>
<?php wp_footer(); ?><!-- Affiche le lien vers les scripts Js déclarés dans le fichier functions.php -->
</body>
</html>