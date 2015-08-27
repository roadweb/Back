$(document).ready(function lineFix() {
	var $width1 = 12.5;
	var $width2 = 2*$width1;
	var $width3 = 3*$width1;
	var $width4 = 4*$width1;
	var $width5 = 5*$width1;
	var $width6 = 6*$width1;
	var $width7 = 7*$width1;

	//job_id 1
	$('#rw-blog-jf-job-1').click(function() {
		$('.rw-blog-jf-line').css('width', $width1 + '%');
		$('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-2, #rw-blog-jf-job-3, #rw-blog-jf-job-4, #rw-blog-jf-job-5, #rw-blog-jf-job-6, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');
	});

    //job_id 2
    $('#rw-blog-jf-job-2').click(function() {
		$('.rw-blog-jf-line').css('width', $width2 + '%');
        $('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-1, #rw-blog-jf-job-3, #rw-blog-jf-job-4, #rw-blog-jf-job-5, #rw-blog-jf-job-6, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');

    });
	//job_id 3
	$('#rw-blog-jf-job-3').click(function() {
		$('.rw-blog-jf-line').css('width', $width3 + '%');
		$('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-2, #rw-blog-jf-job-1, #rw-blog-jf-job-4, #rw-blog-jf-job-5, #rw-blog-jf-job-6, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');
	});

    //job_id 4
    $('#rw-blog-jf-job-4').click(function() {
		$('.rw-blog-jf-line').css('width', $width4 + '%');
        $('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-1, #rw-blog-jf-job-3, #rw-blog-jf-job-2, #rw-blog-jf-job-5, #rw-blog-jf-job-6, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');

    });
	//job_id 5
	$('#rw-blog-jf-job-5').click(function() {
		$('.rw-blog-jf-line').css('width', $width5 + '%');
		$('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-2, #rw-blog-jf-job-3, #rw-blog-jf-job-4, #rw-blog-jf-job-1, #rw-blog-jf-job-6, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');
	});

    //job_id 6
    $('#rw-blog-jf-job-6').click(function() {
		$('.rw-blog-jf-line').css('width', $width6 + '%');
        $('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-1, #rw-blog-jf-job-3, #rw-blog-jf-job-4, #rw-blog-jf-job-5, #rw-blog-jf-job-2, #rw-blog-jf-job-7').removeClass('rw-blog-jf-navbar-job-hover');
    });

    //job_id 6
     $('#rw-blog-jf-job-7').click(function() {
		$('.rw-blog-jf-line').css('width', $width7 + '%');
        $('#rw-blog-jf-hexagone-end').css('display', 'none');
		$(this).addClass('rw-blog-jf-navbar-job-hover');
        $('#rw-blog-jf-job-1, #rw-blog-jf-job-3, #rw-blog-jf-job-4, #rw-blog-jf-job-5, #rw-blog-jf-job-2, #rw-blog-jf-job-6').removeClass('rw-blog-jf-navbar-job-hover');
	 });

});