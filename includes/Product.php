<?php

class Product {

    private $n = 10;

    public function adminAddProduct($name, $description, $price, $qty, $sku, $ext, $status = 'visible') {
        $query = "INSERT INTO product SET name='$name', description='$description',"
                . "price='$price', qty='$qty', sku='$sku', status='$status', ext='$ext'";
        db::get()->query($query);
        return db::get()->insert_id;
    }

    public function adminEditProduct($id, $name, $description, $price, $qty, $sku, $status = "visible") {
        $query = "UPDATE product SET name='$name', description='$description',"
                . "price='$price', qty='$qty', sku='$sku', status='$status' WHERE id=$id";
        db::get()->query($query);
        return db::get()->affected_rows;
    }

    public function adminRemoveProduct($id) {
        $query = "DELETE FROM product WHERE id='$id'";
        db::get()->query($query);
        // che chizi return konad???
    }

    public function adminGetList($f = 0) {
        $query = "SELECT * FROM product LIMIT $f,$this->n";
        $result = db::get()->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

//// $f pishfarz ghabul nemikonad??????????????????????????????????????????????
    public function GetList($f = 0, $order = null) {
        $query = "SELECT * FROM product WHERE status = 'visible' ";
        if ($order !== null && is_array($order) && count($order) > 0) {
            $query .= "ORDER BY " . implode(",", $order) . " ";
        }
        $query .= "LIMIT $f,$this->n";
        $result = db::get()->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getVisitCount($id) {
        $query = "UPDATE product SET visit_count = visit_count+1 WHERE id=$id";
        db::get()->query($query);
    }

    public function adminGetProduct($id) {
        $query = "SELECT * FROM product WHERE id='$id'";
        $result = db::get()->query($query);
        return $result->fetch_assoc();
    }

    public function Get($id) {
        $query = "SELECT * FROM product WHERE id='$id' AND status='visible'";
        $result = db::get()->query($query);
        return $result->fetch_assoc();
    }

    public function adminGetCount() {
        $query = "SELECT COUNT(*) FROM product";
        $result = db::get()->query($query);
        return $result->fetch_row();
    }

    public function GetCount() {
        $query = "SELECT COUNT(*) FROM product WHERE status='visible'";
        $result = db::get()->query($query);
        return $result->fetch_row();
    }

    public function adminAssignCategories($id, $category_id) {
        $query = "INSERT INTO product_categories SET product_id='$id', category_id='$category_id'";
        db::get()->query($query);
        return db::get()->insert_id;
    }

    public function adminDeleteCtegories($id) {
        $query = "DELETE FROM product_categories WHERE product_id='$id'";
        db::get()->query($query);
    }

//    public function adminEditCategories($id,$category_id) {
//        $query = "UPDATE product_categories SET category_id='$category_id' WHERE product_id=$id";
//        db::get()->query($query);
//        return db::get()->affected_rows;
//    }

    public function countProduct() {
        $query = "SELECT * FROM product";
        $result = db::get()->query($query);
        return $result->fetch_all();
    }

    public function getExtImage($id) {
        $query = "SELECT ext FROM product WHERE id=$id";
        $resilt = db::get()->query($query);
        return $resilt->fetch_assoc();
    }

}
