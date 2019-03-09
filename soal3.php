<!DOCTYPE html>
<html>
<head>
	<title>Soal Nomor 3</title>
</head>
<body>
<div style="font:20px courier new;letter-spacing: 7px;line-height:1.5;">
<?php
function drawImage($value){
	// membagi 2 value 
	// pembagian_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
	$pembagian 	 = floor($value / 2);
	$pembagian_var = $pembagian;
	$char1 		 = '=';
	$char2 		 = '@';

	// loop baris
	for ($row = 1; $row <= $value; $row++){
		// loop kolom
		for ($kolom = 1; $kolom <= $value; $kolom++)
		{
			$chars = $kolom > $pembagian_var && $kolom <= ($value - $pembagian_var) ? $char2 : $char1;
			echo $chars." ";	
		}
		$row <= $pembagian ? $pembagian_var-- : $pembagian_var++;	
		echo '<br/>';
	}
}

/** 
	$paramzzzz merupakan jumlah karakter vertikal dan horizontal menggunakan angka ganjil
*/

$paramzzzz = 7;

// pengecekan angka ganjil di $paramzzzz 
// jika ganjil akan menjalankan fungsi drawImage
$odd = ($paramzzzz % 2 != 0);
if ($odd) {
	drawImage($paramzzzz);
} else {
	echo "Panjang vertikal dan horizontal harus ganjil";
}

?>
</div>
</body>
</html>
