<?php 
    include 'safariDetect.php';
    include 'controller.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="L'ultime quiz de Tintin, êtes-vous un vrai connaisseur de la série annimée ? Teste tes connaissances et tente ta chance d'obtenir le Diplome du Tintin'Ophile">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- pour un responsive  à la volé -->
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />    
  <title>Tintin, l'ultime quiz</title>
</head>
    <body id="global">
      <div id="page-wrap">
        <div style="position:fixed; top:45px; background-color:lightblue; z-index:10;">
        <!-- Timer in jss -->
            <p class="digits" id="cd-min" style="display: inline;">22</p>
            <p class="digits" style="display: inline;">:</p>
            <p class="digits" id="cd-sec" style="display: inline;">00</p>
        </div>
        <h1 style="text-align:center;">Tintin, l'ultime quiz <img src="images/tintin.png" alt="Tintin" width="75" height="75"></h1> 
        </div>
        <form action="grade.php" method="post" id="quiz">
                <ol>
                    <div class="container">
                        <?php 
                        for ($i = 1; $i <= $nbQuestions ; $i++) {
                            echo "<div class=\"card\">";
                            echo ${'q'.$i};
                            $display3 = "";
                            if (isset(${'pr'.$i.'A'})) {
                                $display1="<label class=\"radio\"> <input type=\"radio\" name=\"question-".$i."-answer\" value=\"${'pr'.$i.'A'}\"><span>${'pr'.$i.'A'}</span></label>";
                            }
                            if (isset(${'pr'.$i.'B'})) {
                                $display2="<label class=\"radio\"> <input type=\"radio\" name=\"question-".$i."-answer\" value=\"${'pr'.$i.'B'}\"><span>${'pr'.$i.'B'}</span></label>";
                            }
                            if (isset(${'pr'.$i.'C'})) {
                                $display3="<label class=\"radio\"> <input type=\"radio\" name=\"question-".$i."-answer\" value=\"${'pr'.$i.'C'}\"><span>${'pr'.$i.'C'}</span></label>";
                            }
                            if (isset(${'r'.$i})) { // La bonne réponse sera tj stocké dans r.x
                                $display4="<label class=\"radio\"> <input type=\"radio\" name=\"question-".$i."-answer\" value=\"${'r'.$i}\"><span>${'r'.$i}</span></label>";
                            }
                            $array1 = array(1 => $display1,$display2,$display3,$display4);
                            shuffle($array1);
                            foreach ($array1 as $array1) { // permet de mélanger l'ordre des potentiels réponses 
                                    echo $array1;
                            }
                            echo "</div>";
                        } 
                        ?>
                        </ol>
                    <div>
                    </br>
                    </br>
                    </br>
                        <div class ="cardEndForm">
                            <div class="group">
                                <p> Email *  : <input type="email" id="email" name="email" required size="15" placeholder="Entrer votre email ici ... "> </p>
                                <p> Nom / Prénom :<input type="text" id="name" name="name"  size="15" placeholder="Entrer votre nom et votre prénom ..."> </p>
                                <p> Âge :<input type="number" id="age" name="age"  size="15" placeholder="Indiquer votre âge ici ... "> </p>
                                <p> <i> le champ avec un astérisque * est requis afin que je puisse vous envoyer la correction </i> <p>
                                <input type="submit" value="Envoyer les réponses" />
                            </div>
                        </div>
        </form>
    </body>
	<div class="bo-wrap clr4">
	  <div class="bo-footer">
	    <div class="bo-footer-social"></div>
	  </div>
	</div>
	<div class="bo-wrap clr3"> <!-- footer -->
	  <div class="bo-footer">
	    <div class="bo-footer-smap">
	        <a href="https://fr.wikipedia.org/wiki/Liste_des_personnages_des_Aventures_de_Tintin" target="_blank" style="color:grey;">Les personnages</a> | <a href="https://www.museeherge.com/fr" target="_blank" style="color:grey;">Musée Hergé</a>
		</div>
		    <div class="bo-footer-uonline">
	        <script id="_wautoy">
	        	var _wau = _wau || []; _wau.push(["small", "p6egqc1t5bze", "toy"]);
				(function() {var s=document.createElement("script"); s.async=true;
				s.src="http://widgets.amung.us/small.js";
				document.getElementsByTagName("head")[0].appendChild(s);
				})();
			</script>
		</div>
		<div class="bo-footer-power" style="color:grey;">
	        Tintin, <a href="http://tintin.com/" target="_blank" style="color:grey;">Site Officiel</a>
		</div>
	    <div class="clearfix"></div>
	  </div>
	</div>
	<div class="bo-wrap clr4">
	  <div class="bo-footer">
	    <div class="bo-footer-copyright">Brlndtech &copy; 2017<script>new Date().getFullYear()>2010&&document.write(" - "+new Date().getFullYear());</script></strong> Tous droits réservés.</div>
	  </div>
	</div> <!-- fin footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> // permet de pouvoir inclure un fichier permettant d'exec le js VERSION :   mai 2019 </script> 
    <script type="text/javascript">
    // Permet de randomiser les questions, preponse qui sont stocké dans une Div pour chaque"
    $(document).ready(function(){
        var collection = $("div.container div").get();
        collection.sort(function() {
            return Math.random()*10 > 5 ? 1 : -1;
        });
        $.each(collection,function(i,el) {
            $(el).appendTo( $(el).parent() );
        });
    });
    </script>
    <!-- Message d'accueil-->
    <script>
        alert("Salut, Les questions de ce quiz sont basés sur les 21 épisodes des aventures de Tintin (série télévisée d'animation - 1991), ainsi que sur le film d'animation Tintin et le lac aux requins. Vous disposez de 22 minutes dès à présent. N'Oubliez pas de remplir le formulaire Email-Nom/Prénom-Age. Bonne chance :)");
    </script>
    <script  src="./js/timerInMinutes.js"></script> <!-- compteur decrémenté de 22min à 0 puis envois -->
    <script  src="./js/sendFormAutomatically-php.js"></script> <!-- envois le form automatiquement au bout de 22 minutes -->
</html>