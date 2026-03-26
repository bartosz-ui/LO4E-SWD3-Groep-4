<?php
$pageTitle = "Home - Vegan Food Amsterdam";
include 'header.php';
?>

<main>
    <section id="home">
        <h2>Welkom</h2>
        <article class="intro-container">
            <section class="intro-text">
                <p>Welkom bij Vegan Food Amsterdam. Wij serveren heerlijke, verse en volledig plantaardige gerechten.</p>
                <h3><a href="lunch and dinner.php">De Vegan Burger</a></h3>
                <p>Onze specialiteit! Deze burger is niet alleen lekker, maar ook gezond. Wat zit erin?</p>
                <ul>
                    <li>Patty van zwarte bonen en quinoa</li>
                    <li>Verse avocado en knapperige sla</li>
                    <li>Huisgemaakte vegan saus</li>
                    <li>Lokaal gebakken broodje</li>
                </ul>
            </section>
            <img src="stylesheet/images/vega burger.png" alt="Een heerlijke vegan burger met sla, komkommer en saus" class="burger-img-small">
        </article>
    </section>

    <section id="menu">
        <h2>Populaire gerechten</h2>
        <section class="menu-grid">
            <article class ="menu-items">
                <h3><a href="lunch and dinner.php">De Vegan Burger</a></h3>
                <p>Huisgemaakte burger met verse groenten en saus.</p>
            </article>

            <article class="menu-items">
                <h3><a href="lunch and dinner.php">Buddha Bowl</a></h3>
                <p>Gezonde bowl met quinoa, avocado en seizoensgroenten.</p>
            </article>

            <article class="menu-items">
                <h3><a href="lunch and dinner.php">Vegan Pasta</a></h3>
                <p>Pasta met romige plantaardige saus en groenten.</p>
            </article>
        </section>
    </section>

    <section id="over">
        <h2>Over ons</h2>
        <p>Ons restaurant richt zich op puur en lekker eten. Alles is 100% vegan en vers bereid.</p>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p><strong>Email:</strong> info@veganfoodamsterdam.nl</p>
        <p><strong>Telefoon:</strong> 020 123 4567</p>
        <p>📍 Amsterdam</p>
    </section>
</main>

<?php include 'footer.php'; ?>