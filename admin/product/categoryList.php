<?php

require '../../includes/init.php';
checkLogin();
$cat = new Category();
$parentId = getGetData('parent_id');
$name = $cat->adminGet($parentId);

echo $twig->render("admin/product/categoryList.twig",[
    'category' => $cat->adminGetList($parentId),
    'parent_id' => $parentId,
    'cat_name' => $name['name'],
    ]);