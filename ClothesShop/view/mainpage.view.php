<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>products</title>
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="?view=products">Home</a></li>
                <li><a href="?view=connexion">Connexion</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div class='products'>
            <?php
if (isset($products)) {
    foreach ($products as $product) {
        echo "<div class='product'>";
        echo "<div class='line'></div>";
        echo "<h1>" . $product['name'] . "</h1>";
        echo "<a href='?id=" . $product['id'] . "'>Go post</a>";
        echo "</div>";
    }
    ?>

        </div>
        <form method="GET">
            <ul class="sort">

                <li><select name="color" id="">
                        <option value="red">rouge</option>
                        <option value="blue">bleu</option>
                        <option value="yellow">jaune</option>
                        <option value="black">noir</option>
                        <option value="green">vert</option>
                        <option value="white">blanc</option>
                    </select></li>
                <li><select name="size" id="">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select></li>
                <li><select name="category" id="">
                        <option value="t-shirt">t-shirt</option>
                        <option value="pants">pantalon</option>
                        <option value="jacket">manteau</option>
                        <option value="pull">pull</option>
                    </select></li>

            </ul>
        </form>
        <?php } elseif (isset($product)) {

    echo "<div class='product'>";
    echo "<div class='line'></div>";
    echo "<h1>" . $product['name'] . "</h1>";
    echo "<p>" . $product['description'] . "</p>";
    echo "</div>";

} ?>





    </main>
</body>

</html>