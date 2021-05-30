<?php
require_once("../verif-form/Coordonnees-validation.php");
session_start();

    if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["mdp"]) ){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
    }

    $objvalidation = new CoordonneesValidation($nom,$prenom,$mail,$mdp);

    if (!isset($_SESSION['count'])) {
        $res = $objvalidation->checkInscription();
        $_SESSION['count'] = 1;
    } else {
        $res = $objvalidation->checkInscription();
        $_SESSION['count']++;
    }

    if($res===true){
        $connexion = mysqli_connect ("localhost:3306", "root", "");

        if (!$connexion){
            echo "Désolé, connexion au serveur impossible\n";
            exit;
        }

        if (!mysqli_select_db($connexion,"bdd_projet")){
            echo "Désolé, accès à  la base impossible\n";
            exit;
        }

        $name = htmlspecialchars($_POST["nom"]);
        $firstname = htmlspecialchars($_POST["prenom"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $birthD = htmlspecialchars($_POST["dateN"]);
        $tel = htmlspecialchars($_POST["tel"]);
        $pwd = htmlspecialchars($_POST["mdp"]);
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        $test = "oui";
        $reqEmail = "SELECT Email FROM `utilisateurs` WHERE Email = '" . $mail . "'";
        $resEmail = mysqli_query($connexion, $reqEmail);
        $email = $resEmail->fetch_assoc();
        
        if($email == null){
            $requete = "INSERT INTO `utilisateurs` (`Nom`, `Prenom`, `Email`, `DateNaissance`, `telephone`, `motDePasse`) VALUES ('".$name."', '". $firstname."', '". $mail."', '". $birthD."','".$tel."','". $pwd."')";
            $resultat = mysqli_query($connexion, $requete);

            if ($resultat){
                echo "inscription réussite, Vous allez être rediriger vers la page de connexion";
                header("refresh:2;url=../connexion/formulaire.php");
            }
            else{  
                echo "<B>Erreur dans l'exécution de la requête $requete.</B><BR>";
                echo "<B>Message de MySQL :</B> " .  mysqli_error($connexion);
                header("refresh:2;url=formulaire.php");
            }  
        }else{
            echo "<B>L'email renseigné est déja existant en base</B><BR>";
            header("refresh:2;url=formulaire.php");
        }
        session_unset();
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