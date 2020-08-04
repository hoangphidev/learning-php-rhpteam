<?php 
	$data = array();
	$data2 = "Hello";
	$data[] = "Phi";

	array_push($data, $data2);
	echo $data[0];
	print_r($data);

	// Index array - mảng đánh theo kiểu số
	$arr_index = array("Phi", "Hoang", "Mr");
	echo $arr_index[0];
	// Associative - mảng được đính key cụ thể
	$arr_assoc = array(
		"ho" => "Hoang",
		"ten" => "Phi",
		"sdt" => "0989324221"
	);
	echo $arr_assoc['ho'];
	// Multidimensional arrays
	$arr_multi = array(
		array(
			"Frog",
			"Dog"
		)
	);
 ?>