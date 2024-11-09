<?php

// Tangkap variabel dari form
$npm = $_POST["npm"];
$name = $_POST["nama"];
$klm = $_POST["gridRadios"];
$jrs = $_POST["jurusan"];
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) + ($vtc * 0.5);

//Tampilkan datanya
echo "NPM           : $npm <br>";
echo "Nama          : $name <br>";
echo "Kelamin       : $klm <br>";
echo "Jurusan       : $jrs <br>";
echo "Nilai Tugas   : $vta <br>";
echo "Nilai UTS      : $vtb <br>";
echo "Nilai UAS      : $vtc <br>";
echo "Total NILAI    : $vtd <br>";

if ($vtd >= 90)
    echo "Anda Mendapatkan Nilai A";
elseif ($vtd >= 80)
    echo "Anda Mendapatkan Nilai B";
elseif ($vtd >= 60)
    echo "Anda Mendapatkan Nilai C";
else
    echo "Anda Mendapatkan Nilai D";
echo "<br>";

// File json yang akan dibaca
$file = "krs2.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data[] = array(

    'npm' => "$npm",
    'nama' => "$name",
    'kelamin' => "$klm",
    'jurusan' => "$jrs",
    'tugas' => "$vta",
    'uts' => "$vtb",
    'uas' => "$vtc",
    'nilai' => "$vtd",


);

$konten = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan konten di file
file_put_contents($file, $konten);

//menampilkan data
foreach ($data as $key => $value) {
    echo "<br>";
    echo "<hr>";
    echo "NPM :" . $value['npm'] . '<br>';
    echo "Nama :" . $value['nama'] . '<br>';
    echo "Kelamin :" . $value['kelamin'] . '<br>';
    echo "Jurusan :" . $value['jurusan'] . '<br>';
    echo "Tugas :" . $value['tugas'] . '<br>';
    echo "UTS :" . $value['uts'] . '<br>';
    echo "UAS :" . $value['uas'] . '<br>';
    echo "Nilai :" . $value['nilai'] . '<br>';
    echo "<hr>";
}
?>