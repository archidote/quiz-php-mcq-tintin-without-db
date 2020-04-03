    <!-- Ne pas retirer les deux liens pour jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.1.0/jquery.browser.min.js"></script>
    <script type="text/javascript">
            var browserOK = $.browser.name
            if (browserOK == 'safari') {
                var browserDetails = "<p>Votre navigateur est "+ browserOK +". Préférer l'utilisation de <a href=\"googlechrome://brlnd-tech.eu/ultime-quiz-tintin/\">Chrome</a>. ou téléchargez :  <a href=\"https://apps.apple.com/fr/app/google-chrome/id535886823\">Chrome</a>";
                // normal, que ce script renvois du blanc sur chrome et les autres nav
                
                document.write(browserDetails);
            }
    </script>