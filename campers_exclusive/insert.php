<?php
    include('database.php');

    $name = filter_input(INPUT_POST, 'first_name');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

$query = 'INSERT INTO users
            (name, email, password)
        VALUES
            (:name, :email, :password';
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);
$statement->bindValue(':password', $password);
$statement->execute();
$statement->closeCursor();
?>

<?php
/*
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


    //print_r($passwords);
    echo "Welcome to the family, " . $first_name . '!' . '<br>';
    echo "We sent a special present to " . $email . '.<br> ';
    echo "Please sign in.<br>" ;
    echo "(Your Username is your email).<br>";
    */
include('signed_in.php');

?>
