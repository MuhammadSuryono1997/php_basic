<?php 
$products = array("grape"=>"fruit", "apple"=>"fruit", "spinach"=>"vegetable", "eggplant"=>"vegetable");
$category = array();
$key = array_keys($products);
$data = array();

foreach ($products as $datas) {
	array_push($category, $datas);
}
$category = array_unique($category);


foreach ($products as $key => $value) {
	foreach ($category as $kategori) {
		if ($value == $kategori) {
			$data[$kategori][] = $key;
		}
	}
}
print_r($data);
 ?>