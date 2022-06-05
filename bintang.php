<!-- Program Piramida Bintang -->
<?php
    $a = 6;
    for ($ez = $a; $ez > 0; $ez--) {
        for ($i = 1; $i <= $ez; $i++) {
            echo "&nbsp";
        }
        for ($ez1 = $a; $ez1 >= $ez; $ez1--) {
            echo "*";
        }
        echo "<br>";
    }
?>