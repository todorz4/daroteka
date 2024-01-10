<?php
include 'conn/connection.php';

function dohvatiKorisnika($kor_ime,$lozinka){
global $conn;
$upit=$conn->query("SELECT * FROM korisnik where korisnicko_ime='$kor_ime' and lozinka='$lozinka'");
$podaci=$upit->fetch();
return $podaci;
}


?>