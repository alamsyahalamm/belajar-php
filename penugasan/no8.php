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
   $stringTunggal = "nabil, zaldi , alam, hamidzan";
  $explode = explode (",",$stringTunggal);
   print_r ($explode);
   //no2
   $stringTunggal = "html-css-javacript-php";
   $explode = explode ("-",$stringTunggal);
    print_r ($explode);
   
    ?>
</body>
</html>