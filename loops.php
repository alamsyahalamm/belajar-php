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
    // perulangan
    for ($awal = 1;  $awal <= 10; $awal++){
        echo "nilai:" . $awal. "<br>";
    }
    
    echo "<br>";
    // for if 
    for ($awal = 1; ; $awal++) {
        if ($awal > 10) {
            break;
        }
        echo $awal; "<br>";
    }
    echo "<br>";

    for ($awal = 1, $j = 0; $awal <= 10; $awal += $awal, print $awal, $awal++);

    echo "<br>";
    //while
    $while = 1;
while ($while <= 10) {
    echo $while++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}
echo "<br>";

// do while
$i = 0;
do {
    echo $i. "";
    $i++;
} while ($i <= 10);

echo "<br>";
$arrayTeman = array("kelas x", "kelas xi", "kelas xii", "kelas galulus" );
foreach ($arrayTeman as $array) {
   echo $array ."<br>";
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
    ?>
</body>
</html>