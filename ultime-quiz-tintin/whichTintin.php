<?php
// the array
$rdm = rand(1,28);
$arrX = array(1 => "1. Tintin au pays des Soviets, septembre 1930", 
               "2. Tintin au Congo, juillet 1931",
               "3. Tintin en Amérique, novembre 1932", 
               "4. Les Cigares du pharaon, octobre 1934",
               "5. Le Lotus bleu, septembre 1936",
               "6. L'Oreille cassée, novembre 1937",
               "7. L'Île Noire, novembre 1938",
               "8. Le Sceptre d'Ottokar, août 1939",
               "9. Le Crabe aux pinces d'or, novembre 1941",
               "10. L'Étoile mystérieuse, décembre 1942",
               "11. Le Secret de La Licorne, octobre 1943",
               "12. Le Trésor de Rackham le Rouge, novembre 1944",
               "13. Les Sept Boules de cristal, septembre 1948",
               "14. Le Temple du Soleil, septembre 1949",
               "15. Tintin au pays de l'or noir, décembre 1950",
               "16. Objectif Lune, septembre 1953",
               "17. On a marché sur la Lune, août 1954",
               "18. L'Affaire Tournesol, octobre 1956",
               "19. Coke en stock, juillet 1958",
               "20. Tintin au Tibet, janvier 1960",
               "21. Les Bijoux de la Castafiore, janvier 1963",
               "22. Vol 714 pour Sydney, janvier 1968 ",
               "23. Tintin et les Picaros, janvier 1976",
               "24. Tintin et l'Alph-Art, octobre 1986",
               "25. - Hors série : Tintin et le Mystère de la Toison d'or (1962)",
               "26. - Hors série : Tintin et les Oranges bleues (1965)",
               "27. - Hors série : Tintin et la Société générale des minerais (1970)",
               "28. - Hors série : Tintin et le Lac aux requins (1972) </b>");
 
