<?php require 'header_log.php'; ?>

<?php

if(!empty($_POST)){

    $errors= array();

    if(!empty($_POST['username']) || !preg_match('/^[a-z0-9_]+$/', $_POST['username'])){

        $errors['username']= "Votre pseudo n'est pas valide (aphanumérique)";
    }

}
?>

<h1>s'inscrire</h1>
<form action="" method="POST">

    <div class="form-group">
        <label for="">Pseudo</label>
        <input type="text" name="username" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="">mot de passe</label>
        <input type="password" name="password" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="">confirmer votre mot de passe</label>
        <input type="password" name="password_confirm" class="form-control" required/>
    </div>

    <button type="submit" class="btn btn-primary"> M'inscrire</button>
</form>

<?php require 'footer.php'; ?>