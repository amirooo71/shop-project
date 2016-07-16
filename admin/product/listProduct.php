<?php

require '../../includes/init.php';
checkLogin();
$product = new Product();





echo $twig->render("admin/product/listProduct.twig", ['product' => $product->adminGetList()]);
