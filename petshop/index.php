<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet shop</title>
    </head>
    <body>
        <header>
            <h1>Pet shop</h1>
            <hr>
        </header>
        <main>
            <div class="left">
                <a href="views/allCats.php" class="link">All cats</a>
                <a href="views/whiteOrFluffy.php" class="link">White or fluffy pets</a>
                <a href="views/expensivePets.php" class="link">Expensive pets</a>
            </div>
            <div class="center">
                <?php
                    require_once("routes.php");
                ?>
            </div>
        </main>
        <footer>
            <hr>
            <a class="btn" href="https://github.com/AlinaHaieva" target="_blank">Alina Haieva</a>
        </footer>
    <body>
<html>