<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camper's Exclusive</title>
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <header>
        <a href="index.php">
            <img src="./images/favicon.png" width="50px">
        </a>
        <h1>Camper's Exclusive</h1>
        <h2>Welcome to Your Next Adventure</h2>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
    </nav>

    <body>
    <img src="./images/landscape.jpeg" width="20%">
    <h3>What is Campers Exclusive?<h3>
    <p>Campers Exclusive is a platform dedicated to sharing the best camping tips, locations and secrets.</p>
    <h3>What are some benefits to joining?</h3>
    <!--
        <h2>Benefit 1:</h2>
        <p>Exclusive Discounts for the CE Family.</p>

    <h2>Benefit 2:</h2>
        <p>Preffered status at campsites</p>
    <h2>Benefit 3:</h2>
        <p>Join a community of campers!</p>
-->
<?php
    $benefits = ['Exclusive Discounts for the CE Family.', 'Preffered status at campsites', 'Join a community of campers!' ];
    $count = count($benefits);
    
     for ($i = 0; $i <= $count; $i++) {
        echo $benefits[$i] . "<br>";
     }
   
    /* foreach ($benefits as $benfit) {
        echo "$benefits <br>";
    }
    echo "$benefits[0]";
    $blah = 2;
    echo "benefits['blah']";*/
?>

    <a href="register.php">Click here to join the family!</a>
</body>
<?php 
// how to make array and then display each value????
 /*   


        $members = [];
        $members['name'] = $name;
        $members['email'] = $email;
        $members['password'] = $password;
        array_push($members
    array member 
        name
        email
        password

        for each?
    } */   
?>
       

   
</body>
