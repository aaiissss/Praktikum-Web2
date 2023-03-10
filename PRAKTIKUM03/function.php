<?php 
// buat fungsi
function hitungUmur($thn_lahir){
    //Code fungsi
    $thn_sekarang = 2023;
    //Hitung Umur
    $umur = $thn_sekarang - $thn_lahir;
    //kembaliin umur
    return $umur;
}

//panggil Fungsi
echo "umur saya adalah " . hitungUmur(2003);
?>