<?php
$pageTitle = "Reserveren - Vegan Food Amsterdam";
include 'header.php';
?>

<main>
    <section class="reservation">
        <h2>Reserveer een tafel</h2>

        <form action="#" method="POST" class="reservation-form">
            <label for="name">Naam voor reservering</label>
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
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>