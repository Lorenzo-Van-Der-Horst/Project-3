<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="script3.js"></script>
    <title>Subpagina 3</title>
</head>
<body>
    <header>
        <?php
            include '../nav.php';
        ?>
    </header>
    <main>
        <section>
            <br><br><br><br><br><br><br><br>
            <!--WIP heb nieuwe versie van gemaakt die nu in product_page zit-->
        <form action="#" method="post">
        <label for="1"><img src="https://digitalassets.tesla.com/image/upload/f_auto,q_auto/prod/coin/static_assets/MODEL3/UI/Paint_White.png" alt="" width="3%"><input type="radio" name="choice" value="1" id="1" hidden checked></label>
        <label for="2"><img src="https://digitalassets.tesla.com/image/upload/f_auto,q_auto/prod/coin/static_assets/MODEL3/UI/Paint_Black.png" alt="" width="3%"><input type="radio" name="choice" value="2" id="2" hidden></label>
        <label for="3"><img src="https://digitalassets.tesla.com/image/upload/f_auto,q_auto/prod/coin/static_assets/MODEL3/UI/Paint_MidnightSilver.png" alt="" width="3%"><input type="radio" name="choice" value="3" id="3" hidden></label>
        <label for="4"><img src="https://digitalassets.tesla.com/image/upload/f_auto,q_auto/prod/coin/static_assets/MODEL3/UI/Paint_Blue.png" alt="" width="3%"><input type="radio" name="choice" value="4" id="4" hidden></label>
        <label for="5"><img src="https://digitalassets.tesla.com/image/upload/f_auto,q_auto/prod/coin/static_assets/MODEL3/UI/Paint_Red.png" alt="" width="3%"><input type="radio" name="choice" value="5" id="5" hidden></label>
        <br><br><input type="submit" name="submit" value="Bekijk Kleur" id="submit" ><br>
    </form><br>
    <?php
        include "functions3.php";
        $model = "Model S";
        if(!empty(isset($_POST) && isset($_POST['choice']))){
            $choice = $_POST['choice'];
            test($choice, $model);
        }
    ?>
    <br><br>
    <a href="../database.php">database.php</a><br><br>
    <a href="../klachten.php">klachten.php</a><br>
    <a href="../login.php">login.php</a><br>
        </section>
    </main>
        <?php
            include '../footer.php';
        ?>
</body>
</html>
