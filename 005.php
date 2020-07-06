<?php 
	$data_1 = ["grape","apple","orange","guava"];
	$data_2 = ["watermelon","apple","orange","strawberry"];
	$new_data = array_merge($data_1, $data_2);
	$new_data = array_unique($new_data);
	sort($new_data);

	print_r($new_data);

 ?>