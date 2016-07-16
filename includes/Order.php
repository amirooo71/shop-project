<?php

class Order {

    public function addOrder($user, Cart $cart) {
        $query = "INSERT INTO `order` SET user_id=$user[id]";
        db::get()->query($query);
        $id = db::get()->insert_id;
        $items = $cart->get();
        foreach ($items as $item) {
            $this->createOrderItem($id, $item);
        }
        return $id;
    }

    private function createOrderItem($id, $item) {
        $query = "INSERT INTO `order_item` SET order_id='$id', product_id='$item[id]', count='$item[count]', price='$item[price]'";
               
        db::get()->query($query);
    }

}
