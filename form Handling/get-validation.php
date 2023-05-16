<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
     content="IE=edge">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <title>PHP FORM HADLING</title>
</head>
<body>
     <?php
     $namaLengkap = "";
     $kelas = '';

     if($_SERVER["REQUEST_METHOD"] === "POST")
     {
        $namaLengkap = dataType($_POST['namaLengkap']);
       $kelas = dataType($_POST['kelas']);
     } 
        function dataType($datakelas)
     {
        $inputData = trim ($datakelas);
        $inputData = stripslashes ($datakelas);
        $inputData = htmlspecialchars ($datakelas);
        return $inputData;
     }
     ?>
     <form action = "<? echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <div style="margin-bottom: 3px;">
        <label for ="username">Username</label>
        <input type ="text" id ="username" name ="namaLengkap" placeholder
         = "masukan nama anda"  />
    </div>
    <div style="margin-bottom: 3px;">
        <label for ="Kelas">Kelas</label>
        <input type ="number" id ="Kelas" name ="Kelas" placeholder
         = "masukan nama anda"  />
    </div>
    <input type="submit" value="Simpan nama">

    <?php
    echo "<br>";
    echo "Nama Lengkap saya" . $namaLengkap;
    echo "<br>";
    echo "Kelas saya" . $kelas;
    ?>
    
</form>
</body>
</html>