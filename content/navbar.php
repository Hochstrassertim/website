<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Page Title</title>
    <script src="content/script.js"></script>
</head>
<body>
<header>
    <nav class="navbar" id="navbar">
        <div class="align_left" id="align_left">
            <a href="../index.php">Startseite</a>
            <a href="../page2.php">Page 2</a>
            <a href="../page3.php">Page 3</a>
            <a href="../page4.php">Page 4</a>
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
</body>
</html>