document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("poststatusbtn").addEventListener("click", postpre);
	function postpre() {
		var elem = document.getElementById('statuspost');
		elem.toggle();
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
	}
	
	document.getElementById("postbtn").addEventListener('click', function() {
		var elem = document.getElementById('statuspost');
		elem.toggle();
		var elem = document.getElementById('poststatusbtn');
		elem.toggle();
		var checkcheck = this.parentNode.parentNode.parentNode.childNodes[6].childNodes[1];
		if (checkcheck.checked == 1) {
            postwithgeostatus();
        } else {
            alert("Your status was posted!");
        }
	});
});
