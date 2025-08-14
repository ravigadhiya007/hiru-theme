/* * Custom JavaScript for Hiru Theme
 * This script handles the sticky header functionality.
 */
document.addEventListener("DOMContentLoaded", function () {
	var header = document.getElementById("sticky-header");
	if (!header) return;
	window.onscroll = function () {
		var scroll = window.scrollY;
		if (scroll >= 150) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	};
});