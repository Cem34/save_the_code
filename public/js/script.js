
	var first = document.getElementById("minute");
	var second = document.getElementById("second");
	var t;
	var sec = 1, min = 10;

	function majChrono() {
	    // Fonction mettant à jour le chronomètre
	    sec-=1;
	    if (sec == 0) {
	    // Incrémentation des minutes si 60 secondes sont atteintes et remise à 0 des secondes
	        sec = 59;
	        min -= 1;
	    }

	    first.innerHTML = "0" + min + " : ";

	    if(sec<10){
	    	second.innerHTML = "0" + sec;
	    }
	    else{
	    	second.innerHTML = sec;
	    }

	    /*--if(min ==-1){
	    	document.location.href="http://mon-aventure.com";
	    }-**/
	}

	function demarrerChrono() {
	    // Cette fonction va actualiser le chronomètre toutes les secondes en appelant la fonction majChrono() et permet de désactiver le bouton de lancement
	    t = setInterval(majChrono, 1000);
	}





