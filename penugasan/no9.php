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
  $kalimatString = "Aku sedang berada pada materi string preg_match().";
  $cari = "/preg_match/";
  $gantikan = "preg_replace";
  echo preg_replace($cari, $gantikan, $kalimatString);
  //ini pencobaan 2
  echo preg_replace("/javascript/", "php", "karakter spongebob sudag selesai");
    ?>
</body>
</html>