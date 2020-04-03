    <?php
    include 'controller.php';
    if(isset($_POST['email'])) // template modifié du formulaire news letter de brlnd-tech.eu | "si on recoit comme argument "email, alors on mail"
        {   
            $recipient = $_POST['email'];
            $from = $mailTransmitter ; 
			$fromName = $mailName ; 
            $header = "MIME-Version: 1.0" . "\r\n";
			$header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // permet de mettre en forme le mail en mode "html", pour que gmail puisse interpréter le langage html/css ; c'est un niv de sécurité supplémentaire de puis quelques années 
			$header .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
            // $header .= 'Bcc: gsb-portfolio@outlook.com' . "\r\n"; 
            $subject = $subjectMail;
            $message = "<p align=\"justify\">Bonjour $name, votre score à l'utlime quiz de tintin est de $totalCorrect/$nbQuestions $emoji. Voici la correction :</p>";	
            for ($i = 1; $i <= $nbQuestions; $i++) {
                
            	$message .= ${'q'.$i};
            	$message .= "<p align=\"justify\">Votre Réponse : ${'answer'.$i} (${'emojiAnswer'.$i} ${'goodAnswer'.$i} point)</p><p style=\"color:green;\"> 
                Réponse : <u>${'r'.$i}</u></p>";
            }
            

            $message .= "<br> <p align=\"justify\"> Ce message a été envoyé automatiquement, merci de ne pas y répondre.</p>
            <img src=\"https://brlnd-tech.eu/ultime-quiz-tintin/images/tintin.png\" width=\"50\" height=\"50\" /> ";
            // mettre le copyright dans le mail 
            mail($recipient, $subject, $message, $header) or die("Erreur php mail, entrer un email"); 
        }           
?>