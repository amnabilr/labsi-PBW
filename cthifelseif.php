<!-- Kondisi If Else If -->
<?php
    $nilai = 19;
    if ($nilai > 90) {
        $grade = "A+";
    } elseif($nilai > 80){
        $grade = "A";
    } elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai > 60){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } 
     $grade = "F";{
    }
    echo "<h2> Nilai anda: $nilai<br> </h2>";
    echo "<h2> Grade: $grade </h2>";
?>
