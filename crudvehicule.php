    <?php
    $titrepage='Administration Véhicules';
    include 'header.php';
    require ('Models/functions.php');
   ?>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-12 col-lg-6 py-5">
                <h2 class=" text-center py-5">Ajout d'un nouveau véhicule</h2>
                <form name="ajoutvehicule" method="get" action="crudvehicule.php">
                    <div class="form-group">
                        <select class="custom-select my-2" name="type">
                            <option selected>Choisir le type de véhicule</option>
                            <option value="VL">Véhicule léger</option>
                            <option value="VU">Véhicule Utilitaire</option>
                        </select>
                        <select class="custom-select my-3" name="modele">
                            <option selected>Choisir le modèle de véhicule</option>
                            <option value="Fiat 500">Fiat 500</option>
                            <option value="Renault Clio">Renault Clio</option>
                            <option value="Peugeot 308">Peugeot 308</option>
                            <option value="Renault Scénic">Renault Scénic</option>
                            <option value="Peugeot 5008">Peugeot 5008</option>
                            <option value="Peugeot expert 12m3">Peugeot expert 12m3</option>
                            <option value="Iveco daily 20m3">Iveco Daily 20m3</option>
                        </select>
                        <input type="text" placeholder="Immatriculation" name="immat"
                            class="form-control"></input><br />
                        <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                            value="ajouterv">Ajouter</button>
                    </div>
                </form>
                <?php
ajouterv();
?>
            </div>
            <div class="col-12 col-lg-6 ">
                <img src="Img\driving-2732934_1920.jpg" alt="image" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex">
            <input class='form-control length_crud_veh bg_entete_tab' value='Identifiant Véhicule'>
            <input class='form-control length_crud_veh bg_entete_tab' value='Type de Véhicule'>
            <input class='form-control length_crud_veh bg_entete_tab' value='Modèle de Véhicule'>
            <input class='form-control length_crud_veh bg_entete_tab' value='Immatriculation'>
        </div>
        <?php
aff_voiture();
modifiv();
supriv();

?>

    </div>
    <?php
include 'footer.php';
?>