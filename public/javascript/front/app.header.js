$(function() { 
	$(window).scroll(function () { //Au scroll dans la fenetre on déclenche la fonction 
		if ($(this).scrollTop() > 150) { //si on a défilé de plus de 150px du haut vers le bas 
		$('#rw-nav').addClass("fixNavigation"); //on ajoute la classe "fixNavigation" à <div id="navigation"> 
		} 	
		else 
		{ 
			$('#rw-nav').removeClass("fixNavigation");
		//sinon on retire la classe "fixNavigation" à <div id="navigation"> 
		} 
	}); 
}); 