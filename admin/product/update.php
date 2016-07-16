<?php

require '../../includes/init.php';

checkLogin();
$cat = new Category();
$product = new Product();
$id = (int) $_GET['id'];
if (isPost()) {
    $file = $_FILES['file'];
    $name = getPostData('name');
    $description = getPostData("description");
    $price = getPostData("price");
    $qty = getPostData("qty");
    $sku = getPostData("sku");
    $status = "visible";
    $categories = $_POST['categories'];
    $arr = explode(".", $file['name']);
    $ext = end($arr);
    $product->adminEditProduct($id, $name, $description, $price, $qty, $sku, $status);
    $product->adminDeleteCtegories($id);
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
if (isset($_POST['unlink'])) {
    $ext = $product->getExtImage($id);
    $path = "../../files/$id.$ext[ext]";
    $path1 = "../../files/thumb-500/$id.$ext[ext]";
    $path2 = "../../files/thumb-250/$id.$ext[ext]";
    unlink($path);
    unlink($path1);
    unlink($path2);
}

echo $twig->render("admin/product/update.twig", ['cat' => $cat->adminGetAllCategory(),
    'product' => $product->adminGetProduct($id)]);
