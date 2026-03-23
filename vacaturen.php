<?php
$bericht = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $functie = filter_input(INPUT_POST, 'functie', FILTER_SANITIZE_STRING);
    $naam = filter_input(INPUT_POST, 'naam', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$naam || !$email || !$functie) {
        $bericht = "Vul alle velden correct in.";
    } else {
        // TODO: in echte app: sla op in database of verstuur e-mail.
        $bericht = "Bedankt $naam! Je sollicitatie voor '$functie' is ontvangen.";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Vegan Food Amsterdam</title>
    <link rel="stylesheet" href="stylesheet/index.css">
<script src="script.js" defer></script>
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