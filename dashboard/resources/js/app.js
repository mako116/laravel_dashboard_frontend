// public/js/app.js

document.addEventListener("DOMContentLoaded", function() {
    const sidebarToggle = document.querySelector(".btn-primary");
    const sidebarCollapse = document.querySelector("#sidebarCollapse");

    sidebarToggle.addEventListener("click", function() {
        sidebarCollapse.classList.toggle("show");
    });
});
