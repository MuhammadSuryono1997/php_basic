<?php 
	for ($i=1; $i <= 110 ; $i++) 
	{ 
		if ($i % 2 == 0) 
		{
			if ($i % 100 == 0) 
			{
				echo $i.". Genap Kelipatan Seratus\n";
			}
			elseif ($i % 5 == 0) 
			{
				echo $i.". Genap Kelipatan Lima\n";
			}
			else
			{
				echo $i.". Genap\n";
			}
			
		}
		elseif ($i % 2 == 1) 
		{
			if ($i % 5 == 0) 
			{
				echo $i.". Ganjil Kelipatan Lima\n";
			}
			else
			{
				echo $i.". Ganjil\n";
			}
		}
	}

 ?>