<?php
include 'content/navbar.php';
include 'content/index.php';
?>

<html>
<script>
    function redirectToCorrectMode() {
        var selectedValue = document.getElementById("light_dark_mode").value;
        if (selectedValue === "dark") {
            window.location.href = "../index.php?mode=dark";
        } else if (selectedValue === "light") {
            window.location.href = "../index.php?mode=light";
        }
    }
</script>
<link rel="stylesheet" href="light/style.css">
</html>
