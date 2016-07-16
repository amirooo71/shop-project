<?php

require 'includes/init.php';

$cart = new Cart();
$login = new UserLogin();
$order = new Order();
$order->addOrder($login->getCurrentUser(), $cart);
