<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

// Main

// 

// Alleen Tesla Product werd gebruikt van deze functies dus skip de rest en scroll naar beneden
function ConnectDb(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tesla_database"; // <--- DatabaseName
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo 'Connected successfully 1<br>';
    } catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    #echo 'Connected successfully 2<br>';
    return $conn;
}

function GetData($table) {
    // Connect database
    $conn = ConnectDb();
    #var_dump($conn);
    
    // Select data uit de opgegeven table
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function OvzTable(){
    $result = GetData("fietsen"); // <--- TableName
    PrintTable($result);
}

function PrintTable($result) {
    echo '<table border=1px>';
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo '<th>'. $COULUMN_NAME . '</th>';
        }
        echo '<tr>';
            foreach($result as &$row) {
                echo '<tr>';
                    foreach($row as &$cell){
                        echo '<td>' . $cell . '</td>';
                    }
                echo '</tr>';
                }
        echo '</tr>';
    echo '</table>';
}

/*
// Overzicht Fietsen Placeholder


function OvzTableFietsen(){
    $result = GetData("fietsen"); // <--- TableName
    PrintTable($result);
}
*/
/*
function PrintTableFietsen($result) {
    echo '<table border=1px>';
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo '<th>'. $COULUMN_NAME . '</th>';
        }
        echo '<tr>';
            foreach($result as &$row) {
                echo '<tr>';
                    foreach($row as &$cell){
                        echo '<td>' . $cell . '</td>';
                    }
                echo '</tr>';
                }
        echo '</tr>';
    echo '</table>';
}

// Overzicht Fietsen met Filter

function OvzFietsen(){
    $result = GetData("fietsen"); // <--- TableName
    PrintFietsen($result);
}

function PrintFietsen($result){
    echo '<table border=1px>';
    foreach($result[0] as $COULUMN_NAME => $data){
        echo '<th>'. $COULUMN_NAME . '</th>';
    }
    foreach($result as &$data) {
        /*$array = $_POST['array'];
        echo '<form action="?array=';
            echo $array;
        echo '" method="post">';
            echo '<label for="1">:'. $data["naam"] .'</label><input type="text" name="array" value="'.$data["naam"].'" id="1" hidden required><br>';
        echo '</form>';
        echo '<tr>';
            echo '<td>';
                echo '<a href="database.php?id='.$data["id"].'">';
                    echo $data["id"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?merk='.$data["merk"].'">';
                    echo $data["merk"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?type='.$data["type"].'">';
                    echo $data["type"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?prijs='.$data["prijs"].'">';
                    echo $data["prijs"];
                echo '</a>';
            echo '</td>';
        echo '</tr>';       
    }
    echo '</table>';
}
*/

// DetailsPage
/*
function OvzTableDetails(){
    $result = GetDataFilter("fietsen"); // <--- TableName
    PrintTableDetails($result);
}

function GetDataFilter($table){
    // Connect database
    $conn = ConnectDb();
    #var_dump($conn);
    if(!empty($_GET)){
        if(isset($_GET["id"])){
            $coulumn = "id";
            $data = $_GET["id"];
            // Filter op ID
        }
        if(isset($_GET["merk"])){
            $coulumn = "merk";
            $data = $_GET["merk"];
            // Filteren op Merk
        }
        if(isset($_GET["type"])){
            $coulumn = "type";
            $data = $_GET["type"];
            // Filteren op Type // Not Working
        }
        if(isset($_GET["prijs"])){
            $coulumn = "prijs";
            $data = $_GET["prijs"];
            // Filteren op Prijs // Need to change to prijs range rather than a fixed prijs.
        }
        // Select data uit de opgegeven table 
        $query = $conn->prepare("SELECT * FROM $table WHERE $coulumn = '$data'");
    }else{
        // Select data uit de opgegeven table // GEEN Filter
        $query = $conn->prepare("SELECT * FROM $table");
    }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function PrintTableDetails($result) {
    foreach($result as &$data) { 
        echo '<article>';
            echo 'Artikelnummer: ' . $data["id"] . '<br>';
            echo 'Merk: ' . $data["merk"] . '<br>';
            echo 'Type: ' . $data["type"] . '<br>';
            echo 'Prijs: &euro; ' .
                number_format($data["prijs"], 2, ',', '.') . '<br><br>';
        echo '</article>';
    }
}
*/

// Klachten
function KlachtToevoegen($soort){
    $conn = ConnectDb();
    if(!empty(isset($_POST) && isset($_POST["submit"]))){
        $naam = $_POST["naam"];
        $reden = $_POST["reden"];
        if(!empty(isset($_POST["naam"]) && isset($_POST["reden"]))){
            $query = $conn->prepare("INSERT INTO klachtenboek(soort_id, naam, reden) VALUES('$soort','$naam','$reden')");
            $query->execute();
            echo 'Uw Bericht is Toegevoegd. <br><br><br>';
        } else {
            echo 'Er is een fout opgetreden! <br><br>';
        }
    } else {
        exit;
    }

}
function OvzBerichten(){
    $result = GetData("klachten"); // <--- TableName
    PrintTableBerichten($result);
}

