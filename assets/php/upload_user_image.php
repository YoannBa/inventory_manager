<?php

//Variables
$error_messages 		= array();
$allowed_extensions 	= array('jpg', 'jpeg', 'png', 'gif');

//Get datas from db
$query = $pdo->query('SELECT id FROM users WHERE name="' . $_SESSION['username'] . '"');
$session_id = $query->fetchAll();

//Upload image
if (!empty($_POST) && $_POST['form'] == 'image-upload')
{
	if (!empty($_FILES))
	{

		if ($_FILES['image']['error'] > 0)
			$error_messages['upload'] = 'Something went wrong !';

		$extension = strtolower(substr(strrchr($_FILES['image']['name'], '.') ,1));
		
		if (!in_array($extension, $allowed_extensions))
			$error_messages['extension'] = 'Wrong extension';

		if(empty($error_messages))
		{
			$name_file = 'user-'.$session_id[0] -> id.'.'.$extension;
			$result = move_uploaded_file($_FILES['image']['tmp_name'], 'assets/users_images/'.$name_file);

			$exec = $pdo->exec('UPDATE users SET photo_path = "'.$name_file.'" WHERE id = '.$session_id[0] -> id);
		}

	}
	else
		$error_messages['upload'] = 'Nothing was uploaded';

}