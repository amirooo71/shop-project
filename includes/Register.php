<?php

class Register {

    public function createAccount($fname, $lname, $email, $password) {
        $password2 = passwordHash($password);
        $query = "INSERT INTO user SET first_name='$fname', last_name='$lname',"
                . "email='$email', password='$password2'";
        db::get()->query($query);
        $id = db::get()->insert_id;
        $token = $this->createTokon();
        $this->saveToken($id, $token);
        $this->emailSendVerifyToken($email, $id, $token);
    }

    private function saveToken($id, $token) {
        $query = "INSERT INTO verify SET user_id='$id', verify_token='$token'";
        db::get()->query($query);
    }

    private function createTokon() {
        $token = sha1(time());
        return $token;
    }


    private function emailSendVerifyToken($email, $id, $token) {
        $url = "http://localhost:8080/shop-project/loginVerify.php?id=$id&token=$token";
        $subject = "Verify Login";
        $body = <<<msg
                Please click on the following link for resetting password:                <br>
$url<br>
                <br>
                <br>
                <br>
msg;
        sendMail($email, $subject, $body);
    }
    

}
