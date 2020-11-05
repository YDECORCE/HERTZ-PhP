<?php

$user_id=$_GET['id'];
$token=$_GET['token'];
function connect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=hertz;port=3306;charset=utf8', 'root', '');
            return $bdd;
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
$bdd=connect();
$req=$bdd->prepare('SELECT * FROM user WHERE id= ?');
$req->execute([$user_id]);
$user = $req->fetch();

if($user && $user->confirmation_token == $token){
    session_start();
    $bdd->prepare('UPDATE user SET confirmation_token= NULL, confirmed_at=NOW() WHERE id= ?')->execute([$user_id]);
    $_SESSION['auth']=$user;
    header('location: account.php');

}else{
    die('pas ok')
}