<?php

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

echo '<pre>';
print_r($users);
echo '</pre>';