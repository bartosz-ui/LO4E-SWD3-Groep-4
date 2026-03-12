<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegan Food Amsterdam</title>
    <link rel="stylesheet" href="stylesheet/index.css">
</head>
<body>
    <header>
<?php
echo '
<img src="images/logo_vegan_food_amsterdam.png" alt="Logo" class="logo">

<aside>
    <h1>Vegan Food Amsterdam</h1>
    <p>100% plantaardig genieten in Amsterdam</p>
</aside>
';
?>
</header>

<nav>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="hamburger">☰ Menu</label>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lunch and dinner.php">Menu</a></li>
        <li><a href="#over">openingstijden</a></li>
        <li><a href="vacaturen.php">vacatures</a></li>
        <button id="nav-button"><a href="reserveren.html">Reserveren</a></button>
    </ul>
</nav>
<section class="reservation">
  <h2>Reserveer een tafel</h2>

  <article class="reservation-form">
        <label for="name">naam voor reservering</label>
    <input type="text" id="name" name="name" required>
    <label for="guests">Aantal gasten</label>
    <select id="guests" name="guests" required>
      <option value="">Selecteer</option>
      <option value="1">1 persoon</option>
      <option value="2">2 personen</option>
      <option value="3">3 personen</option>
      <option value="4">4 personen</option>
      <option value="5">5 personen</option>
      <option value="6">6+ personen</option>
    </select>

    <label for="date">Datum</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Tijdstip</label>
    <input type="time" id="time" name="time" required>

    <button type="submit">Reserveer nu</button>

  </article>
</section>
<footer>
<?php
echo "© " . date("Y") . " Vegan Food Amsterdam. Alle rechten voorbe houden.";
?> 
</footer>
</body>
</html>