<?php 
	for ($i=1990; $i <= 2020 ; $i++) { 
		if ($i % 400 == 0 or $i % 100 == 0 or $i % 4 == 0 ) 
		{
			echo $i." Tahun kabisat\n";
		}else{
			echo $i." Bukan Tahun kabisat\n";
		}
	}

 ?>