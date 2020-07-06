<?php 
	$usia = 13;

	switch ($usia) {
		case $usia >= 21:
			echo "Dewasa";
			break;
		case $usia >= 13:
			echo "Remaja";
			break;
		case $usia >= 9:
			echo "Bimbingan Orang Tua";
			break;
		case $usia < 9:
			echo "Semua Usia";
			break;
		
		default:
			echo "Apakah anda memasukkan usia ?";
			break;
	}
 ?>