<?php

if(!empty($_POST) && (strpos($_POST['form'], 'modif-') !== false))
{
	$id = str_replace("modif-", "", $_POST['form']);
	
	$name 				= $_POST['name'];
	$description 		= $_POST['description'];
	$price 				= $_POST['price'];
	$stock_number 		= $_POST['stock'];
	$tags 				= $_POST['tags'];
	$user_modification	= $_SESSION['username'];

	if(!isset($name))
		$error_messages['name'] = 'Missing Value';

	if(!isset($description))
		$error_messages['description'] = 'Missing Value';

	if(!isset($price))
		$error_messages['price'] = 'Missing Value';

	if(!isset($stock_number))
		$error_messages['stock_number'] = 'Missing Value';

	if(!isset($tags))
		$error_messages['tag'] = 'Missing Value';

	if (empty($error_messages))
	{
		$prepare = $pdo->prepare('UPDATE items SET name=:name, description=:description, price=:price, stock_number=:stock, tags=:tags, user_modification=:user_modification WHERE id=:id');

		echo '<pre>';
	print_r($prepare);
	echo '</pre>';
		
		$prepare->bindValue('id', $id);
		$prepare->bindValue('name', $name);
		$prepare->bindValue('description', $description);
		$prepare->bindValue('price', $price);
		$prepare->bindValue('stock', $stock_number);
		$prepare->bindValue('tags', $tags);
		$prepare->bindValue('user_modification', $user_modification);

		$prepare->execute();
	}
}