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
  <!-- GET data -->
  <!-- <div style="margin-bottom: 10px; margin-top:10px;">
  <?php echo $_GET['username']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <?php echo $_GET['Kelas']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <?php echo $_GET['Umur']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <?php echo $_GET['Asal']; ?>
  </div> -->




    <!-- POST data -->
    
    <div style="margin-bottom: 10px; margin-top:10px;">
    <label for ="">Username :</label>
  <?php echo $_POST['username']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <label for ="">Kelas :</label>
  <?php echo $_POST['Kelas']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <label for ="">Umur :</label>
  <?php echo $_POST['Umur']; ?>
  </div>
  <div style="margin-bottom: 10px; margin-top:10px;">
  <label for ="">Asal :</label>
  <?php echo $_POST['Asal']; ?>
  </div>
</body>
</html>