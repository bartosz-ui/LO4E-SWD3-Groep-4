<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegan Food Amsterdam</title>
    <link rel="stylesheet" href="stylesheet/index.css">
<script src="script.js" defer></script>
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
        <li><a href="openingstijden.php">openingstijden</a></li>
        <li><a href="vacaturen.php">vacatures</a></li>
        <button id="nav-button"><a href="reserveren.php">Reserveren</a></button>
    </ul>
</nav>
<button id="toggle-darkmode">🌙 Dark mode</button>
<button onclick="changeFontSize(1)">A+</button>
<button onclick="changeFontSize(-1)">A-</button>
<button id="contrast-toggle">Hoog contrast</button>
<?php
$menu = [
    ["name" => "Vegan Burger", "price" => "€12", "category" => "main"],
    ["name" => "Vegan Pizza", "price" => "€14", "category" => "main"],
    ["name" => "Sweet Potato Fries", "price" => "€5", "category" => "sides"],
    ["name" => "Vegan Nuggets", "price" => "€6", "category" => "sides"],
    ["name" => "Fresh Orange Juice", "price" => "€4", "category" => "drinks"],
    ["name" => "Iced Matcha Latte", "price" => "€5", "category" => "drinks"]
];
?>
<article class="menu-container">

<div class="menu-buttons">
    <button onclick="filterMenu('all')">All</button>
    <button onclick="filterMenu('main')">Main</button>
    <button onclick="filterMenu('sides')">Sides</button>
    <button onclick="filterMenu('drinks')">Drinks</button>
</div>
</article>
<div class="menu">

<?php foreach ($menu as $item): ?>
    <div class="menu-item" data-category="<?php echo $item['category']; ?>">
        <h3><?php echo $item['name']; ?></h3>
        <p><?php echo $item['price']; ?></p>
    </div>
<?php endforeach; ?>

</div>
<footer>
<?php
echo "© " . date("Y") . " Vegan Food Amsterdam. Alle rechten voorbe houden.";
?> 
</footer>
</body>
</html>