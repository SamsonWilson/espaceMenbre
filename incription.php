<?php //require 'include/header.html' ?>



<?php 

if(isset($_POST["inscription"])){
    if(empty($_POST['Nom']) || !preg_match('/[a-zA-Z0-9]+/',$_POST['Nom'])) {
        $message='votre Nom doit etre une chaine de caratéres (alphanumérique)';
    }elseif(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        $message= 'Faite rentrer une addresse email valide !';
    }elseif(empty($_POST['password']) || $_POST['password'] != $_POST['password2']){
        $message= 'rentrer un mot de passe valide !';
}else{
    require_once 'include/start_bdd.php';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $requet = $bdd->prepare('INSERT INTO table_membre(Nom,email,Mot_de_passe) VALUES(:nom,:email,:motpass)');
    $requet->bindValue(':nom', $_POST['Nom']);
    $requet->bindValue(':email', $_POST['mail']);
    $requet->bindValue(':motpass', $password);
    $requet->execute();
    $message= 'vous êtes bien inscrit';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">inscription</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                    <?php if(isset($message)) echo $message?>
                        <form  class="form" action="" method="post">
                            <h3 class="text-center text-info"> inscription </h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nom:</label><br>
                                <input type="text" name="Nom" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Adresse Mail:</label><br>
                                <input type="email" name="mail" id="mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mot de passe:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Confirmation de Mot de passe:</label><br>
                                <input type="password" name="password2" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="inscription" class="btn btn-info btn-md" value="s'inscription">
                                <input type="submit" name="se connecter" class="btn btn-info btn-md" value="se connecter">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




