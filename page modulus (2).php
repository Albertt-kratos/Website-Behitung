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
   
    body{
    background-color: black;
    }
    
    nav{
    display: flex;
    justify-content: center;
    align-items: center;
    border: 10px solid black;
    border-image: linear-gradient(to right, #c99711, #c91111) 1;
    border-radius: 20px;
    width: 300px;
    height: 500px;
    background-color: white;
    margin: 10px;
    padding: 10px;
    }
    
    nav a{
text-decoration: none; 
color: red; 
font-weight: bold;
}

ul li{
    list-style-type: none;
}

span{
  color: #700707;
}

.content{
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
  font-size: 35px;
  margin: 10px;
  border: 10px solid;
  border-image: linear-gradient(to right, #11c1c9, #1115c9) 1;
  width: 500px;
  height: 300px;
}
  </style>
</head>
<body>
  <div class="content">
  <?php
  $a = 1500908;
  $b = 1000;
  echo "Modulus,sisa pembagian <br>";
  echo "1500908 % 1000 = ";
  echo $a % $b;
  ?>
  </div>
  <h1>
  <nav>
<ul>
<li><a href="index.php">Biodata</a></li>
<li><a href="page + (1).php">Page + (1)</a></li>
<li><a href="page + (2).php">Page + (2)</a></li>
<li><a href="page - (1).php">Page - (1)</a></li>
<li><a href="page - (2).php">Page - (2)</a></li>
<li><a href="page × (1).php">Page * (1)</a></li>
<li><a href="page × (2).php">Page * (2)</a></li>
<li><a href="page bagi (1).php">Page / (1)</a></li>
<li><a href="page bagi (2).php">Page / (2)</a></li>
<li><a href="page modulus (1).php">Page % (1)</a></li>
<li><a href="page modulus (2).php"><span>Page % (2)</span></a></li>
</ul>
</nav>
</h1>
</body>
</html>