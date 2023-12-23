function redirectToCorrectMode() {
    if (document.getElementById("light_dark_mode").value === "dark") {
        window.location.href = "../index.php?mode=dark";
    } else if (document.getElementById("light_dark_mode").value === "light") {
        window.location.href = "../index.php?mode=light";
    }
}

function redirectToOtherPage(page) {
    if (document.getElementById("light_dark_mode").value == "light") {
        window.location.href = page + "?mode=light";
    } else {
        window.location.href = page + "?mode=dark";
    }
}