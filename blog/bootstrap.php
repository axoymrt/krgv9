<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!defined('BLOG_ROOT')) {
    define('BLOG_ROOT', __DIR__);
}

if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $server_name = $_SERVER['SERVER_NAME'];

    if ($server_name == 'localhost' || $server_name == '127.0.0.1') {
        $local_project_folder = '/krgv9'; // sunucuya attığında burayı kaldır - localde krgv9
        define('BASE_URL', $protocol . '://' . $server_name . $local_project_folder);
    } else {
        define('BASE_URL', 'https://www.korgun.com.tr');
    }
}

if (!defined('BLOG_URL')) {
    define('BLOG_URL', rtrim(BASE_URL, '/') . '/blog');
}

require_once BLOG_ROOT . '/veriler.php';
