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
$pageTitle = "Vacatures - Vegan Food Amsterdam";
include 'header.php';
?>

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
                <label for="naam-kok" class="sr-only">Je naam</label>
                <input type="text" id="naam-kok" name="naam" placeholder="Je naam" required>
                <label for="email-kok" class="sr-only">Je e-mail</label>
                <input type="email" id="email-kok" name="email" placeholder="Je e-mail" required>
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
                <label for="naam-bediening" class="sr-only">Je naam</label>
                <input type="text" id="naam-bediening" name="naam" placeholder="Je naam" required>
                <label for="email-bediening" class="sr-only">Je e-mail</label>
                <input type="email" id="email-bediening" name="email" placeholder="Je e-mail" required>
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
                <label for="naam-afwasser" class="sr-only">Je naam</label>
                <input type="text" id="naam-afwasser" name="naam" placeholder="Je naam" required>
                <label for="email-afwasser" class="sr-only">Je e-mail</label>
                <input type="email" id="email-afwasser" name="email" placeholder="Je e-mail" required>
                <button type="submit" class="apply-btn">Solliciteer</button>
            </form>
        </article>
    </section>
</main>

<?php include 'footer.php'; ?>