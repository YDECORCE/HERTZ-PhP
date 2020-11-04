    <?php
    $titrepage='Administration clients';
   include 'header.php';
   require ('Models/functions.php');
   ?>

    <div class="container-fluid mt-5">
        <div class="row mb-5">
            <div class="col-12 col-lg-6 ">
                <img src="Img\car-1149997_1920.jpg" alt="image" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 py-5">
                <h2 class="mb-5 text-center">Ajout d'un nouveau client</h2>
                <form name="ajoutclient" method="get" action="crudclients.php">
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

    <div class="container py-5">
                   <table class="table table-hover table-sm">
                <thead class="bg_entete_tab text-center">
                    <tr>
                        <th scope="col" style="width:5%">Id</th>
                        <th scope="col" style="width:10%">Nom</th>
                        <th scope="col" style="width:10%">Prénom</th>
                        <th scope="col" style="width:20%">Adresse</th>
                        <th scope="col" style="width:10%">CP</th>
                        <th scope="col" style="width:15%">Ville</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php aff_client()?>
                </tbody>
            </table>
      
    </div>
    <?php
ajouterc();

modific();
supric();

?>
    </div>

    <?php
    aff_historique();
include 'footer.php';
?>