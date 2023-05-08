<?php
$action = filter_input(INPUT_POST, 'action');


switch($action)  {
    case 'registration':
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        $emails[] = $email;
        $passwords[] = $password;
        
            //print_r($passwords);
            echo "Welcome to the family, " . $first_name . '!' . '<br>';
            echo "We sent a special present to " . $email . '.<br> ';
            echo "Please sign in.<br>" ;
            echo "(Your Username is your email).<br>";
        
            echo $passwords[0];
            echo $emails[0];
        
            //include('./login.php');
    break;

    case ''

}

?>