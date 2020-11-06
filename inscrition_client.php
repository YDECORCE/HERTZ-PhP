   <?php
    $titrepage='Administration clients';
   include 'header_log.php';
   require ('Models/functions.php');
   ?>

    <div class="container-fluid mt-5">
        <div class="row mb-5">
            <div class="col-12 col-lg-6 ">
                <img src="Img\car-1149997_1920.jpg" alt="image" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 py-5">
                <h2 class="mb-5 text-center">Ajout d'un nouveau client</h2>
                <form name="ajoutclient" method="get" action="inscrition_client.php">
                    <div class="form-group">
                        <input type="text my-5" placeholder="Nom" name="nom" class="form-control"></input><br />
                        <input type="text my-5" placeholder="Prénom" name="prenom" class="form-control"></input><br />
                        <input type="text my-5" placeholder="Adresse" name="adresse" class="form-control"></input><br />
                        <input type="text my-5" placeholder="Code postal" name="cp" class="form-control"></input><br />
                        <input type="text my-5" placeholder="Ville" name="ville" class="form-control"></input><br />
                        <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                            value="ajoutc">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    </div>
    <?php
ajouter_client();



?>
    </div>

    <?php

include 'footer.php';
?>