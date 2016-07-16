<?php

require '../../includes/init.php';
checkLogin();
if (isPost()) {
    $id = $_GET['id'];
    if ($_POST['confrim'] == "yes") {

        $product = new Product();
        $product->adminRemoveProduct($id);
        addFlushMessage("Item removed");
        redirect("listProduct.php");
    } else {
        redirect("infoProduct.php?id=$id");
    }
}








echo $twig->render("admin/product/delete.twig", []);