function PrintTableBerichten($result){
    foreach($result as &$data) {
        #echo '[' . $data["id"] . '] ';
        echo $data["naam"] . ' - ';
        echo '[' . $data["datumtijd"] . '] ';
        echo '<br>';
        echo $data["bericht"] . ' ';
        echo '<br><br>';
    }
}


// Login Pagina
/*
function Login(){
    $conn = ConnectDb();
    if (isset($_POST["inloggen"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_UNSAFE_RAW);
        $password = $_POST['password'];
        $query = $conn->prepare("SELECT * FROM gebruikers WHERE username = $username");
        $query->execute();
        if($query->rowCount() == 1){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $result["password"])) {
                echo "Juiste gegevens";
            } else {
                echo "Onjuiste gegevens! <br>";
                echo "Onjuist password_verify(password, result['password'])";
            }
        } else {
            echo "Onjuiste gegevens! <br>";
            echo "Onjuist %query->rowCount() == 1";
        }
        echo "<br><br>";
        echo "Inlogveld password: $password <br>";
        echo "Database password: ". $result["password"];
    }
}
*/


// Tesla Product
function ProductModelS(){

    // Zet de variables zodat er geen warning komt
    if(empty($_POST['color'])){
        $_POST['color'] = '';
    }
    if(empty($_POST['wheels'])){
        $_POST['wheels'] = '';
    }
    if(empty($_POST['interior'])){
        $_POST['interior'] = '';
    }
    if(empty($_POST['view'])){
        $_POST['view'] = '';
    }
    if(empty($_POST['steering'])){
        $_POST['steering'] = '';
    }
    

    $variant ='$MTS13'; // Weet niet wat het betekend maar zit in de link
    if($variant = '$MTS13'){
        // Zet de post in hun eigen variablen
        $color_code = $_POST['color']; // 5 cases 
        $wheels_code = $_POST['wheels']; // 2 cases 
        $interior_code = $_POST['interior']; // 3 cases 
        $view_code = $_POST['view']; // 5 cases 
        $steering_code = $_POST['steering']; // 2 cases 



        switch($color_code){ // Geef Tesla Kleur gebaseerd op de form
            case 1:
                $color = '$PPSW'; // Color White
                break;
            case 2:
                $color = '$PBSB'; // Color Black
                break;
            case 3:
                $color = '$PMNG'; // Color Gray
                break;
            case 4:
                $color = '$PPSB'; // Color Blue
                break;
            case 5:
                $color = '$PR01'; // Color Red
                break;
            default:
                $color = '$PPSW'; // Color White
                break;
        }

        switch($wheels_code){ // Geef Wheel soort gebaseerd op de form
            case 1:
                $wheels = '$WS91'; // Wheels Tempest
                break;
            case 2:
                $wheels = '$WS11'; // Wheels Arachnid
                break;
            default:
                $wheels = '$WS91'; // Wheels Tempest
                break;
        }

        switch($interior_code){ // Geef Interieur kleur gebaseerd op de form
            case 1:
                $interior = '$IBE00'; // Interior Black
                break;
            case 2:
                $interior = '$IWW00'; // Interior Black & White
                break;
            case 3:
                $interior = '$ICW00'; // Interior Cream
                break;
            default:
                $interior = '$IBE00'; // Interior Black
                break;
        }

        switch($view_code){ // Geef view gebaseerd op form
            case 1:
                $view = 'FRONT34'; // View FRONT34
                break;
            case 2:
                $view = 'SIDE'; // View SIDE
                break;
            case 3:
                $view = 'REAR34'; // View REAR34
                break;
            case 4:
                $view = 'RIMCLOSEUP'; // View RIMCLOSEUP
                break;
            case 5:
                $view = 'INTERIOR'; // View INTERIOR
                break;
            default:
                $view = 'FRONT34'; // View FRONT34
                break;
        }
        switch($steering_code){ // Geef steeringwheel soort gebaseerd op form
            case 1:
                $steering = '$ST03'; // Steering Wheel
                break;
            case 2:
                $steering = '$ST0Y'; // Yoke Steering
                break;
            default:
                $steering = '$ST03'; // Steering Wheel
                break;
        }
    } else {
        echo 'A problem as occured';
    }
    if(!empty(isset($_POST) && isset($_POST['submit']))){ // Als items gepost zijn dan laat image zien
        #header('Location: https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$a.','.$b.','.$c.','.$d.'&view='.$e.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&');
        if ($view_code = 5){
            echo'<embed type="image/jpg" src="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$variant.','.$color.','.$wheels.','.$interior.','.$steering.'&view='.$view.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&" width="60%">';
        } else {
            echo'<embed type="image/jpg" src="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$variant.','.$color.','.$wheels.','.$interior.'&view='.$view.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&" width="60%">';
        }
    }
}
?>
