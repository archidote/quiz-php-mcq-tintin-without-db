<?php 
include 'controller.php';
/////////////////// ------------- Calcul du score, et affichage du score avec une image exprimant le score dans la page grade.php  /////////////////
            $phrase = ":";
            $emoji = ":";

            $totalCorrectPourcentage =  ($totalCorrect / $nbQuestions) * 100 ;
            
            if ($totalCorrectPourcentage < 30) {
                $phrase = "Recalé";
                $emoji = "&#128532;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-lt-30.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
            }
            elseif ($totalCorrectPourcentage < 50 ) {
                $phrase = "Recalé";
                $emoji = "&#128533;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-lt-50.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
            }
            elseif ($totalCorrectPourcentage == 50) {
                $phrase = "Juste la moyenne ...";
                $emoji = "&#128528;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-eq-50.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage < 60) {
                $phrase = "Acceptable !";
                $emoji = "&#128528;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-lt-60.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage <= 75 ) {
                $phrase = "Pas si mal ! ";
                $emoji = "&#128521";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-le-79.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma-pretty-good.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage <= 85 ){
                $phrase = "Bien moussaillon";
                $emoji = "&#128522;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-le-87.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma-good.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage <= 90 ){
                $phrase = "Très bien";
                $emoji = "&#128522;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-le-90.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma-very-good.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage < 100 ) {
                $phrase = "C'est excellent !";
                $emoji = "&#128525;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-le-95.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma-very-good.php\">Télécharger mon diplome ! </a></center>";
            }
            elseif ($totalCorrectPourcentage == 100 ) {
                $phrase = "C'est parfait !";
                $emoji = "&#128526;";
                echo "<center><img class=\"img-fluid\" src=\"images/tintin-eq-100.jpg\" </img> </center>";
                echo "<center> <div id='results'> <h1> $totalCorrect/$nbQuestions - $phrase $emoji </h1> </div> </center>";
                echo "<center><a title=\"Diplome Tintin\" href=\"diploma/diploma-jury-s-congratulations.php\">Télécharger mon diplome ! </a></center>";
            }
            else {
                $phrase = "Erreur, ordre de grandeur -> invalide";
                $emoji = "&#128532;";
            }
?>