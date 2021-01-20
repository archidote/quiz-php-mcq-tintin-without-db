<?php session_start(); ?>
<?php
//--------------------------------------------------------------
// include autoloader & controller.php
include '../controller.php';
require_once '../dompdf/autoload.inc.php'; 

// reference the dompdf namespace

use Dompdf\Dompdf; 

$dompdf = new Dompdf(); 


// $string  = 'hello';

$html =
  "         <center>
            <div style=\"margin: 0 auto; width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878\">
            <div style=\"width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #e3c449\">
                   <span style=\"font-size:50px; font-weight:bold\">Diplome du Tintin'Ophile </span>
                   <br><br>
                   <span style=\"font-size:25px\"><i>Ce diplome certie que </i></span>
                   <br><br>
                   <span style=\"font-size:30px\"><b>".$_SESSION['name']."</b></span><br/><br/>
                   <span style=\"font-size:25px\"><i>A réussi l'examen théorique</i></span> <br/><br/>
                   <span style=\"font-size:30px\">L'ultime quiz de Tintin</span> <br/><br/>
                   <span style=\"font-size:20px\">avec la note honorable de ".$_SESSION['totalCorrect']."/$nbQuestions</span> <br/><br/><br/><br/>
                   <span style=\"font-size:25px\"><i> le ".date("d/m/Y")."</i></span><br><br><br><br><br><br><br>
                   <span style=\"font-size:25px\"> <u> Mention très bien  </u> ! </span><br>
                  <span style=\"font-size:30px\"></span>
            </div>
            </div>
            </center>
";
// margin: 0 auto; pour centrer tout dans le pdf !!! 
// <img src=\"/home/u621627980/domains/brlnd-tech.eu/public_html/ultime-quiz-tintin/images/tintin.png\" width=\"50\" height=\"50\" />

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$nomFichier = "diplome-".$_SESSION['name'].".pdf";
$dompdf->stream($nomFichier);

?>