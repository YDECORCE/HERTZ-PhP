<?php
    $titrepage='Fiche clients';
   include 'header_client.php';
   require ('Models/functions.php');
//    $id_client=$_POST['idc'];
    $id_client=2;
    $client=detailclient($id_client);
       ?>
<div class="bg">
  <div class="container py-5 bgblancdiv">
    <h2> Bonjour <?php echo $client['Prenom_Clients'].' '.$client['Nom_Clients'];?></h2>
    <form method="get" action="fiche_client.php">
      <!--formulaire modification données client par le client-->
      <div class="container">
        <input hidden class='form-control' type='text' name='id' value="<?php echo$client['id_Clients']?>">
        <input hidden class='form-control' type='text' name='nom' value="<?php echo$client['Nom_Clients']?>">
        <input hidden class='form-control' type='text' name='prenom' value="<?php echo$client['Prenom_Clients']?>">
        <div class="form-group">
          <label for="adresse">Votre adresse</label>
          <input type="text" class="form-control" id="adresse" name="adresse"
            value="<?php echo$client['adresse_Clients']?>">
        </div>
        <div class="form-group">
          <label for="CP">Code Postal</label>
          <input type="text" class="form-control" id="CP" name="cp" value="<?php echo$client['CP_Clients']?>">
        </div>
        <div class="form-group">
          <label for="ville">Ville</label>
          <input type="text" class="form-control" id="ville" name="ville" value="<?php echo$client['Ville_Clients']?>">
        </div>
      </div>
      <div class="row w-100 my-5 justify-content-around">
        <div class="col-12 col-sm-4 d-flex justify-content-center">
          <button class='btn btn_jaune ' type='submit' value='modifier' name='action'>Modifier vos
            coordonnées</button>
    </form>
  </div>
  <div class="col-12 col-sm-4 d-flex justify-content-center">
    <button class="btn btn_jaune" type="button" data-toggle="collapse" data-target="#location_active"
      aria-expanded="false" aria-controls="location_active"> Vos Locations en cours</button>
  </div>
  <div class="col-12 col-sm-4 d-flex justify-content-center">
  <button class="btn btn_jaune" type="button" data-toggle="collapse" data-target="#historique_client"
      aria-expanded="false" aria-controls="historique_client">Vos anciennes
      locations</button>
  </div>

</div>
</div>
<?php
modific('fiche_client.php');
?>
<div class="container-fluid">
  <div class="row w-100 mx-0">
    <div class="col-12 col-sm-6">
      <?php aff_location_indivuel($id_client);?>
    </div>
    <div class="col-12 col-sm-6">
      <?php aff_historique_client($id_client); ?>
    </div>
  </div>
</div>
</div>


<?php
include 'footer.php';
?>