echo "<center> <i> Choix d'un tintin au hasard : <b> ".$arrX[$rdm]."</b> </i> </center>";
?>
<?php 
/*
$quelTintinOJD = rand(1,28);
echo "<center> <i> Choix au hasard d'un Tintin à lire / regarder aujourd'hui : </i> </center> ";
if ($quelTintinOJD == 1) { 
   echo "<center> <i> <b> 1. Tintin au pays des Soviets, septembre 1930 </b> </i> </center> </b> </i> </center> ";
}
elseif ($quelTintinOJD == 2) { 
   echo "<center> <i> <b> 2. Tintin au Congo, juillet 1931 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 3) { 
   echo "<center> <i> <b> 3. Tintin en Amérique, novembre 1932 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 4) { 
   echo "<center> <i> <b> 4. Les Cigares du pharaon, octobre 1934 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 5) { 
   echo "<center> <i> <b> 5. Le Lotus bleu, septembre 1936 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 6) { 
   echo "<center> <i> <b> 6. L'Oreille cassée, novembre 1937 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 7) { 
   echo "<center> <i> <b> 7. L'Île Noire, novembre 1938 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 8) { 
   echo "<center> <i> <b> 8. Le Sceptre d'Ottokar, août 1939 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 9) { 
   echo "<center> <i> <b> 9. Le Crabe aux pinces d'or, novembre 1941 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 10) { 
   echo "<center> <i> <b> 10. L'Étoile mystérieuse, décembre 1942 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 11) { 
   echo "<center> <i> <b> 11. Le Secret de La Licorne, octobre 1943 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 12) { 
   echo "<center> <i> <b> 12. Le Trésor de Rackham le Rouge, novembre 1944 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 13) { 
   echo "<center> <i> <b> 13. Les Sept Boules de cristal, septembre 1948 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 14) { 
   echo "<center> <i> <b> 14. Le Temple du Soleil, septembre 1949 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 15) { 
   echo "<center> <i> <b> 15. Tintin au pays de l'or noir, décembre 1950 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 16) { 
   echo "<center> <i> <b> 16. Objectif Lune, septembre 1953 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 17) { 
   echo "<center> <i> <b> 17. On a marché sur la Lune, août 1954 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 18) { 
   echo "<center> <i> <b> 18. L'Affaire Tournesol, octobre 1956 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 19) { 
   echo "<center> <i> <b> 19. Coke en stock, juillet 1958 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 20) { 
   echo "<center> <i> <b> 20. Tintin au Tibet, janvier 1960 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 21) { 
   echo "<center> <i> <b> 21. Les Bijoux de la Castafiore, janvier 1963 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 22) { 
   echo "<center> <i> <b> 22. Vol 714 pour Sydney, janvier 1968 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 23) { 
   echo "<center> <i> <b> 23. Tintin et les Picaros, janvier 1976 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 24) { 
   echo "<center> <i> <b> 24. Tintin et l'Alph-Art, octobre 1986 </b> </i> </center> ";
}
elseif ($quelTintinOJD == 25) { 
   echo "<center> <i> <b> 25. - Hors série : Tintin et le Mystère de la Toison d'or (1962) </b> </i> </center> ";
}
elseif ($quelTintinOJD == 26) { 
   echo "<center> <i> <b> 26. - Hors série : Tintin et les Oranges bleues (1965) </b> </i> </center> ";
}
elseif ($quelTintinOJD == 27) { 
   echo "<center> <i> <b> 27. - Hors série : Tintin et la Société générale des minerais (1970) </b> </i> </center> ";
}
elseif ($quelTintinOJD == 28) { 
   echo "<center> <i> <b> 28. - Hors série : Tintin et le Lac aux requins (1972) </b> </i> </center> ";
}
else {
   echo "<center> <i> <b> pas de tintin ojd</b> </i> </center> ";
}
/* 

1 Tintin au pays des Soviets, septembre 1930
2 Tintin au Congo, juillet 1931
3 Tintin en Amérique, novembre 1932
4 Les Cigares du pharaon, octobre 1934
5 Le Lotus bleu, septembre 1936
6 L'Oreille cassée, novembre 1937
7 L'Île Noire, novembre 1938
8 Le Sceptre d'Ottokar, août 1939
9 Le Crabe aux pinces d'or, novembre 1941
10 L'Étoile mystérieuse, décembre 1942
11 Le Secret de La Licorne, octobre 1943
12 Le Trésor de Rackham le Rouge, novembre 1944

13 Les Sept Boules de cristal, septembre 1948
14 Le Temple du Soleil, septembre 1949
15 Tintin au pays de l'or noir, décembre 1950
16 Objectif Lune, septembre 1953
17 On a marché sur la Lune, août 1954
18 L'Affaire Tournesol, octobre 1956
19 Coke en stock, juillet 1958
20 Tintin au Tibet, janvier 1960
21 Les Bijoux de la Castafiore, janvier 1963
22 Vol 714 pour Sydney, janvier 1968
23 Tintin et les Picaros, janvier 1976
24 Tintin et l'Alph-Art, octobre 1986

ALBUM TIRE DE FILM : 

25 Tintin et le Mystère de la Toison d'or (1962), adapté du film en prises de vues réelles homonyme. Constitué de photos extraites du film, suivi d'une version BD entièrement dessinée par les studios Hergé.
26 Tintin et les Oranges bleues (1965), adapté du film en prises de vues réelles homonyme (sorti le 18 décembre 1964). Constitué de photos extraites du film, suivi d'une version BD entièrement dessinée par les studios Hergé.
27 Tintin et la Société générale des minerais (1970), livre broché de 50 pages, édité par Publiart (Guy Decissy) et Casterman, adapté du court-métrage d'animation homonyme produit par Belvision la même année (cases extraites du film11).
28 Tintin et le Lac aux requins (1972), adapté du film d'animation homonyme. Scénario de Greg. Les cases des planches sont extraites du film. Il existe une version entièrement dessinée par les studios Hergé.

*/
?>