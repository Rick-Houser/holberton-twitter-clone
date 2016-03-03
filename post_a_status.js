document.addEventListener("DOMContentLoaded", function() { 
	document.getElementById("poststatusbtn").addEventListener("click", postpre);
	function postpre() { // call toggle function on poststatusbtn
		var elem = document.getElementById('statuspost');
		elem.toggle(); // call toggle on div containing new status post
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
	}
	document.getElementById("postbtn").addEventListener("click", postpostbtn);
	function postpostbtn() { // call toggle function on reply button
		var elem = document.getElementById('statuspost');
		elem.toggle(); // call toggle on div containing status reply
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
	}
});


