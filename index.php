<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Hertz - Lons le Saunier</title>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light trait">
  <a class="navbar-brand" href="#"><img src="Img/hertz-logo-black.png" alt="logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Connexion</a>
      </li>
    </ul>
  </div>
</nav>

<section id="listevehicule">
<div class="container">
  <?php
    // aff_voitdispo()
?>
</div>
</section>
<div class="row justify-content-center">
<button type="submit" class="btn btn_jaune">Réserver un véhicule</button>
</div>
<?php
include 'footer.php';
?>
</body>
</html>