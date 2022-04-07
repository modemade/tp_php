<?php
function adduser($bdd, $nom ,$prenom ,$login ,$mdp){
    try{
        $req = $bdd->prepare('INSERT INTO user(name_user, first_name_user,login_user, mdp_user) 
        VALUES (:name_user, :first_name_user, :login_user, :mdp_user)');
        $req->execute(array(
            'name_user' => $nom,
            'first_name_user' =>$prenom,
            'login_user' =>$login,
            'mdp_user' =>$mdp
        ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function showAllUser($bdd){
    $sql = "SELECT * FROM user";
    $req = $bdd->prepare($sql);
    $req ->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


function updateUser($bdd, $nom ,$prenom ,$login ,$mdp ,$id){
    try{
        $req = $bdd->prepare('UPDATE user SET name_user = :name_user,
        first_name_user = :first_name_user,login_user = :login_user ,
        mdp_user = :mdp_user WHERE id_user = :id_user');
        $req->execute(array(
            'name_user' => $nom,
            'first_name_user' =>$prenom,
            'login_user' =>$login,
            'mdp_user' =>$mdp,
            'id_user' =>$id
            ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getUserByMail($bdd, $login){
    try{
        $req = $bdd->prepare('SELECT mdp_user FROM user 
        WHERE login_user=:login_user');
        $req->execute(array(
            'login_user' =>$login,
            ));
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data[0]['mdp_user'];
    }
    catch(Exception $e)
    {
        
        die('Erreur : '.$e->getMessage());
    }
}
?>