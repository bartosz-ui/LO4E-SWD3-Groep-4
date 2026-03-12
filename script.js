function filterMenu(category) {
    let items = document.querySelectorAll(".menu-item");

    items.forEach(item => {
        if (category === "all" || item.dataset.category === category) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}