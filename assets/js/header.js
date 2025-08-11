const siteHeader = document.querySelector("#site-header");
let navBox = document.querySelector(".nav-box");
let navLinks = document.querySelector(".nav-links");

siteHeader.addEventListener("click", (e) => {
    if (e.target.classList.contains("menuBtn")) {
		navBox.classList.add("active");
	}
    if (e.target.classList.contains('menuCloseBtn') || e.target.classList.contains('nav-overlay')) {
        navBox.classList.remove("active");
    }

    const dropdownMenu = e.target.closest(".menu-item-has-children");
    if (!dropdownMenu) return;

    if (dropdownMenu) {
        e.preventDefault();
        const navMenu = dropdownMenu.parentNode;
        const navMenuParent = navMenu.parentNode;
        const navMenuHeight = `${navMenu.scrollHeight}px`;
		const submenu = dropdownMenu.querySelector(".sub-menu");

        const submenuHeight = submenu ? `${submenu.scrollHeight}px` : "0px";
        const isOpen = dropdownMenu.classList.contains("open");

        if (isOpen) {
            dropdownMenu.classList.remove("open");
            setTimeout(() => {
				submenu ? (submenu.style.height = "0px") : {};
				submenu.classList.remove("open");
                submenu.style.height = submenuHeight;
                navMenuParent ? (navMenuParent.style.height = "") : {};
			}, 10);
        } else {
            setTimeout(() => {
				submenu ? (submenu.style.height = submenuHeight) : {};
                navMenuParent ? (navMenuParent.style.height = submenuHeight) : {};
				submenu.classList.toggle("open");
			}, 10);
            dropdownMenu.classList.add("open");
        }
    }
});
