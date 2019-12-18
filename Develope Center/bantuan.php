<?php

$myObj = new \stdClass();
$myObj->name = 'E-Book adalah layanan baca buku digital yang memberi akses kepada anggota untuk meminjam dan membaca buku dari berbagai genre seperti art,musik,religi,recipes,fantasy,romance,science, biography yang digunakan untuk kebutuhan internal maupun publik yang dapat diakses melalui website E-Book ini.';
$myJSON = json_encode($myObj->name);
echo $myJSON;