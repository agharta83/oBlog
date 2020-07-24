<?php

// Ce fichier config permet de ne pas répéter notre code (factoriser)

// Inclusion de la classe gérant les données de la DB
require(__DIR__.'/../classes/DBData.php');

// Je crée une instance de DBData
$dbData = new DBData();

// Je récupère toutes les catégories
$categoriesList = $dbData->getCategories();
//print_r($categoriesList);exit; // debug

// Je récupère tous les auteurs
$authorsList = $dbData->getAuthors();
// print_r($authorsList);exit; // debug
