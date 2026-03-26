<?php
$pageTitle = "Menu - Vegan Food Amsterdam";
include 'header.php';
?>

<main>
    <section class="accessibility-toolbar">
        <h2>Toegankelijkheidsopties</h2>
        <menu class="toolbar-buttons">
            <button id="toggle-darkmode" aria-label="Schakel dark modus in">🌙 Dark mode</button>
            <button onclick="changeFontSize(1)" aria-label="Vergroot lettertype">A+</button>
            <button onclick="changeFontSize(-1)" aria-label="Verklein lettertype">A-</button>
            <button id="contrast-toggle" aria-label="Schakel hoog contrast in">Hoog contrast</button>
            <button id="read-aloud" aria-label="Lees menu voor">🔊 Lees voor</button>
        </menu>
    </section>

    <section class="menu-container">
        <h2>Ons Menu</h2>
        <nav class="menu-buttons" aria-label="Menu categorieën">
            <button onclick="filterMenu('all')">Alles</button>
            <button onclick="filterMenu('main')">Hoofdgerechten</button>
            <button onclick="filterMenu('sides')">Bijgerechten</button>
            <button onclick="filterMenu('drinks')">Drankjes</button>
        </nav>
    </section>

    <section class="menu-items-grid">
        <section class="menu" id="menu-list">
            <?php
            $menu = [
                ["name" => "Vegan Burger", "price" => "€12", "category" => "main"],
                ["name" => "Vegan Pizza", "price" => "€14", "category" => "main"],
                ["name" => "Sweet Potato Fries", "price" => "€5", "category" => "sides"],
                ["name" => "Vegan Nuggets", "price" => "€6", "category" => "sides"],
                ["name" => "Fresh Orange Juice", "price" => "€4", "category" => "drinks"],
                ["name" => "Iced Matcha Latte", "price" => "€5", "category" => "drinks"]
            ];
            
            foreach ($menu as $item): ?>
                <article class="menu-item" data-category="<?php echo $item['category']; ?>">
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['price']; ?></p>
                </article>
            <?php endforeach; ?>
        </section>
    </section>
</main>

<?php include 'footer.php'; ?>