<title>Soal Nomor 1</title>
<?php

// Jawaban Soal nomor 1 Tipe C

// Function Biodata
function Biodata(){	
		$Biodata = array(
			"name" => "Hasanal Bulkiah",
			"address" => "Jl. Rawakuning, Gg. Mekar Batas",
			"hobbies" => array("Anime", "Gaming", "Coding", "Sleep"),
			"is_married" => FALSE,
			"school" => array(
				"highSchool" => "SMA Toha Praktika Sumenep",
				"University" => "-"
				),
			"skills" => array(
				array(
					"name" => "PHP",
					"score" => 3
				),
				array(
					"name" => "BASH Script",
					"score" => 4
				),
				array(
					"name" => "Microsoft Office",
					"score" => 3
				)
			)
		);
		$encode = json_encode($Biodata, true);
		echo $encode;
	}

// Menjalankan Function
Biodata();