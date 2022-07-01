<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Posts</title>
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="?view=posts">Home</a></li>
                <li><a href="?view=connexion">Connexion</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div class='posts'>
            <?php
if (isset($product)) {
    foreach ($products as $product) {
        echo "<div class='post'>";
        echo "<div class='line'></div>";
        echo "<h1>" . $product['title'] . "</h1>";
        echo "<p>" . $product['content'] . "</p>";
        echo "<a href='?id=" . $product['id'] . "'>Go post</a>";
        echo "</div>";
    }
} elseif (isset($post)) {
    echo "<div class='post'>";
    echo "<div class='line'></div>";
    echo "<h1>" . $post['title'] . "</h1>";
    echo "<p>" . $post['content'] . "</p>";
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
    </main>
</body>

</html>