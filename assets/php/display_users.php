<?php

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

$query 		= $pdo->query('SELECT * FROM users WHERE name="'.$_SESSION['username'].'"');
$photo_user = $query->fetchAll();
