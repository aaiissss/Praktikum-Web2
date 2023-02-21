<?php
//Buat Array
$animals = ["kucing", "ayam", "ikan", "burung"];
//tampilin kucing
echo $animals [0] . "<br>";
echo $animals [3] . "<br>";

// looping Aray
foreach ($animals as $animals){
    echo $animals . "<br>";
}

echo "<br>";
//buat aray associatif
$mahasiswa = ["Nama"=>"Ais", "Umur"=>19, "Alamat"=>"Depok"];

echo $mahasiswa ["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";
// Buat array multidimensi

$dosen = [
    ["Pak  Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["pak Lukman", "OS"]
];

echo $dosen [0][1];

echo "<br>";

foreach ($dosen as $dsn){
    echo "Nama Dosen : " . $dsn [0];
    echo "Matkul : " . $dsn [1];
    echo "<br>";
}

?>
