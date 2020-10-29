<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Gestions Location</title>
</head>

<body>
    <?php
   include 'header.php';
   require ('Models/functions.php');
   ?>
    <div class="container cont50vh pt-5">
        <h2>Ajout d'un nouvelle location</h2>
        <form name="ajoutlocation" method="get" action="locations.php">
            <div class="form-group">
                <?php 
                liste_déroulante_client();
                liste_déroulante_vehicule();
                 ?>
                <input type="date" placeholder="date de début de location" name="debut" class="form-control"></input><br />
                <input type="date" placeholder="date de début de location" name="fin" class="form-control"></input><br />
                <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                    value="ajoutl">Créer une location</button>
            </div>
        </form>
    </div>    
    
    <div class="container d-flex" style="flex-wrap:wrap">
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='Id Client'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='Id véhicule'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:12%' value='Nom'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:12%' value='Modèle'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:12%' value='Immatriculation'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:16%' value='début location'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:16%' value='fin location'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='retour'>
        
  

    <?php

aff_louer();
modifil();
ajouterl();
?>
</div>

    <?php
include 'footer.php';
?>
</body>

</html>