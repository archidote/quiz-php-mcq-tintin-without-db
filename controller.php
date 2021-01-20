<?php 
/* 
*****************************************************
// $qx = question numéro x 
// $rx = réponse à la question x 
// $prxA, = réponses fausses à la question x
// $mailTransmitter = email complet de l'émetteur 
// $mailName = Nom du mail : Ex Eric Dupont - Prof
// $subjectMail = objet du mail : Correction TD 
// $nbQuestions = nb de question lié au quiz 
****************************************************** 
*/
$mailTransmitter = "Quiz-Tintin@Brlnd-tech.eu";
$mailName = "Tintin - Ultime quiz";
$subjectMail = "Correction ! l'ultime quiz de Tintin";
$nbQuestions = 40;
$startPAlign = "<p align=\"justify\"> <strong> &#128313;";
$endPAlign = "</strong> </p>";

$q1 = "$startPAlign Quel est le nom du chien de Noushka et Niko (Le lac aux requins) $endPAlign";
	$pr1A = "Myshka";
	$pr1B = "Pasternak";
	$pr1C = "Pashka";
	$r1 = "Gustave";

$q2 = "$startPAlign Quel est le nom du pharaon dont le professeur Bergamotte recherche le tombeaux dans Tintin et les Cigares du Pharaon ? $endPAlign";
	$pr2A = "Ramsès II";
	$pr2B = "Khéops";
	$pr2C = "Toutânkhamon";
	$r2 = "Kih-Oskh"; 

$q3 = "$startPAlign Quel est le numéro de la plaque d'immatriculation de la voiture des chauffards qui veulent renverser Tintin dans l'épisode L'oreille cassée ? $endPAlign";
	$pr3A = "160 891";
	$pr3B = "106 981";
	$pr3C = "189 601";
	$r3 = "168 091";

$q4 = "$startPAlign Quel est le nom d'emprunt du général Alcazar lorsqu'il est lanceur de poignards dans Tintin et les 7 boules de cristal ? $endPAlign";
	$pr4A = "El Yamilah";
	$pr4B = "Trujillo Don José";
	$pr4C = "Van Damme";
	$r4 = "Zarate Ramon";

$q5 = "$startPAlign Quel est le nom du bateau mis en quarantaine, où le professeur tournesol est retenu prisonnier dans Tintin et le temple du soleil ? $endPAlign";
	$pr5A = "Kaboudjan";
	$pr5B = "Pachachamamac";
	$pr5C = "Karaboudjan";
	$r5 = "Pachacamac";

$q6 = "$startPAlign A quel hauteur culmine le train qui tombe dans le fleuve dans Tintin et le temple du soleil ? $endPAlign";
	$pr6A = "3859";
	$pr6B = "4560";
	$pr6C = "4578";
	$r6 = "5888";

$q7 = "$startPAlign  Dans quel hôtel réside le Général Alcazar dans Tintin - Cock en stock ?  $endPAlign";
	$pr7A= "Bristol";
	$pr7B = "Royal";
	$pr7C = "Hilton";
	$r7 = "Excelsior";

$q8 = "$startPAlign Quel est le nom du - poison qui rend fou - dans Tintin et le lotus bleu ?  $endPAlign";
	$pr8A = "Siläbat";
	$pr8B = "Marïavia";
	$pr8C = "Ravälda";
	$r8 = "Radjaïdjah";

$q9 = "$startPAlign Dans Tintin et l'étoile mystérieuse, Tintin prend peur en regardant le télescope du professeur car il voit une chose énorme apparaître : Quelle est cette chose ?  $endPAlign";
	$pr9A = "Un astéroïde";
	$pr9B = "Une étoile";
	$pr9C = "Un scarabé";
	$r9 = "Une araignée";

$q10 = "$startPAlign Complétez l'expression suivante : Par les moustaches de ... $endPAlign";
	$pr10A = "Siläbat";
	$pr10B = "Zarate";
	$pr10C = "Triffon";
	$r10 = "Plekszy-gladz";

$q11 = "$startPAlign Quel est le nom du Général qui retient prisonnière Bianca Castafiore dans l'épisode Tintin et les Picaros ? $endPAlign";
	$pr11A = "El Pablo";
	$pr11B = "Sponz";
	$pr11C = "Alcazar";
	$r11 = "Tapioca";

$q12 = "$startPAlign Quel est le nom du guide de haute montagne accompagnant Tintin, Haddock et Milou à la recherche de l'avion qui c'est écrasé dans l'épisode Tintin au Tibet ? $endPAlign";
	$pr12A = "Yuki";
	$pr12B = "Srijan";
	$pr12C = "Aashish";
	$r12 = "Tharkey";

$q13 = "$startPAlign Hormis Tintin, quel personnage (Humain) est présent dans chaque épisode de la série ?  $endPAlign";
	$pr13A = "Les Dupont et Dupond";
	$pr13B = "Nestor";
	$pr13C = "Capitaine Haddock";
	$r13 = "Hergé";

