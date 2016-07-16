<?php

class Category {

    private $n = 10;

    public function adminAdd($name, $parentId) {
        $query = "INSERT INTO product_category SET name='$name', parent_id='$parentId'";
        db::get()->query($query);
        return db::get()->insert_id;
    }

    public function adminEdit($id, $name, $parentId) {
        $query = "UPDATE product_category SET name='$name', parent_id='$parentId' WHERE id='$id'";
        db::get()->query($query);
        return db::get()->affected_rows;
    }

    public function adminGetList($parentId, $f = 0) {
        $query = "SELECT * FROM product_category WHERE parent_id='$parentId' LIMIT $f,$this->n";
        $result = db::get()->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function adminGetCount($parentId) {
        $query = "SELECT COUNT(*) FROM product_category WHERE parent_id='$parentId'";
        $result = db::get()->query($query);
        return $result->fetch_row();
    }

    public function adminGet($id) {
        $query = "SELECT * FROM product_category WHERE id=$id";
        $result = db::get()->query($query);
        return $result->fetch_assoc();
    }

    public function adminGetAllCategory() {
        $cat = $this->adminGetList(0);
        $cat2 = [];
        foreach ($cat as $c) {
            $cat2[] = $c;
            $subcat = $this->adminGetList($c['id']);
            if (count($subcat) > 0) {
                foreach ($subcat as $cc) {
                    $cc['name'] = "--" . $cc['name'];
                    $cat2[] = $cc;
                }
            }
        }
        return $cat2;
    }

    public function adminGetCategoryList($id) {
        $query = "SELECT name FROM product_category a INNER JOIN product_categories b ON a.id=b.category_id WHERE product_id=$id";
        $result = db::get()->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }

}
