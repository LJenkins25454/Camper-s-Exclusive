<?php 
include('database.php');
?>
<header>
        <a href="index.php">
            <img src="./images/favicon.png" width="50px">
        </a>
        <h1>Camper's Exclusive - Registration Complete!</h1>
     
    </header>

<?php 
//Get user input
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


/*$query = 'INSERT INTO users
            (name, email, password)
        VALUES
            (:name, :email, :password';
$statement = $db->prepare($query);
$statement->bindValue(':name', $first_name);
$statement->bindValue(':email', $email);
$statement->bindValue(':password', $password);
$statement->execute();
$statement->closeCursor();
*/
$emails[] = $email;
$passwords[] = $password;

    //print_r($passwords);
    echo "Welcome to the family, " . $first_name . '!' . '<br>';
    echo "We sent a special present to " . $email . '.<br> ';
    echo "Please sign in.<br>" ;
    echo "Username: " . $emails[0] . "<br>";
?>
<a href="login.php">Click Here to Login</a>

<?php
    //echo "<br>" . $passwords[0] . "<br>";
   // echo $emails[0];

    //include('./login.php');
?>
<!--<form action="sign_in.php" method="post">
Username <input type="text" name="val_email">
Password <input type="password" name="val_password">
<input type="submit">
</form>
-->
<?php
$val_email = filter_input(INPUT_POST, 'val_email');
$val_password = filter_input(INPUT_POST, 'val_password');



echo $val_email . '<br>';

echo $val_password;

/*if (
    $val_email === $emails[0] && $val_password === $password[0]
) {
    echo "You did it";
} else {
    echo "This is the else statement";
}
*/
?>