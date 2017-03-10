<?php

$query = $pdo->query('SELECT * FROM items');
$items = $query->fetchAll();
