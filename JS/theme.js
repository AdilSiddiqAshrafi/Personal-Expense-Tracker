function toggleTheme() {
    let html = document.documentElement;

    if (html.getAttribute("data-bs-theme") === "dark") {
        html.setAttribute("data-bs-theme", "light");
        localStorage.setItem("theme", "light");
    } else {
        html.setAttribute("data-bs-theme", "dark");
        localStorage.setItem("theme", "dark");
    }
}

// load saved theme
window.onload = function () {
    let savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        document.documentElement.setAttribute("data-bs-theme", savedTheme);
    }
}
