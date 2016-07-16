<?php

require 'includes/init.php';
$login = new UserLogin();
$id = (int) $_GET['id'];
$token = getStringGetData('token');
if (!isset($id) || !isset($token)) {
    redirect("register.php");
}
if ($login->isValidToken($id, $token)) {
    if (isPost()) {
        $email = getPostData('email');
        $password = getPostData('password');
        if ($login->checkLogin($email, $password)) {
            $login->updateFlag($id);
            addFlushMessage("succfuly verify");
            redirect("index.php");
        } else {
            addFlushMessage("invalid username and password");
            redirect("register.php");
        }
    }
} else {
    redirect("register.php");
}




echo $twig->render("loginVerify.twig", []);
