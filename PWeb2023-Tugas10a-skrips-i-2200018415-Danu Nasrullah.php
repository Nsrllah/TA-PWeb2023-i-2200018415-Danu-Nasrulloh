<?php
	$nilai = 58;

	echo "Nilai Anda adalah 58 apakah lulus atau tidak <br>"; 

	if($nilai <40 ){
		echo "Nilai Anda $nilai (E), Anda Tidak lulus";
	}
	if($nilai >=40 && $nilai <46){
		echo "Nilai Anda $nilai (D), Anda Tidak lulus";
	}
	if($nilai >=46 && $nilai <53){
		echo "Nilai Anda $nilai (D+), Anda Tidak lulus";
	}
	if($nilai >=53 && $nilai <60){
		echo "Nilai Anda $nilai (C-), Anda Tidak lulus";
	}
	if($nilai >=60 && $nilai <69){
		echo "Nilai Anda $nilai (C+), Anda lulus";
	}
	if($nilai >=69 && $nilai <75){
		echo "Nilai Anda $nilai (B-), Anda lulus";
	}
	if($nilai >=75.5 && $nilai <80){
		echo "Nilai Anda $nilai (B),  Anda lulus";
	}
	if($nilai >=80 && $nilai <86){
		echo "Nilai Anda $nilai (B+), Anda lulus";
	}
	if($nilai >=86 && $nilai <91){
		echo "Nilai Anda $nilai (A-), Anda lulus";
	}
	if($nilai >=91 && $nilai =100){
		echo "Nilai Anda $nilai (A),  Anda lulus";
	}
?>