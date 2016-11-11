function ajaxGet(url, onSuccess) {
	xmlhttp = new XMLHttpRequest();
	document.getElementById("show-more-status").innerHTML = "...processing...";
	xmlhttp.onreadystatechange = setTimeout(function()
	{
	    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	    {
				onSuccess(xmlhttp.responseText);
	    }
	}, 2000)
	xmlhttp.open('GET', url, true);
	xmlhttp.send();
}
