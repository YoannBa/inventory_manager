<?php

// Connexion variables
define('DB_HOST','localhost');
define('DB_NAME','inventory');
define('DB_USER','root');
define('DB_PASS','root'); // '' par défaut sur windows

try
{
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    session_start();
}
catch (Exception $e)
{
    die('Could not connect');
}
                    