$(document).ready(function()
{
	$("#submit").mouseover(function(event)
	{	
		// event.preventDefault();

		var userName=document.getElementById("username").value;
		var password=document.getElementById("password").value;

		if(userName!="" && password!="")
		{
			if(userName.includes("careu_119") || userName.includes("careu_1990") || userName.includes("careu_admin"))
			{
				// var formData=$("#logIn").serialize();
				// $.post("careu/home",
				// 	formData,
				// 	function(data,status)
				// 	{
				// 		if(data=="failed" && status=="success")
				// 		{
				// 			$("#error2").addClass("hidden");
				// 			$("#error3").addClass("hidden");
				// 			$("#error1").removeClass("hidden");
				// 		}
				// 		else
				// 		{
				// 			if(userName.includes("admin"))
				// 			{
				// 				$.load("careu/homepage");
				// 			}

				// 			if(userName.includes("119"))
				// 			{
				// 				location.replace("pages/119Operator/home.php");
				// 			}

				// 			if(userName.includes("1990"))
				// 			{
				// 				location.replace("pages/1990Operator/home.php");
				// 			}
				// 		}
				// 	}
				// 	);
			}
			else
			{
				$("#error3").addClass("hidden");
				$("#error1").addClass("hidden");
				$("#error2").removeClass("hidden");
			}
		}
		else
		{
			$("#error1").addClass("hidden");
			$("#error2").addClass("hidden");
			$("#error3").removeClass("hidden");
		}
	});
});
/*const form=document.querySelector("#logIn");

document.getElementById("username").addEventListener("input",validate);
document.getElementById("password");

function validate(e){
	if(!e.target.value.substring(0,5).includes("careu"))
	{
		$("#username").addClass("inputcolor");
	}
	else
	{
		$("#username").removeClass("inputcolor");		
	}
}*/