<?php





?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  html{
    scroll-behavior: smooth;
  }
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-image: url(images/forum\ konseling\ hukum\ \(1\).png);
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: rgb(0, 0, 0);
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  float: right;
}

#navbar a:hover {
  background-color: #00CDC1;
  color: #000000;
}

#navbar a.active {
  background-color: #00CDC1;
  color: #000000;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.tujuan{
  font-size: 35px;
  margin-top: 45px;
  text-align: center;
  color: #008a81;
}
.layanan{
  padding-left: 3%;
}
.pelayanan{
 color: #008a81;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
 font-size: 35px;
}

.btn{
  padding-left: 70px;
  
}
img{
  border-radius: 20%;
  cursor: pointer;
}
.bukti{
  text-align: center;
}
.src{
  float: right;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.img2{
  float: right;
  bottom: 65px;
}
.sticky + .content {
  padding-top: 60px;
}

</style>
</head>
<body>

<div class="header" id="tjn">
  <br>
  <br>
  <br>
  <br>
</div>

<div id="navbar">
  <!-- <a href="log">Log In</a> -->
  <a href="kontak.html">Kontak</a>
  <a href="#lyn">Layanan</a>
  <a href="FuKH.html">Beranda</a>
  <!-- <form action="" class="src">
    <input type="text" name="search" placeholder="Cari...">
  </form> -->
</div>

<div class="content" >
  <div class="tujuan" >
   <b><i><u>Ajukan Pertanyaan Anda Disini</u></i></b>
  </div>
</div>


<br>
<div class="bukti">
<form action="POST">
<textarea name="keluhan" id="" cols="150" rows="15" placeholder="Tulis Keluhan Anda.."></textarea>
</form>
</div>


<div class="btn">
<form action="">
<button type="submit">KIRIM</button>
</form>
</div>


<div class="layanan" id="lyn">
  <div class="pelayanan">
    <h2><u>Pelayanan Kami</u></h2>
  </div>
  <a href="konsultasi.html"><img src="images/konsultasi.png" width="300" height="300" alt=""></a>
  <a href="mediasi.html"><img src="images/mdsi.png" width="300" height="300" alt=""></a>
  <a href="tanya.php"><img src="images/tp.png" width="300" height="300" alt=""></a>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
