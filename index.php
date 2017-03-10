<?php

include 'config.php';
if (!empty($_GET['q']))
{
	$q = $_GET['q'];

	if($q === '')
	{
	    $page = 'home';
	}
	else if($q === 'dashboard')
	{
	    $page = 'dashboard';
	}
	else if($q === 'home')
	{
	    $page = 'home';
	}
	else
	{
	    $page = '404';
	}
}
else
{
	$page = 'home';
}


include 'assets/pages/'.$page.'.php';