$q14 = "$startPAlign Dans Tintin au pays de l'or noir, Tintin libère le fils de l'émir Ben Kalish Ezab (Abdallah). Quel personnage vient lui prêter main-forte à la fin de l'épisode ? $endPAlign";
	$pr14A = "Séraphin Lampion";
	$pr14B = "Mourad";
	$pr14C = "Oliveira da Figueira";
	$r14 = "Capitaine Haddock";

$q15 = "$startPAlign Quel est le nom de ville ou Tintin s'équipe notamment d'un cheval, avant de partir à la recherche de Boby Smiles qui se cache dans les montagnes ? (Tintin en Amérique) $endPAlign";
	$pr15A = "Serpent's Cliff";
	$pr15B = "Swifttown";
	$pr15C = "Aurora Town";
	$r15 = "Red Dog City";


$q16 = "$startPAlign Comme vous le savez, Tintin est reporter. Lors de l'épisode Tintin en Amérique, un célèbre journal l'embauche pour qu'il écrive un article sur la guerre des gangs qui fait rage à Chicago. Quel est ce journal ? $endPAlign";
	$pr16A = "Chicago Tribune";
	$pr16B = "Chicago American";
	$pr16C = "Chicago Herald";
	$r16 = "Chicago Post";

$q17 = "$startPAlign Quel est le nom de l'aéroport ou le Capitaine, Tintin et Milou atterrissent dans Tintin Objectif Lune. (Ils sont dans le pays suivant : La Syldavie) ? $endPAlign";
	$pr17A = "Nasvska";
	$pr17B = "Tarkeysta";
	$pr17C = "Syldavia AirPort";
	$r17 = "Klow";

$q18 = "$startPAlign Lors des essais des combinaisons spatiales, Le capitaine fait signe à Tintin et aux scientifiques qu'il suffoque et appelle à l'aide. Pour quelle raison ? (Tintin - Objectif Lune) $endPAlign";
	$pr18A = "Poil à gratter dans sa combinaison";
	$pr18B = "Lézard est dans sa combinaison";
	$pr18C = "La combinaison lui sert trop le thorax";
	$r18 = "Des souris sont dans sa combinaison";

$q19 = "$startPAlign Comment s'appelle le professeur qui est spécialiste en  sigillographie (discipline historique qui a pour objet l'étude des sceaux sous tous leurs aspects et quelle qu'en soit la date) dans Tintin et Le Sceptre d'Ottokar ? $endPAlign";
	$pr19A = "Bergamotte";
	$pr19B = "Calys";
	$pr19C = "Björgenskjöld";
	$r19 = "Halambique";

$q20 = "$startPAlign Qui rapporte Le Sceptre d'Ottokar au roi de Muskar XII de Syldavie ? $endPAlign";
	$pr20A = "Tintin";
	$pr20B = "Capitaine Haddock";
	$pr20C = "Dupond et Dupont";
	$r20 = "Milou";

$q21 = "$startPAlign Madame Vlek, la cuisinière de Tournesol dans Tintin et le lac aux requins, est une espionne de l'organisation de Rastapopoulos, Elle communique à l'aide d'un poste émetteur. Ou cache t-elle cet appareil ?  $endPAlign";
	$pr21A = "Derrière l'horloge murale";
	$pr21B = "Le grenier";
	$pr21C = "Une marmite";
	$r21 = "Un puits";

$q22 = "$startPAlign A son arrivée, Mme Castafiore offre à son ami Tintin un disque de ses succès. Comment s'intitule t'il ? (Tintin et les bijoux de la Castafiore) $endPAlign";
	$pr22A = "La Flûte enchantée";
	$pr22B = "Fantaisie-Impromptu";
	$pr22C = "El Adagio";
	$r22 = "Aust, de Gounod";

$q23 = "$startPAlign Quel est le nom du milliardaire qui accueille Tintin et ses amis dans son avion privé pour se rendre dans l'épisode Vol 714 pour Sydney ? $endPAlign";
	$pr23A = "Dawson";
	$pr23B = "Di Gorgonzola";
	$pr23C = "Spalding ";
	$r23 = "Carredas";

$q24 = "$startPAlign Dans l'épisode L'Ile noire, Tintin poursuit Yvan et le Docteur Müller, après qu'il se soit libéré des cordes qui les retenaient à un tronc d'arbre. Quel véhicule tintin utilise t-il, pour les pourchasser ?  $endPAlign";
	$pr24A = "Un Side-car";
	$pr24B = "Une vedette";
	$pr24C = "Un avion";
	$r24 = "Un camping-car";

$q25 = "$startPAlign Quel indice découvre Tintin dans la veste du pickpocket qui va permettre au Dupondt d'arrêter ce malfaiteur à son domicile ? (Le secret de la licorne) $endPAlign";
	$pr25A = "Sa carte de santé";
	$pr25B = "Le portefeuille du voleur";
	$pr25C = "Ses initiales";
	$r25 = "Une marque de Teinturerie";

$q26 = "$startPAlign Ou se cache le professeur Tournesol, sur le bateau Sirius, commandé par le capitaine Haddock ? (Le trésor de Rackham le rouge) $endPAlign";
	$pr26A = "A fond de calle";
	$pr26B = "Dans la salle des machines";
	$pr26C = "Dans son sous-marin";
	$r26 = "Dans un canneau de sauvetage";

