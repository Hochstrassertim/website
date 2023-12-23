<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="content/script.js"></script>
</head>
<header>
    <nav class="navbar" id="navbar">
        <div class="align_left" id="align_left">
            <button class="left_button" onclick="redirectToOtherPage('../index.php')">Startseite</button>
            <a href="../index.php"><button class="left_button">Startseite</button></a>
            <a href="../index.php"><button class="left_button">Startseite</button></a>
            <a href="../index.php"><button class="left_button">Startseite</button></a>
            <a href="../index.php"><button class="left_button">Startseite</button></a>
        </div>
        <div class="align_right" id="align_right">
            <select class="light_dark_mode" id="light_dark_mode" onchange="redirectToCorrectMode()">
                <option>Choose Light/Dark mode</option>
                <option value="dark">Dark Mode</option>
                <option value="light">Light Mode</option>
            </select>
        </div>
    </nav>
</header>
</html>