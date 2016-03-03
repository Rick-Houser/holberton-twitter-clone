document.addEventListener("DOMContentLoaded", function() {	
	var locationcheck = document.querySelectorAll('#loccheck');
	var r = 0, r_length = locationcheck.length;
	if (navigator.geolocation) {
		for (r; r < r_length; r++) {
			locationcheck[r].toggle();
		}
	}
});