<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/index.css">
    <title>vegan food amsterdam</title>
</head>
<body>
     <header>
        <img src="images/logo_vegan_food_amsterdam.png" alt="Vegan Food Amsterdam logo" class="logo">
        <div>
            <h1>Vegan Food Amsterdam</h1>
            <p>100% plantaardig genieten in Amsterdam</p>
        </div>
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
    <main>
        <section id="openingstijden">
            <h2>Openingstijden</h2>
            <p>Wij zijn geopend van maandag tot en met zondag:</p>
            <ul>
                <li>Maandag: 12:00 - 22:00</li>
                <li>Dinsdag: 12:00 - 22:00</li>
                <li>Woensdag: 12:00 - 22:00</li>
                <li>Donderdag: 12:00 - 22:00</li>
                <li>Vrijdag: 12:00 - 23:00</li>
                <li>Zaterdag: 12:00 - 23:00</li>
                <li>zondag: 14:00 - 21:00</li>
            </ul>
        </section>
    </main> 
</header>
<footer>
<?php
echo "© " . date("Y") . " Vegan Food Amsterdam. Alle rechten voorbehouden.";
?> 
</footer>
    
</body>

</html>