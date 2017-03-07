<?php


$error_messages = array();

if (!empty($_POST))
{

	if ($_POST['form'] == 'login')
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
					session_start();
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

	else if ($_POST['form'] == 'signup')
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
			$prepare = $pdo->prepare('INSERT INTO users (name, password, email) VALUES (:name, :password, :email)');

			$password = hash('sha256', $password);

			$prepare->bindValue('name', $username);
			$prepare->bindValue('password', $password);
			$prepare->bindValue('email', $mail);

			$prepare->execute();

		}
		else
		{
			echo '<pre>';
			print_r($error_messages);
			echo '</pre>';
		}

	}



}