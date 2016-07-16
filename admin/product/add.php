<?php
require '../../includes/init.php';
checkLogin();
$cat = new Category();
if (isPost()) {
    $product = new Product();
    $file = $_FILES['file'];
    $name = getPostData('name');
    $description = getPostData("description");
    $price = getPostData("price");
    $qty = getPostData("qty");
    $sku = getPostData("sku");
    $status = getPostData("status");
    $categories = $_POST['categories'];
    $arr = explode(".", $file['name']);
    $ext = end($arr);
    $id = $product->adminAddProduct($name, $description, $price, $qty, $sku, $ext);
    foreach ($categories as $c) {
        $category_id = (int) $c;
        $product->adminAssignCategories($id, $category_id);
    }
    if (is_uploaded_file($file['tmp_name']) && $file['error'] == UPLOAD_ERR_OK) {
        $src = "../../files/" . $id . "." . $ext;
        $dest = "../../files/thumb-500/" . $id . "." . $ext;
        $desired_width = 500;
        $dest2 = "../../files/thumb-250/" . $id . "." . $ext;
        $desired_width2 = 250;
        $dest3 = "../../files/thumb-150/" . $id . "." . $ext;
        $desired_width3 = 150;
        move_uploaded_file($file['tmp_name'], $src);
        if ($ext == "png") {
            make_thumbPng($src, $dest, $desired_width);
            make_thumbPng($src, $dest2, $desired_width2);
            make_thumbPng($src, $dest3, $desired_width3);
        } else {
            make_thumbJpeg($src, $dest, $desired_width);
            make_thumbJpeg($src, $dest2, $desired_width2);
            make_thumbJpeg($src, $dest3, $desired_width3);
        }
    }

    redirect("infoProduct.php?id=$id");
}


echo $twig->render("admin/product/add.twig",['cat' => $cat->adminGetAllCategory()]);