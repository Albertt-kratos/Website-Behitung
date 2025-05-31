<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tugas</title>
  <style>
  *{
 padding: 0;
 margin: 0;
 box-sizing: border-box;
 font-family: 'Poppins';
}
  
  
.php{
text-align: center;
color: black;
border: 20px solid;
border-image: linear-gradient(to right, #18c990, #1630e8) 1;
background-color: white;
}
  
    body{
    background-color: black;
    }
    
    .judul{
    color: white;
    font-weight: bold;
    text-align: center;
    margin: 10px;
}
    
    nav{
    display: flex;
    justify-content: center;
    align-items: center;
    border: 10px solid black;
    border-image: linear-gradient(to right, #c99711, #c91111) 1;
    width: 300px;
    height: 400px;
    background-color: white;
    margin: 10px;
    padding: 10px;
    border-radius: 20px;
    }
    
    nav a{
text-decoration: none; 
color: red; 
font-weight: bold;
}

ul li{
    list-style-type: none;
}

.nav_kalkulator a{
  text-decoration: none;
  color: black;
  font-weight: bold;
  font-size: 50px;
  margin: 20px;
  padding: 20px;
  border: 10px solid black;
  border-image: linear-gradient(to right, #a111c9, #2ac911) 1;
  background-color: #fff;
}
  </style>
</head>
<body>
<div class="judul">
<?php
  echo "<h1>Biodata</h1>";
?>
</div>
<div class="php">
<?php
  $nama ="<h1>Albie Putrana Widianto</h1>";
  $alamat ="<h1>Jln.Cinta Asih<h1>";
  $Umur ="<h1>" . 15 . "</h1>";
  $Hobi ="<h1>Bermain bola</h1>";
  
  echo "<h1>Nama : </h1>" . $nama . "<br>";
  echo "<h1>Alamat : </h1>" . $alamat . "<br>";
  echo "<h1>Umur : </h1>" . $Umur . "<br>";
  echo "<h1>Hobi : </h1>" . $Hobi . "<br>";
  ?>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="nav_kalkulator">
<a href="Hitung.php">Kalkulator</a>
</div>
<br>
<br>
<br>
<br>
<br>
<h1>
<nav>
<ul>
<li><a href="page + (1).php">Page + (1)</a></li>
<li><a href="page + (2).php">Page + (2)</a></li>
<li><a href="page - (1).php">Page - (1)</a></li>
<li><a href="page - (2).php">Page - (2)</a></li>
<li><a href="page × (1).php">Page * (1)</a></li>
<li><a href="page × (2).php">Page * (2)</a></li>
<li><a href="page bagi (1).php">Page / (1)</a></li>
<li><a href="page bagi (2).php">Page / (2)</a></li>
<li><a href="page modulus (1).php">Page % (1)</a></li>
<li><a href="page modulus (2).php">Page % (2)</a></li>
</ul>
</nav>
</h1>
</body>
</html>