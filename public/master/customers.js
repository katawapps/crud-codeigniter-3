$(document).on('ready', function() {
	
	  $("#tabla").DataTable();


	  $('.btnAdd').on('click', function(event) {
	  	event.preventDefault();
	 
	 		Common._alert_succes("Cliente agregado")

	  });

	    $('.btnUpdate').on('click', function(event) {
	  	event.preventDefault();
	 
	 	Common._alert_succes("Cliente actualizado")

	  });
	   
	   

	
});

 