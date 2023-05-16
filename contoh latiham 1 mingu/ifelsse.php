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
    // memnghitung nilai di atass kkm
    // jika kia inggin  ilalanya di bawa kkm maka kita tingal ganti .($nilai = 74;).  
       $nilai = 85;

       if($nilai >= 85){
        echo "kamu sudah di atas KKM";
       } else {
        echo "kamu dibawa KKm";
       }
       
       echo "<br>";
    //    membuaat waktu denggan php pagi ke siang
    $nilai = 9;

    if($nilai <= 12){
     echo "Selamat pagi";
    } else {
     echo "selamat siang";
    }

    echo "<br>";
     //    membuaat waktu denggan php siang ke sore
     $nilai = 5;

     if($nilai <= 6){
      echo "selamat sore";
     } else {
      echo "selamat malam";
     }

     echo "<br>";
    //  elseif
    $nilaiTugas = 20;
    if($nilaiTugas >= 90 ) {
        echo "selamat, kamu nilanya bagus! (A)";
    }elseif ($nilaiTugas >= 85){
        echo "selamat, kamu nilanya cukub bagus! (A-)";
    }elseif ($nilaiTugas >= 80){
        echo "selamat, kamu nilanya bagus! (B)";
    }elseif ($nilaiTugas >= 75){
        echo "selamat, kamu nilanya kurang bagus! (c)";
    }else {
        echo "selamat kamu remedial (D)";
    }

     echo "<br>";
    //switch
    $hari = "minggu";
    switch ($hari) {
        case 'senin':
            echo "hari ini adalah hari senin";
            break;
        case 'selasa':
            echo "hari ini adalah hari Selasa";
            break;
        case 'rabu':   
            echo "hari ini adalah hari Rabu";
            break;
        case 'kamis': 
            echo "hari ini adalah hari kamis";
            break;
        case 'jumat': 
            echo "hari ini adalah hari jumat";
            break;
        default:
           echo "hari weekend libur! janggan ganggu turuu";
            break;
    }
 
    ?>
</body>
</html>