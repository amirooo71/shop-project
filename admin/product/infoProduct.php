<?php

require '../../includes/init.php';
checkLogin();
$product = new Product();
$cat = new Category();

$id = (int) $_GET['id'];

echo $twig->render("admin/product/infoProduct.twig", ['product' => $product->adminGetProduct($id),
    'category' => $cat->adminGetCategoryList($id)]);

