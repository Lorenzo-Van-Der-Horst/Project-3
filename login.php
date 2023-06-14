<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In | Tesla Nederland</title>
</head>
<body>
    <header>
        <?php
            include 'nav.php';
        ?>
    </header>
    <main>
        <section>
		    <div class="login-form">
		    	<h1>Sign In</h1>
		    	<form action="authenticate.php" method="post">
		    		<label for="email">
		    			<i class="fas fa-user"></i>
		    		</label>
		    		<input type="email" name="email" placeholder="Email" id="email" required><br>
		    		<label for="password">
		    			<i class="fas fa-lock"></i>
		    		</label>
		    		<input type="password" name="password" placeholder="Password" id="password" required><br>
		    		<input type="submit" value="Sign In">
		    	</form>
		    </div>
        </section>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>