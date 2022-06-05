<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    <h2>Isi Data:</h2>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $als    = $_POST['alas'];
        $tg     = $_POST['tinggi'];

        // menghitung luas segitiga
        $ls_sgt = 1 / 2 * $als * $tg;

        echo "Diketahui:<br />";
        echo "Alas segitiga = $als<br />";
        echo "Tinggi segitiga = $tg<br />";
        echo "Luas segitiga adalah 1/2 alas x tinggi = $ls_sgt";
    }
    ?>
</body>
</html>