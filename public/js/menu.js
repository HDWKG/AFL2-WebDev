document.addEventListener("DOMContentLoaded", function () {
    const favoritedItems = document.querySelectorAll(
        ".favorited .product-item"
    );

    let delay = 0;

    favoritedItems.forEach((item) => {
        item.style.animationDelay = `${delay}s`;
        delay += 0.2; // Adjust the delay as needed
        item.classList.add("show");
    });

    const filterButtons = document.querySelectorAll(".filter-button");
    const menuItems = document.querySelectorAll(".menu-item");

    // Get the current category ID from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const selectedCategoryID = urlParams.get("category_id");

    // Activate the corresponding filter button based on the URL parameter
    filterButtons.forEach((button) => {
        const filterID = button.getAttribute("data-filter");

        if (filterID === selectedCategoryID) {
            button.classList.add("active");
        } else {
            button.classList.remove("active"); // Ensure the "All" button is not active
        }
    });

    // Activate the "All" button if no category is specified
    if (selectedCategoryID === null) {
        document
            .querySelector(".filter-button[data-filter='all']")
            .classList.add("active");
    }

    // Apply the initial filter based on the URL parameter
    if (selectedCategoryID !== null) {
        menuItems.forEach((item) => {
            const itemFilter = item.getAttribute("data-filter");
            if (itemFilter === selectedCategoryID) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }

    // Handle filter button clicks
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const filter = button.getAttribute("data-filter");

            // Remove the 'active' class from all filter buttons
            filterButtons.forEach((btn) => {
                btn.classList.remove("active");
            });

            // Add the 'active' class to the clicked filter button
            button.classList.add("active");

            // Apply the selected filter
            menuItems.forEach((item) => {
                const itemFilter = item.getAttribute("data-filter");
                if (filter === "all") {
                    item.style.display = "block";
                } else if (itemFilter === filter) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });

    // Your scroll button functionality remains the same
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
