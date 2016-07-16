<?php

require 'includes/init.php';

$id = (int) $_GET['id'];
$product = new Product();
$cat = new Category();
$product->getVisitCount($id);

echo $twig->render("details.twig", ['product' => $product->get($id),
    'cat' => $cat->adminGetCategoryList($id)]);
