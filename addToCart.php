<?php

require 'includes/init.php';
$cart = new Cart();
$id = getGetData('id');
$count = getGetData('count', 1);
$cart->add($id, $count);
if (isset($_SERVER['HTTP_REFERER'])) {
    $url = $_SERVER['HTTP_REFERER'];
} else {
    $url = PATH . "index.php";
}
redirect($url);
