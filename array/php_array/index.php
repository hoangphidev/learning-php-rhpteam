<?php 
	include_once 'inc/db.inc.php';

	$sql = "select * from dulieu";
	$result = mysqli_query($conn, $sql);
	$data = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		    $data[] = $row; // array_push($data, $row);
		}
		
		// echo "<pre>";
		// var_dump($data);
		// echo json_encode($data);
		// echo "<pre>";
		
		foreach ($data as $item) {
			echo $item['text']."<br>";
		}
		
	}
 ?>