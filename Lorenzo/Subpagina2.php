<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Subpagina 2</title>
</head> 
<body>
    <main>
        <?php
            include '../nav.php';
        ?>

    
        
        <section>
            <h1>Subpagina 2</h1>
            <?php
  
              /* $a[0] = "jan";
             $a[1] = "jan"; */

             $a = array("rob", "jan", "piet");
             echo $a[0] . "<br>"; 

             echo "<br>Overzicht Namen<br>";
             echo '<table border="1" width="200">';
            
              
             foreach ($a as $value) {
                echo "<tr><td>";
                echo "$value";
                echo "</tr></td>";
              } 
              echo "</table>";
              echo "<br>";


                


                // Prints the day, date, month, year, time, AM or PM
                echo date("l jS \of F Y h:i:s A");



            ?>
        </section>
        <section>
            <form action="action_page.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="password" name="password" minlength="5"><br><br>
            <input type="submit" value="Submit">
            </form>
        </section>
    </main>
        <?php
            include '../footer.php';
        ?>
</body>
</html>