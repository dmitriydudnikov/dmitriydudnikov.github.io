$(document) .ready(function() {
	$('#list').click(function(){
		$('.item').addClass('list');
	});

	$('#table').click(function(){
		$('.item').removeClass('list');
	});
});
