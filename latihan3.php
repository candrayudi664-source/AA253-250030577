<!DOCTYPE html>
<html>
    <body>
        <?php
        echo " Nama Mahasiswa : <br>";

        $nama =  array ("Andi", "Budi", "Citra", "Dika", "Eka", "Cokde");

        foreach ($nama as $nomber => $orang ) {
        echo ($nomber + 1) . "." .$orang . "<br>";
        }
        ?>
    </body>
</html>