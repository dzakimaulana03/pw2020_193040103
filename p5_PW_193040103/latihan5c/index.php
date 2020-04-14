<?php 

require 'php/function.php';

$novel = query("SELECT * FROM novel");
 ?> 


<!DOCTYPE html>
<html>
<head>
<!-- CSS Materialize -->
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Akhir CSS Materialize -->
<link rel="stylesheet" href="assets/css/index.css">

	<title>Halaman Admin</title>
	
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper cyan accent-4" >
        <a href="#home" class="brand-logo" style="margin-left: 20px;">Dzaki Novel </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <li><a href="#Judul">Daftar Novel</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>

		 <!-- Slider -->
<section id="home" class="home scrollspy">
 <div class="slider">
  <ul class="slides">
    <li>
      <img src="assets/img/slider/1.JPG"> 
      <div class="caption left-align ">
        <h5 class="light grey-text text-lighten-3" style="font-size: 20px;text-shadow: 2px 1px 3px rgba(0, 0, 0,0.8);">TERSEDIA BANYAK NOVEL DAN SELURUHNYA ORIGINAL</h5>
        <h3 style="font-size: 60px;text-shadow: 1px 1px 3px rgba(0, 0, 0,0.8);">Koleksi <span style="font-weight: bold;">Original</span></h3>
       <br>
        <a href="#Judul" class="waves-effect btn-large tombol">Daftar Novel</a>
      </div>
    </li>
    <li>
        <img src="assets/img/slider/8.JPG"> 
        <div class="caption left-align s2">
          <h5 class="light grey-text text-lighten-3" style="font-size: 20px;text-shadow: 1px 1px 3px rgba(0, 0, 0,0.8);">NOVEL YANG TERSEDIA DISINI SEMUANYA BERKUALITAS</h5>
          <h3 style="font-size: 60px;text-shadow: 1px 1px 3px rgba(0, 0, 0,0.8);">Novel <span style="font-weight: bold;">Berkualitas</span></h3>
          <br>
          <a href="#Judul" class="waves-effect btn-large tombol">Daftar Novel</a>
        </div>  
      </li>
      <li>
          <img src="assets/img/slider/3.JPG"> 
          <div class="caption left-align s3">
            <h5 class="light grey-text text-lighten-3" style="font-size: 20px;text-shadow: 1px 1px 3px rgba(0, 0, 0,0.8);">HARGA YANG SANGAT TERJANGKAU UNTUK SELURUH KALANGAN MASYARAKAT</h5>
            <h3 style="font-size: 60px;text-shadow: 1px 1px 3px rgba(0, 0, 0,0.8);">Harga  <span style="font-weight: bold;">Terjangkau</span></h3>
            <br>
        <a href="#Judul" class="waves-effect btn-large tombol">Daftar Novel</a>
          </div>
        </li>
      
 </ul>
</div>

<!-- slider -->

<section  class="services grey lighten-3 scrollspy " style="padding-bottom: 20px;">

<div class="row center card1" style="margin-top: -5px" >

  <div class="col s12 m3">
    <div class="card card0">
      <div class="card-image">
        <img src="assets/img/slider/4.jpg">
        <span class="card-title" style="font-weight: bold">EVERY</span>
      </div>
    </div>
  </div>

  <div class="col s12 m3">
    <div class="card card0">
      <div class="card-image">
        <img src="assets/img/slider/5.jpg">
        <span class="card-title" style="font-weight: bold">BOOK</span>
      </div>
      
    </div>
  </div>


  <div class="col s12 m3">
    <div class="card card0">
      <div class="card-image">
        <img src="assets/img/slider/6.jpg">
        <span class="card-title" style="font-weight: bold">ARE</span>
      </div>
    </div>
  </div>

  <div class="col s12 m3">
    <div class="card card0">
      <div class="card-image">
        <img src="assets/img/slider/7.jpg">
        <span class="card-title" style="font-weight: bold">AVAILABLE</span>
      </div>
    </div>
  </div>
</div>

</section>




	<div class="container">
		<h2  class="card-panel cyan accent-4 white-text scrollspy" id="Judul">DAFTAR NOVEL</h2>
		<?php foreach($novel as $nv) : ?>

      <div class="col s12 m7">
    <h4 class="header" style="font-weight: bold"><?= $nv["Judul Buku"];  ?></h4>
    <div class="card horizontal">
      <div class="card-image card0 ">
        <img src="assets/img/<?= $nv["gambar"];  ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p style="font-size: 25px">Mau Lihat Deskripsi Dan Beli Novel ? klik tombol dibawah ini!</p>
          
        </div>
        <div class="card-action">
            <p class="Judul">
        <a class="waves-effect orange lighten-2 waves-red btn" href="php/detail.php?id=<?= $nv['id']?>"><?= $nv["Judul Buku"];  ?></a>
      </p>

        </div>
      </div>
    </div>
  </div>

		
			 
		<?php endforeach; ?>
	</div>

  <!-- FOOTER -->
<section id="footer" class="footer scrollspy">
<footer class="page-footer cyan accent-4" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">CONTACT US</h5>
        <p class="grey-text text-lighten-4"><i class="material-icons small">call</i><br>  +62 81234567890</p>
        <p><i class="material-icons">email</i><br> DzakiNovel@gmail.com</p>
        <p> <i class="material-icons">location_on</i> <br> Jl. Leuwigajah No.47, Bandung</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">SOCIAL MEDIA</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/dzakiimaulanaa/">Instagram</a></li><br>
          <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/dzaky.kerenz">Facebook</a></li><br>
          <li><a class="grey-text text-lighten-3" href="https://web.whatsapp.com/">Whatsapp</a></li><br>
          <li><a class="grey-text text-lighten-3" href="https://line.me/id/">Line</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center">
      Dzaki Maulana ~ copyright© 2019  
    
    </div>
  </div>
</footer>

</section>




<!-- Akhir Footer -->




<!-- Java Script -->

<!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js">

   	
   	
   </script>
   <script>
   	 const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider,{
            indicators: false,
            height: 500,
            transition: 600,
            interval:5000
          })

          const parallax = document.querySelectorAll('.parallax');
          M.Parallax.init(parallax)

          const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);

              const scroll = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(scroll, {
            scrollOffset : 50
          });
   </script>

</body>
</html> 