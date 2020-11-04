<?php require 'header_log.php'; 

?>

<?php

if(!empty($_POST)){

    $errors= array();

    if(!empty($_POST['username'])  AND !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) == '1'){

        $errors['username']= "Votre pseudo n'est pas valide (aphanumérique)";
    }
    
    if(!empty($_POST['email']) AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $errors['email']= "Votre email n'est pas valide";

    }
    var_dump($errors);
    // if(!empty($_POST['password']) AND $_POST['password'] != $_POST['password_confirm']){
    //     $errors['password']= "vous devez rentrer un mot de passe valide";
    // }
    // if(empty($errors)){
    // require_once 'functions.php';
    // $recq=$pdo->prepare("INSERT INTO user SET usename= ?, email = ?, passworde = ?");
    // $password = password_hash($_POST['passworde'], PASSWORD_BCRYPT);
    // $recq->execute([$_POST['username'], $_POST['email'], $_POST['passworde']]);
    // }
}
?>

<h1>s'inscrire</h1>
<form action="" method="GET">

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

    <button type="submit" class="btn btn-primary"> M'inscrire</button>
</form>

<?php require 'footer.php'; ?>