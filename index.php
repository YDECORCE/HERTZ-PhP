<?php
include 'header_log.php';
require 'Models/functions.php';
?>
<section id="listevehicule" class="bg">
    <h1>Réservez dès maintenant votre véhicule</h1>
    <div class="container d-flex" style="flex-wrap:wrap">
      <?php 
          aff_voitdispoFront() ?>
    </div>

    <div class="row justify-content-center py-5">
      <button type="submit" class="btn btn_jaune">Réserver un véhicule</button>
    </div>
  </section>
  <?php
include 'footer.php';
?>