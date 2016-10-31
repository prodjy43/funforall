$(document).ready(function(){
	$('.menu-btn a').on('click', function(e){
		e.preventDefault();
		$('.small').toggleClass('active');
		$('.menu-btn a').toggleClass('active');
	})
})