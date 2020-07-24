<?php

// Je créé la classe permettant d'effectuer des requêtes SQL
// 1 méthode = 1 requête
class DBData {
    /** @var PDO */
    private $pdo;
    
    // constructeur est appelé automatiquement à l'instanciation de notre objet
    public function __construct() {
        $dsn = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
        $username = 'oblog';
        $password = 'oblog';

        try {
            $this->pdo = new PDO(
                $dsn,
                $username,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );
        }
        catch (PDOException $e) {
            die('Connection failed');
        }
    }
    
    // Méthode renvoyant la liste des articles en DB
    public function getPosts() {
        $sql = '
            SELECT posts.*, authors.name AS author_name, categories.name AS category_name, DATE(posts.published_date) AS dateFormate
            FROM posts
            INNER JOIN categories ON categories.id = posts.categories_id
            INNER JOIN authors ON authors.id = posts.authors_id
            ORDER BY published_date DESC
        ';
        $pdoStatement = $this->pdo->query($sql);
        
        // Récupération des résultats
        $allResults = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        
        // Renvoi des résultats
        return $allResults;
    }
    
    // Méthode permettant de retourner la liste des catégories en DB
    public function getCategories() {
        $sql = '
            SELECT *
            FROM categories
            ORDER BY position ASC
        ';
        $pdoStatement = $this->pdo->query($sql);
        
        // Récupération des résultats + renvoi des résultats
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Méthode permettant de renvoyer la liste des auteurs en DB
    public function getAuthors() {
        $sql = '
            SELECT *
            FROM authors
            ORDER BY name ASC
        ';
        $pdoStatement = $this->pdo->query($sql);
        
        // Récupère les données, et je les renvoie
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // exemple de méthode "avancée" permettant de "factoriser" notre code effectuant les requêtes SQL
    private function getGeneric($sqlParam) {
        $pdoStatement = $this->pdo->query($sqlParam);
        
        // Récupération des résultats + Renvoi des résultats
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // --- Méthodes supplémentaires ---
    
    // Méthode permettant de renvoyer les données sur l'article dont l'identifiant est donné en paramètre/argument
    public function getPost($id) {
        $sql = "
            SELECT posts.*, authors.name AS author_name, categories.name AS category_name
            FROM posts
            INNER JOIN categories ON categories.id = posts.categories_id
            INNER JOIN authors ON authors.id = posts.authors_id
            WHERE posts.id = {$id}
        ";
        // echo $sql; exit;
        $pdoStatement = $this->pdo->query($sql);
        
        // Récupère la ligne de résultat, et je la renvoie
        return $pdoStatement->fetch(PDO::FETCH_ASSOC);
    }
    
    // Méthode permettant de rechercher les articles contenant le mot en paramètre
    public function searchPosts($search) {
        $sql = "
            SELECT posts.*, authors.name AS author_name, categories.name AS category_name, DATE(posts.published_date) AS dateFormate
            FROM posts
            INNER JOIN categories ON categories.id = posts.categories_id
            INNER JOIN authors ON authors.id = posts.authors_id
            WHERE text LIKE \"%{$search}%\"
            OR short_text LIKE \"%{$search}%\"
            OR title LIKE \"%{$search}%\"
            OR authors.name LIKE \"%{$search}%\"
            OR categories.name LIKE \"%{$search}%\"
            ORDER BY published_date DESC
        ";
        $pdoStatement = $this->pdo->query($sql);
        
        return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
}
