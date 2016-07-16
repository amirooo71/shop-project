<?php

class Cart {

    public function add($id, $count) {
        $cart = $this->cartAttay();
        $cart[$id] += $count;
        if ($cart[$id] < 0) {
            $cart[$id] = 0;
        }
        $_SESSION['cart'] = $cart;
    }

    public function cartCount() {
        return count($this->cartAttay());
    }

    public function get() {
        $cart0 = $this->cartAttay();
        $product = new Product();
        $cart = [];
        foreach ($cart0 as $id => $count) {
            $p = $product->Get($id);
            if ($p['qty'] > $count) {
                $p['count'] = $count;
            } else {
                $p['count'] = $p['qty'];
                echo "<div class='alert alert-danger' role='alert'>Not available</div>";
              
            }
            $cart[] = $p;
        }
        return $cart;
    }

    private function cartAttay() {
        if (isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        } else {
            return [];
        }
    }

}
