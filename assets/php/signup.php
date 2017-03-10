<?php

if (!empty($_POST) && $_POST['form'] == 'signup')
{
	
	$username = $_POST['username'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm-pass'];

	if(!isset($username))
		$error_messages['username'] = 'Missing Value';

	if(!isset($mail))
		$error_messages['mail'] = 'Missing Value';

	if(!isset($password))
		$error_messages['password'] = 'Missing Value';

	if(!isset($confirm_password))
		$error_messages['confirm_password'] = 'Missing Value';

	if($confirm_password != $password)
		$error_messages['confirm_password'] = 'Not the same password';

	if (empty($error_messages))
	{
		$prepare = $pdo->prepare('INSERT INTO users (name, password, email, photo_path) VALUES (:name, :password, :email, :photo_path)');

		$password = hash('sha256', $password);

		$prepare->bindValue('name', $username);
		$prepare->bindValue('password', $password);
		$prepare->bindValue('email', $mail);
		$prepare->bindValue('photo_path', 'default.png');

		$prepare->execute();

	}
	else
	{
		echo '<pre>';
		print_r($error_messages);
		echo '</pre>';
	}

}