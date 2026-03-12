<?php
$bericht = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST["naam"]);
    $email = htmlspecialchars($_POST["email"]);
    $functie = htmlspecialchars($_POST["functie"]);

    $bericht = "Bedankt $naam! Je sollicitatie voor '$functie' is ontvangen.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vacatures | Vegan Food Amsterdam</title>
<link rel="stylesheet" href="stylesheet/index.css">
    <link rel="script" href="script.js" >
</head>

<body>

<header>
<img src="images/logo.png" alt="Vegan Food Amsterdam logo" class="logo">
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
<li><a href="menu.php">Menu</a></li>
<li><a href="openingstijden.php">Openingstijden</a></li>
<li><a href="vacatures.php">Vacatures</a></li>
<li><a href="reserveren.php" id="nav-button">Reserveren</a></li>
</ul>
</nav>

<main>

<section id="vacatures">

<?php
if ($bericht != "") {
    echo "<p class='success'>$bericht</p>";
}
?>

<article class="job">
<h3>Kok (Vegan Keuken)</h3>
<p>
Wij zoeken een enthousiaste kok met passie voor plantaardig koken.
Je helpt mee met het bereiden van onze burgers, bowls en specials.
</p>

<form method="POST">
<input type="hidden" name="functie" value="Kok">
<input type="text" name="naam" placeholder="Je naam" required>
<input type="email" name="email" placeholder="Je e-mail" required>
<button type="submit" class="apply-btn">Solliciteer</button>
</form>
</article>


<article class="job">
<h3>Medewerker Bediening</h3>
<p>
Vind jij het leuk om gasten een geweldige ervaring te geven?
Dan zoeken wij jou voor ons gezellige restaurantteam.
</p>

<form method="POST">
<input type="hidden" name="functie" value="Bediening">
<input type="text" name="naam" placeholder="Je naam" required>
<input type="email" name="email" placeholder="Je e-mail" required>
<button type="submit" class="apply-btn">Solliciteer</button>
</form>
</article>


<article class="job">
<h3>Afwasser</h3>
<p>
Wij zoeken een gemotiveerde afwasser die het team ondersteunt
en zorgt dat de keuken altijd schoon blijft.
</p>

<form method="POST">
<input type="hidden" name="functie" value="Afwasser">
<input type="text" name="naam" placeholder="Je naam" required>
<input type="email" name="email" placeholder="Je e-mail" required>
<button type="submit" class="apply-btn">Solliciteer</button>
</form>
</article>

</section>

</main>

<footer>
<p>© 2026 Vegan Food Amsterdam</p>
</footer>

</body>
</html>