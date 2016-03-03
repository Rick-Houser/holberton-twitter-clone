document.addEventListener("DOMContentLoaded", function() {
	HTMLElement.prototype.toggle = function() {
	   if (this.classList.contains("hidden")) {
	    this.classList.remove('hidden');
	  } else {
	    this.classList.add('hidden');
	  }
	}
});
