const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-button");
    const menuItems = document.querySelectorAll(".menu-item");
    
    // Retrieve the category ID from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const category_id = urlParams.get("category_id");
    
    // Filter products based on the category ID
    filterProducts(category_id);
    
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const filter = button.getAttribute("data-filter");
            filterProducts(filter);
        });
    });

    // Function to filter products
    function filterProducts(category_id) {
        filterButtons.forEach((btn) => {
            btn.classList.remove("active");
        });

        if (category_id === null || category_id === "all") {
            // Show all items when "All" is clicked or no category is specified
            menuItems.forEach((item) => {
                item.style.display = "block";
            });
        } else {
            menuItems.forEach((item) => {
                const itemFilter = item.getAttribute("data-filter");
                if (itemFilter === category_id) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }
    }
});

// Your scroll button functionality remains the same
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
