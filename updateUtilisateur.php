<?php
require 'autoload.php';
$connexPDO = Utilisateur::getInstance();
$requete= "Select * from utilisateur ";
$reponse=$connexPDO->query($requete);
$utilisateurs=$reponse->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table BORDER="2">
    <tr>
        <td>id</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>AGE</td>
        <td>sexe</td>

    </tr>

    <?php foreach ($utilisateurs as $utilisateur){?>
        <tr><form action="update.php" method="post">
            <td><input name="newid" type="number" value="<?= $utilisateur->id;?>"></td>
            <td><input name="newnom" type="text" value="<?= $utilisateur->nom;?>"></td>
            <td><input name="newprenom" type="text" value="<?= $utilisateur->prenom;?>"></td>
            <td><input name="newage" type="number" value="<?= $utilisateur->age;?>"></td>
            <td><input name="newsexe" type="text" value="<?= $utilisateur->sexe;?>"></td>
            <td><input name="update" type="submit" value="update"></td>
            <td><input name="delete" type="submit" value="delete"></td>


        </form>
        </tr>
    <?php } ?>
</table>
</body>
</html>