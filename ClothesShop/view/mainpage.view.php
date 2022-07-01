<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClothesShop</title>
</head>

<body>
    <header>
        <nav>
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
                            <li><a href="#"><img src="#" alt=""></a></li>
                            <li><a href="?view=posts">Home</a></li>
                            <li><a href="?view=connexion">Connexion</a></li>
                            <li><a href="?view=inscription">Inscription</a></li>
                            <li><a href="#">Contact</a></li>
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
        echo "<h1>" . $post['title'] . "</h1>";
        echo "<p>" . $post['content'] . "</p>";
        echo "<a href='?id=" . $post['id'] . "'>Go post</a>";
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
                    <form method="post" class="post-form">
                        <input type="text" name="title" placeholder="title">
                        <input type="text" name="content" placeholder="content">
                        <input type="submit" name="add-post" value="Add a post" class="btn-submit">
                        <?php
if (isset($error)) {
    echo $error;
}
?>
                    </form>
                </main>
            </body>

            </html>
            <ul class="navbar">
                <li><a href="?view=posts">Home</a></li>
                <li><a href="?view=connexion">Connexion</a></li>
                <li><a href="?view=inscription">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class='posts'>
        <?php
if (isset($posts)) {
    foreach ($posts as $post) {
        echo "<div class='post'>";
        echo "<div class='line'></div>";
        echo "<h1>" . $post['title'] . "</h1>";
        echo "<p>" . $post['content'] . "</p>";
        echo "<a href='?id=" . $post['id'] . "'>Go post</a>";
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
    <form method="post" class="post-form">
        <input type="text" name="title" placeholder="title">
        <input type="text" name="content" placeholder="content">
        <input type="submit" name="add-post" value="Add a post" class="btn-submit">
        <?php
if (isset($error)) {
    echo $error;
}
?>
    </form>
    </main>
</body>

</html>