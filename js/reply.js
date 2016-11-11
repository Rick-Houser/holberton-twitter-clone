document.addEventListener("DOMContentLoaded", function() {

	var reply = document.querySelectorAll('.reply'); // find all elements with reply id
	var post = document.querySelectorAll('.post'); // same as above for post id
	var r = 0, r_length = reply.length; // create & set new vars to 0 and to number of reply btns (length)
	var p = 0, p_length = post.length;

	var rpost = document.querySelectorAll('.reply_post'); // same as above for post id
	var u = 0, u_length = rpost.length;

	for (u; u < u_length; u++) { // does same as above but for forms containing replies to status updates
		rpost[u].classList.add('hidden');
	}


		for (r; r < r_length; r++) { // iterates through all reply btns adding event listeners to each
		reply[r].addEventListener('click', function() { // when click is heard do the following:
		var parent = this.closest('.ask-post-status');  // set target 1 for toggling
		var post = this.parentNode.parentNode.parentNode.nextElementSibling; // set target 2 for toggle
		post.toggle();
		parent.toggle();
		});
	}
	for (p; p < p_length; p++) { // does same as above but for forms containing replies to status updates
		post[p].addEventListener('click', function() {
		var post_box = this.closest('.reply_post');
		post_box.toggle();
		this.parentNode.parentNode.parentNode.parentNode.previousElementSibling.toggle();
		});
	}
});
