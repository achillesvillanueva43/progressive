<?php

$fat = 16;
$sugar = 51;
$salt = 6.3;

$products = [
    "Chocolate Candy",
    "Strawberry Lollipop",
    "Gummy Bears",
    "Caramel Candy"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<?php

include 'header.php';

?>

<h2>Nutrition (Per 100g)</h2>

<p>Fat: <?php echo $fat; ?>%</p>
<p>Sugar: <?php echo $sugar; ?>%</p>
<p>Salt: <?php echo $salt; ?>%</p>

<h2>Nutrition Analysis</h2>

<?php

if ($sugar > 50) {
    echo "<p>High Sugar Content!</p>";
}

if ($fat > 20) {
    echo "<p>High Fat Content</p>";
} else {
    echo "<p>Normal Fat Content</p>";
}

if ($sugar >= 60) {
    echo "<p>Sugar Level: Very High</p>";
} elseif ($sugar >= 40) {
    echo "<p>Sugar Level: High</p>";
} else {
    echo "<p>Sugar Level: Low</p>";
}

$category = "Chocolate";

switch ($category) {
    case "Chocolate":
        echo "<p>Category: Chocolate Candy</p>";
        break;

    case "Lollipop":
        echo "<p>Category: Lollipop</p>";
        break;

    default:
        echo "<p>Other Candy</p>";
}

$rating = "A";

$message = match ($rating) {
    "A" => "Excellent Candy!",
    "B" => "Good Candy!",
    default => "Keep Trying!"
};

echo "<p>$message</p>";

echo "<h2>Store Announcements</h2>";

$count = 1;

while ($count <= 3) {
    echo "<p>Welcome to The Candy Store!</p>";
    $count++;
}

echo "<h2>Customer Reminder</h2>";

$number = 1;

do {
    echo "<p>Enjoy sweets in moderation!</p>";
    $number++;
} while ($number <= 1);

echo "<h2>Product Numbers</h2>";

for ($i = 1; $i <= 4; $i++) {
    echo "<p>Product Number: $i</p>";
}

echo "<h2>Our Candy Collection</h2>";

foreach ($products as $product) {
    echo "<p>$product</p>";
}

?>

<h2>About The Candy Store</h2>

<p>
Welcome to The Candy Store!
We offer different kinds of sweet treats
for everyone to enjoy.
</p>

<footer>
    <p>Thank you for visiting The Candy Store!</p>
</footer>

</body>
</html>
