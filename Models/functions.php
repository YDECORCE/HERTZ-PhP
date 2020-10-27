<?php
    function conect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=hertz;port=3308;charset=utf8', 'root', '');
            return $bdd;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        


        

        
    }
    
    function ajouterv()
    {
        $bdd=conect()
        if(isset($_GET['ajouter'])){
            $ajouter = $bdd->prepare('INSERT INTO véhicules (type_Véhicules, modele_Véhicules, immatriculation_Véhicules) VALUES (:type_Véhicules, :modele_Véhicules, :immatriculation_Véhicules)');
            $ajouter->bindParam(':type_Véhicules', $_GET['type'],PDO::PARAM_STR);
            $ajouter->bindParam(':modele_Véhicules', $_GET['modele'],PDO::PARAM_STR);
            $ajouter->bindParam(':immatriculation_Véhicules', $_GET['immat'],PDO::PARAM_STR);
            $estceok = $ajouter->execute();
        
                if($estceok){
                    echo 'votre enregistrement a été ajouté avec succés';
                    
                
                } else {
                    echo 'Veuillez recommencer svp, une erreur est survenue';
                }
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
    // function modifiv() 
    // {

    //     if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['type_Véhicules'])  && !empty($_GET['modele_Véhicules'])  && !empty($_GET['modele_Véhicules'])){
    //         $message = '';
    //         $modifier = $bdd->prepare('UPDATE véhicules SET '.$_GET['colonne'].' = :modif WHERE ID_livre_Livres =:id');
    //         $modifier->bindParam(':id', $_GET['id'], 
    //         PDO::PARAM_STR);
    //         $modifier->bindParam(':modif', $_GET['modif'], 
    //         PDO::PARAM_STR);
    //         $modifier = $modifier->execute();

    //             if($modifier){
    //                 echo 'votre enregistrement a bien été modifié';
                    
                
    //             } else {
    //                 echo 'Veuillez recommencer svp, une erreur est survenue';
    //             }
    //         }

    // }
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
        $recuperation = $bdd->query('SELECT * FROM Livre');
        while ($voit = $recuperation->fetch()) {
        echo "<form><div> <input type='text' name='id' value='".$voit['ID_livre']."'>
        <input type='text' name='titredulivre' value='".$voit['auteur_livre']."'>
        <input type='text' name='annee' value='".$voit['non_du_livre_livre']."'>
        <input type='text' name='auteurdulivre' value='".$voit['annee_livre']."'>
        
        <button type='submit' value='modifier2' name='action'>Modifier</button>
        <button type='submit' value='supprimer' name='action'>Supprimer</button>
        
        </form>
        
        </div>";

    // }
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
?>