<?php

if (!empty($_POST) && (strpos($_POST['form'], 'delete-') !== false))
{
	$id = str_replace("delete-", "", $_POST['form']);
	$exec = $pdo->exec('DELETE FROM items WHERE id = '.$id);
}