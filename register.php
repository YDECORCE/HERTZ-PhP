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
function str_random($lenght)
    {
    $alphabet="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);
    }

if(!empty($_POST)){
    $bdd=connect();
    $errors= array();

    if(!empty($_POST['username'])  AND !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) == '1'){

        $errors['username']= "Votre pseudo n'est pas valide (aphanumérique)";
    } else{
        $recq=$bdd->prepare('SELECT id FROM users WHERE username = ?');
        $recq->execute([$_POST['username']]);
        $user = $recq->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est déjà pris';
        }
    }
    
    if(!empty($_POST['email']) AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $errors['email']= "Votre email n'est pas valide";

    }else{
        $recq=$bdd->prepare('SELECT id FROM users WHERE email = ?');
        $recq->execute([$_POST['email']]);
        $user = $recq->fetch();
        if($user){
            $errors['email'] = 'Ce email est déjà utiliser par un autre compte';
        }
    }
    if(!empty($_POST['password']) AND $_POST['password'] != $_POST['password_confirm']){
        $errors['password']= "vous devez rentrer un mot de passe valide";
    }

    if(empty($errors)){

    $bdd=connect();
    
    $recq=$bdd->prepare("INSERT INTO users SET username = ?, passworde = ?, email= ?, confirmation_token = ? ");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $token= str_random(60);
    $recq->execute([$_POST['username'], $password, $_POST['email'], $token]);
    $username=$_POST['username'];
    $recup_id=$bdd->query('SELECT users.id FROM users WHERE username="'.$username.'"');
    $iduser=$recup_id->fetchAll();
    $userid=implode(",", array_column($iduser, 'id'));
    $_SESSION['identifiant'] = $userid;
    var_dump($_SESSION);
    // die;
    header('location: confirm.php?'.SID);
    // exit();
    }
    
}
?>

<?php 
$titrepage='Création compte';
require 'header_client.php'; 
// phpinfo();    
?>
<div class="container-fluid bg">
    <div class="container bgblanc">

        <h1 class="text-center">S'inscrire</h1>
        <div class="row w-100 justify-content-center mx-0">
            <div class="col-12 col-lg-8 d-flex justify-content-center w-100" style="flex-wrap:wrap">

                

                <form class="w-100" action="" method="POST">

                    <div class="form-group">
                        <label for="">Pseudo</label>
                        <input type="text" name="username" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="">mot de passe</label>
                        <input type="password" name="password" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="">confirmer votre mot de passe</label>
                        <input type="password" name="password_confirm" class="form-control" />
                    </div>
                    <div style="text-align:center">
                        <button type="submit" class="btn btn_jaune mb-0"> M'inscrire</button>
                    </div>
                </form>
                <div class="col-12 col-lg-8 d-flex justify-content-center w-100" style="flex-wrap:wrap">
                            <?php if(!empty($errors)): ?>
                            <div class="alert alert-danger">
                                <p>Vous n'avez pas rempli le formulaire correctement</p>
                                <ul>
                                    <?php foreach($errors as $errors): ?>
                                    <li><?= $errors; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require 'footer.php'; ?>