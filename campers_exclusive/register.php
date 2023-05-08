<?php
require('database.php');
$name = 'password';

    setcookie($name);
        echo "Cookie '" . $name . "' is set.";
    
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camper's Exclusive</title>
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <header>
    <h1>Camper's Exclusive - Register</h1>
    <h2>This form is the first, and only, step to joining the Camper's Exclusive Family!</h2>
    <p>Below you will provide some basic information that will be used to create your account and add you to our mailing list.</p>
  
        <a href="index.php">
            <img src="./images/favicon.png" width="50px">
        </a>
    </header>

    <form action="registration.php" method="post">
        <p> First Name: <input type="text" name="first_name"></p>
        <p> Last Name: <input type="text" name="last_name"></p>
        <p> Email: <input type="email" name="email"></p>
        <p> Password: <input type="password" name="password"></p>
        <!-- figure out how to take this variable and see if what user inputs on login matches what is in this variable.....-->
        <input type="submit" value="Submit">
        
    </form>

    <aside>
       

    <footer>
        <p>&copy; 2023 Lydia Jenkins - LJenkins25454@gmail.com</p>
    </footer>
</body>