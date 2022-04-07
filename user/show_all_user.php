
<?php

include '../utils/connectBdd.php';

include '../model/model_user.php';

include '../view/view_hidden_user.php';


$list = showAllUser($bdd);

    foreach($list as $value){
        echo '<p><input type="checkbox" name="id[]" value="'.$value['id_user'].'"><a href="update_mti.php?id='.$value['id_user'].'">
        le prenom est égal à : '.$value['first_name_user'].' le mdp est est égal à :
        '.$value['mdp_user'].'</a></p>';
    }
    echo '<input type="submit" value="hidden"></form>';
?>