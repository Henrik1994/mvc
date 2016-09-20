$(function(){
	search('/main/select');
	$('body').on('submit', '#search_form', function(e){
		e.preventDefault();
		search('/main/select?word='+$('#search_word').val());
	});
});
 
