<?php

session_start();
define("DEBUG", true);
define("PATH", "/shop-project");
define("ADMIN_PATH", "/shop-project/admin");
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../includes/function.php';
/*
 * =========================
 *          TWIG    
 * =========================
 */
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../cache/compilation_cache',
    'debug' => DEBUG
        ));
if (DEBUG) {
    $twig->addExtension(new Twig_Extension_Debug());
}
$twig->addGlobal("PATH", "/shop-project");
$twig->addGlobal("message", getFlushMessage());
/*
 * ============================
 *         END TWIG
 * ============================
 */
spl_autoload_register(function($cn) {
    $path = __DIR__ . "/$cn.php";
    if (file_exists($path)) {
        require $path;
    }
});
$adminlogin = new AdminLogin();
if ($adminlogin->isLogin()) {
    $twig->addGlobal("admin", $_SESSION['admin']);
}
$userLogin = new UserLogin();
if ($userLogin->isLoginUser()) {
    $twig->addGlobal("user", $_SESSION['user']);
}

