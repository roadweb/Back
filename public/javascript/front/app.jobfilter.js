$(document).ready(function() {
	$width = <?php echo $job->id; ?> * 12.5;
	$('#rw-blog-jf-job-1').click(function(){
		$('.rw-blog-jf-line').css('width', $width + '%')
	});

});