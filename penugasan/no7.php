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
   $arrayTampung = array("bintang", "arya" , "arif", "syahru");
   $simplode = implode ("/", $arrayTampung);
   echo $simplode;
   
   //no2
   echo "\n";
   $arrayTampung1 = array("html", "css" , "javascript", "php");
   $simplode = implode ("-", $arrayTampung1);
   echo $simplode;
   
   
    ?>
</body>
</html>