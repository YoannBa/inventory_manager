<?php

$error_messages = array();

if (!empty($_POST) && $_POST['form'] == 'login')
{
	
	//Get datas from form
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Check datas
	if(!isset($username))
		$error_messages['username'] = 'Missing Value';

	if(!isset($password))
		$error_messages['password'] = 'Missing Value';

	//Upload to db
	if (empty($error_messages))
	{
		$query = $pdo->query('SELECT password FROM users WHERE name = "'.$username.'"');
		$pass_bdd = $query->fetchAll();

		$password = hash('sha256', $password);

		if(empty($pass_bdd))
		{
			$error_messages['username'] = 'This user doesn\'t exist';
		}
		else
		{
			if ($pass_bdd[0]->password == $password)
			{
				$_SESSION['username'] = $username;

				header('Location: dashboard');
			}
			else
			{
				$error_messages['password'] = 'Password incorrect';
			}
		}
	}
}