let form = document.getElementById("userSignUp");

function checkPassword(event)
{
	let thePassword = document.getElementById("password").value;
	let theConfirmPassword = document.getElementById("confirmPassword").value;

	if (thePassword !== theConfirmPassword)
	{
		event.preventDefault();
		window.alert("password not same!!!");
	}
}

form.addEventListener("submit",checkPassword);

