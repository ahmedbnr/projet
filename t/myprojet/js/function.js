$(document).ready(function(){

	$('#search').keyup(function(){

		var search = $(this).val();
		search = $.trim(search);
		//$('#resultat').text(search);
		if (search != "") {

			$.post('postAfficher.php',{search:search},function(data){

				$('#resultat div').html(data);
			});
		}
	});
});