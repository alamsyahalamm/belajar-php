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


     if($_SERVER["REQUEST_METHOD"] === "POST")
     {
  
       if(empty($_POST['namaLengkap'])){
        $namaLengkapError = "Nama lengkap tidak boleh kosong, harus diisikan.";
       }else{
        $namaLengkap = ($_POST['namaLengkap.']);
       }
       if(empty($_POST['kelas'])){
        $kelasError = "Nama kelas tidak boleh kosong, harus diisikan.";
       }else{
        $kelas =( $_POST['kelas']);
       }
     } 
        function dataType($datakelas)
     {
        $inputData = trim ($datakelas);
        $inputData = stripslashes ($datakelas);
        $inputData = htmlspecialchars ($datakelas);
        return $inputData;
     }

     ?>
 <form action = "<? echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST">
        <div style="margin-bottom: 3px;">
        <label for ="username">Username</label>
        <input type ="text" id ="username" name ="namaLengkap" placeholder = "masukan nama anda"  />
        <span style="color:red; font-size:10px"> <?php echo $namaLengkapError; ?></span>
    </div>
    <div style="margin-bottom: 3px;">
        <label for ="Kelas">Kelas</label>
        <input type ="number" id ="Kelas" name ="Kelas" placeholder= "masukan nama anda"  />
        <span style="color:red; font-size:10px"><?php echo $kelasError; ?></span>

    </div>
    <button type="submit">Simpan</button>
    <!-- <input type="submit" value="Simpan nama"> -->
 </form>

    <?php
    echo "<br>";
    echo "Nama Lengkap saya" . $namaLengkap;
    echo "<br>";
    echo "Kelas saya" . $kelas;


    ?>

</body>
</html>