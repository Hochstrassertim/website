function redirectToCorrectMode() {
    if (document.getElementById("light_dark_mode").value === "dark") {
        window.location.href = "../index.php?mode=dark";
    } else if (document.getElementById("light_dark_mode").value === "light") {
        window.location.href = "../index.php?mode=light";
    }
}