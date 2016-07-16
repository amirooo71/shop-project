<?php

require 'includes/init.php';

$cart = new Cart();

echo $twig->render("cart.twig",['cart' => $cart]);