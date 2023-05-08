<header>
        <a href="index.php">
            <img src="./images/favicon.png" width="50px">
        </a>
        <h1>Camper's Exclusive - Login</h1>
      
    </header>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
    </nav>
<?php 

?>

<form action="signed_in.php" method="post">
Username <input type="text" name="val_email">
Password <input type="password" name="val_password">
<input type="submit">
</form>
<?php 
    if (
    $val_email === $emails[0] && $val_password === $password[0]
) {
    echo "You did it";
} else {
    echo "This is the else statement";
}
?>
