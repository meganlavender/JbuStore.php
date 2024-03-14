var info = "<br>"
function popupfunction(x)
{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade'+x).style.display='block';			
}
function popupclose(x)
{			
	document.getElementById('popup'+x).style.display='none';			
	document.getElementById('fade'+x).style.display='none';			
}
function addcart(x)
{
	document.getElementById('displayMyCart').innerHTML += x+info;
}
function showMyCart()
{
	document.getElementById("displayMyCart").style.display="block";
}