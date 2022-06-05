<?php

    // bikin deklarasi dulu
    $tahun = "2010";
    // bikin kondisi setiap variabelnya
    $genX = $tahun >= "1965" && $tahun <="1980";
    $genM = $tahun >= "1981" && $tahun <= "1996";
    $genZ = $tahun >= "1995" && $tahun <= "2010";
    // menggunakan kondisi switch
    switch($tahun)
    {
    case $genX: // memanggil variabel generasi x
    echo "Termasuk generasi X"; //mencetak outputnya
    break;//menghentikan program jika sudah sesuai
    
    case $genM: // memanggil variabel milenial
    echo "Termasuk generasi Millenial"; // mencetak outputnya
    break;//mengehentikan program jika sudah sesuai
    
    case $genZ: //memanggil variabel generasi Z
    echo "Termasuk generasi Z"; //mencetak outputnya
    break;//menghentikan program jika sudah sesuai
    
    // membuat default, jika variabel tahunnya tidak sesuai kondisi sebelumnya

    default:
    echo "Eror"; //menampilkan 3
    }
?>