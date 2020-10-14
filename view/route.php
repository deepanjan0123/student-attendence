<?php

include_once '../controller/user_insert.php';
include_once '../controller/user_verify.php';
//this a turnary operator for shortcut without  ??''  using if-else....
$route = $_POST['route'] ?? '';

switch ($route) {
    case 'register':
        //to make a object f class registration which is in user-input.php
        $adduser = new Registration();
        //to get the request in register class
        $add = $adduser->addUser($_REQUEST);
        break;
    case 'login':
        $userverify = new Login();
        $verify = $userverify -> userVerify($_REQUEST);
       
        break;
    case 'profile':
        // $profile = new profile_check();
        $add = $adduser->addUser($_REQUEST);
        break;
    default:
        # code...
        break;
}

?>