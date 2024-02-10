$(function() {
			
$('ul li a[href="/' + location.pathname.split("/")[1] + '"]').addClass('active');
		});
		
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			ContentResize();
			window.location.href = $(this).attr('href');
			
			
});