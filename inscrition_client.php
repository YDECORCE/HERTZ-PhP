   <?php
    $titrepage='Création compte';
    require 'header_client.php';
    require ('Models/functions.php');
    var_dump($_SESSION);
   ?>

   <div class="container-fluid bg">
       <div class="container bgblanc">

           <h1 class="text-center">Complétez vos coordonnées</h1>
           <div class="row w-100 justify-content-center mx-0">
               <div class="col-12 col-lg-8 d-flex justify-content-center w-100" style="flex-wrap:wrap">
                   <form class="w-100" name="ajoutclient" method="get" action="login.php">
                       <div class="form-group">
                            <input type="text" hidden name="id" value=<?php echo $_SESSION['identifiant'] ?>/>
                           <input type="text my-5" placeholder="Nom" name="nom" class="form-control"></input><br />
                           <input type="text my-5" placeholder="Prénom" name="prenom"
                               class="form-control"></input><br />
                           <input type="text my-5" placeholder="Adresse" name="adresse"
                               class="form-control"></input><br />
                           <input type="text my-5" placeholder="Code postal" name="cp"
                               class="form-control"></input><br />
                           <input type="text my-5" placeholder="Ville" name="ville" class="form-control"></input><br />
                           <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                               value="ajoutc">Valider</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <?php
ajouter_client('login.php');
?>
   </div>
   <?php

include 'footer.php';
?>