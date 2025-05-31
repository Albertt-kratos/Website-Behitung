<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tugas</title>
  <style>
  
  body{
    background-color: #319a76;
  }

  .nav_back a{
    text-decoration: none;
      color: black;
      font-weight: bold;
      font-size: 11px;
      margin: 0px;
      padding: 5px;
      border: 3px solid black;
      border-image: linear-gradient(to right, #2d11c9, #11c9c5) 1;
      background-color: #fff;
  }
  </style>
</head>
<body>
    <?php
$a = $_POST['a'];
$b = $_POST['b'];
$operasi = $_POST['operasi'];

echo "nilai a : $a<br>";
echo "nilai b : $b<br><br>";

if ($operasi=="jumlah"){
  $c = $a + $b;//Rumus Penjumlahan
  echo "Penjumlahan $a + $b = $c";
}

elseif ($operasi=="kurang"){
  $c = $a - $b;//Rumus Pengurangan
  echo "Pengurangan $a - $b = $c";
}

elseif ($operasi=="kali"){
  $c = $a * $b;//Rumus Perkalian
  echo "Perkalian $a × $b = $c";
}

elseif ($operasi=="bagi"){
  $c = $a / $b;//Rumus Pembagian
  echo "Pembagian $a / $b = $c";
}

else{
  echo "kamu belum memilih operasi perhitungan";
}
?>
<br>
<br>
<div class="nav_back">
<a href="Hitung.php">Kembali</a>
</div>
  <footer>
  <hr>
  <center>
  <p>@albertt</p>
  </center>
</footer>
</body>
</html>