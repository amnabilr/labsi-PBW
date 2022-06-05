<!-- program for dengan decrement -->
<?php
    for ($a = 5; $a >= 1; $a--) { //menentukan variabel $a dan inisialisasi nilai awal $a >=1
        for ($b = $a; $b >= 1; $b--) {  //menentukan variabel $b = $a, apabila variabel $b >=1 
            echo $b; //mencetak variabel b
        }
        echo "<br>"; //mencetak baris baru
    }
?>