function validate()
{
	var name = document.getElementById("custname").value;
	var pass = document.getElementById("pass").value;
	var confirmpass = document.getElementById("confirmpass").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("mobile").value;

	var findA = email.indexOf("@");           
	var findcom = email.indexOf(".com");

	if(name == "")
		alert("Please enter your name");
	else if(pass == "")
		alert("Please enter your password");
	else if(email == "")
		alert("Please enter your email");
	else if(phone == "")
		alert("Please enter your phone number");
	else if(confirmpass == "")
		alert("Please enter your confirmation password");
	else if(pass != confirmpass)
		alert("Your password and confirmation password is not same!");
	else if(findA == -1 || findcom == -1)                                    
		alert("Please enter valid email");	
	else
		alert("Successfully registered");
}