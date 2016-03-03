	
function showPostStatus(position) {
alert("Your status was posted from: Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude + "!"); 
}	

function showPostReply(position) {
alert("Your reply was posted from: Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude + "!"); 
}	

function showPostStatusE(error) {
 alert("Your status was posted!");
}

function showPostReplyE(error) {
 alert("Your reply was posted!");
}

function postwithgeostatus() {
	if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPostStatus, showPostStatusE);
		 } else {
		 	alert("Something went wrong. Geolocation may not be supported by this browser.");
		 }
}

function postwithgeoreply() {
	if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPostReply, showPostReplyE);
		 } else {
		 	alert("Something went wrong. Geolocation may not be supported by this browser.");
		 }
}
