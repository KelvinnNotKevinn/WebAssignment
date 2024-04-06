let PCIndex = 1;
showPC(PCIndex);

// Next/previous controls
function plusPC(n) 
{
	showPC(PCIndex += n);
}

function showPC(n) 
{
	let i;
	let customizePC = document.getElementsByClassName("customizePC");

	if (n > customizePC.length) 
	{
		PCIndex = 1;
	}

	if (n < 1) 
	{
		PCIndex = customizePC.length;
	}
	
	for (i = 0; i < customizePC.length; i++) 
	{
		customizePC[i].setAttribute("class", "customizePC fade");
	}
	
	customizePC[PCIndex-1].setAttribute("class", "customizePC showing fade");
}