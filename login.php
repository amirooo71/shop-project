<?php

require 'includes/init.php';
$login = new UserLogin();
if (isPost()) {
    $email = getPostData('email');
    $password = getPostData('password');
    if ($login->checkLoginFlag($email, $password)) {
        if (isset($_SESSION['referer'])) {
            $url = $_SESSION['referer'];
        } else {
            $url = "index.php";
        }
        redirect($url);
    } else {
        addFlushMessage("invalid username and password");
        redirect($_SERVER['PHP_SELF']);
    }
} else {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
    } else {
        unset($_SESSION['referer']);
    }
}

echo $twig->render("login.twig", []);
