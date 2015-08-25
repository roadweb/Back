function myLine(id){ 

	var navLine = $('.rw-blog-jf-line');
	var baseWidth = 100/7;
	var newWidth;


	newWidth = baseWidth * id;

	navLine.css('width', newWidth + '%');

};
