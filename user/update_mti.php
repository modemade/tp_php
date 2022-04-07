<?php

include '../utils/connectBdd.php';
include '../model/model_user.php';
include '../view/view_update_user.php';

if(isset($_GET['id']) AND $_GET['id'] != ''){
    $id = $_GET['id'];

    if(isset($_POST['name']) AND isset($_POST['firstname']) AND
    isset($_POST['login']) AND isset($_POST['mdp']) AND 
    $_POST['name'] !='' AND $_POST['firstname'] !='' AND
    $_POST['login'] !='' AND $_POST['mdp'] !=''){

        $nom = $_POST['name'];
        $prenom = $_POST['firstname'];
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        updateUser($bdd,$nom,$prenom,$login,$mdp,$id);

        echo 'l\'utilisateur '.$nom.' à été ajouté en BDD';        
    }
    else{
        echo "Veuillez selectionner un champ du formulaire";
    }
}
else{
    header('Location: showUser.php?error');
}

?>