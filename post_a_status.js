document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("poststatusbtn").addEventListener("click", postpre);
	function postpre() {
		var elem = document.getElementById('statuspost');
		elem.toggle();
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
	}
	document.getElementById("postbtn").addEventListener("click", postpostbtn);
	function postpostbtn() {
		var elem = document.getElementById('statuspost');
		elem.toggle();
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
	}
});


