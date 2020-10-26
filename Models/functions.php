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
function ajouter()
{

    if(isset($_GET['action']) && !empty($_GET[' '])  && !empty($_GET[' '])  && !empty($_GET[' ']) && !empty($_GET[' ']) && !empty($_GET[' ']) && !empty($_GET[' '])){
        $toto =  $_GET[' '];
        $ajouter = $bdd->prepare('INSERT INTO $tabl ($cham1, $cham2, $cham3, $cham4, $cham5, $cham6 ) VALUES (:cham1, :cham2, :cham3, :cham4, :cham5, :cham6)');
        $ajouter->bindParam(':cham1', $_GET[''], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':cham2', $_GET[''], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':cham3', $_GET[''], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':cham4', $_GET[''], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':cham5', $_GET[''], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':cham6', $_GET['auteur'], 
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