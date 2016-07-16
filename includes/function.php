<?php

function escapeString($string) {
    return db::get()->real_escape_string($string);
}

function getPostData($name) {
    return escapeString($_POST[$name]);
}

function getGetData($name, $defult = 0) {
    return (int) (isset($_GET[$name]) ? $_GET[$name] : $defult);
}
function getStringGetData($name) {
    return escapeString($_GET[$name]);
}

function isPost() {
    return ($_SERVER['REQUEST_METHOD'] == "POST");
}

function redirect($url) {
    header("location: $url");
}

function addFlushMessage($message) {
    if (!isset($_SESSION['flush-message'])) {
        $_SESSION['flush-message'] = [];
    }
    $_SESSION['flush-message'][] = $message;
}

function getFlushMessage() {
    if (!isset($_SESSION['flush-message'])) {
        return [];
    }
    $message = $_SESSION['flush-message'];
    $_SESSION['flush-message'] = [];
    return $message;
}

function checkLogin() {
    $login = new AdminLogin();
    if (!$login->isLogin()) {
        addFlushMessage("You do not have access to this page");
        redirect(ADMIN_PATH);
    }
}

function passwordHash($password) {
    for ($i = 0; $i < 5000; $i++) {
        $password = sha1($password);
    }
    return $password;
}

function make_thumbPng($src, $dest, $desired_width) {

    /* read the source image */
    $source_image = imagecreatefrompng($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

function make_thumbJpeg($src, $dest, $desired_width) {

    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

function sendMail($email, $subject, $body) {



    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'dev4php.tk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@dev4php.tk';                 // SMTP username
    $mail->Password = '!dI.t;vsH~wV';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = "25";
    $mail->WordWrap = 50;
    $mail->SMTPAuth = true;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ); // TCP port to connect to

    $mail->setFrom('info@dev4php.tk', 'Mailer');
    $mail->addAddress($email);     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body = $body;


    return $mail->send();
}
