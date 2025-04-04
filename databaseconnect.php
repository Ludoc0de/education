<?php

try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_NAME . ';charset=utf8',
    MYSQL_USER,
    MYSQL_PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $exception) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $exception->getMessage());
}
// Si tout va bien, on peut continuer