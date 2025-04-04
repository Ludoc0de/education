<?php
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$moviesStatement = $mysqlClient->prepare('SELECT * FROM movies');
$moviesStatement->execute();
$movies = $moviesStatement->fetchAll();