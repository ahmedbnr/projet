$(document).ready(function(){

	$('#search').keyup(function(){

		var search = $(this).val();
		search = $.trim(search);
		//$('#resultat').text(search);
		if (search != "") {

			$.post('postAfficher2.php',{search:search},function(data){

				$('#resultat tbody').html(data);
			});
		}
	});
});