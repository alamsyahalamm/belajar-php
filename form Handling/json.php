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
    // json encode
    $kelas = array(
        //'key' => 'velue'
        'x' => 'kelas x',
        'xi' => 'kelas xi',
        'xii' => 'kelas xii',
        'xiv' => 'kelas xiv',

    );
    // echo json_encode($kelas['x']);
foreach ($kelas as $array) {
   echo $array ."<br>";
}

echo "<br>";
$kelasDecode = '{"x" : "angka 1", "xi":2, "xii":3}';
var_dump(json_encode($kelasDecode));
$object = json_encode($kelasDecode);
// print $object -> {'x'}
    ?> 

</body>
</html>