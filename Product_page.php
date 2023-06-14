<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Page</title>
</head>
<body>
<header>
        <?php
            include 'nav.php';
        ?>
</header>

<!-- form voor de opties -->

<div class="a">
<h1>Tesla Model S</h1><br>
<form action="Betalen.php" method="POST">
                <label for="color"> Color: 
                    <select name="color" id="color">
                        <option value="1">White</option>
                        <option value="2">Black</option>
                        <option value="3">Silver</option>
                        <option value="4">Blue</option>
                        <option value="5">Red</option>
                    </select><br>
                </label>
                <label for="wheels"> Wheels: 
                    <select name="wheels" id="wheels">
                        <option value="1">Tempest Wheels</option>
                        <option value="2">Arachnid Wheels</option>
                    </select><br>
                </label>
                <label for="interior"> Interior: 
                    <select name="interior" id="interior">
                        <option value="1">All Black</option>
                        <option value="2">Black and White</option>
                        <option value="3">Cream</option>
                    </select><br>
                </label>
                <label for="view"> View: 
                    <select name="view" id="view">
                        <option value="1">FRONT34</option>
                        <option value="2">SIDE</option>
                        <option value="3">REAR34</option>
                        <option value="4">RIMCLOSEUP</option>
                        <option value="5">INTERIOR</option>
                    </select><br>
                </label>
                <label for="steering"> Steering Wheel: 
                    <select name="steering" id="steering">
                        <option value="1">Steering Wheel</option>
                        <option value="2">Yoke Steering</option>
                    </select><br>
                </label>
        <input type="checkbox"  name="keuze[]" value="1"/>Set winterbanden: € 4.000<br/>
    <input type="checkbox"  name="keuze[]" value="2"/>Enhanced Autopilot: € 3.800<br/>
    <input type="checkbox"  name="keuze[]" value="3"/>Full Self-Driving Capability: € 7.500<br/>
    <input type="checkbox"  name="keuze[]" value="4"/>Wall connector: € 500<br/>
        <input type="submit" name="submit" value="Bestellen"/>
    </form>
    </div>
    
   <?php
       //include 'footer.php'; 
?>
<style>
img {
  float: right;
}


div.a {
  font-size: 15px;
}
</style>

</body>
</html>
