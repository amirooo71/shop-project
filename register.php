<?php

require 'includes/init.php';

if (isPost()) {
    $fname = getPostData('first-name');
    $lname = getPostData('last-name');
    $email = getPostData('email');
    $password = getPostData('password');
    $cpassword = getPostData('cpassword');

    $error = false;
    if ($password != $cpassword) {
        addFlushMessage("dosent match password");
        $error = true;
    }
    if (empty($fname)) {
        addFlushMessage("please inert the name");
        $error = true;
    }
    if (empty($lname)) {
        addFlushMessage("please insert the lname");
        $error = true;
    }
    if (empty($email)) {
        addFlushMessage("please insert the email");
        $error = true;
    }
    if (empty($password)) {
        addFlushMessage("please insert the password");
        $error = true;
    }
    if ($error == true) {
        redirect($_SERVER['PHP_SELF']);
    }else{
        $register = new Register();
        $register->createAccount($fname, $lname, $email, $password);
        addFlushMessage("succsify registered please check your email");
        redirect($_SERVER['PHP_SELF']);
    }
    
}



echo $twig->render("register.twig", []);
