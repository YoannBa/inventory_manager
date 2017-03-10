<?php

	if (!empty($_POST) && $_POST['form'] == 'add_object')
	{
		$name 				= $_POST['name'];
		$description 		= $_POST['description'];
		$price 				= $_POST['price'];
		$stock_number 		= $_POST['stock_number'];
		$tags 				= $_POST['tag'];
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
			$prepare = $pdo->prepare('INSERT INTO items (name, description, price, stock_number, tags, user_modification) VALUES (:name, :description, :price, :stock_number, :tags, :user_modification)');

			$prepare->bindValue('name', $name);
			$prepare->bindValue('description', $description);
			$prepare->bindValue('price', $price);
			$prepare->bindValue('stock_number', $stock_number);
			$prepare->bindValue('tags', $tags);
			$prepare->bindValue('user_modification', $user_modification);

			$prepare->execute();

		}
		else
		{
			echo '<pre>';
			print_r($error_messages);
			echo '</pre>';
		}
	}