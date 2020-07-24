<?php

// Inclusion du fichier de configuration
require(__DIR__.'/inc/config.php');

// Si une recherche est demandée
if (!empty($_GET['search'])) {
    // Je veux récupérer le ou les mots recherchés
    $searchWords = $_GET['search'];
    // echo $searchWords;exit; //debug

    // Je récupère les articles contenant le mot recherché
    $postsList = $dbData->searchPosts($searchWords);
    // print_r($postsList);exit; // debug
}
// Sinon, j'affiche la home "classique"
else {
    // Je récupère tous les articles
    $postsList = $dbData->getPosts();
    // print_r($postsList);exit; // debug
}

// Inclusion du fichier de vue à la fin
require(__DIR__.'/views/home.php');
