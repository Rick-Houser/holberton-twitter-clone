document.addEventListener("DOMContentLoaded", function() {
	var reply = document.querySelectorAll('#reply');
	var post_button = document.querySelectorAll('#post');
	var r = 0, r_length = reply.length;
	var p = 0, p_length = post.length;

	for (r; r < r_length; r++) {
		reply[r].addEventListener('click', function() {
			var parent = this.closest('#ask-post-status');
			var post = this.parentNode.parentNode.parentNode.nextElementSibling;
			post.classList.remove('hidden');
		});
	}
	for (p; p < p_length; p++) {	
		post_button[p].addEventListener('click', function() {
			var post_box = this.closest('#reply_post');
			post_box.classList.add('hidden');
		});
	}
});
