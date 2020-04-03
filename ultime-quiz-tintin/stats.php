<?php 
include 'controller.php';
////////////////////////////
$row = 1;
if (($handle = fopen("resultats.csv", "r")) !== FALSE) {
    $total = 0 ;
    $i = 0 ;
    $totalAge = 0 ; 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { 
        // echo 'Data is ' . $data[2] . ' ' . $data[3]; // affiche les collones 3-4 IL FAUT QU ELLES EXISTENT 
        // echo $data[1]; // affiche tt les valeurs stocké dans la collone 2
        $total = $total + $data[1];
        $totalAge = $totalAge + $data[2]; // sommes des âges 
        $i = $i + 1;
                
    }
    echo " <center> <div> <br> <h5> Nb de participants total : " .$i. "</h5>";
    // echo $total; total des points obtenu par tt les joueurs 
    $avg = $total / $i ; // permet d'afficher la moyenne de toutes les personnes qui ont participés au quiz
    $avg = round($avg,1); // arondir au dixième la valeur 

    $avgAge = $totalAge / $i;
    $avgAge = round($avgAge); // arrondir au dixième la valeur 
    echo "<h5> Moyenne des joueurs : ".$avg."/$nbQuestions</h5>" ;
    echo "<h5> Moyenne de l'age des participants : ".$avgAge."</h5> </div> </center>";
    fclose($handle);
}
?>