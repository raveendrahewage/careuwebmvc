$(document).ready(function(){
	$("#submit").mouseover(function(event){
		// event.preventDefault();

		var firstname=document.getElementById("firstName").value;
		var lastname=document.getElementById("lastName").value;
		var password1=document.getElementById("password1").value;
		var password2=document.getElementById("password2").value;
		var error=document.getElementById("err");

		if(firstname=="")
		{
			error.innerText = "Please, give a first name!";
			$("#err").removeClass("hide");
		}
		else if(lastname=="")
		{
			error.innerText = "Please, give a last name!";
			$("#err").removeClass("hide");
		}
		else if(password1=="" || password2=="")
		{
			error.innerText = "Please, fill the password feilds!";
			$("#err").removeClass("hide");
		}
		else if(password1!=password2)
		{
			error.innerText = "Passwords do not match!";
			$("#err").removeClass("hide");
		}
		else
		{
			$("#err").addClass("hide");
		}
	});
});