<html>
    <link rel="stylesheet" href="style.css">
<?php
echo "<p>hello world</p> <br>";

echo $_POST["username"] . "<br>";

echo $_POST["password"];


  
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



              echo '<table border="1" width="200">';
            
              foreach ($_POST as $name) {
                 echo "<tr><td>";
                 echo "$name";
                 echo "</tr></td>";
              }

              echo "<tr>"; 
              echo "<td>username</td>";
              echo "<td>password</td>";
              echo "</tr>";

             
                echo "</table>";
                echo "<br>";

                echo var_dump($_POST) . "<br>";



                

                // Prints the day, date, month, year, time, AM or PM
                echo date("l jS \of F Y h:i:s A");



?>

<br><br><a href="database.php">Database</a>
</html>