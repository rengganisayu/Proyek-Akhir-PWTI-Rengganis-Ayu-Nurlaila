const header = document.querySelector("header");
window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 100);
})

const setTheme = theme => document.documentElement.className = theme;

document.getElementById('theme-select').addEventListener('change', function() {
    setTheme(this.value);
});