$q27 = "$startPAlign Dans quel ville Tryphon se rend-il dans l'épisode L'affaire Tournesol ? $endPAlign";
	$pr27A = "Bern";
	$pr27B = "Nyon";
	$pr27C = "Lausanne";
	$r27 = "Genève";

$q28 = "$startPAlign Combien y a-t-il d'astronautes dans la fusée lunaire (On a marché sur la lune) ? $endPAlign";
	$pr28A = "6";
	$pr28B = "7";
	$pr28C = "9";
	$r28 = "8";

$q29 = "$startPAlign Qui sont le ou les premier(s) propriétaire(s) du château de Moulinsart ? $endPAlign";
	$pr29A = "Les frères Hallambique";
	$pr29B = "Les frères Cantonneau";
	$pr29C = "Les frères Topolino";
	$r29 = "Les frères Loiseau";

$q30 = "$startPAlign Quel est le nom de l'organisation qui lutte activement contre les agissements criminels de M. Mitsuhirato ? (Le lotus Bleue) $endPAlign";
	$pr30A = "Les frères du temple bleu";
	$pr30B = "Les fils du samouraïs";
	$pr30C = "Les fils du mont Fugi";
	$r30 = "Les fils du dragon";

$q31 = "$startPAlign Dans l'épisode les sept boules de cristal, Tintin se rend à Moulinsart par voie ferroviaire. Quel est le nom de la gare ou il s'arrête ? $endPAlign";
	$pr31A = "Moensberg";
	$pr31B = "Liège-Carré";
	$pr31C = "Bruges";
	$r31 = "Moulinsart";

$q32 = "$startPAlign Tintin perd de vue le lieutenant Alan dans les rue de Bagghar. Comment fait-il pour le retrouver, sans se faire repérer ? (Tintin et le crabe aux pinces d'or) $endPAlign";
	$pr32A = "Il se cache dans un tonneau";
	$pr32B = "Il se cache sur un toit";
	$pr32C = "Il créer une émeute en ville";
	$r32 = "Il se déguise en SDF";

$q33 = "$startPAlign Quel est le prénom de la femme du général Alcazar ? (Tintin et les picaros) $endPAlign";
	$pr33A = "Maria";
	$pr33B = "Angela";
	$pr33C = "Fanny";
	$r33 = "Peggy";

$q34 = "$startPAlign Dans l'épisode Tintin et le crabe aux pinces d'or, Le célèbre reporter chercher une boite de conserve. Où la cherche-t-il ? $endPAlign";
	$pr34A = "Dans la décharge municipal";
	$pr34B = "Dans un égout";
	$pr34C = "Dans Une poubelle";
	$r34 = "Dans le sac d'un SDF";

$q35 = "$startPAlign Dans l'épisode L'affaire Tournesol, Ou se trouve le micro-film du professeur contenant les plans fondamentaux de son invention ? $endPAlign";
	$pr35A = "Dans la doublure de son chapeau";
	$pr35B = "Sur son bureau";
	$pr35C = "Dans son parapluie";
	$r35 = "Sur sa table de nuit";

$q36 = "$startPAlign Qui délivre Tintin de la prison après qu'il est été écroué pour trahison (Les Cigares du pharaon)  ? $endPAlign";
	$pr36A = "Oliveira Da Figueira";
	$pr36B = "Milou";
	$pr36C = "Capitaine Haddock";
	$r36 = "Les Dupondt";

$q37 = "$startPAlign Le fameux milliardaire de l'épisode Vol 714 pour Sydney, reçoit un appel avant d'embarquer dans son avion avec Tintin et ses amis. Quel est le sujet de cette discussion ? $endPAlign";
	$pr37A = "Achat d'une nouvelle ile paradisiaque";
	$pr37B = "Achat d'un yacht luxueux";
	$pr37C = "Achat d'une voiture luxueuse";
	$r37 = "Achat de tableaux de maitres";

$q38 = "$startPAlign Où se trouve le trésor de Rackham le rouge ? $endPAlign";
	$pr38A = "Dans le grenier";
	$pr38B = "Dans la cave du château";
	$pr38C = "Enterrer au fond du jardin";
	$r38 = "Dans un globe terrestre";

$q39 = "$startPAlign Quel est le nom de l'astéroïde qui attire Haddock et Tintin, lors de leur sortie extravéhiculaire dans l'épisode On a marché sur la lune ? $endPAlign";
	$pr39A = "Nemesis 128";
	$pr39B = "Eunomia";
	$pr39C = "Icarus";
	$r39 = "Apophis";

$q40 = "$startPAlign Une fois revenu au château de Moulinsart, Le capitaine dit à Tintin qu'il est - content d'entendre un bruit qui lui est familier - Quel est ce bruit ? (Cock en Stock) $endPAlign";
	$pr40A = "Les tourterelles qui jonche le château";
	$pr40B = "Nestor qui ton la pelouse";
	$pr40C = "Le jardinier qui ton la pelouse";
	$r40 = "Trypon qui fait du Roller électrique";