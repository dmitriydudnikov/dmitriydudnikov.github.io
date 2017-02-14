$(document) .ready(function() {
	$('#list').click(function(){
		$('.item').addClass('list');
		$('#table').removeClass('hidden');
		$('#list').addClass('hidden');
	});

	$('#table').click(function(){
		$('.item').removeClass('list');
		$('#table').addClass('hidden');
		$('#list').removeClass('hidden');
	});
});
