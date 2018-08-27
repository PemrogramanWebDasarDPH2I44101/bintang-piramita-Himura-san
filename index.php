<form method="post">
    Masukkan Angka : <br>
    <input type="number" name="angka">

    <input type="submit">
</form>
<?php
    error_reporting(0);
    $angka = $_POST['angka'];

    for ($i = $angka; $i > 0 ; $i--) { 
        for ($j = $i; $j > 0 ; $j--) { 
            echo "*";
        }
        echo "<br>";
    }
?>
