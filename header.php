<?php
if (!isset($pageTitle)) {
    $pageTitle = "Vegan Food Amsterdam";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Groep 4">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="stylesheet/index.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="images/logo_vegan_food_amsterdam.png" alt="Vegan Food Amsterdam logo" class="logo">
        <hgroup>
            <h1>Vegan Food Amsterdam</h1>
            <p>100% plantaardig genieten in Amsterdam</p>
        </hgroup>
    </header>

    <nav>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">☰ Menu</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="lunch and dinner.php">Menu</a></li>
            <li><a href="openingstijden.php">Openingstijden</a></li>
            <li><a href="vacaturen.php">Vacatures</a></li>
            <li><a href="reserveren.php" id="nav-button">Reserveren</a></li>
        </ul>
    </nav>
