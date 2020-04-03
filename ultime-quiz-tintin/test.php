<?php
echo "<form action='test.php' method='POST' >";
echo "<input name=num type=number />";
echo "<input type=submit value=test />";
echo "</form>";

if(isset($_POST['num'])) {
	for ($i=0; $i < $_POST['num']; $i++) { 
		echo "Question : <input type=text /><br>";
		echo "Réponse 1 : <input type=text /><input type=\"radio\" /><br>";
		echo "Réponse 2 : <input type=text /><input type=\"radio\" /><br>";
		echo "Réponse 3 : <input type=text /><input type=\"radio\" /><br>";
		echo "Réponse 4 : <input type=text /><input type=\"radio\" /><br>";
		echo "<br>";
	}
}
?>