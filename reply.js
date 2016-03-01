document.addEventListener("DOMContentLoaded", function() {
	var reply = document.querySelectorAll('#reply');
	var post_button = document.querySelectorAll('#post');
	var r = 0, r_length = reply.length;
	var p = 0, p_length = post.length;

	for (r; r < r_length; r++) {
		reply[r].addEventListener('click', function() {
			var parent = this.closest('#ask-post-status');
			var post = this.parentNode.parentNode.parentNode.nextElementSibling;
			parent.classList.add('hidden');
			post.classList.remove('hidden');
		});
	}
	for (p; p < p_length; p++) {	
		post_button[p].addEventListener('click', function() {
			var parent = this.parentNode.parentNode.parentNode.previousElementSibling;
			var post_box = this.parentNode.parentNode.parentNode;
			alert(post_box.className);
			// parent.classList.remove('hidden');
			// post_box.classList.add('hidden');
		});
	}
});
