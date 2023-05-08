<?php 
require_once("registration.php");

$val_email = filter_input(INPUT_POST, 'val_email');
$val_password = filter_input(INPUT_POST, 'val_password');


echo $emails[0];
echo $val_email . '<br>';

echo $passwords[0];
echo $val_password . '<br>';

if ($val_email === $emails[0] && $val_password === $password[0]) {
    echo "You did it";
    include("signed_in.php");
} else {
    echo "Your input did not match our records. Try again.";
}

echo $val_email;
echo $val_password;
?>