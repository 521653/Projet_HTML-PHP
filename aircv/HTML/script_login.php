<?php

session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['emailadmin']) and !empty($_POST['emailadmin'])) {
        if (filter_var($_POST['emailadmin'], FILTER_VALIDATE_EMAIL)) {
            if (isset($_POST['mdp']) and !empty($_POST['mdp'])) {

                require_once 'connexion.php';

              //  $mdp = sha1($_Post['mdp']);

                $getdata = $conn->prepare("SELECT email FROM  admin WHERE email=? and motdepasse=?");
                $getdata->execute(array($_POST['emailadmin'], $_POST['mdp']));

                $rows = $getdata->rowCount();

                if ($rows == true) {

                    $_SESSION['admin'] = $_POST['emailadmin'];
                    header("Location:message.php");
                } else {
                    $erreur =  "Email ou mot de passe inconnu";
                }
            } else {
                $erreur = "Veuillez saisir un mot de passe";
            }
        } else {
            $erreur = "Veuillez saisir un email valide!";
        }
    } else {
        $erreur = "Veuillez saisir un email ";
    }
}
