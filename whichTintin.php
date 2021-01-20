<?php
// theeeee array
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