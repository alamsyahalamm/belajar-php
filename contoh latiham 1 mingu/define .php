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
//  $fungsi = "ini adalah cetakan hasil fungsi const dari fungsi ";
 define ("fungsi", "ini adalah cetakan hasil fungsi const dari fungsi" );
 echo fungsi;

echo "<br>";
 // define constanta Array
 define ("arrayKelas", ["kelas x", "kelas xi", "kelas xii"]);
 echo "saya adalah" . arrayKelas [0];

echo "<br>";
//define cons function global
define ("name", "merupakan contoh global fungsi defenis");
function fungsi() 
{
    echo name;
}
fungsi ();
// jika kita ining memengil kita harus mengganti fungsi dengan apayang kita butuhkan
    ?>
</body>
</html>