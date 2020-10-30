    <?php
    $titrepage='Gestion locations';
   include 'header.php';
   require ('Models/functions.php');
   ?>
    <div class="container" style="min-height:100vh">
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
        <!-- <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='Id Client'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='Id véhicule'> -->
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:15%' value='Nom'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:15%' value='Modèle'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:15%' value='Immatriculation'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:18%' value='début location'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:18%' value='fin location'>
        <input class='form-control length_crud_Cl bg_entete_tab' style='width:10%' value='retour'>
        
  

    <?php

aff_louer();
modifil();
ajouterl();
?>
</div>
</div>
    <?php
include 'footer.php';
?>
