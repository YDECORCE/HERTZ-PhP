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
                            <input type="text my-5" placeholder="Prénom" name="prenom"
                                class="form-control"></input><br />
                            <input type="text my-5" placeholder="Adresse" name="adresse"
                                class="form-control"></input><br />
                            <input type="text my-5" placeholder="Code postal" name="cp"
                                class="form-control"></input><br />
                            <input type="text my-5" placeholder="Ville" name="ville" class="form-control"></input><br />
                            <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                                value="ajoutc">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container pt-5">
        <div class="d-flex">
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:5%' value='Id'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:14%' value='Nom'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:14%' value='Prénom'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:20%' value='Adresse'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:7%' value='CP'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:20%' value='Ville'>
        </div>

        <?php
ajouterc();
aff_client();
modific();
supric();
aff_historique();
?>
        <!--affichage historique client-->
        <div class="container my-5">
            <h2 class=" text-center py-5"> Historique client</h2>
            <table class="table">
                <thead class="bg_entete_tab">
                    <tr>
                        <th scope="col">Véhicule</th>
                        <th scope="col">Immatriculation</th>
                        <th scope="col">Début de Location</th>
                        <th scope="col">Début de Location</th>
                    </tr>
                </thead>
                <tbody>
                    <!--début boucle while-->
                    <tr class=" text-center">
                        <td>voiture</td>
                        <td>immat</td>
                        <td>debut</td>
                        <td>fin</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <?php
include 'footer.php';
?>
