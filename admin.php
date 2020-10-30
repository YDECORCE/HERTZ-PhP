   <?php
    $titrepage='Parc auutomobile';
    include 'header.php';
    require 'Models/functions.php';
   ?>
   <div class="bg">
   <div class="container bgblanc">
       <div class="col-12 d-flex justify-content-center">
           <h1 style="padding-top:20px"> Etat du parc automobile à la date du <?php echo date('j M Y'); ?></h1>
       </div>
   </div>
   </div>
   <?php
    include 'footer.php';
?>
