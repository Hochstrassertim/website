<?php
$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
if ($mode === 'dark') {
    include 'darkmode.php';
} elseif ($mode === 'light') {
    include 'lightmode.php';
} else {
    header('Location: index.php?mode=dark');
    exit();
}
?>