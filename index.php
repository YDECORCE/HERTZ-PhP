<?php
include 'header_log.php';
require 'Models/functions.php'
?>
<section id="listevehicule">
<div class="container">


  <section id="listevehicule" class="bg">
    <div class="container d-flex" style="flex-wrap:wrap">
      <?php 
;
aff_voitdispoFront() ?>
    </div>

    <div class="row justify-content-center my-5">
      <button type="submit" class="btn btn_jaune">Réserver un véhicule</button>
    </div>
  </section>
  <?php
include 'footer.php';
?>