<?php
require 'autoload.php';

$id = $_POST['newid'];
$nom = $_POST['newnom'];
$prenom = $_POST['newprenom'];
$age = $_POST['newage'];
$sexe = $_POST['newsexe'];


if(isset($_POST['update']))
{

$connexPDO = Utilisateur::getInstance();
$requete= "UPDATE utilisateur SET id='$id',nom='$nom',prenom='$prenom',age='$age',sexe='$sexe' where id='$id'";
    $reponse=$connexPDO->query($requete);

    header('location:updateUtilisateur.php');
}

if(isset($_POST['delete'])){


    $connexPDO = Utilisateur::getInstance();
    $requete1= "DELETE FROM utilisateur WHERE  id='$id'";
    $reponse1=$connexPDO->query($requete1);
    header('location:updateUtilisateur.php');

}
