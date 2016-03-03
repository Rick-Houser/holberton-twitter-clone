document.addEventListener("DOMContentLoaded", function() {
	var reply = document.querySelectorAll('#reply');
	var post_button = document.querySelectorAll('#post');
	var r = 0, r_length = reply.length;
	var p = 0, p_length = post.length;

	for (r; r < r_length; r++) {
		reply[r].addEventListener('click', function() {
		var parent = this.closest('#ask-post-status');
		var post = this.parentNode.parentNode.parentNode.nextElementSibling;
		post.toggle();
		parent.toggle();
		});
	}
	for (p; p < p_length; p++) {	
		post_button[p].addEventListener('click', function() {
		var post_box = this.closest('#reply_post');
		var checkcheck = this.parentNode.parentNode.parentNode.childNodes[4].childNodes[1];
		post_box.toggle();
		this.parentNode.parentNode.parentNode.parentNode.previousElementSibling.toggle();
		if (checkcheck.checked == 1) {
           postwithgeoreply()
        } else {
            alert("Your reply was posted!");
        }
		});
	}
});
