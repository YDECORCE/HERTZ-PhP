<?php
function conect()
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=hertz;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

	return $req;
}
function ajouterv()
{

    if(isset($_GET['action']) && !empty($_GET['nomdulivre'])  && !empty($_GET['date'])  && !empty($_GET['auteur'])){
        $toto =  $_GET['date'];
        $ajouter = $db->prepare('INSERT INTO véhicules (type_Véhicules, modele_Véhicules, annee_livre ) VALUES (:auteur, :titre, :annee)');
        $ajouter->bindParam(':titre', $_GET['nomdulivre'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':annee', $_GET['date'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':auteur', $_GET['auteur'], 
        PDO::PARAM_STR);
        $estceok = $ajouter->execute();
      
            if($estceok){
                echo 'votre enregistrement a été ajouté avec succés';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }

}
function ajouterc()
{

    if(isset($_GET['action']) && !empty($_GET['nomdulivre'])  && !empty($_GET['date'])  && !empty($_GET['auteur'])){
        $toto =  $_GET['date'];
        $ajouter = $db->prepare('INSERT INTO livres (auteur_livre, 	non_du_livre_livre, annee_livre ) VALUES (:auteur, :titre, :annee)');
        $ajouter->bindParam(':titre', $_GET['nomdulivre'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':annee', $_GET['date'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':auteur', $_GET['auteur'], 
        PDO::PARAM_STR);
        $estceok = $ajouter->execute();
      
            if($estceok){
                echo 'votre enregistrement a été ajouté avec succés';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }

}
function modifi() 
{

    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET[''])  && !empty($_GET[''])  && !empty($_GET[''])){
        $message = '';
        $modifier = $bdd->prepare('UPDATE livres SET '.$_GET['colonne'].' = :modif WHERE ID_livre_Livres =:id');
        $modifier->bindParam(':id', $_GET['id'], 
        PDO::PARAM_STR);
        $modifier->bindParam(':modif', $_GET['modif'], 
        PDO::PARAM_STR);
        $modifier = $modifier->execute();

            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }

}
function supri()
{

    if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
        
        $supprimer = $bdd->prepare('DELETE FROM livres WHERE ID_livre_Livres =:id');
        $supprimer->bindParam(':id', $_GET['id'], 
        PDO::PARAM_STR);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
}
function aff_voiture() {


}
function aff_client() {


}
function aff_état() {

}
?>