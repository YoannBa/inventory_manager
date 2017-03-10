<?php

if (!empty($_POST) && $_POST['form'] == 'add_object')
{
	$name 				= $_POST['name'];
	$description 		= $_POST['description'];
	$price 				= $_POST['price'];
	$stock_number 		= $_POST['stock_number'];
	$tags 				= $_POST['tag'];
	$image              = $_FILES['image'];
	$user_modification	= $_SESSION['username'];
	$allowed_extensions	= array('jpg', 'jpeg', 'png', 'gif');

	if (!empty($_FILES))
	{
		if ($image['error'] > 0)
			$error_messages['upload'] = 'Something went wrong !';

		$extension = strtolower(substr(strrchr($image['name'], '.') ,1));

		if (!in_array($extension, $allowed_extensions))
			$error_messages['extension'] = 'Wrong extension';

		$name_file = 'item-'.$name.'.'.$extension;
		$result = move_uploaded_file($image['tmp_name'], '../items_images/'.$name_file);
	}
	else
		$name_file = 'default.jpg';

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
		$prepare = $pdo->prepare('INSERT INTO items (name, description, price, stock_number, tags, user_modification, image_path) VALUES (:name, :description, :price, :stock_number, :tags, :user_modification, :image_path)');
		
		$prepare->bindValue('name', $name);
		$prepare->bindValue('description', $description);
		$prepare->bindValue('price', $price);
		$prepare->bindValue('stock_number', $stock_number);
		$prepare->bindValue('tags', $tags);
		$prepare->bindValue('user_modification', $user_modification);
		$prepare->bindValue('image_path', $name_file);

		$prepare->execute();

	}
	else
	{
		echo '<pre>';
		print_r($error_messages);
		echo '</pre>';
	}
}
