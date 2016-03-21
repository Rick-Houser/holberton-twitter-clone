document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("showmore").addEventListener("click", showmoreposts);
	document.getElementById("showmore").href = "#"
	function showmoreposts() {
    	ajaxGet("/statuses-1.html", function(response) {
        document.getElementById("show-more-status").innerHTML = response;
        document.getElementById("show-more-status").style.backgroundColor = '#FFFFFF';
        });
	}
});
