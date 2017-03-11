<?php

//Get db values
$query = $pdo->query('SELECT * FROM items');
$items = $query->fetchAll();
