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
        <article class="menu-buttons" aria-label="Menu categorieën">
            <button onclick="filterMenu('all')">Alles</button>
            <button onclick="filterMenu('main')">Hoofdgerechten</button>
            <button onclick="filterMenu('sides')">Bijgerechten</button>
            <button onclick="filterMenu('drinks')">Drankjes</button>
            <button onclick="filterMenu('dessert')">Dessert</button>
        </article>
    </section>

    <section class="menu-items-grid">
        <section class="menu" id="menu-list">
            <?php
$menu = [
    ["name" => "Vegan Burger", "price" => "€12", "category" => "main",
     "description" => "Sappige plantaardige burger met sla, tomaat en vegan saus"],

    ["name" => "Vegan Pizza", "price" => "€14", "category" => "main",
     "description" => "Pizza met vegan kaas, gegrilde groenten en tomatensaus"],

    ["name" => "Sweet Potato Fries", "price" => "€5", "category" => "sides",
     "description" => "Krokante zoete aardappelfrietjes met kruiden"],

    ["name" => "Vegan Nuggets", "price" => "€6", "category" => "sides",
     "description" => "Knapperige nuggets op basis van soja, met dipsaus"],

    ["name" => "Fresh Orange Juice", "price" => "€4", "category" => "drinks",
     "description" => "Versgeperst sinaasappelsap zonder toevoegingen"],

    ["name" => "Iced Matcha Latte", "price" => "€5", "category" => "drinks",
     "description" => "Koude matcha latte met havermelk"],

    ["name" => "Vegan Wrap Falafel", "price" => "€9", "category" => "main",
     "description" => "Wrap gevuld met falafel, hummus en frisse groenten"],

    ["name" => "Grilled Veggie Sandwich", "price" => "€8", "category" => "main",
     "description" => "Sandwich met gegrilde courgette, paprika en pesto"],

    ["name" => "Vegan Pasta Pesto", "price" => "€13", "category" => "main",
     "description" => "Pasta met romige vegan pesto en cherrytomaat"],

    ["name" => "Tofu Stir Fry", "price" => "€11", "category" => "main",
     "description" => "Roerbak tofu met groenten en sojasaus"],

    ["name" => "Vegan Sushi Roll", "price" => "€10", "category" => "main",
     "description" => "Sushi met avocado, komkommer en wortel"],

    ["name" => "Onion Rings", "price" => "€4", "category" => "sides",
     "description" => "Gefrituurde uienringen met krokant laagje"],

    ["name" => "Nachos with Guacamole", "price" => "€7", "category" => "sides",
     "description" => "Nachos met huisgemaakte guacamole en salsa"],

    ["name" => "Corn on the Cob", "price" => "€3", "category" => "sides",
     "description" => "Gegrilde maïskolf met kruiden"],

    ["name" => "Side Salad", "price" => "€4", "category" => "sides",
     "description" => "Frisse salade met sla, komkommer en dressing"],

    ["name" => "Garlic Bread", "price" => "€5", "category" => "sides",
     "description" => "Brood met knoflook en kruidenboter (vegan)"],

    ["name" => "Vegan Chocolate Cake", "price" => "€6", "category" => "dessert",
     "description" => "Luchtige chocoladetaart zonder dierlijke producten"],

    ["name" => "Apple Pie", "price" => "€5", "category" => "dessert",
     "description" => "Huisgemaakte appeltaart met kaneel"],

    ["name" => "Vegan Ice Cream", "price" => "€4", "category" => "dessert",
     "description" => "Romig ijs op basis van kokosmelk"],

    ["name" => "Brownie", "price" => "€3", "category" => "dessert",
     "description" => "Rijke chocolade brownie, volledig vegan"],

    ["name" => "Cappuccino (Oat Milk)", "price" => "€3", "category" => "drinks",
     "description" => "Koffie met opgeschuimde havermelk"],

    ["name" => "Iced Coffee", "price" => "€4", "category" => "drinks",
     "description" => "Koude koffie met ijsblokjes en plantaardige melk"],

    ["name" => "Lemonade", "price" => "€3", "category" => "drinks",
     "description" => "Verfrissende limonade met citroen"],

    ["name" => "Strawberry Smoothie", "price" => "€5", "category" => "drinks",
     "description" => "Smoothie van aardbei en banaan"],

    ["name" => "Green Detox Juice", "price" => "€6", "category" => "drinks",
     "description" => "Sap van spinazie, appel en gember"]
];
            
            foreach ($menu as $item): ?>
                <article class="menu-item" data-category="<?php echo $item['category']; ?>">
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                    <p><?php echo $item['price']; ?></p>
                </article>
            <?php endforeach; ?>
        </section>
    </section>
</main>

<?php include 'footer.php'; ?>