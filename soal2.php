<title>Soal Nomor 2</title>
<?php

function isPasswordValid($password){
	return strlen($password) >= 8 && !preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password) && !preg_match('/[[:punct:]]/', $password);
}

$pass = 'hasanal123';
if(isPasswordValid($pass)){
	echo $pass." => Password Valid";
} else {
	echo $pass." => Password Tidak Valid";
}