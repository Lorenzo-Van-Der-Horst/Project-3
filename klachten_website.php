<?php
    session_start();
        if( strcasecmp($_SERVER['REQUEST_METHOD'],"POST") === 0) {
        $_SESSION['postdata'] = $_POST;
        header("Location: ".$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
        exit;
    }
    if( isset($_SESSION['postdata'])) {
        $_POST = $_SESSION['postdata'];
        unset($_SESSION['postdata']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klacht Website</title>
</head>
<body>
    <header>
        <?php
            include 'nav.php';
        ?>
    </header>
    <main>
        <!--WIP weet niet of het in de database is gekomen-->
        <section>
            <h1>Klachten Website</h1>
        <br><br>
        <form action="#" method="post">
            <label for="naam">Naam: </label><input type="text" name="naam" placeholder="Naam" required><br><br>
            <label for="reden">Reden: </label><br><textarea name="reden" id="reden" placeholder="Enter text here" style=width:12.8vw; required></textarea><br>
            <input type="submit" name="submit" value="Verzend" id="submit" required>
        </form><br>
    <?php
        include 'functions.php';
        KlachtToevoegen('2');
    ?>
        </section>
    </main>
        <?php
            include 'footer.php';
        ?>
</body>
</html>
