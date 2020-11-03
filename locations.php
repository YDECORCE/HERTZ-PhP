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
    <div class="container py-5">
                    <table class="table table-hover table-sm">
                <thead class="bg_entete_tab text-center">
                    <tr>
                        <th scope="col" style="width:5%">Id Location</th>
                        <th scope="col" style="width:15%">Nom</th>
                        <th scope="col" style="width:15%">Modèle</th>
                        <th scope="col" style="width:10%">Immatriculation</th>
                        <th scope="col" style="width:20%">début location</th>
                        <th scope="col" style="width:20%">fin location</th>
                        <th scope="col" style="width:5%">Retour</th>
                        <th>&nbsp;</th>
                        </tr>
                </thead>
                <tbody>
                    <?php aff_louer()?>
                </tbody>
            </table>
            </div>
    <?php
modifil();
ajouterl();
?>

</div>
    <?php
include 'footer.php';
?>
