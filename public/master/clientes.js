$(document).on('ready', function() {
	
	  $("#tabla").DataTable();


	  $('.btn-eliminar').on('click', function(event) {
	  	event.preventDefault();
	  var  id = $(this).attr('id');
	  	if (confirm("Deseas eliminar este individuo?")) {
	  		

	  		window.location = URL+'clientes/destroy/'+ id;

	  	}

	  });
	   

	
});

 