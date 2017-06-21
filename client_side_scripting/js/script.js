$(document).ready(function(){

$("#login").click(function(){

	var e=$("#email").val();
	var p=$("#password").val();
	$.ajax({
		url : "http://services.trainees.baabtra.com/LoginService/login.php",
		data : {
			email:e,
			password:p
		},
		dataType:"json",
		success:function(response){
			if(response[0].ResponseCode == 200)
			{
				window.location.replace("home.html");
			}
			else{
				window.location.replace("login_error.html");
			}
		}

	});

});
});