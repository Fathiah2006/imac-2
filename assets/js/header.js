const siteHeader = document.querySelector("#site-header");
let navBox = document.querySelector(".nav-box");

siteHeader.addEventListener("click", (e) => {
	// Toggle mobile menu visibility
	if (e.target.classList.contains("menuBtn")) {
		navBox.classList.add("active");
	}
	if (
		e.target.classList.contains("menuCloseBtn") ||
		e.target.classList.contains("nav-overlay")
	) {
		navBox.classList.remove("active");
	}

	// Handle dropdown menus
	const dropdownMenu = e.target.closest(".menu-item-has-children");
	if (!dropdownMenu) return;

	// Check if clicked element is a submenu link
	const isSubmenuLink = e.target.closest(".sub-menu a") !== null;
	if (isSubmenuLink) return; // Allow default link behavior

	e.preventDefault(); // Only prevent default for non-link elements
	const submenu = dropdownMenu.querySelector(".sub-menu");
	if (!submenu) return;

	const isOpen = dropdownMenu.classList.contains("open");
	const submenuHeight = `${submenu.scrollHeight}px`;

	if (isOpen) {
		// Close the submenu
		dropdownMenu.classList.remove("open");
		submenu.style.height = "0px";
		submenu.classList.remove("open");
	} else {
		// Open the submenu
		dropdownMenu.classList.add("open");
		submenu.style.height = submenuHeight;
		submenu.classList.add("open");
	}
});
