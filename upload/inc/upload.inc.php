<?php 
	//check submit
	if (isset($_POST['submit'])) {
		// get all data infomation of file
		// Save value into variable
		
		$file_name = $_FILES['file_upload']['name'];
		$file_type = $_FILES['file_upload']['type'];
		$file_tmp_name = $_FILES['file_upload']['tmp_name'];
		$file_error = $_FILES['file_upload']['error'];
		$file_size = $_FILES['file_upload']['size'];
		//Get extension of file take into array
		$file_extension = explode('.', $file_name);
		// Get name of extension
		$file_actual_extension = strtolower(end($file_extension));
		// echo $file_actual_extension;

		// check errors
		$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

		// check has exists values of extension
		if (in_array($file_actual_extension, $allowed)) {
			if ($file_error === 0) {
				if ($file_size < 100000) {
					$file_new_name = uniqid('', true) . '.' . $file_actual_extension;
					$file_destination = '../img/' . $file_new_name;
					move_uploaded_file($file_tmp_name, $file_destination);

					header("Location: ../index.php?upload=ok");
					exit();
				}else {
					header("Location: ../index.php?upload=big_file");
					exit();
				}
			}else {
				header("Location: ../index.php?upload=has_error_uploading");
				exit();
			}
		}else {
			header("Location: ../index.php?upload=error_extension");
			exit();
		}
	}else {
		header("Location: ../index.php?upload=error");
		exit();
	}
 ?>