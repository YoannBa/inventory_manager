<?php


$error_messages = array();

if (!empty($_POST) && $_POST['form'] == 'login')
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!isset($username))
		$error_messages['username'] = 'Missing Value';

	if(!isset($password))
		$error_messages['password'] = 'Missing Value';

	if (empty($error_messages))
	{
		$query = $pdo->query('SELECT password FROM users WHERE name = "'.$username.'"');
		$pass_bdd = $query->fetchAll();

		$password = hash('sha256', $password);

		if(empty($pass_bdd))
		{
			echo '<pre>';
			print_r('Cette utilisateur n\'existe pas');
			echo '</pre>';
		}
		else
		{
			if ($pass_bdd[0]->password == $password)
			{
				$_SESSION['username'] = $username;

				header('Location: assets/pages/dashboard.php');
			}
			else
			{
				echo '<pre>';
				print_r('Mot de passe incorrect');
				echo '</pre>';
			}
		}
	}
	else
	{
		echo '<pre>';
		print_r($error_messages);
		echo '</pre>';
	}

}