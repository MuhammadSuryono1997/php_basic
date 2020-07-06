<?php 
$numbers = [3,1,4,5,6,8];
$total_min = array_sum($numbers) - min($numbers);
$total_max = array_sum($numbers) - max($numbers);
echo "Sum data array tanpa bilangan terkecil adalah ".$total_min."\n";
echo "Sum data array tanpa bilangan terkecil adalah ".$total_max."\n";
 ?>