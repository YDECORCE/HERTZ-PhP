   <?php
    $titrepage='Parc auutomobile';
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
