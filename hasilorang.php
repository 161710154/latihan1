<?php

require_once 'orang.php';

$orang = new orang('Sheila' , 'Bandung' , 'XI RPL 1' , 'Mahasiswa');
$orang1 = new orang('Laela' , 'Lampung' , 'XI RPL 2' , 'Berpacaran');
$orang2 = new orang('Kilay' , 'Tangerang' , 'XII RPL 1' , 'Single');
$orang3 = new orang('Wenti' , 'Pangalengan' , 'XI RPL 3' , 'Pelajar');
$orang4 = new orang('Pawit' , 'Bekasi' , 'X RPL 2' , 'Pelajar');
echo "1.";
echo "Nama: " .$orang->get_nama();
echo "<br>";
echo "&nbsp &nbspTempat Lahir: " .$orang->get_tempatlahir();
echo "<br>";
echo "&nbsp &nbspKelas: " .$orang->get_kelas();
echo "<br>";
echo "&nbsp &nbspStatus: " .$orang->get_status();
echo "<br>";
echo "<br>";

echo "2.";
echo "Nama: " .$orang1->get_nama();
echo "<br>";
echo "&nbsp &nbspTempat Lahir: " .$orang1->get_tempatlahir();
echo "<br>";
echo "&nbsp &nbspKelas: " .$orang1->get_kelas();
echo "<br>";
echo "&nbsp &nbspStatus: " .$orang1->get_status();
echo "<br>";
echo "<br>";

echo "3.";
echo "Nama: " .$orang2->get_nama();
echo "<br>";
echo "&nbsp &nbspTempat Lahir: " .$orang2->get_tempatlahir();
echo "<br>";
echo "&nbsp &nbspKelas: " .$orang2->get_kelas();
echo "<br>";
echo "&nbsp &nbspStatus: " .$orang2->get_status();
echo "<br>";
echo "<br>";

echo "4.";
echo "Nama: " .$orang3->get_nama();
echo "<br>";
echo "&nbsp &nbspTempat Lahir: " .$orang3->get_tempatlahir();
echo "<br>";
echo "&nbsp &nbspKelas: " .$orang3->get_kelas();
echo "<br>";
echo "&nbsp &nbspStatus: " .$orang3->get_status();
echo "<br>";
echo "<br>";

echo "5.";
echo "Nama: " .$orang4->get_nama();
echo "<br>";
echo "&nbsp &nbspTempat Lahir: " .$orang4->get_tempatlahir();
echo "<br>";
echo "&nbsp &nbspKelas: " .$orang4->get_kelas();
echo "<br>";
echo "&nbsp &nbspStatus: " .$orang4->get_status();
echo "<br>";
echo "<br>";
?>