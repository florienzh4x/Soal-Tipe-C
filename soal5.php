<title>Soal Nomor 5</title>
<?php

function hitungParkir($LamaWaktu){
	// $biaya = 2000;
	if ($LamaWaktu <= 2) {
		$biaya = $LamaWaktu * 2000;
		echo "Biaya parkir untuk $LamaWaktu Jam = $biaya<br>";
	}
	if ($LamaWaktu == 3) {
		$biaya = $LamaWaktu * 1000 + 2000;
		echo "Biaya parkir untuk $LamaWaktu Jam = $biaya<br>";
	}
	if ($LamaWaktu > 3 && $LamaWaktu < 10) {
		$biaya = $LamaWaktu * 1000;
		echo "Biaya parkir untuk $LamaWaktu Jam = $biaya<br>";
	}
	if ($LamaWaktu >= 10) {
		$biaya = 10000;
		echo "Biaya parkir untuk $LamaWaktu Jam = $biaya (Biaya Maksimal 10000)<br>";
	}
}

hitungParkir(1);
hitungParkir(3);
hitungParkir(10);
