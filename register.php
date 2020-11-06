
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
function str_random($lenght){
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
    // $token= str_random(60);
    $recq->execute([$_POST['username'], $password, $_POST['email'], $token]);
    // $user_id= $bdd->lastInsertId();
    // mail($_POST['email'], 'confimation de votre compte', "Afin de validé votre compte merci de cliqué sur ce lien\n\n http://localhost/HERTZ-PHP/HERTZ-PHP/confirm.php?id=$user_id&token=$token");
    header('location: confirm.php');
    exit();
   
    
    }
    
}
?>
<?php require 'header_log.php'; 
    
?>

<h1>s'inscrire</h1>

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

<form action="" method="POST">

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

    <button type="submit" class="btn btn-primary mb-"> M'inscrire</button>
</form>

<?php require 'footer.php'; ?>