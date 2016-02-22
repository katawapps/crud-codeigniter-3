var Common = {

	_alert_succes:function (msg) {
		
		bootbox.dialog({
		  message: msg,
		  title: "Mensaje",
		  buttons: {
		    success: {
		      label: "Success!",
		      className: "btn-success"
		     
		    }
		  }
		});
	},
	_alert_error:function (msg) {
		
		bootbox.dialog({
		  message: msg,
		  title: "Mensaje",
		  buttons: {
		    danger: {
		      label: "Danger!",
		      className: "btn-danger"
		       
		    }
		  }
		});
	}


};