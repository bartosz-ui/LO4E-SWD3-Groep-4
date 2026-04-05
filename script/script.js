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
if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
}

let currentSize = 100;

function changeFontSize(change) {
    currentSize += change * 10;
    // Limit font size scaling between 80% and 150%
    if (currentSize < 80) currentSize = 80;
    if (currentSize > 150) currentSize = 150;
    document.body.style.fontSize = currentSize + "%";
}

const contrastBtn = document.getElementById("contrast-toggle");
if (contrastBtn) {
    contrastBtn.addEventListener("click", () => {
        document.body.classList.toggle("high-contrast");
    });
}

// Lees voor (Read Aloud) functionaliteit
const readAloudBtn = document.getElementById("read-aloud");
if (readAloudBtn) {
    readAloudBtn.addEventListener("click", () => {
        if ('speechSynthesis' in window) {
            // Stop if already speaking
            if (speechSynthesis.speaking) {
                speechSynthesis.cancel();
                return;
            }
            
            let textToRead = "Ons Menu. ";
            const menuItems = document.querySelectorAll(".menu-item");
            menuItems.forEach(item => {
                // only read visible items
                if (item.style.display !== "none") {
                    const name = item.querySelector("h3").innerText;
                    const price = item.querySelector("p").innerText;
                    textToRead += `${name}, ${price}. `;
                }
            });

            const utterance = new SpeechSynthesisUtterance(textToRead);
            utterance.lang = 'nl-NL';
            speechSynthesis.speak(utterance);
        } else {
            alert("Sorry, je browser ondersteunt geen spraaksynthese.");
        }
    });
}