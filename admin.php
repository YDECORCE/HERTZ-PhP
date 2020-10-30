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
   <?php
   include 'header.php';
   require 'Models/functions.php';
   ?>
<div class="container">
<div class="col-12 d-flex justify-content-center mt-5">
    <h1> Etat du parc automobile à la date du <?php echo date('d-m-Y'); ?></h1>
</div>
</div>

<?php

include 'footer.php';
?>
</body>