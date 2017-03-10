<?php

if(!empty($_POST) && $_POST['form'] == 'export')
{
	$array = array(array('id', 'name', 'description', 'price', 'number in stock', 'tags', 'last modification user', 'last modification date'));

	$query = $pdo->query('SELECT * FROM items');
	$items = $query->fetchAll();

	foreach($items as $_item)
	{
		$second_array = array (
			$_item -> id,
			$_item -> name,
			$_item -> description,
			$_item -> price,
			$_item -> stock_number,
			$_item -> tags,
			$_item -> user_modification,
			$_item -> date_modification,
		);

		array_push($array, $second_array);
	}

	function array2csv(array &$array)
	{
	   if (count($array) == 0) {
	     return null;
	   }
	   ob_start();
	   $df = fopen("php://output", 'w');
	   fputcsv($df, array_keys(reset($array)));
	   foreach ($array as $row) {
	      fputcsv($df, $row);
	   }
	   fclose($df);
	   return ob_get_clean();
	}

	function download_send_headers($filename) {
	    $now = gmdate("D, d M Y H:i:s");
	    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
	    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
	    header("Last-Modified: {$now} GMT");

	    header("Content-Type: application/force-download");
	    header("Content-Type: application/octet-stream");
	    header("Content-Type: application/download");

	    header("Content-Disposition: attachment;filename={$filename}");
	    header("Content-Transfer-Encoding: binary");
	}

	download_send_headers("data_export_" . date("Y-m-d") . ".csv");
	echo array2csv($array);
	die();

}