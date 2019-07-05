<!DOCTYPE html>
<html>
<head><!-- sama seperti layout yang berbeda cuman di php -->
	<link rel="stylesheet" type="text/css" href="layout.css">
  <style>
    a {
white-space: nowrap;
text-decoration: none; /*menghilangkan dekorasi semacam underline*/
  text-transform: uppercase;/* text berubah jadi kapital*/
  font-size:40px;
  background-repeat:no-repeat;
  background-size:cover;
  -webkit-text-fill-color:  #6bc7f5;/*warna text*/
  -webkit-text-stroke-width:0,5px;/*ketebalan stroke*/
}
a:hover/*mengganti warna di picu oleh cursor*/
{
-webkit-text-fill-color:#00FA9A;
}
  </style>
</head>
<body>
<div class="rowsi" style="background-color: #313537;">
	<a href="layout.html">
	<p class="ukiri">Sngls.Zn</p></a>
<div id="list" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <div class="overlay-content">
    <a href="www.google.com">Product</a>
</div>
</div>
<span style="position:absolute; top:18px; left:20px;font-size: 45px;cursor:pointer"onclick="openNav()">&#9776;</span>
</div>
<?php
$name = $email = $alamat = $HP = $tipe = ""; //variabel di kosongkan

if ($_SERVER["REQUEST_METHOD"] == "POST") { //server method post
  $name = test_input($_POST["name"]); //variabel di post kan ke server
  $email = test_input($_POST["email"]);
  $alamat = test_input($_POST["alamat"]);
  $HP = test_input($_POST["HP"]);
  $tipe = test_input($_POST["tipe"]);
}
function test_input($data) { //mengambil data dari test input
  $data = trim($data); //memangkas selain yang ada di $data
  $data = stripslashes($data);//menghilangkan "/"
  $data = htmlspecialchars($data);//semacam mendeklarasikan kembali simbol menjadi string
  return $data; //variabel data sebgai kembalian
}
?>
<div class="cols"style="background-color:#656565; -webkit-text-fill-color:black; font-size: 20px;">
	<center><h1 >Validasi pembelian barang</h1></center>
<h2>Isi data diri</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
  Nama	:<input type="text" name="name">
  <br><br>
  NoHP	:<input type="text" name="HP">
  <br><br>
  alamat:<input type="text" name="alamat">
  <br><br>
  email	:<input type="text" name="email">
  <br><br>
  tipe kacamata	 :<br><input type="radio" name="tipe" value="Lemtosh">Lemtosh<input type="radio" name="tipe" value="Milki">Milki<input type="radio" name="tipe" value="wayfarer">wayfarer<input type="radio" name="tipe" value="Aviator">Aviator<br>
  <input type="submit"><br>
   <a href="test.php">
  <p>Cek data diri</p>
  </a>
<?php
$files = fopen("coba.txt","w","1");//membuka file 
$per = $name.PHP_EOL.$HP;//menggambungkan sekaligus mencoba menambahkan br
fwrite($files, $per);//tulis $per ke $files
fwrite($files, $alamat);
fwrite($files, $email);
fwrite($files, $tipe);
fclose($files) //tutup $files
?>
</div>
</form>
<div class="rows" style="background-color: #313537;">
		</div>
		<script src="href.js">
</script>
</body>
</html>