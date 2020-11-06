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

    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
        $dbb=connect();
        $req=$dbb->prepare('SELECT * FROM users WHERE username= :username OR email= :username');
        $req->execute(['username' => $_POST['username']]);
        $user = $req ->fetch();
        var_dump($user);
        if(password_verify($_POST['password'], $user["passworde"])){
            
            header('location: #');
            exit;
        }else{
            echo 'identifiant ou mot de passe incorrecte';
        }

    }

?>

<?php require 'header_log.php'; ?>

<h1>Se connecter</h1>


<form action="" method="POST">

    <div class="form-group">
        <label for="">Pseudo ou email</label>
        <input type="text" name="username" class="form-control" />
    </div>

    <div class="form-group">
        <label for="">mot de passe</label>
        <input type="password" name="password" class="form-control" />
    </div>

    <button type="submit" class="btn btn-primary mb-"> Ce connecter</button>
</form>

<?php require 'footer.php'; ?>