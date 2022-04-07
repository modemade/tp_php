
<?php

include '../utils/connectBdd.php';
include '../model/model_user.php';
include '../view/view_login.php';

if(isset($_POST['login_user']) AND isset($_POST['mdp_user']) AND
    !empty($_POST['login_user']) AND !empty($_POST['mdp_user'])){
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];

        $hash = getUserByMail($bdd, $login);
        var_dump($hash);

        if(password_verify($mdp,$hash)){
            echo '<p>connecté</p>';
        }
        else{
            echo '<p>Mauvais mdp</p>';
        }
    }
    else{
        echo '<p>Veuillez remplir le  formulaire</p>';
    }

    ?>