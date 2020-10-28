<?php
    function connect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=hertz;port=3306;charset=utf8', 'root', '');
            return $bdd;
         
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
        


        

        
   
    
    function ajouterv()
    {
        $bdd=connect();
        if(isset($_GET['ajouter']))
        {
            $ajouter = $bdd->prepare('INSERT INTO vehicules ( type_Vehicules, modele_Vehicules, immatriculation_Vehicules) 
            VALUES (:type_Vehicules, :modele_Vehicules, :immatriculation_Vehicules)');
            $ajouter->bindParam(':type_Vehicules', $_GET['type'],PDO::PARAM_STR);
            $ajouter->bindParam(':modele_Vehicules', $_GET['modele'],PDO::PARAM_STR);
            $ajouter->bindParam(':immatriculation_Vehicules', $_GET['immat'],PDO::PARAM_STR);
            $estceok=$ajouter->execute();
            
                if($estceok)
                {
                    echo 'votre enregistrement a été ajouté avec succès <br>';
                } 
                else 
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue <br>';
                }
            }
    }

    function ajouterc()
    {
        $bdd=connect();
        if(isset($_GET['ajouter'])&& !empty($_GET['nom'])  && !empty($_GET['prenom'])  && !empty($_GET['adresse']) && !empty($_GET['cp']) && !empty($_GET['ville'])) {
            $ajouter2 = $bdd->prepare('INSERT INTO clients (Nom_Clients, Prenom_Clients, adresse_Clients, CP_Clients, Ville_Clients  ) VALUES (:Nom_Clients, :Prenom_Clients, :adresse_Clients, :CP_Clients, :Ville_Clients)');
            $ajouter2->bindParam(':Nom_Clients', $_GET['nom'],PDO::PARAM_STR);
            $ajouter2->bindParam(':Prenom_Clients', $_GET['prenom'],PDO::PARAM_STR);
            $ajouter2->bindParam(':adresse_Clients', $_GET['adresse'],PDO::PARAM_STR);
            $ajouter2->bindParam(':CP_Clients', $_GET['cp'],PDO::PARAM_STR);
            $ajouter2->bindParam(':Ville_Clients', $_GET['ville'],PDO::PARAM_STR);
            $estceok = $ajouter2->execute();
        
                if($estceok){
                    echo 'votre enregistrement a été ajouté avec succès <br>';
                } else {
                    echo 'Veuillez recommencer svp, une erreur est survenue <br>';
                }
    }
    }
    function ajouterl()
    {
        $bdd=connect();
        if(isset($_GET['ajouter']))
        {
            $ajouter = $bdd->prepare('INSERT INTO louer ( id_Clients, id_Vehicules, date_fin_Louer, retour_Louer, date_debut_Louer) 
            VALUES (:id_Clients, :id_Vehicules, :date_fin_Louer, 0, :date_debut_Louer)');
            $ajouter->bindParam(':id_Clients', $_GET['idc'],PDO::PARAM_STR);
            $ajouter->bindParam(':id_Vehicules', $_GET['idv'],PDO::PARAM_STR);
            $ajouter->bindParam(':date_fin_Louer', $_GET['fin'],PDO::PARAM_STR);
            $ajouter->bindParam(':date_debut_Louer', $_GET['debut'],PDO::PARAM_STR);
            $estceok=$ajouter->execute();
            // $ajouter->debugDumpParams();
            //  die;
            
                if($estceok)
                {
                    echo 'votre enregistrement a été ajouté avec succès <br>';
                } 
                else 
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue <br>';
                }
            }
    }
    function modifiv() 
    {
        $bdd=connect();
        if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['type'])  && !empty($_GET['modele']) && !empty($_GET['immat']))
        {
            $message = '';
            $modifierv2 = $bdd->prepare('UPDATE vehicules SET id_Vehicules = :id_Vehicules, type_Vehicules = :type_Vehicules, modele_Vehicules = :modele_Vehicules, immatriculation_Vehicules = :immatriculation WHERE id_Vehicules =:id_Vehicules');
            $modifierv2->bindParam(':id_Vehicules', $_GET['id'], PDO::PARAM_STR);
            $modifierv2->bindParam(':type_Vehicules', $_GET['type'], PDO::PARAM_STR);
            $modifierv2->bindParam(':modele_Vehicules', $_GET['modele'], PDO::PARAM_STR);
            $modifierv2->bindParam(':immatriculation', $_GET['immat'], PDO::PARAM_STR);        
               
            $modifierv2 = $modifierv2->execute();
            // $modifier->debugDumpParams();
            // die;
                if($modifierv2)
                {
                    echo 'votre enregistrement a bien été modifié';
                } 
                else 
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
        }

    }
    function modific() 
    {
        $bdd=connect();
       
            if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['nom'])  && !empty($_GET['prenom'])&& !empty($_GET['adresse'])&& !empty($_GET['cp'])&& !empty($_GET['ville'])){
            
            $modifierc2 = $bdd->prepare('UPDATE clients SET id_Clients = :id_Clients, Nom_Clients = :Nom_Clients, Prenom_Clients = :Prenom_Clients, adresse_Clients = :adresse_Clients, CP_Clients = :CP_Clients, Ville_Clients = :Ville_Clients WHERE id_Clients =:id_Clients');
            $modifierc2->bindParam(':id_Clients', $_GET['id'],PDO::PARAM_INT);
            $modifierc2->bindParam(':Nom_Clients', $_GET['nom'],PDO::PARAM_STR);
            $modifierc2->bindParam(':Prenom_Clients', $_GET['prenom'],PDO::PARAM_STR);
            $modifierc2->bindParam(':adresse_Clients', $_GET['adresse'],PDO::PARAM_STR);
            $modifierc2->bindParam(':CP_Clients', $_GET['cp'],PDO::PARAM_INT);
            $modifierc2->bindParam(':Ville_Clients', $_GET['ville'],PDO::PARAM_STR);
            $modifierc2 = $modifierc2->execute();
            
                if($modifierc2){
                    echo 'votre enregistrement a bien été modifié';
                } 
                else 
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
        }

    }
    function supriv()
    {
        $bdd=connect();
        if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
            
            $supprimer = $bdd->prepare('DELETE FROM vehicules WHERE id_Vehicules =:id_Vehicule');
            $supprimer->bindParam(':id_Vehicule', $_GET['id'],PDO::PARAM_STR);


            $supprimer = $supprimer->execute();
                if($supprimer)
                {
                    echo 'votre enregistrement a bien été supprimé';
                } 
                else 
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
            }
    }
    function supric()
    {
        $bdd=connect();
        if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id']))
        {
            
            $supprimer2 = $bdd->prepare('DELETE FROM clients WHERE id_Clients =:id_Clients');
            $supprimer2->bindParam(':id_Clients', $_GET['id'],PDO::PARAM_STR);


            $supprimer2 = $supprimer2->execute();
                if($supprimer2)
                {
                    echo 'votre enregistrement a bien été supprimé';
                    
                
                } else
                {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
        }
    }
     function aff_voiture() 
    {
        $bdd=connect();
        $recuperation = $bdd->query('SELECT * FROM vehicules');
       
         while ($voit = $recuperation->fetch()) 
        {
            echo "<form><div class='d-flex'> <input class='form-control length_crud_veh' type='text' name='id' value='".$voit['id_Vehicules']."'>
            <input class='form-control length_crud_veh' type='text' name='type' value='".$voit['type_Vehicules']."'>
            <input class='form-control length_crud_veh' type='text' name='modele' value='".$voit['modele_Vehicules']."'>
            <input class='form-control length_crud_veh' type='text' name='immat' value='".$voit['immatriculation_Vehicules']."'>
            
            <button class='btn btn_jaune btn-primary' type='submit' value='modifier' name='action'>Modifier</button>
            <button class='btn btn-danger' type='submit' value='supprimer' name='action'>Supprimer</button>
            
            </form>
            
            </div>";

        }
    }
    function aff_client() {
        $bdd=connect();
        $recuperation = $bdd->query('SELECT * FROM clients');
       
         while ($client = $recuperation->fetch()) {
         echo "<form><div class='d-flex'> <input class='form-control length_crud_Cl' style='width:5%' type='text' name='id' value='".$client['id_Clients']."'>
        <input class='form-control length_crud_Cl' style='width:14%' type='text' name='nom' value='".$client['Nom_Clients']."'>
        <input class='form-control length_crud_Cl' style='width:14%' type='text' name='prenom' value='".$client['Prenom_Clients']."'>
        <input class='form-control length_crud_Cl' style='width:20%' type='text' name='adresse' value='".$client['adresse_Clients']."'>
        <input class='form-control length_crud_Cl' style='width:7%' type='text' name='cp' value='".$client['CP_Clients']."'>
        <input class='form-control length_crud_Cl' style='width:20%' type='text' name='ville' value='".$client['Ville_Clients']."'>
        
         <button class='btn btn_jaune btn-primary' type='submit' value='modifier' name='action'>Modifier</button>
        <button class='btn btn-danger' type='submit' value='supprimer' name='action'>Supprimer</button>
        
         </form>
        
         </div>";

        }
    }
    function aff_louer() 
    {
        $bdd=connect();
        $recuperation = $bdd->query('SELECT * FROM louer ');
        while($louer = $recuperation->fetch())
        {
            echo "<form><div class='d-flex'> <input class='form-control length_crud_veh' type='text' name='idc' value='".$louer['id_Clients']."'>
            <input class='form-control length_crud_veh' type='text' name='idv' value='".$louer['id_Vehicules']."'>
            <input class='form-control length_crud_veh' type='text' name='fin' value='".$louer['date_fin_Louer']."'>
            <input class='form-control length_crud_veh' type='checkbox' name='retour' value='".$louer['retour_Louer']."'>
            <input class='form-control length_crud_veh' type='text' name='debut' value='".$louer['date_debut_Louer']."'>
            
            <button class='btn btn_jaune btn-primary' type='submit' value='modifier' name='action'>Modifier</button>
                       
            </form>
            
            </div>";

        }
    }
    
    function refresh_pages($url){
    $delai=1; 
    header("Refresh: $delai;url=$url");
    }


function liste_déroulante_client(){
    $bdd=connect();
    $reponse = $bdd->query('SELECT * FROM clients');
    echo'<select class="custom-select my-2" name="idc">';
    echo'<option value="NULL">Choisir le client</option>';
    while ($donnees = $reponse->fetch()) {
        echo'<option value='.$donnees['id_Clients'].'>'.$donnees['id_Clients'].' '.$donnees['Prenom_Clients'].' '.$donnees['Nom_Clients'].' '.$donnees['CP_Clients'].' '.$donnees['Ville_Clients'].' </option>';
    }
    echo'</select>';
    }

    function liste_déroulante_vehicule(){
        $bdd=connect();
        $reponse = $bdd->query('SELECT * FROM vehicules');
        echo'<select class="custom-select my-2" name="idv">';
        echo'<option value="NULL">Choisir le véhicule</option>';
        while ($donnees = $reponse->fetch()) {
            echo'<option value='.$donnees['id_Vehicules'].'>'.$donnees['id_Vehicules'].' / '.$donnees['type_Vehicules'].' / '.$donnees['modele_Vehicules'].' / '.$donnees['immatriculation_Vehicules'].' </option>';
        }
        echo'</select>';
        }

        function modifil()
        {
        $bdd=connect();
        if(isset($_GET['action']) && $_GET['action']=="modifier" && !empty($_GET['idc']) && !empty($_GET['idv']) && !empty($_GET['fin']) && !empty($_GET['retour']) && !empty($_GET['debut']))
        {
        $message = '';
        $modifierv2 = $bdd->prepare('UPDATE louer SET id_Clients = :id_Clients, id_Vehicules = :id_Vehicules, date_fin_Louer = :date_fin_Louer, retour_Louer = :retour_Louer, date_debut_Louer = :date_debut_Louer WHERE id_Vehicules =:id_Vehicules');
        $modifierv2->bindParam(':id_Clients', $_GET['idc'], PDO::PARAM_STR);
        $modifierv2->bindParam(':id_Vehicules', $_GET['idv'], PDO::PARAM_STR);
        $modifierv2->bindParam(':date_fin_Louer', $_GET['fin'], PDO::PARAM_STR);
        $modifierv2->bindParam(':retour_Louer', $_GET['retour'], PDO::PARAM_STR);
        $modifierv2->bindParam(':date_debut_Louer', $_GET['debut'], PDO::PARAM_STR);
        
        $modifierv2 = $modifierv2->execute();
        // $modifier->debugDumpParams();
        // die;
        if($modifierv2)
        {
        echo 'votre enregistrement a bien été modifié';
        }
        else
        {
        echo 'Veuillez recommencer svp, une erreur est survenue';
        }
        }
        
        }

?>