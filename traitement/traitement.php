<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $error = [];
        if(isset($_POST["nom"]) && !empty($_POST["nom"])){
            $_SESSION["nom"] = $nom = strip_tags(trim($_POST["nom"]));
        }else{
            $error["nom"] = "Vous devez remplir ce champ.";
        }

        if(isset($_POST["prenom"]) && !empty($_POST["prenom"])){
            $_SESSION["prenom"] = $prenom = strip_tags(trim($_POST["prenom"]));
        }else{
            $error["prenom"] = "Vous devez remplir ce champ.";
        }

        if(isset($_POST["subject"]) && !empty($_POST["subject"])){
            $_SESSION["subject"] = $subject = strip_tags(trim($_POST["subject"]));
        }else{
            $error["subject"] = "Vous devez remplir ce champ.";
        }  
        
        if(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
            $_SESSION["email"] = $email = strip_tags(trim($_POST["email"]));
        }else{
            $error["email"] = "L'adresse mail que avez saisi est invalide.";
        }

        if(isset($_POST["message"]) && !empty($_POST["message"])){
            if(filter_input(INPUT_POST, "message" ,FILTER_SANITIZE_SPECIAL_CHARS)){
                $_SESSION["message"] = $message = strip_tags(trim($_POST["message"]));
            }else{
                $error["message"] = "Le message contient des caractères sensibles.";
            }
        }else{
            $error["message"] = "Vous devez remplir ce champ.";
        }
        
        if(empty($error)){
            $succes = "Données envoyées avec succes."; 
            $_SESSION["succes"] = $succes;
        }else{
            $_SESSION["error"] = $error;
        }

        header("Location: ../index.php");

        
    }

?>