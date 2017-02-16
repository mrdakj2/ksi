$(function() {

 	$("#ajaxForma").submit(function(){
 		var mydata = $(this).serialize();
 		$.ajax({
					url: $(this).attr('action'),
					type: "POST",
					data: mydata,
					success: function(rezultat){
						alert(rezultat);
					},
					error: function(){
						window.alert("doslo je do greske");
					}
		});

 		return false;
 	});

});