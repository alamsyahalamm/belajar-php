<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP</title>
</head>
<body>
    <?php
  $kalimatString = "Saat ini sudah belajar laravel";
  $cari = "/sudah/";
  $gantikan = "belum";
  echo preg_replace($cari, $gantikan, $kalimatStrig);
  //ini pencobaan 2
  echo preg_replace("/sudah/", "belum", "karakter spongebob sudag selesai");
    ?>
</body>
</html>