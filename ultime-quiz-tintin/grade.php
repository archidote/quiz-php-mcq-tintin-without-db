<?php session_start(); 
    include 'controller.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>L'utlime quiz de tintin - Résultats </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive -->
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <style>
    img { /* permet de fixer une taille à une image et de garder les proportions de l'image pour quelle ne soit pas disproportionée */
        width: 250px;
        height: 200px;
        max-width: 100%;
    }
    </style>
</head>
<body>

	<div id="page-wrap">		
        <?php
            ////////////////////////////////////////////////////// CONTROL DE SAISI 1 ////////////////////////////////////////////////////// 
            // si champ questions non renseigné (pour éviter erreurs php) ; control de saisie 

            for ($i = 1; $i <= $nbQuestions; $i++) {
                if (empty($_POST["question-".$i."-answer"])) { 
                    $_POST["question-".$i."-answer"] = "Non renseigné"; 
                }
            }
            ////////////////////////////////////////////////////// CONTROL DE SAISI 2 ////////////////////////////////////////////////////// 
            
            // si les champs nom,mail,age sont vide alors : 
            // si champ "contact" non renseigné (pour éviter erreurs php) ; control de saisie 

            if (empty($_POST['name'])) { $_POST['name'] = "mon Capitaine"; }
            if (empty($_POST['email'])) { $_POST['email'] = "test@yopmail.com"; }
            if (empty($_POST['age'])) { $_POST['age'] = rand(5, 122); }

            // c'est bizare de faire comme ça, mais pas le choix, sinon safari fait de la grosse merde .... 
            $_SESSION['name'] = $_POST['name'];
            // sinon, on stocke le nom de la personne  dans $name et l'âge de la p* dans $age 
            $name = htmlspecialchars($_POST['name']);
            $age = $_POST['age'];

            //////////////////////////// Stockage des réponses dans des var dynamique $answer$i ///////////////////////////////////////

            for ($i = 1; $i <= $nbQuestions; $i++) {
                ${'answer'.$i} = $_POST["question-".$i."-answer"];
            }


            

            //////////////////////////////////////////////////// REPONSES //////////////////////////////////////////////////////////

            $totalCorrect = 0 ; // compteur score du joueur ini à 0
            
            // on vérifie si les réponses du joueurs en utilisant des variables dynamique 
            // (${'answer'.$i} sont en adéquation avec la bonne réponse stocké dans ${'r'.$i})
            for ($i = 1; $i <= $nbQuestions; $i++) { 
                if (${'answer'.$i} == ${'r'.$i}) { 
                    $totalCorrect++;
                    ${'goodAnswer'.$i} = 1;
                    ${'emojiAnswer'.$i} = "&#9989;";
                }
                else {
                    ${'goodAnswer'.$i} = 0;
                    ${'emojiAnswer'.$i} = "&#10060;";
                }
            }

            $_SESSION['totalCorrect'] = $totalCorrect; // permet de transporter cette variable de page en page avec la valeur qui lui a été fixé 

            /////////////////////////////////////////////// FIN REPONSES ////////////////////////////////////////////////////


            /* ************************************************************************************************************** */
            /* ////////////////////////////// include des fichiers nescessaires au fonctionnement /////////////////////////// */ 
            
            include 'score.php'; // calcul le score si il est > 10,20,30 ...
            include 'storeDataCSV.php'; // 1. stocke les data dans un csv nom,score,age
            include 'stats.php'; // 2. calcul moyenne age / score et nb de participants et affichage de ses données
            include 'mail.php'; // enfin, j'envois un mail avec les reponses et corrigés
            include 'whichTintin.php' // choix d'un tintin pour ojd parmis 28 
        	?>
            
	</div>
</body>

</html>