function myLine(id){ 

	var navLine = $('.rw-carrous-navbar-line');
	var baseWidth = 150;
	var newWidth;


	newWidth = baseWidth * id;

	navLine.css('width', newWidth + 'px');

};
