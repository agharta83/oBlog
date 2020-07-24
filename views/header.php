<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Open Sans (merci google) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>À la dérive</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="index.php">À la dérive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <?php foreach ($categoriesList as $currentCategory) : ?>
                <a class="nav-item nav-link" href="#"><?= $currentCategory['name'] ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </nav>
      
      <div class="jumbotron jumbotron-fluid d-md-none d-lg-block">
        <div class="container text-white text-center">
          <h1 class="display-4">À la dérive</h1>
          <hr>
          <p class="lead">Un blog collaboratif de développeurs web dérivant délibérément au beau milieu de l'espace</p>
        </div>
      </div>
    </header>
