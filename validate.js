
function validate()
{
	 var userName = document.getElementById("userName").value;
	 var pass = document.getElementById("password").value;
	 var flag=true;
	 var count=0;


	if(userName=="")
	{
	    document.getElementById("userNameWarning").innerHTML="userName not Entered!";
		flag= false;
	}


	if(pass=="")
	{
		document.getElementById("PasswordWarning").innerHTML="Password not Entered!";

		flag= false;

	}
  if(password.length<11)
  {
    document.getElementById("PasswordWarning").innerHTML="Password length must be greater than 7!";
		flag=false;
  }


	if(flag==true)
	{
		return true;
	}
	else
	{

		return false;
	}


}
