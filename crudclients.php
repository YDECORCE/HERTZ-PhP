<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>CRUD clients</title>
</head>

<body>
    <?php
   include 'header.php';
   require ('Models/functions.php');
   ?>
    <div class="container pt-5">
        <h2>Ajout d'un nouveau client</h2>
        <form name="ajoutvehicule" method="get" action="crudvehicule.php">
            <div class="form-group">
                <input type="text my-5" placeholder="Nom" name="nom" class="form-control"></input><br />
                <input type="text my-5" placeholder="Prénom" name="prenom" class="form-control"></input><br />
                <input type="text my-5" placeholder="Adresse" name="adresse" class="form-control"></input><br />
                <input type="text my-5" placeholder="Code postal" name="cp" class="form-control"></input><br />
                <input type="text my-5" placeholder="Ville" name="ville" class="form-control"></input><br />
                <button class="btn btn_jaune btn-primary my-2" type="submit" name="ajouter"
                    value="ajouterc">Ajouter</button>
            </div>
        </form>
        <!-- <?php
// ajouterc();
?> -->
        <div class='d-flex'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:5%' value='Id'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:14%' value='Nom'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:14%' value='Prénom'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:27%' value='Adresse'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:7%' value='CP'>
            <input class='form-control length_crud_Cl bg_entete_tab' style='width:13%' value='Ville'>
        </div>
        <?php


?>

    </div>
    <?php
include 'footer.php';
?>
</body>

</html>