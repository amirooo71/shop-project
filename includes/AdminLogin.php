<?php

class AdminLogin {

    public function check($email, $password) {
        $query = "SELECT id FROM admin WHERE email='$email' AND password='$password'";
        $result = db::get()->query($query);
        if ($result->num_rows == 1) {
            $admin = $result->fetch_assoc();
            $_SESSION['adminId'] = $admin['id'];
            return true;
        } else {
            return false;
        }
    }

    public function isLogin() {
        if (isset($_SESSION['adminId']) && empty(!$_SESSION['adminId'])) {
            $_SESSION['admin'] = $this->getUser($_SESSION['adminId']);
            return true;
        } else {
            return false;
        }
    }

    public function logOut() {
        unset($_SESSION['adminId']);
        unset($_SESSION['admin']);
    }

   

//=========================Private Function==============================
    private function getUser($adminId) {
        $query = "SELECT * FROM admin WHERE id='$adminId'";
        $result = db::get()->query($query);
        return $result->fetch_assoc();
    }

}
