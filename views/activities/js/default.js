$(function() {
	$.ajax({
		url: "activities/ajax",
		type: "POST",
		dataType: "json",
		success: function(result){
			var len = result.length;
			for (var i=0; i<len; i++) {
				var name = result[i].name;
				var username = result[i].username;
				var description = result[i].description;
				var field = "<div class='field'>"+"<h4>"+name+"</h4>"+"<h6>"+username+"</h6>"+"<p>"+description+"</p>"+"</div>";
				$("#content").append(field);
			}
		},
		error: function(){
			window.alert("doslo je do greske");
		}
	});

});