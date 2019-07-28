
function validate()
{
	 var un = document.getElementById("userName").value;
	 var em = document.getElementById("email").value;
	 var pass = document.getElementById("password").value;
 	 var repass = document.getElementById("confirm_password").value;
	 var flag=true;
	 var count=0;


	/*if(un=="")
	{
	    document.getElementById("un").innerHTML="First Name not Entered!";
		flag= false;
	}


	if(email=="")
	{
		document.getElementById("em").innerHTML="Email not Entered!";
		flag= false;
	}
	if(email)
		{
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var a=re.test(email);
            if(a)
            {
            	document.getElementById("em").style.backgroundColor= "green";
            }
		}


	if(pass=="")
	{
		document.getElementById("pass").innerHTML="Password not Entered!";

		flag= false;

	}



	if(repass=="")
	{
		document.getElementById("confirm_password").innerHTML="Confirm pass not Entered!";
		flag= false;
	}
	if(pass!="" && pass[0]===pass[0].toUpperCase())
	{
		flag=false;

	}
	else{
		flag=false;
		document.getElementById("pass").innerHTML="First letter must be upercase!";
	}
	if(pass!="" && repass!="" && pass==repass)
		{
			var ree=/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
			  return ree.test(pass);
		}
	if(pass!=repass)
    {
		document.getElementById("confirm_password").innerHTML="Passwords do not match!";

		flag= false;
	}

	if(flag==true)
	{
		return true;
	}
	else
	{

		return false;
	}*/
  return false;


}
