<?php
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

?>

<?php 
$titrepage='Connexion';
require 'header_client.php';
 ?>


<div class="container-fluid bg">
    <div class="container bgblanc">
        <h1> Se connecter </h1>
        <div class="row w-100 justify-content-center mx-0">
            <div class="col-12 col-lg-8 d-flex justify-content-center w-100" style="flex-wrap:wrap">
                <form class="w-100" action="" method="POST">
                    <div class="form-group">
                        <label for=""> Pseudo ou email </label>
                        <input type="text" name="username" class="form-control" />
                    </div>
                    <div class="form-group"> <label for=""> mot de passe
                        </label> <input type="password" name="password" class="form-control" />
                    </div> <button type="submit" class="btn btn_jaune">Se connecter </button>
                </form>
                <div>
                    <?php 
                if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
                    $dbb=connect();
                    $req=$dbb->prepare('SELECT * FROM users WHERE username= :username OR email= :username');
                    $req->execute(['username' => $_POST['username']]);
                    $user = $req ->fetch();
                    if(password_verify($_POST['password'], $user["passworde"])){
            
                            header('location: fiche_client.php');
                            exit;
                    }
                    else{
                    echo'identifiant ou mot de passe incorrecte';
                    }
                }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'footer.php'; ?>