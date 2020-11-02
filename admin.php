   <?php
    $titrepage='Parc automobile';
    include 'header.php';
    require 'Models/functions.php';
   ?>
   <div class="bg">
       <div class="container bgblanc">
           <div class="col-12 d-flex justify-content-center">
               <h1 style="padding-top:20px"> Etat du parc automobile à la date du <?php echo date('j M Y'); ?></h1>
           </div>
           <div class="col-12">
               <h2>Véhicules disponibles à la location</h2>
               <table class="table table-hover table-sm">
                   <thead class="table-success text-center" >
                       <tr>
                           <th scope="col">Id Vehicule</th>
                           <th scope="col">Véhicule</th>
                           <th scope="col">Immatriculation</th>
                           <th scope="col">Durée de disponibilité</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php aff_voitdispo()?>
                   </tbody>
               </table>
           </div>
           <?php
           aff_voit_en_location();
           aff_voitrouge();
           ?>
       </div>
   </div>
   <?php
      include 'footer.php';
?>