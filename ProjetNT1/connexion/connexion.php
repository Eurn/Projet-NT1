<?php
require_once("../verif-form/Coordonnees-validation.php");
session_start();

    if(isset($_POST["mail"]) && isset($_POST["mdp"]) ){
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
    }

    $objvalidation = new CoordonneesValidation($mail,$mdp);

    if (!isset($_SESSION['count'])) {
        $res = $objvalidation->checkConnexion();
        $_SESSION['count'] = 1;
    } else {
        $res = $objvalidation->checkConnexion();
        $_SESSION['count']++;
    }

    if($res===true){
        $connexion = mysqli_connect("localhost:3306", "root", "");

        if (!$connexion){
            echo "Désolé, connexion au serveur impossible\n";
            exit;
        }

        if (!mysqli_select_db($connexion,"bdd_projet")) {
            echo "Désolé, accès à  la base impossible\n";
            exit;
        }

        $mail = htmlspecialchars($_POST["mail"]);
        $pwd = htmlspecialchars($_POST["mdp"]);

        $requete = "SELECT motDePasse, Nom, Prenom FROM `utilisateurs` WHERE Email = '".$mail."' ";
        $resultat = mysqli_query($connexion, $requete);
        $user = $resultat->fetch_assoc();

        if (password_verify($_POST["mdp"], $user['motDePasse']) ){
            echo "Connexion réussite";
            $_SESSION["nom"] = $user['Nom'];
            $_SESSION["prenom"] = $user['Prenom'];
            header('Location: ../index.php');
        }
        else {  
            echo "<B>Erreur dans l'exécution de la requête $requete.</B><BR>";
            echo "<B>Message de MySQL :</B> " .  mysqli_error($connexion);
            header("refresh:2;url=formulaire.php");
        }  
    }
    
    else if($_SESSION['count'] > 2){
        echo "Vos 3 tentatives ont échouées";
        session_unset();
        header( "refresh:2;url=../index.php");
    }
    
    else{
        echo "Tentative: ".$_SESSION['count']."<br>";
        header( "refresh:2;url=formulaire.php" );

    }

   
?>