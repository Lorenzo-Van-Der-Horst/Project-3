<?php
session_start();

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tesla_database';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
    header('Location: ../login.php');
}

// Prepare SQL statement.
if ($stmt = $con->prepare('SELECT user_id, password, isAdmin FROM users WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc).
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $isAdmin);
        $stmt->fetch();
        // Verify the password.
        if ($_POST['password'] === $password) {
            // Create sessions, so we know the user is logged in.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['id'] = $id;
            $_SESSION['isAdmin'] = ($isAdmin == 1) ? true : false; // set isAdmin based on the value of the isAdmin column
            if($_SESSION['isAdmin']) {
                header('Location: ./Niels/panel.php');
            } else {
                header('Location: ./index.php');
            }
        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
            header('Location: ./index.php');
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
        header('Location: ./index.php');
    }

	$stmt->close();
}
?>