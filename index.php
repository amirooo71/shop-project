<?php

require 'includes/init.php';

$product = new Product();
$cart = new cart();

echo $twig->render("layout.twig", ['product' => $product->GetList($f = 0, ['visit_count DESC']),
    'cart' => $cart]);


