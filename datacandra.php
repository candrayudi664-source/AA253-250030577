<!DOCTYPE html>
<html>
    <body>
        <?php
        $nim = 250030577;
        $nama = "I Putu Agus Candra Yudi Putra";
        $kodejurusan = 57201;
        $angkatan = 2025;
        $umur = 20;
        $gender = "Laki-Laki";
        $hobi = array("bersepeda","bermain volly","main game");

        echo "Nim Mahasiswa : $nim" . "<br>";
        echo "Nama Mahasiswa : $nama" . "<br>";
        echo "Kode Jurusan : $kodejurusan" . "<br>";
        echo "Angkatan : $angkatan " . "<br>";
        echo "Umur : $umur" . "<br>";
        echo "Gender : $gender" . "<br>";
        echo "Hobi : " . $hobi[0] . "," . $hobi[1] . "," . $hobi[2];
        ?>
    </body>
</html>