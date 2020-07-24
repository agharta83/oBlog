<?php

// Inclusion du fichier de configuration
require(__DIR__.'/inc/config.php');

// Je récupère l'id de l'article demandé
if (isset($_GET['id'])) {
    $postId = intval($_GET['id']);
}
else {
    $postId = 0;
}

// Je récupère l'article dont on veut le détail
$currentPost = $dbData->getPost($postId);
// print_r($currentPost);exit; // debug

// Inclusion de la vue à la fin du script
require(__DIR__.'/views/post.php');
