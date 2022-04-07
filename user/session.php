<?php
    session_start();
    $_SESSION['nom'] = 'MTI';
    if(isset($_SESSION['add_user'])){
        echo '<p>Tu a visite la destination1</p><br>';
    }
    if(isset($_GET['deco'])){
        echo'<p>Vous êtes deconnecter</p>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../view/view_add_user.php" class="nav-link active"
                        aria-current="page">Reconnexion</a></li>
                <li class="nav-item"><a href="../user/deconnexion.php" class="nav-link">déconnexion</a></li>
            </ul>
        </header>
    </div>
</body>
</html>