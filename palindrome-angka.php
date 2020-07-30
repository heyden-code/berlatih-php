<?php

function palbool($bool) {
	$output = false;
	if (strrev($bool) == $bool) {
		$output = true;
	}
	return $output;
}

function palindrome_angka($angka) {
  // tulis kode di sini
	if($angka <= 9){
		$angka++;
		return $angka;
	}else {
		while(palbool($angka) == false) {
			$angka++;
		}
		echo "<br>";
		return $angka;
	}
}
// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>