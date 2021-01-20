function sendform() {
    document.getElementById('quiz').submit(); //envoie le formulaire
}
setTimeout(sendform,22*60*1000); //attend 20*60*1000ms (soit 20min) avant d'appeler la fonction sendform
								 // les deux timers, ont du mal à se synchroniser !