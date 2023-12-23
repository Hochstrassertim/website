function redirectToCorrectMode() {
    if (document.getElementById("light_dark_mode").value === "dark") {
        window.location.href = "../index.php?mode=dark";
    } else if (document.getElementById("light_dark_mode").value === "light") {
        window.location.href = "../index.php?mode=light";
    }
}

function redirectToOtherPage(page) {
    // Get the current URL
    var currentUrl = window.location.href;

    // Extract the mode parameter from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var currentMode = urlParams.get("mode");

    // Set the dropdown selection based on the current mode
    var dropdown = document.getElementById("light_dark_mode");

    if (currentMode === "light") {
        dropdown.value = "light";
    } else if (currentMode === "dark") {
        dropdown.value = "dark";
    }

    // Log the current URL to the console (optional)
    console.log("Current URL:", currentUrl);

    // Redirect to the specified page with the selected mode
    window.location.href = page + "?mode=" + dropdown.value;
}
