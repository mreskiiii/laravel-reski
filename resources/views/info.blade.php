<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
</head>
<body>
    <h1>Saya adalah Mahasiswa Program Studi:
        <?php
        if($progdi=="TI")
            echo "Teknik Informatika";
        elseif($progdi=="SI")
            echo "Sistem Informasi";
        elseif($progdi=="IK")
            echo "Ilmu Komputer";
        else
            echo "Tidak ada Progdi tersebut di Fakultas TIK"
        ?>
    </h1>
</body>
</html>