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
  -webkit-text-fill-color:#6bc7f5;/*warna text*/
  -webkit-text-stroke-width:0,5px;/*ketebalan stroke*/
}
a:hover/*mengganti warna di picu oleh cursor*/
{
-webkit-text-fill-color:#00FA9A;
}
  </style>
</head>
<body>
<div class="rowsi" style="background-color: #515144;">
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
<div class="cols"style="background-color:#00797e;">
  <center><h1>Data Diri</h1></center>
<?php
$muncul = file_get_contents("coba.txt"); //memasukkan conten yang ada dalam coba.txt ke $muncul
echo $muncul; //menampilkan ke layar
?>
</div>
</form>
<div class="rows" style="background-color:#515144;">
    </div>
    <script src="href.js">
</script>
</body>
</html>