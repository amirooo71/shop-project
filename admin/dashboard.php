<?php

require '../includes/init.php';


checkLogin();
$product = new Product();
$count = count($product->countProduct());



echo $twig->render("admin/dashboard.twig", ['count' => $count]);
