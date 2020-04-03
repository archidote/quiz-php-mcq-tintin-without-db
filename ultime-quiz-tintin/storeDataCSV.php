<?php
    $file = new SplFileObject('resultats.csv', 'a'); // le fichier n'est pas forcement obligé d'être crée en amont 
    $file->fputcsv(array("$name","$totalCorrect","$age")); // rpz 3 colonnes 
    $file = null;
?>