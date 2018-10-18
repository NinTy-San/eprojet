<?php 

// Déclaration des zones de widget : 
function eprojet_init_widgets(){

    register_sidebar(array(
        'name'          => 'Region entête',     // nom qui apparaît dans le back-office
        'id'            => 'region-entete',     // id de la zone pour pouvoir l'inserer dans un template 
        'description'   => 'Ajoute des widgets à l\'entête de la page d\'accueil',  // description qui apparaît dans le BO
        'before_widget' => '',                  // pour retirer les balises <li> par défaut avant le widget                  
        'after_widget'  => '',                  // pour retirer les balises <li> par défaut avant le widget  
        'before_title'  => '<h1>',              //Pour mettre le titre du widget dans un <h1> au lieu d'un <h2> par 
        'after_title'  => '</h1>',

    ));
    register_sidebar(array(
        'name'          => 'Colonne de droite',
        'id'            => 'colonne-droite',
        'description'   => 'Ajoute des widgets à la barre latérale de droite',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
   
    register_sidebar(array(
        'name'          => 'Région footer gauche',
        'id'            => 'footer-gauche',
        'description'   => 'Ajoute des widgets au coté footer de gauche',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));



}

add_action('widgets_init', 'eprojet_init_widgets'); // j'execute ma fonction nommée "eprojet_init_widgets" lors de l'initialisation des widgets par core de WP : "widgets_init" s'apelle un HOOK car y sont accrochées les fonctions du core de WP ainsi que la notre. Elles s'exécutent ensemble lors de l'exécution de ce hook.

//---------------------------------
// Déclaration de zone de menu
function eprojet_init_menus(){
    register_nav_menu('primary', 'menu principal');// crée une zone de menu d'id "primary" et de nom "menuprincipale" dans le BO
  
    register_nav_menu('menu-footer', 'menu footer');




}
add_action('init', 'eprojet_init_menus'); // On execute notre donction "eprojet_init_menus" dans le hook appelé "init" du core de Wp.