<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>CRUD véhicules</title>
</head>

<body>
    <?php
   include 'header.php';
   require ('Models/functions.php');
   ?>
    <div class="container">
        <h2>Ajout d'un nouveau véhicule</h2>
        <form name="ajoutvehicule" method="get" action="crudvehicule.php">
            <div class="form-group">
                <select class="custom-select my-2" name="type">
                    <option selected>Choisir le type de véhicule</option>
                    <option value="VL">Véhicule léger</option>
                    <option value="VU">Véhicule Utilitaire</option>
                </select>
                <select class="custom-select my-2" name="modele">
                    <option selected>Choisir le modèle de véhicule</option>
                    <option value="Fiat 500">Fiat 500</option>
                    <option value="Renault Clio">Renault Clio</option>
                    <option value="Peugeot 308">Peugeot 308</option>
                    <option value="Renault Scénic">Renault Scénic</option>
                    <option value="Peugeot 5008">Peugeot 5008</option>
                    <option value="Peugeot expert 12m3">Peugeot expert 12m3</option>
                    <option value="Iveco daily 20m3">Iveco Daily 20m3</option>
                </select>
                <input type="text my-5" placeholder="Immatriculation" name="immat" class="form-control"></input><br />
                <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter" value="ajouterv">Ajouter</button>
            </div>
        </form>
<?php
ajouterv();
?>
<div class='d-flex'> 
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
</body>

</html>