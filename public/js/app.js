$(document).ready(function(){
	$('.menu-btn a').on('click', function(e){
		e.preventDefault()
		$('.small').toggleClass('active')
		$('.menu-btn a').toggleClass('active')
	})
	$('.partenaire').on('click', function(){
		window.open($(this).data('lien'));
	})
	$('.slider').glide({
		autoplay: 3500,
		hoverpause: true, // set to false for nonstop rotate
		arrowRightText: '&rarr;',
		arrowLeftText: '&larr;'
	})
})