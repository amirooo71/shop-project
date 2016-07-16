<?php

class UserLogin {

    public function checkLogin($email, $password) {
        $password2 = passwordHash($password);
        $query = "SELECT id FROM user WHERE email='$email' AND password='$password2'";
        $result = db::get()->query($query);
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $_SESSION['userId'] = $user['id'];
            return true;
        } else {
            return false;
        }
    }
    public function checkLoginFlag($email, $password) {
        $password2 = passwordHash($password);
        $query = "SELECT id FROM user WHERE email='$email' AND password='$password2' AND flag_user=1";
        $result = db::get()->query($query);
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $_SESSION['userId'] = $user['id'];
            return true;
        } else {
            return false;
        }
    }

    public function isLoginUser() {
        if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
            $_SESSION['user'] = $this->getUser($_SESSION['userId']);
            return true;
        } else {
            return false;
        }
    }

    public function getCurrentUser() {
        if ($this->isLoginUser()) {
            return $_SESSION['user'];
        }
    }

    public function logout() {
        unset($_SESSION['user']);
        unset($_SESSION['userId']);
    }

    private function getUser($userId) {
        $query = "SELECT * FROM user WHERE id=$userId";
        $result = Db::get()->query($query);
        return $result->fetch_assoc();
    }

    public function isValidToken($id, $token) {
        $query = "SELECT COUNT(*) FROM verify WHERE user_id='$id' AND verify_token='$token'";
        $result = db::get()->query($query);
        list($c) = $result->fetch_row();
        if ($c > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateFlag($id) {
        $query = "UPDATE user SET flag_user=1 WHERE id=$id";
        db::get()->query($query);
    }

}
