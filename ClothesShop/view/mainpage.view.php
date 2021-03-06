<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <title>products</title>
</head>

<body>
    <?php include_once 'header.view.php'; ?>
    <main>
        <div class='products'>
            <?php

if (isset($products)) {
    foreach ($products as $product) {
        echo "<div class='product'>";
        echo "<div class='line'></div>";
        echo "<h1>" . $product['name'] . "</h1>";
        echo "<a href='?id=" . $product['id'] . "'>Acceder a l'article</a>";
        echo "</div>";
    }
    ?>

        </div>
        <form method="get" class="connexion-form">
            <input type="search" name="search">
            <input type="submit" name="search-submit">
        </form>
        <form method="GET" class="filter-form">
            <ul class="sort">
                <li>
                    <select name="color">
                        <option value="red">rouge</option>
                        <option value="blue">bleu</option>
                        <option value="yellow">jaune</option>
                        <option value="black">noir</option>
                        <option value="green">vert</option>
                        <option value="white">blanc</option>
                    </select>
                </li>
                <li>
                    <select name="size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </li>
                <li>
                    <select name="category">
                        <option value="t-shirt">t-shirt</option>
                        <option value="pants">pantalon</option>
                        <option value="jacket">manteau</option>
                        <option value="pull">pull</option>
                    </select>
                </li>
                <li><input type="submit" name="filter-submit" value="filter"></li>
            </ul>
        </form>
        <?php } elseif (isset($product)) {

    echo "<div class='product'>";
    echo "<div class='line'></div>";
    echo "<h1>" . $product['name'] . "</h1>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>" . "Size:  " . $product['size'] . "</p>";
    echo "<p>" . "Price: " . $product['price'] . " ???" . "</p>";
    echo "<p>" . "Category: " . $product['category'] . "</p>";

    echo "</div>";

} ?>





    </main>
</body>

</html>