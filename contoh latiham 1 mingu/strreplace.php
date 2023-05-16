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
   $karakter = "belajar PHP mengunakan karakter()";
   echo "Karakter sebelum di ubah : " . $karakter;
   echo "karakter setelah di ubah : " . str_replace ($karakter, "strlen", "str_replace");
    ?>
</body>
</html>