const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
});

document.querySelectorAll(".product-item").forEach((item) => {
    observer.observe(item);
});

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-button");
    const menuItems = document.querySelectorAll(".menu-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const filter = button.getAttribute("data-filter");

            // Remove the 'active' class from all filter buttons
            filterButtons.forEach((btn) => {
                btn.classList.remove("active");
            });

            // Add the 'active' class to the clicked filter button
            button.classList.add("active");

            // Show all items when "All" is clicked
            if (filter === "all") {
                menuItems.forEach((item) => {
                    item.style.display = "block";
                });
            } else {
                menuItems.forEach((item) => {
                    const itemFilter = item.getAttribute("data-filter");
                    if (itemFilter === filter) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const filterMenu = document.querySelector(".filter-menu");
    const scrollLeftButton = document.querySelector(".scroll-button.left");
    const scrollRightButton = document.querySelector(".scroll-button.right");

    scrollLeftButton.addEventListener("click", () => {
        filterMenu.scrollLeft -= 100; // Adjust the scroll amount as needed
    });

    scrollRightButton.addEventListener("click", () => {
        filterMenu.scrollLeft += 100; // Adjust the scroll amount as needed
    });
});
