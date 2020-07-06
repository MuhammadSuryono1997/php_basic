<?php 
	$data = range(1,30);


	foreach ($data as $datas) {
		if ($datas % 2 == 0) 
		{
			if ($datas >= 5 and $datas <= 10) {
				echo $datas." Imperio \n";
			}elseif ($datas >= 20) {
				echo $datas." Crucio \n";
			}else{
				echo $datas." Genap \n";
			}
		}elseif($datas % 2 == 1){
			echo $datas." Ganjil \n";
		}
	}
 ?>