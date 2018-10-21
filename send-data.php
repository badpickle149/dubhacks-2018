<?php
include_once("cec-utilities.php");

$db = dbInit();

$err_upTmpName = "course_data.csv";
$row = 0;

if (($handle = fopen($err_upTmpName, "r")) !== FALSE) {

  while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

		if($row == 0){
			$row++;
		} else {

			// $data[0] = first name; $data[1] = last name; $data[2] = email; $data[3] = phone - remember to change to appropriate fields
			/*********************************************************************************************************************/
			if(!empty($data[0]) && !empty($data[1]) && !empty($data[2]) && !empty($data[3]) && !empty($data[4]) && !empty($data[5])) {
        
      }

		}

	}

} else {

	echo 'File could not be opened.';
}

fclose($handle);



 ?>
