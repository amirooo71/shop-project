<?php

require '../includes/init.php';


$login = new Login();
$login->logOut();
addFlushMessage("You have been signed out");
redirect(ADMIN_PATH);








echo $twig->render("admin/index.twig", []);
