<?php

    include '../utils/connectBdd.php';
    include '../model/model_user.php';
    include '../view/view_add_user.php';
    if(isset($_POST['submit'])){
        if(isset($_POST['name']) 
            AND isset($_POST['firstname'])
            AND isset($_POST['login'])
            AND isset($_POST['mdp']) 
    
            AND $_POST['name'] !='' 
            AND $_POST['firstname'] !=''
            AND $_POST['login'] !=''
            AND $_POST['mdp'] !=''){
                $nom =$_POST['name'];
                $prenom =$_POST['firstname'];
                $login =$_POST['login'];
                $mdp =$_POST['mdp'];

            adduser($bdd, $nom, $prenom ,$login ,$mdp) ;

        echo "$prenom à été ajouté en  BDD";
    }
    else{
        echo 'Veuillez compléter les champs du formulaire';
    }
} 


?>