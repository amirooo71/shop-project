<?php

require '../includes/init.php';

if (isPost()) {
    $login = new AdminLogin();
    $email = getPostData('email');
    $password = getPostData('password');

    if ($login->check($email, $password)) {
        redirect("dashboard.php");
    } else {
        addFlushMessage("Invalid username and password!!!");
        redirect($_SERVER['PHP_SELF']);
    }
}

echo $twig->render("admin/index.twig", []);
