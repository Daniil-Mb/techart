<?
    define('HOST', 'MySQL-8.2');
    define('DATABASE_NAME', 'techart');
    define('USERNAME', 'root');
    define('PASSWORD', '');

    $pdo = new PDO("mysql:host=" . HOST .";dbname=" . DATABASE_NAME . ";", USERNAME, PASSWORD);