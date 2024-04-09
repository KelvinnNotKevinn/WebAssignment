function dropDown() 
{
    document.getElementById("dropDownAccount").classList.toggle("show");
}

window.onclick = function(e) 
{
    if 
	(!e.target.closest('.dropbtn')) 
	{
        var dropDownAccount = document.getElementById("dropDownAccount");
        if (dropDownAccount.classList.contains('show')) 
		{
            dropDownAccount.classList.remove('show');
        }
    }
}