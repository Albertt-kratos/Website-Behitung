<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tugas</title>
  <style>
    *{
    }
    
    body{
      background-image: url(bg.png);
      background-size: 85vh;
    }
    
    header{
      color: #fff;
    }
    
    footer{
      color: white;
    }
    
    .content_1{
      color: gold;
    }
    
    .content_2{
      color: white;
    }
    
    .button_back a{
      text-decoration: none;
      color: black;
      font-weight: bold;
      font-size: 11px;
      margin: 0px;
      padding: 5px;
      border: 3px solid black;
      border-image: linear-gradient(to right, #c99a11, #5611c9) 1;
      background-color: #fff;
    }
    
    .Button_operation{
      position: fixed;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome !</h1>
  </header>
  <div class="content_1">
<form action="Hasil_hitung.php" method="post">
  nilai x : <input type="number" name="a"><br><br>
  nilai y : <input type="number" name="b"><br><br>
  operasi : <br><br>
</div>
  <div class="content_2">
  <input type="radio" name="operasi" value="jumlah">Penjumlahan<br>
  <input type="radio" name="operasi" value="kurang">Pengurangan<br>
  <input type="radio" name="operasi" value="kali">Perkalian<br>
  <input type="radio" name="operasi" value="bagi">Pembagian<br><br>
  </div>
  <input type="submit" value="Hitung">
</form>
<form action="Hitung.php">
  <input type="submit" value="reset">
</form>
<br>
<br>
<div class="button_back">
<a href="index.php">Kembali</a>
</div>
<footer>
  <hr>
  <center>
  <p>@albertt</p>
  </center>
</footer>
</body>
</html>