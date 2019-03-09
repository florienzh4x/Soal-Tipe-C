<title>Soal Nomor 4</title>
<?php

function hitungKembalian($belanjaan, $pembayaran){
	$stok_uang = array(50000 => 'Rp. 50.000', 20000 => 'Rp. 20.000', 10000 => 'Rp. 10.000', 5000 => 'Rp. 5.000', 2000 => 'Rp. 2.000', 1000 => 'Rp. 1.000', 500 => 'Rp. 500');
	// pengurangan
	$jumlah_kembalian = $pembayaran - $belanjaan;

	$output = array();
	$number = 0;
	if ($jumlah_kembalian > 0) {
		echo "Kembalian Anda : <br>";
		foreach ($stok_uang as $stok_kembalian => $kembalian) {
			// mengecek value $jumlah_kembalian diatas array $stok_kembalian
			if ($jumlah_kembalian >= $stok_kembalian) {
				while ($jumlah_kembalian >= $stok_kembalian) {
					$output[$number] += 1;
					$jumlah_kembalian -= $stok_kembalian;
				}
				$hasil = (is_array($kembalian) ? $kembalian[0] : $kembalian);
				$output[$number] = $output[$number]." Lembar : ".$hasil;
				echo $output[$number]."<br>";
				$number++;
			}
		}
	} elseif ($jumlah_kembalian < 0){
		echo "Pembayaran Anda kurang ".str_replace("-", "", $jumlah_kembalian);
	} else {
		echo "Anda membayar dengan uang pas, Tidak Ada Kembalian!";
	}
}


$jumlah_belanja = 15500;
$jumlah_uang = 50000;

hitungKembalian($jumlah_belanja, $jumlah_uang);