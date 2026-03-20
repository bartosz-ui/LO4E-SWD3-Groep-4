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

const toggleBtn = document.getElementById("toggle-darkmode");

toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
});

let currentSize = 100;

function changeFontSize(change) {
    currentSize += change * 10;
    document.body.style.fontSize = currentSize + "%";
}
document.getElementById("contrast-toggle").addEventListener("click", () => {
    document.body.classList.toggle("high-contrast");
});