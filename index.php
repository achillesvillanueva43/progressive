<?php
declare(strict_types=1);

$tax_rate = 12;

$products = [
    "Potato Chips" => ["price" => 18.00, "stock" => 24],
    "Nachos" => ["price" => 22.50, "stock" => 7],
    "Sweet Corn Chips" => ["price" => 15.00, "stock" => 32],
    "Corn Crunch" => ["price" => 30.00, "stock" => 9],
    "Cheese Rings" => ["price" => 12.00, "stock" => 45],
    "Barbecue Chips" => ["price" => 20.00, "stock" => 18],
    "Sour Cream Chips" => ["price" => 25.00, "stock" => 14],
];

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return get_total_value($price, $quantity) * ($tax_rate / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips Haven - Stock Monitor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Chips Haven</h1>
        <p class="subtitle">Product Stock Monitor</p>

        <h2>Product List</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Reorder?</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
            <?php foreach ($products as $name => $details): ?>
                <tr>
                    <td><?php echo htmlspecialchars($name); ?></td>
                    <td>₱<?php echo number_format($details["price"], 2); ?></td>
                    <td><?php echo $details["stock"]; ?></td>
                    <td><?php echo get_reorder_message($details["stock"]); ?></td>
                    <td>₱<?php echo number_format(get_total_value($details["price"], $details["stock"]), 2); ?></td>
                    <td>₱<?php echo number_format(get_tax_due($details["price"], $details["stock"], $tax_rate), 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <p class="note">Products with fewer than 10 items in stock need to be reordered.</p>
    </div>
</body>
</html>
