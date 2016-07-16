<?php

require '../../includes/init.php';

checkLogin();
$cat = new Category();

$parentId = getGetData('parent_id');
if (isPost()) {
    if (isPost()) {
        $name = getPostData('name');
        $cat->adminAdd($name, $parentId);
        redirect("categoryList.php?parent_id=$parentId");
    }
}

$cat_name = $cat->adminGet($parentId);
echo $twig->render("admin/product/categoryCreate.twig", ['cat_name' => $cat_name['name']]);
