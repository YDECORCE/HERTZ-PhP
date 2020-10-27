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
        if(isset($_GET['ajouter'])){
            $ajouter = $bdd->prepare('INSERT INTO vehicules ( type_Vehicules, modele_Vehicules, immatriculation_Vehicules) 
            VALUES (:type_Vehicules, :modele_Vehicules, :immatriculation_Vehicules)');
            $ajouter->bindParam(':type_Vehicules', $_GET['type'],PDO::PARAM_STR);
            $ajouter->bindParam(':modele_Vehicules', $_GET['modele'],PDO::PARAM_STR);
            $ajouter->bindParam(':immatriculation_Vehicules', $_GET['immat'],PDO::PARAM_STR);
            $estceok=$ajouter->execute();
            
                if($estceok){
                    echo 'votre enregistrement a été ajouté avec succès <br>';
                } else {
                    echo 'Veuillez recommencer svp, une erreur est survenue <br>';
                }
    }
    // function ajouterc()
    // {

    //     if(isset($_GET['action']) && !empty($_GET['Nom_Clients'])  && !empty($_GET['Prenom_Clients'])  && !empty($_GET['adresse_Clients']) && !empty($_GET['CP_Clients']) && !empty($_GET['Ville_Clients'])){
    //         $toto =  $_GET['date'];
    //         $ajouter2 = $bdd->prepare('INSERT INTO clients (Nom_Clients, Prenom_Clients, adresse_Clients, CP_Clients, Ville_Clients  ) VALUES (:Nom_Clients, :Prenom_Clients, :adresse_Clients, :CP_Clients, :Ville_Clients)');
    //         $ajouter2->bindParam(':Nom_Clients', $_GET['Nom_Clients'], 
    //         PDO::PARAM_STR);
    //         $ajouter2->bindParam(':Prenom_Clients', $_GET['Prenom_Clients'], 
    //         PDO::PARAM_STR);
    //         $ajouter2->bindParam(':adresse_Clients', $_GET['adresse_Clients'], 
    //         PDO::PARAM_STR);
    //         $ajouter2->bindParam(':CP_Clients', $_GET['CP_Clients'], 
    //         PDO::PARAM_STR);
    //         $ajouter2->bindParam(':Ville_Clients', $_GET['Ville_Clients'], 
    //         PDO::PARAM_STR);
    //         $estceok = $ajouter->execute();
        
    //             if($estceok){
    //                 echo 'votre enregistrement a été ajouté avec succés';
                    
                
    //             } else {
    //                 echo 'Veuillez recommencer svp, une erreur est survenue';
    //             }
    //         }

    // }
    function modifiv() 
    {
        $bdd=connect();
        if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id_Vehicules'])  && !empty($_GET['type_Vehicules'])  && !empty($_GET['modele_Vehicules']) && !empty($_GET['immatriculation_Vehicules'])){
            $message = '';
            $modifierv2 = $db->prepare('UPDATE vehicules SET id_Vehicules = :id_Vehicules, type_Vehicules = :type_Vehicules, modele_Vehicules = :modele_Vehicules WHERE ID_livre_Livres =:id');
            $modifierv2->bindParam(':id_Vehicules', $_GET['id_Vehicules'], PDO::PARAM_STR);
            $modifierv2->bindParam(':type_Vehicules', $_GET['type_Vehicules'], PDO::PARAM_STR);
            $modifierv2->bindParam(':modele_Vehicules', $_GET['modele_Vehicules'], PDO::PARAM_STR);        
    
    
    
            
            $modifierv2 = $modifierv2->execute();
            // $modifier->debugDumpParams();
            // die;
                if($modifierv2){
                    echo 'votre enregistrement a bien été modifié';
                    
                
                } else {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
            }

    }
    // function modific() 
    // {

    //     if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET[''])  && !empty($_GET[''])  && !empty($_GET[''])){
    //         $message = '';
    //         $modifier2 = $bdd->prepare('UPDATE livres SET '.$_GET['colonne'].' = :modif WHERE ID_livre_Livres =:id');
    //         $modifier2->bindParam(':id', $_GET['id'], 
    //         PDO::PARAM_STR);
    //         $modifier2->bindParam(':modif', $_GET['modif'], 
    //         PDO::PARAM_STR);
    //         $modifier2 = $modifier2->execute();

    //             if($modifier2){
    //                 echo 'votre enregistrement a bien été modifié';
                    
                
    //             } else {
    //                 echo 'Veuillez recommencer svp, une erreur est survenue';
    //             }
    //         }

    // }
    // function supriv()
    // {

    //     if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['	id_Véhicules'])){
            
    //         $supprimer = $bdd->prepare('DELETE FROM véhicules WHERE id_Véhicules =:id_Véhicule');
    //         $supprimer->bindParam(':id_Véhicules', $_GET['id_Véhicules'], 
    //         PDO::PARAM_STR);


    //         $supprimer = $supprimer->execute();
    //             if($supprimer){
    //                 echo 'votre enregistrement a bien été supprimé';
                    
                
    //             } else {
    //                 echo 'Veuillez recommencer svp, une erreur est survenue';
    //             }
    //         }
    // }
    // function supric()
    // {

    //     if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id_Clients'])){
            
    //         $supprimer2 = $bdd->prepare('DELETE FROM clients WHERE id_Clients =:id_Clients');
    //         $supprimer2->bindParam(':id_Clients', $_GET['id_Clients'], 
    //         PDO::PARAM_STR);


    //         $supprimer2 = $supprimer2->execute();
    //             if($supprimer2){
    //                 echo 'votre enregistrement a bien été supprimé';
                    
                
    //             } else {
    //                 echo 'Veuillez recommencer svp, une erreur est survenue';
    //             }
    //         }
    // }
     function aff_voiture() {
        $bdd=connect();
         $recuperation = $bdd->query('SELECT * FROM vehicules');
       
         while ($voit = $recuperation->fetch()) {
         echo "<form><div class='d-flex'> <input class='form-control length_crud_veh' type='text' name='id' value='".$voit['id_Vehicules']."'>
        <input class='form-control length_crud_veh' type='text' name='type' value='".$voit['type_Vehicules']."'>
        <input class='form-control length_crud_veh' type='text' name='modele' value='".$voit['modele_Vehicules']."'>
     <input class='form-control length_crud_veh' type='text' name='immat' value='".$voit['immatriculation_Vehicules']."'>
        
         <button class='btn btn_jaune btn-primary' type='submit' value='modifier2' name='action'>Modifier</button>
        <button class='btn btn-danger' type='submit' value='supprimer' name='action'>Supprimer</button>
        
         </form>
        
         </div>";

     }
    }
    // function aff_client() {
    //     $recuperation2 = $bdd->query('SELECT * FROM Livre');
    //     while ($clien = $recuperation2->fetch()) {
    //     echo "<form><div> <input type='text' name='id' value='".$clien['ID_livre']."'>
    //     <input type='text' name='titredulivre' value='".$clien['auteur_livre']."'>
    //     <input type='text' name='annee' value='".$clien['non_du_livre_livre']."'>
    //     <input type='text' name='auteurdulivre' value='".$clien['annee_livre']."'>
        
    //     <button type='submit' value='modifier2' name='action'>Modifier</button>
    //     <button type='submit' value='supprimer' name='action'>Supprimer</button>
        
    //     </form>
        
    //     </div>";

    // }
    }
?>