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
     // back to null
     $namaLengkap = '';
     $kelas = '';

     // message error requiret
     $namaLengkapError = '';
     $kelasError = '';
        function dataType($datakelas)
     {
        $inputData = trim ($datakelas);
        $inputData = stripslashes ($datakelas);
        $inputData = htmlspecialchars ($datakelas);
        return $inputData;
     }
     if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST['namaLengkap'])){
            $namaLengkapError = "Nama lengkap tidak boleh kosong!";
           }else{
            $namaLengkap = dataType($_POST['namaLengkap']);
           }
           if(empty($_POST['kelas'])){
             $kelasError = " kelas tidak boleh kosong!";
           }else{
            $kelas = dataType($_POST['kelas']);
           }
     }
     ?>

     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<div style="margin-bottom: 3px;">  
    <label for ="nama">namaLengkap</label>
    <input type="text" id="namaLengkap" name ="namaLengkap" placeholder= "masukan nama anda" >
    <span style="color:red; font-size:12px"><?php echo $namaLengkapError; ?></span>
</div>
<div style="margin-bottom: 3px;">
        <label for ="Kelas">Kelas</label>
        <input type ="number" id ="Kelas" name ="kelas" placeholder= "masukan kls anda"  />
        <span style="color:red; font-size:10px"><?php echo $kelasError; ?></span>   
</div>
<button type="submit">simpan</button>
</form>
<?php
echo "nama saya adalah " .$namaLengkap;
echo "<br>";
echo "kels saya saat ini " .$kelas;
?>
<?php echo "today is" . date ("d M Y"); ?>
<?php include  ' ./include';?>
<?php include './form/include.php';?>

</body>
</html>